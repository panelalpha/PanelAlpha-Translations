#!/bin/bash

GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m'

display_help() {
  echo -e "${YELLOW}Usage: $0 --lang \"<language>\" [--branch \"<branch>\"]${NC}"
  echo -e "${YELLOW}Options:${NC}"
  echo -e "${YELLOW}  --lang    Specify the language code for translations.${NC}"
  echo -e "${YELLOW}  --branch  Specify the Git branch (default: main).${NC}"
  echo -e "${YELLOW}  --help    Display this help message.${NC}"
}

prompt_confirmation() {
  read -p "$1 [y/n]: " choice
  case "$choice" in
    y|Y ) return 0 ;;  
    n|N ) echo -e "${RED}Operation cancelled.${NC}"; exit 1 ;;  
    * ) echo -e "${RED}Invalid choice. Operation cancelled.${NC}"; exit 1 ;;  
  esac
}

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

install_one_of_packages() {
  local dependency="$1"
  local package_name=""

  shift 1

  for package_name in "$@"; do
    echo -e "${YELLOW}>>> Installing package '$package_name' for '$dependency'...${NC}"
    if install_package "$package_name"; then
      return 0
    fi
    echo -e "${YELLOW}>>> Failed to install '$package_name'. Trying the next option...${NC}"
  done

  echo -e "${RED}>>> Could not install any package for '$dependency'.${NC}"
  return 1
}

has_docker_compose() {
  if command -v docker > /dev/null 2>&1 && docker compose version > /dev/null 2>&1; then
    return 0
  fi

  if command -v docker-compose > /dev/null 2>&1; then
    return 0
  fi

  return 1
}

ensure_dependencies() {
  local need_git=0
  local need_docker=0
  local need_compose=0

  ensure_debian_or_ubuntu

  if ! command -v git > /dev/null 2>&1; then
    need_git=1
  fi

  if ! command -v docker > /dev/null 2>&1; then
    need_docker=1
  fi

  if ! has_docker_compose; then
    need_compose=1
  fi

  if [ "$need_git" -eq 0 ] && [ "$need_docker" -eq 0 ] && [ "$need_compose" -eq 0 ]; then
    echo -e "${GREEN}>>> Required dependencies are already installed.${NC}"
    return 0
  fi

  echo -e "${YELLOW}>>> Missing dependencies detected. Installing with apt-get...${NC}"
  run_with_privileges apt-get update || exit 1

  if [ "$need_git" -eq 1 ]; then
    install_one_of_packages "git" "git" || exit 1
  fi

  if [ "$need_docker" -eq 1 ]; then
    install_one_of_packages "docker" "docker.io" "docker-ce" || exit 1
  fi

  if [ "$need_compose" -eq 1 ]; then
    install_one_of_packages "docker compose" "docker-compose-plugin" "docker-compose" || exit 1
  fi

  if ! command -v git > /dev/null 2>&1; then
    echo -e "${RED}>>> Dependency 'git' is still missing after installation.${NC}"
    exit 1
  fi

  if ! command -v docker > /dev/null 2>&1; then
    echo -e "${RED}>>> Dependency 'docker' is still missing after installation.${NC}"
    exit 1
  fi

  if ! has_docker_compose; then
    echo -e "${RED}>>> Docker compose is still missing after installation.${NC}"
    exit 1
  fi

  echo -e "${GREEN}>>> Dependencies installed successfully.${NC}"
}

compose_exec() {
  if command -v docker > /dev/null 2>&1 && docker compose version > /dev/null 2>&1; then
    docker compose "$@"
    return $?
  fi

  if command -v docker-compose > /dev/null 2>&1; then
    docker-compose "$@"
    return $?
  fi

  echo -e "${RED}>>> Docker compose command is not available.${NC}"
  return 1
}

self_update() {
  echo -e "${YELLOW}>>> Checking for script updates...${NC}"
  git -C "$TEMP_DIR" fetch origin
  if git -C "$TEMP_DIR" show-ref --verify --quiet refs/remotes/origin/$BRANCH; then
    LOCAL_VERSION=$(git -C "$TEMP_DIR" rev-parse HEAD)
    REMOTE_VERSION=$(git -C "$TEMP_DIR" rev-parse origin/$BRANCH)
    
    if [ "$LOCAL_VERSION" != "$REMOTE_VERSION" ]; then
      echo -e "${YELLOW}>>> Update available. Pulling the latest changes...${NC}"
      git -C "$TEMP_DIR" pull origin $BRANCH
    else
      echo -e "${GREEN}>>> The script is up-to-date.${NC}"
    fi
  else
    echo -e "${YELLOW}>>> Branch $BRANCH not found on remote. Skipping update check.${NC}"
  fi
}

if [[ "$1" == "--help" ]]; then
  display_help
  exit 0
fi

if [ -z "$1" ]; then
  echo -e "${RED}>>> Usage: $0 --lang \"<language>\"${NC}"
  exit 1
fi

LANG=""
BRANCH="main"
while [[ "$#" -gt 0 ]]; do
  case $1 in
    --lang) LANG="$2"; shift ;;
    --branch) BRANCH="$2"; shift ;;
    *) echo -e "${RED}>>> Unknown parameter passed: $1${NC}"; exit 1 ;;
  esac
  shift
done

if [ -z "$LANG" ]; then
  echo -e "${RED}>>> Please specify a language with --lang \"{language}\"${NC}"
  exit 1
fi

REPO_URL="https://github.com/panelalpha/panelalpha-translations"
TEMP_DIR="/tmp/panelalpha-translations"
TARGET_DIR="/opt/panelalpha/app/packages/api/resources/lang/$LANG"

ensure_dependencies

if [ ! -d "$TEMP_DIR" ]; then
  echo -e "${YELLOW}>>> Cloning repository from branch $BRANCH...${NC}"
  git clone --depth 1 --branch "$BRANCH" "$REPO_URL" "$TEMP_DIR" > /dev/null 2>&1
fi

self_update

if [ -d "$TARGET_DIR" ] && [ "$(ls -A "$TARGET_DIR" 2>/dev/null)" ]; then
  echo -e "${YELLOW}>>> Files for language \"$LANG\" already exist in the target directory.${NC}"
  prompt_confirmation "Do you want to proceed and overwrite the existing files?"
fi

echo -e "${YELLOW}>>> Cleaning up temporary files...${NC}"
rm -rf "$TEMP_DIR" > /dev/null 2>&1

echo -e "${YELLOW}>>> Cloning repository...${NC}"
git clone --depth 1 --branch "$BRANCH" "$REPO_URL" "$TEMP_DIR" > /dev/null 2>&1

if [ ! -d "$TEMP_DIR/panelalpha/translations/$LANG" ]; then
  echo -e "${RED}>>> Language directory not found for: $LANG${NC}"
  exit 1
fi

echo -e "${YELLOW}>>> Creating target directory...${NC}"
mkdir -p "$TARGET_DIR" > /dev/null 2>&1

echo -e "${YELLOW}>>> Copying translation files...${NC}"

# Copy all files and directories from the language directory
cp -r "$TEMP_DIR/panelalpha/translations/$LANG"/* "$TARGET_DIR" > /dev/null 2>&1

echo -e "${YELLOW}>>> Setting permissions...${NC}"
chmod -R 755 "$TARGET_DIR" > /dev/null 2>&1

echo -e "${YELLOW}>>> Syncing translations...${NC}"
compose_exec -f /opt/panelalpha/app/docker-compose.yml exec api php artisan notifications:sync > /dev/null 2>&1

echo -e "${YELLOW}>>> Removing temporary files...${NC}"
rm -rf "$TEMP_DIR" > /dev/null 2>&1

echo -e "${GREEN}>>> Done!${NC}"
