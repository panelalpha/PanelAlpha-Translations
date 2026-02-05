<?php

return [
    'instance' => 'Instanz',
    'hosting_account' => 'Hosting-Account',
    'service' => 'Dienstleistung',
    'self_signed' => 'Selbst unterschrieben',
    "files" => "Dateien",
    "database" => "Datenbank",
    'import_steps' => [
        'creating-site' => 'Website erstellen',
        'checking-domain' => 'Prüfen des Bereichs',
        'downloading-files' => 'Herunterladen von Dateien',
        'downloading-database' => 'Herunterladen der Datenbank',
        'creating-hosting-account' => 'Hosting-Konto erstellen',
        'creating-domain' => 'Domäne erstellen',
        'creating-database' => 'Datenbank erstellen',
        'uploading-files' => 'Hochladen von Dateien',
        'uploading-database' => 'Hochladen der Datenbank',
        'extracting-files' => 'Extrahieren von Dateien',
        'extracting-database' => 'Datenbank extrahieren',
        'importing-database' => 'Datenbank importieren',
        'configuring-wordpress' => 'WordPress konfigurieren',
        'cleaning-files' => 'Dateien bereinigen',
        'removing-ftp-account' => 'FTP-Konto entfernen',
        'creating-ftp-account' => 'FTP-Konto erstellen',
        'creating-temporary-directory' => 'Temporäres Verzeichnis erstellen',
        'installNewInstance' => 'Neue Instanz installieren',
        'installPluginOnNewInstance' => "'WordPress Migrator' Plugin auf neuer Instanz installieren",
        'prepareNewInstanceToMigration' => "Neue Instanz für Migration vorbereiten",
        'installPluginOnImportedInstance' => "'WordPress Migrator' Plugin auf importierter Instanz installieren",
        'prepareMigrationUsingPlugin' => "Migration vorbereiten",
        'runMigrationUsingPlugin' => "Migration ausführen",
        'prepareInstance' => "Instanz für Migration vorbereiten",
        'downloadDatabase' => 'Datenbank herunterladen',
        'downloadFiles' => "Dateien herunterladen",
        'uploadFiles' => 'Dateien hochladen',
        'prepareFiles' => 'Dateien vorbereiten',
        'uploadDatabase' => 'Datenbank hochladen',
        'importDatabase' => 'Datenbank importieren',
        'configureWordPress' => 'WordPress konfigurieren',
        'cleanUp' => 'Dateien bereinigen',
        'createFtpAccount' => 'FTP/SFTP-Konto erstellen',
        'cleanUpPlugins' => 'Plugins bereinigen',
    ],
    'health-checks' => [
        'server' => [
            'ping' => 'Server Testverbindung',
            'api' => 'Server-Test-API-Verbindung',
            'wp_cli' => 'Server Test WP CLI Verbindung',
        ],
        'hosting_account' => [
            'exists' => 'Hosting-Server vorhanden',
            'local_data' => 'Hosting-Server Überprüfung korrekter lokaler Daten',
            'ping' => 'Hosting Server Testverbindung',
            'ip_addresses' => 'IP-Adressen der Hosting-Server',
        ],
        'domain' => [
            'exists' => 'Bereich existiert',
            'local_data' => 'Domänenprüfung Korrekte lokale Daten',
            'ping' => 'Domäne Testverbindung',
            'ip_addresses' => 'Domänen-IP-Adressen',
            'installed_ssl_cert' => 'Domain Installiertes SSL-Zertifikat',
        ],
        'app' => [
            'wp_exists' => 'WordPress existiert',
            'ping' => 'Wordpress-Instanz Testverbindung',
            'local_data' => 'WordPress prüft korrekte lokale Daten',
        ],
    ],
    "server_alerts" => [
        "high_disk_usage" => "Hohe Festplattennutzung",
        "high_cpu_usage" => "Hohe CPU-Nutzung",
        "high_ram_usage" => "Hohe RAM-Nutzung",
    ],
    'report_providers' => [
        'referer' => [
            'website' => 'Websites',
            'direct' => 'Direkter Eintrag',
            'search_engine' => 'Suchmaschinen',
            'unknown' => 'Unbekannt',
            'internal' => 'Intern',
        ]
    ],
    'continent' => [
        'as' => 'Asien',
        'eu' => 'Europa',
        'na' => 'Nordamerika',
        'sa' => 'Südamerika',
        'af' => 'Afrika',
        'oc' => 'Ozeanien',
        'an' => 'Antarktis'
    ],
    'field' => [
        'onboarding_domain' => [
            'label' => 'Onboarding-Domäne (Optional)',
            'description' => 'Optional, falls gesetzt, überschreibt es die in den Plan-Einstellungen konfigurierte Onboarding-Domäne.'
        ],
    ]
];