# ncccs-api

## DDEV Setup
```bash
# (Primary URL automatically set to `https://<folder>.ddev.site`)
ddev start

# Download WordPress
ddev wp core download

# Launch in browser to finish installation
ddev launch

# OR use the following installation command
# (we need to use single quotes to get the primary site URL from `.ddev/config.yaml` as variable)
ddev wp core install --url='$DDEV_PRIMARY_URL' --title='New-WordPress' --admin_user=admin --admin_email=admin@example.com --prompt=admin_password

# Launch WordPress admin dashboard in your browser
ddev launch wp-admin/
```

## Sync Script
Inside the `sync` folder there's a `sync.sh` script that's responsible for syncing the database, uploads and plugins between remote and local environments without the need to manually importing thing using phpMyAdmin. 

### Setup Script
1. Make the bash scripts executable by running the following on project's root folder:
    ```bash
    chmod +x sync/sync.sh
    ```

    ```bash
    chmod +x sync/sync-config.sh
    ```

2. Go to the `sync-config.sh` file and change `example` with the appropriate names from WP Engine and you local setup. 
    ```sh
    # sync/sync-config.sh

    prodenv="sfexample"                     # WP Engine production env name
    stagingenv="sfexamplestg"               # WP Engine staging env name
    localenv="example"                      # Local environment name
    localurl="http://example.ddev.site"     # DDEV local URL
    ```


### Running the Script
Run the script using the following command:
```bash
sync/sync-config.sh <environment> <action>
```

OPTIONS
```bash 
[<environment>]
        Set the target environment for syncing.
        - options:
            - production
            - staging

[<actions>]
        Sets one of the supported actions.
        - options:
            - db:pull
            - db:push
            - plugins:pull
            - uploads:pull
```

Examples
```bash 
sync/sync.sh production db:pull          # Pulling the db from production
sync/sync.sh staging db:push             # Pushing the db to staging
sync/sync.sh production uploads:pull     # Pulling the uploads from production
```
