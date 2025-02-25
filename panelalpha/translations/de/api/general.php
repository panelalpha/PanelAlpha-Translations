<?php

return [
    'instance' => 'Instanz',
    'hosting_account' => 'Hosting-Account',
    'service' => 'Dienstleistung',
    'self_signed' => 'Selbst unterschrieben',
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
        'cleaning-files' => 'Dateien reinigen',
        'removing-ftp-account' => 'FTP-Konto entfernen',
        'creating-ftp-account' => 'FTP-Konto erstellen',
        'creating-temporary-directory' => 'Temporäres Verzeichnis erstellen',
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
];
