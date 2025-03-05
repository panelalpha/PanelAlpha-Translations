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

# Check if 'jq' is installed
if ! command -v jq &> /dev/null; then
  echo -e "${RED}>>> 'jq' is not installed. Please install it and try again.${NC}"
  exit 1
fi

echo -e "${YELLOW}>>> Comparing JSON keys in:${NC}"
echo -e "${YELLOW}    Main:   $MAIN_FILE${NC}"
echo -e "${YELLOW}    Target: $TARGET_FILE${NC}"

# Extract all keys (paths) from the main file and sort them
ALL_KEYS_MAIN=$(jq -r 'paths | map(tostring) | join(".")' "$MAIN_FILE" | sort)

# Extract all keys (paths) from the target file and sort them
ALL_KEYS_TARGET=$(jq -r 'paths | map(tostring) | join(".")' "$TARGET_FILE" | sort)

# Find keys present in main but missing in target
MISSING_IN_TARGET=$(comm -23 <(echo "$ALL_KEYS_MAIN") <(echo "$ALL_KEYS_TARGET"))

if [ -z "$MISSING_IN_TARGET" ]; then
  echo -e "${GREEN}>>> All main keys are present in the target file.${NC}"
else
  echo -e "${RED}>>> The following keys are missing in the target file:${NC}"
  echo "$MISSING_IN_TARGET"
fi

echo -e "${GREEN}>>> Done.${NC}"
