#!/bin/bash

# Hostinger Deployment Script

# Configuration
REMOTE_USER="your_username"  # Replace with your Hostinger SSH username
REMOTE_HOST="your_host"  # Replace with your Hostinger SSH host
REMOTE_PORT="65002"  # Replace with your SSH port
REMOTE_PATH="/home/username/domains/your-domain.com/public_html"  # Replace with your path
REPO_URL="your_repository_url"
BRANCH="release"

# Colors for output
GREEN='\033[0;32m'
RED='\033[0;31m'
NC='\033[0m'

echo "Starting deployment..."

# Connect to remote server and execute deployment
ssh -p $REMOTE_PORT $REMOTE_USER@$REMOTE_HOST bash -c "'
    echo \"${GREEN}Connected to remote server${NC}\"

    # Check if directory exists
    if [ ! -d \"$REMOTE_PATH\" ]; then
        mkdir -p \"$REMOTE_PATH\"
    fi

    # Navigate to project directory
    cd \"$REMOTE_PATH\"

    # Backup existing wp-config.php if it exists
    if [ -f wp-config.php ]; then
        cp wp-config.php wp-config.php.backup
    fi

    # Clone/pull repository
    if [ -d .git ]; then
        git pull origin $BRANCH
    else
        git clone -b $BRANCH $REPO_URL .
    fi

    # Restore wp-config.php if backup exists
    if [ -f wp-config.php.backup ]; then
        mv wp-config.php.backup wp-config.php
    fi

    # Set correct permissions
    find . -type f -exec chmod 644 {} \;
    find . -type d -exec chmod 755 {} \;

    # Make wp-config.php more secure
    if [ -f wp-config.php ]; then
        chmod 600 wp-config.php
    fi

    echo \"${GREEN}Deployment completed successfully!${NC}\"
'"