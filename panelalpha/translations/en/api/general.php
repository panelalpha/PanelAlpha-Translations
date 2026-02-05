<?php

return [
    "instance" => "instance",
    "hosting_account" => "hosting account",
    "service" => "service",
    "self_signed" => "Self Signed",
    "files" => "files",
    "database" => "database",
    "import_steps" => [
        "downloading-files" => "Downloading files",
        "downloading-database" => "Downloading database",
        "creating-hosting-account" => "Creating hosting account",
        "creating-domain" => "Creating domain",
        "creating-database" => "Creating database",
        "uploading-files" => "Uploading files",
        "uploading-database" => "Uploading database",
        'extracting-files' => 'Extracting files',
        'extracting-database' => 'Extracting database',
        'importing-database' => 'Importing database',
        "configuring-wordpress" => "Configuring WordPress",
        "cleaning-files" => "Cleaning files",
        "removing-ftp-account" => "Removing FTP account",
        "creating-ftp-account" => "Creating FTP account",
        "creating-temporary-directory" => "Creating temporary directory",
        "creating-site" => "Creating site",
        "checking-domain" => "Checking domain",

        'installNewInstance' => 'Installing new instance',
        'installPluginOnNewInstance' => "Installing 'WordPress Migrator' plugin on new instance",
        'prepareNewInstanceToMigration' => "Preparing new instance for migration",
        'installPluginOnImportedInstance' => "Installing 'WordPress Migrator' plugin on imported instance",
        'prepareMigrationUsingPlugin' => "Preparing migration ",
        'runMigrationUsingPlugin' => "Running migration",
        'prepareInstance' => "Preparing instance for migration",
        'downloadDatabase' => 'Downloading database',
        'downloadFiles' => "Downloading files",
        'uploadFiles' => 'Uploading files',
        'prepareFiles' => 'Preparing files',
        'uploadDatabase' => 'Uploading database',
        'importDatabase' => 'Importing database',
        'configureWordPress' => 'Configuring WordPress',
        'cleanUp' => 'Cleaning up files',
        'createFtpAccount' => 'Creating FTP/SFTP account',
        'cleanUpPlugins' => 'Clean Up Plugins',
    ],
    "health-checks" => [
        "server" => [
            "ping" => "Server Test Connection",
            "api" => "Server Test API Connection",
            "wp_cli" => "Server Test WP CLI Connection",
        ],
        "hosting_account" => [
            "exists" => "Hosting Server Exists",
            "local_data" => "Hosting Server Checking Correct Local Data",
            "ping" => "Hosting Server Test Connection",
            "ip_addresses" => "Hosting Server IP Addresses",
        ],
        "domain" => [
            "exists" => "Domain Exists",
            "local_data" => "Domain Checking Correct Local Data",
            "ping" => "Domain Test Connection",
            "ip_addresses" => "Domain IP Addresses",
            "installed_ssl_cert" => "Domain Installed SSL Certificate",
        ],
        "app" => [
            "wp_exists" => "WordPress Exists",
            "ping" => "Wordpress Instance Test Connection",
            "local_data" => "WordPress Checking Correct Local Data",
        ]
    ],
    "server_alerts" => [
        "high_disk_usage" => "High Disk Usage",
        "high_cpu_usage" => "High CPU Usage",
        "high_ram_usage" => "High RAM Usage",
    ],
    'report_providers' => [
        'referer' => [
            'website' => 'Websites',
            'direct' => 'Direct Entry',
            'search_engine' => 'Search Engines',
            'unknown' => 'Unknown',
            'internal' => 'Internal',
        ]
    ],
    'continent' => [
        'as' => 'Asia',
        'eu' => 'Europe',
        'na' => 'North America',
        'sa' => 'South America',
        'af' => 'Africa',
        'oc' => 'Oceania',
        'an' => 'Antarctica'
    ],
    'field' => [
        'onboarding_domain' => [
            'label' => 'Onboarding Domain (Optional)',
            'description' => 'Optional, if set, it will override onboarding domain configured in plan settings.'
        ]
    ]
];
