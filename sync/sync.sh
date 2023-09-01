#!/bin/bash -e

# Import variables from script-config.sh
source "$(dirname "$0")/sync-config.sh"

# Check if both environment and action are provided as positional arguments
if [[ $# -ne 2 ]]; then
    echo "Usage: $0 <environment> <action>"
    exit 1
fi

# Store the provided environment and action in variables
environment=$1
action=$2

# Set environment naming based on the environment
case "$environment" in
"production")
    sshenv=$prodenv
    ;;
"staging")
    sshenv=$stagingenv
    ;;
*)
    echo "Error: The environment must be 'production' or 'staging'."
    exit 1
    ;;
esac

function pull_db() {
    echo -e "\nDownloading database from WP Engine..."
    ssh -t $sshenv@$sshenv.ssh.wpengine.net bash -c "cd /sites/{$sshenv} && wp db export -" >dump.sql

    echo -e "\nImporting database to ddev..."
    ddev import-db --src=./dump.sql

    echo -e "\nRenaming urls..."
    ddev wp search-replace "https://${sshenv}.wpengine.com" "${localurl}"

    echo -e "\nCleaning up files"
    rm dump.sql
}

function push_db() {
    # Get the current date in YYYY-MM-DD format
    current_date=$(date +"%Y-%m-%d-%H-%M-%S")

    # Create a unique filename with the current date
    dump_filename="dump_${current_date}.sql"
    dump_filename_gzip="${dump_filename}.gz"

    echo -e "\nExporting database from dddev..."
    ddev export-db -f dump.sql.gz

    echo -e "\nUploading database to WP Engine..."
    scp -O dump.sql.gz $sshenv@$sshenv.ssh.wpengine.net:/sites/$sshenv/$dump_filename_gzip
    
    echo -e "\nImporting database..."
    ssh $sshenv@$sshenv.ssh.wpengine.net "cd /sites/$sshenv && gzip -d $dump_filename_gzip && wp db import $dump_filename && wp search-replace '$localurl' 'https://$sshenv.wpengine.com' && rm $dump_filename"

    echo -e "\nCleaning up files\n"
    rm dump.sql.gz
}

function wpe_get_plugins() {
    rsync -rvz --progress $sshenv@$sshenv.ssh.wpengine.net:/sites/$sshenv/wp-content/plugins wp-content
}

function wpe_get_uploads() {
    rsync -rvz --progress $sshenv@$sshenv.ssh.wpengine.net:/sites/$sshenv/wp-content/uploads wp-content
}

function wpe_push_uploads() {
    rsync -rvz --progress ./wp-content/uploads/ $sshenv@$sshenv.ssh.wpengine.net:/sites/$sshenv/wp-content/uploads
}

# Perform the action based on the provided options
case "$action" in
"db:pull")
    pull_db
    ;;
"db:push")
    push_db
    ;;
"plugins:pull")
    wpe_get_plugins
    ;;
"uploads:pull")
    wpe_get_uploads
    ;;
"uploads:push")
    wpe_push_uploads
    ;;
*)
    echo "Invalid action. Available actions: db:pull, db:push, plugins:pull, uploads:pull"
    exit 1
    ;;
esac

printf "\n$(tput setaf 2)$(tput bold)Success:$(tput setaf 0)$(tput sgr0) ${sshenv} environment synced.\n"