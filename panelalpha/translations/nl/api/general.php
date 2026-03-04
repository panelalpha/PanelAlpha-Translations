<?php

return [
    'instance' => 'instantie',
    'hosting_account' => 'hostingaccount',
    'service' => 'service',
    'self_signed' => 'Zelf ondertekend',
    'files' => 'bestanden',
    'database' => 'database',
    'import_steps' => [
        'downloading-files' => 'Bestanden downloaden',
        'downloading-database' => 'Database downloaden',
        'creating-hosting-account' => 'Hostingaccount aanmaken',
        'creating-domain' => 'Domein maken',
        'creating-database' => 'Database maken',
        'uploading-files' => 'Bestanden uploaden',
        'uploading-database' => 'Database uploaden',
        'extracting-files' => 'Bestanden uitpakken',
        'extracting-database' => 'Database uitpakken',
        'importing-database' => 'Database importeren',
        'configuring-wordpress' => 'WordPress configureren',
        'cleaning-files' => 'Bestanden opschonen',
        'removing-ftp-account' => 'FTP-account verwijderen',
        'creating-ftp-account' => 'FTP-account aanmaken',
        'creating-temporary-directory' => 'Tijdelijke map maken',
        'creating-site' => 'Website maken',
        'checking-domain' => 'Domein controleren',

            'installNewInstance' => 'Nieuwe instantie installeren',
        'installPluginOnNewInstance' => "Plugin WordPress Migrator installeren op de nieuwe instantie",
        'prepareNewInstanceToMigration' => 'Nieuwe instantie voorbereiden op migratie',
        'installPluginOnImportedInstance' => "Plugin WordPress Migrator installeren op de geïmporteerde instantie",
        'prepareMigrationUsingPlugin' => 'Preparing migration',
        
        'runMigrationUsingPlugin' => 'Running migration',
        
        'migrateDatabaseUsingPlugin' => 'Database migreren',
        'migrateFilesUsingPlugin' => 'Bestanden migreren',
        'prepareInstance' => 'Instantie voorbereiden op migratie',
        'downloadDatabase' => 'Database downloaden',
        'downloadFiles' => 'Bestanden downloaden',
        'uploadFiles' => 'Bestanden uploaden',
        'prepareFiles' => 'Bestanden voorbereiden',
        'uploadDatabase' => 'Database uploaden',
        'importDatabase' => 'Database importeren',
        'configureWordPress' => 'WordPress configureren',
        'cleanUp' => 'Bestanden opschonen',
        'createFtpAccount' => 'FTP/SFTP-account aanmaken',
        'cleanUpPlugins' => 'Plugins opschonen',
],
    'health-checks' => [
        'server' => [
            'ping' => 'Server testverbinding',
            'api' => 'Server test API-verbinding',
            'wp_cli' => 'Servertest WP CLI-verbinding',
        ],
        'hosting_account' => [
            'exists' => 'Bestaande hostserver',
            'local_data' => 'Hostingserver controleert correcte lokale gegevens',
            'ping' => 'Testverbinding hostserver',
            'ip_addresses' => 'IP-adressen hostserver',
        ],
        'domain' => [
            'exists' => 'Domein bestaat',
            'local_data' => 'Domein controleren Correcte lokale gegevens',
            'ping' => 'Domein Test Verbinding',
            'ip_addresses' => 'Domein IP-adressen',
            'installed_ssl_cert' => 'Domein geïnstalleerd SSL-certificaat',
        ],
        'app' => [
            'wp_exists' => 'WordPress bestaat',
            'ping' => 'Wordpress Instance testverbinding',
            'local_data' => 'WordPress controleert correcte lokale gegevens',
        ],
    ],

    'server_alerts' => [
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
    ],

    'bestanden',

    'database',
];

