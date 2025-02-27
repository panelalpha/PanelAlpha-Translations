<?php

return [
    'instance' => 'instantie',
    'hosting_account' => 'hostingaccount',
    'service' => 'service',
    'self_signed' => 'Zelf ondertekend',
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
];
