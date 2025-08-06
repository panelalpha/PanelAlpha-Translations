#!/bin/bash

GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m'

display_help() {
  echo -e "${YELLOW}Usage: $0 --lang \"<language>\"${NC}"
  echo -e "${YELLOW}Options:${NC}"
  echo -e "${YELLOW}  --lang    Specify the language code for translations.${NC}"
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

self_update() {
  echo -e "${YELLOW}>>> Checking for script updates...${NC}"
  git -C "$TEMP_DIR" fetch origin
  LOCAL_VERSION=$(git -C "$TEMP_DIR" rev-parse HEAD)
  REMOTE_VERSION=$(git -C "$TEMP_DIR" rev-parse origin/main)  # Use the appropriate branch if not 'main'
  
  if [ "$LOCAL_VERSION" != "$REMOTE_VERSION" ]; then
    echo -e "${YELLOW}>>> Update available. Pulling the latest changes...${NC}"
    git -C "$TEMP_DIR" pull origin main
  else
    echo -e "${GREEN}>>> The script is up-to-date.${NC}"
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
while [[ "$#" -gt 0 ]]; do
  case $1 in
    --lang) LANG="$2"; shift ;;
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

if [ ! -d "$TEMP_DIR" ]; then
  echo -e "${YELLOW}>>> Cloning repository...${NC}"
  git clone --depth 1 "$REPO_URL" "$TEMP_DIR" > /dev/null 2>&1
fi

self_update

if [ -d "$TARGET_DIR" ] && [ "$(ls -A "$TARGET_DIR" 2>/dev/null)" ]; then
  echo -e "${YELLOW}>>> Files for language \"$LANG\" already exist in the target directory.${NC}"
  prompt_confirmation "Do you want to proceed and overwrite the existing files?"
fi

echo -e "${YELLOW}>>> Cleaning up temporary files...${NC}"
rm -rf "$TEMP_DIR" > /dev/null 2>&1

echo -e "${YELLOW}>>> Cloning repository...${NC}"
git clone --depth 1 "$REPO_URL" "$TEMP_DIR" > /dev/null 2>&1

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
docker compose -f /opt/panelalpha/app/docker-compose.yml exec api php artisan notifications:sync > /dev/null 2>&1

echo -e "${YELLOW}>>> Removing temporary files...${NC}"
rm -rf "$TEMP_DIR" > /dev/null 2>&1

echo -e "${GREEN}>>> Done!${NC}"