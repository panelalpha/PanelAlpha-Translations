<?php

return [
    'instance' => 'instance',
    'hosting_account' => 'compte d\'hébergement',
    'service' => 'service',
    'self_signed' => 'Signé par l\'intéressé',
    'import_steps' => [
        'downloading-files' => 'Téléchargement de fichiers',
        'downloading-database' => 'Téléchargement de la base de données',
        'creating-hosting-account' => 'Création d\'un compte d\'hébergement',
        'creating-domain' => 'Création d\'un domaine',
        'creating-database' => 'Création d\'une base de données',
        'uploading-files' => 'Téléchargement de fichiers',
        'uploading-database' => 'Téléchargement de la base de données',
        'extracting-files' => 'Extraction de fichiers',
        'extracting-database' => 'Extraction de la base de données',
        'importing-database' => 'Importation de la base de données',
        'configuring-wordpress' => 'Configuration de WordPress',
        'cleaning-files' => 'Nettoyage des fichiers',
        'removing-ftp-account' => 'Suppression du compte FTP',
        'creating-ftp-account' => 'Création d\'un compte FTP',
        'creating-temporary-directory' => 'Création d\'un répertoire temporaire',
        'creating-site' => 'Création du site',
        'checking-domain' => 'Vérification du domaine',
    ],
    'health-checks' => [
        'server' => [
            'ping' => 'Test de connexion du serveur',
            'api' => 'Serveur Test Connexion API',
            'wp_cli' => 'Test du serveur WP CLI Connection',
        ],
        'hosting_account' => [
            'exists' => 'Le serveur d\'hébergement existe',
            'local_data' => 'Le serveur d\'hébergement vérifie les données locales correctes',
            'ping' => 'Serveur d\'hébergement Test de connexion',
            'ip_addresses' => 'Adresses IP des serveurs d\'hébergement',
        ],
        'domain' => [
            'exists' => 'Le domaine existe',
            'local_data' => 'Domaine Vérification des données locales correctes',
            'ping' => 'Connexion au test de domaine',
            'ip_addresses' => 'Domaine Adresses IP',
            'installed_ssl_cert' => 'Certificat SSL installé dans le domaine',
        ],
        'app' => [
            'wp_exists' => 'WordPress existe',
            'ping' => 'Connexion de test de l\'instance Wordpress',
            'local_data' => 'WordPress vérifie les données locales correctes',
        ],
    ],
];
