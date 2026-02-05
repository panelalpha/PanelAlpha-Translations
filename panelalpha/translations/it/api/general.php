<?php

return [
    'instance' => 'istanza',
    'hosting_account' => 'account di hosting',
    'service' => 'servizio',
    'self_signed' => 'Autografato',
    'files' => 'file',
    'database' => 'database',
    'import_steps' => [
        'downloading-files' => 'Scaricare i file',
        'downloading-database' => 'Scaricare il database',
        'creating-hosting-account' => 'Creare un account di hosting',
        'creating-domain' => 'Creazione del dominio',
        'creating-database' => 'Creazione del database',
        'uploading-files' => 'Caricamento dei file',
        'uploading-database' => 'Caricamento del database',
        'extracting-files' => 'Estrazione dei file',
        'extracting-database' => 'Estrazione del database',
        'importing-database' => 'Importazione del database',
        'configuring-wordpress' => 'Configurazione di WordPress',
        'cleaning-files' => 'Pulizia dei file',
        'removing-ftp-account' => 'Rimozione dell\'account FTP',
        'creating-ftp-account' => 'Creare un account FTP',
        'creating-temporary-directory' => 'Creare una directory temporanea',
        'creating-site' => 'Creazione del sito',
        'checking-domain' => 'Controllo del dominio',

            'installNewInstance' => 'Installazione nuova istanza',
        'installPluginOnNewInstance' => "Installazione del plugin WordPress Migrator sulla nuova istanza",
        'prepareNewInstanceToMigration' => 'Preparazione della nuova istanza alla migrazione',
        'installPluginOnImportedInstance' => "Installazione del plugin WordPress Migrator sull'istanza importata",
        'prepareMigrationUsingPlugin' => 'Preparazione della migrazione',
        'runMigrationUsingPlugin' => 'Esecuzione della migrazione',
        'prepareInstance' => 'Preparazione dell’istanza per la migrazione',
        'downloadDatabase' => 'Download del database',
        'downloadFiles' => 'Download dei file',
        'uploadFiles' => 'Caricamento dei file',
        'prepareFiles' => 'Preparazione dei file',
        'uploadDatabase' => 'Caricamento del database',
        'importDatabase' => 'Importazione del database',
        'configureWordPress' => 'Configurazione di WordPress',
        'cleanUp' => 'Pulizia dei file',
        'createFtpAccount' => 'Creazione account FTP/SFTP',
        'cleanUpPlugins' => 'Pulizia dei plugin',
],
    'health-checks' => [
        'server' => [
            'ping' => 'Connessione di prova al server',
            'api' => 'Connessione API di prova del server',
            'wp_cli' => 'Test del server Connessione WP CLI',
        ],
        'hosting_account' => [
            'exists' => 'Il server di hosting esiste',
            'local_data' => 'Server di hosting Verifica dei dati locali corretti',
            'ping' => 'Connessione di prova al server di hosting',
            'ip_addresses' => 'Indirizzi IP del server di hosting',
        ],
        'domain' => [
            'exists' => 'Il dominio esiste',
            'local_data' => 'Dominio Verifica dei dati locali corretti',
            'ping' => 'Connessione di prova al dominio',
            'ip_addresses' => 'Indirizzi IP di dominio',
            'installed_ssl_cert' => 'Certificato SSL installato dal dominio',
        ],
        'app' => [
            'wp_exists' => 'WordPress esiste',
            'ping' => 'Connessione di prova all\'istanza Wordpress',
            'local_data' => 'WordPress verifica la correttezza dei dati locali',
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

    'file',

    'database',
];