#!/bin/bash

# Color definitions
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No color

# Display help/usage
display_help() {
  echo -e "${YELLOW}Usage: $0 --main <path_to_main_json> --target <path_to_target_json>${NC}"
  echo -e "${YELLOW}Options:${NC}"
  echo -e "${YELLOW}  --main     Path to the main JSON translation file (e.g., English).${NC}"
  echo -e "${YELLOW}  --target   Path to the target JSON translation file (e.g., Finnish).${NC}"
  echo -e "${YELLOW}  --help     Display this help message.${NC}"
}

SORT_CMD="sort"
COMM_CMD="comm"

run_with_privileges() {
  if [ "$(id -u)" -eq 0 ]; then
    "$@"
  elif command -v sudo > /dev/null 2>&1; then
    sudo "$@"
  else
    echo -e "${RED}>>> Missing privileges. Run this script as root or install sudo.${NC}"
    return 1
  fi
}

ensure_debian_or_ubuntu() {
  local distro_id=""

  if [ ! -f /etc/os-release ]; then
    echo -e "${RED}>>> Unsupported OS. This script supports only Debian and Ubuntu.${NC}"
    exit 1
  fi

  distro_id=$(awk -F= '/^ID=/{gsub(/"/, "", $2); print $2}' /etc/os-release)
  case "$distro_id" in
    debian|ubuntu)
      ;;
    *)
      echo -e "${RED}>>> Unsupported distribution: ${distro_id:-unknown}. Only Debian and Ubuntu are supported.${NC}"
      exit 1
      ;;
  esac

  if ! command -v apt-get > /dev/null 2>&1; then
    echo -e "${RED}>>> apt-get not found. This script supports only Debian and Ubuntu.${NC}"
    exit 1
  fi
}

install_package() {
  local package_name="$1"
  run_with_privileges apt-get install -y "$package_name"
}

has_sort_command() {
  if command -v sort > /dev/null 2>&1; then
    return 0
  fi

  return 1
}

has_comm_command() {
  if command -v comm > /dev/null 2>&1; then
    return 0
  fi

  return 1
}

resolve_coreutils_commands() {
  SORT_CMD="sort"
  COMM_CMD="comm"
}

ensure_dependencies() {
  local need_jq=0
  local need_coreutils=0

  ensure_debian_or_ubuntu

  if ! command -v jq > /dev/null 2>&1; then
    need_jq=1
  fi

  if ! has_sort_command || ! has_comm_command; then
    need_coreutils=1
  fi

  if [ "$need_jq" -eq 0 ] && [ "$need_coreutils" -eq 0 ]; then
    resolve_coreutils_commands
    echo -e "${GREEN}>>> Required dependencies are already installed.${NC}"
    return 0
  fi

  echo -e "${YELLOW}>>> Missing dependencies detected. Installing with apt-get...${NC}"
  run_with_privileges apt-get update || exit 1

  if [ "$need_jq" -eq 1 ]; then
    echo -e "${YELLOW}>>> Installing package 'jq'...${NC}"
    install_package "jq" || exit 1
  fi

  if [ "$need_coreutils" -eq 1 ]; then
    echo -e "${YELLOW}>>> Installing package 'coreutils'...${NC}"
    install_package "coreutils" || exit 1
  fi

  resolve_coreutils_commands

  if ! command -v jq > /dev/null 2>&1; then
    echo -e "${RED}>>> Dependency 'jq' is still missing after installation.${NC}"
    exit 1
  fi

  if ! has_sort_command || ! has_comm_command; then
    echo -e "${RED}>>> Required sorting/compare commands are still missing after installation.${NC}"
    exit 1
  fi

  echo -e "${GREEN}>>> Dependencies installed successfully.${NC}"
}

# Check if --help was requested
if [[ "$1" == "--help" ]]; then
  display_help
  exit 0
fi

# If no parameters provided, show help
if [ $# -eq 0 ]; then
  echo -e "${RED}>>> No parameters provided.${NC}"
  display_help
  exit 1
fi

# Initialize variables
MAIN_FILE=""
TARGET_FILE=""

# Parse command-line arguments
while [[ $# -gt 0 ]]; do
  case "$1" in
    --main)
      MAIN_FILE="$2"
      shift 2
      ;;
    --target)
      TARGET_FILE="$2"
      shift 2
      ;;
    *)
      echo -e "${RED}>>> Unknown option: $1${NC}"
      display_help
      exit 1
      ;;
  esac
done

# Validate that both files were specified
if [ -z "$MAIN_FILE" ] || [ -z "$TARGET_FILE" ]; then
  echo -e "${RED}>>> Both --main and --target must be specified.${NC}"
  display_help
  exit 1
fi

# Check that files actually exist
if [ ! -f "$MAIN_FILE" ]; then
  echo -e "${RED}>>> File $MAIN_FILE does not exist.${NC}"
  exit 1
fi

if [ ! -f "$TARGET_FILE" ]; then
  echo -e "${RED}>>> File $TARGET_FILE does not exist.${NC}"
  exit 1
fi

ensure_dependencies

echo -e "${YELLOW}>>> Comparing JSON keys in:${NC}"
echo -e "${YELLOW}    Main:   $MAIN_FILE${NC}"
echo -e "${YELLOW}    Target: $TARGET_FILE${NC}"

# Extract all keys (paths) from the main file and sort them
ALL_KEYS_MAIN=$(jq -r 'paths | map(tostring) | join(".")' "$MAIN_FILE" | "$SORT_CMD")

# Extract all keys (paths) from the target file and sort them
ALL_KEYS_TARGET=$(jq -r 'paths | map(tostring) | join(".")' "$TARGET_FILE" | "$SORT_CMD")

# Find keys present in main but missing in target
MISSING_IN_TARGET=$("$COMM_CMD" -23 <(echo "$ALL_KEYS_MAIN") <(echo "$ALL_KEYS_TARGET"))

if [ -z "$MISSING_IN_TARGET" ]; then
  echo -e "${GREEN}>>> All main keys are present in the target file.${NC}"
else
  echo -e "${RED}>>> The following keys are missing in the target file:${NC}"
  echo "$MISSING_IN_TARGET"
fi

echo -e "${GREEN}>>> Done.${NC}"
