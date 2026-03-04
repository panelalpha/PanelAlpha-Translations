<?php

return [
    'hosting_account' => 'cuenta de alojamiento',
    'self_signed' => 'Autofirmado',
    'files' => 'archivos',
    'database' => 'base de datos',
    'import_steps' => [
        'downloading-database' => 'Descarga de la base de datos',
        'creating-domain' => 'Creating domain',
        'creating-database' => 'Creación de la base de datos',
        'uploading-files' => 'Cargar archivos',
        'extracting-database' => 'Extracción de la base de datos',
        'importing-database' => 'Importar base de datos',
        'configuring-wordpress' => 'Configuración de WordPress',
        'creating-site' => 'Creación del sitio',
        'checking-domain' => 'Comprobación del dominio',
        'downloading-files' => 'Descarga de archivos',
        'creating-hosting-account' => 'Crear una cuenta de alojamiento',
        'cleaning-files' => 'Limpieza de archivos',
        'removing-ftp-account' => 'Eliminar cuenta FTP',
        'creating-ftp-account' => 'Creación de una cuenta FTP',
        'creating-temporary-directory' => 'Creación de un directorio temporal',
        'uploading-database' => 'Carga de la base de datos',
        'extracting-files' => 'Extracción de archivos',
        'installNewInstance' => 'Instalando nueva instancia',
        'installPluginOnNewInstance' => "Instalando el plugin 'WordPress Migrator' en la nueva instancia",
        'prepareNewInstanceToMigration' => 'Preparando la nueva instancia para la migración',
        'installPluginOnImportedInstance' => "Instalando el plugin 'WordPress Migrator' en la instancia importada",
        'prepareMigrationUsingPlugin' => 'Preparando la migración',
        
        'migrateDatabaseUsingPlugin' => 'Migrating database',
        'migrateFilesUsingPlugin' => 'Migrating files',
        'prepareInstance' => 'Preparando la instancia para la migración',
        'downloadDatabase' => 'Descargando base de datos',
        'downloadFiles' => 'Descargando archivos',
        'uploadFiles' => 'Subiendo archivos',
        'prepareFiles' => 'Preparando archivos',
        'uploadDatabase' => 'Subiendo base de datos',
        'importDatabase' => 'Importando base de datos',
        'configureWordPress' => 'Configurando WordPress',
        'cleanUp' => 'Limpiando archivos',
        'createFtpAccount' => 'Creando cuenta FTP/SFTP',
        'cleanUpPlugins' => 'Limpiar plugins',
    ],
    'health-checks' => [
        'server' => [
            'ping' => 'Conexión de prueba del servidor',
            'api' => 'Conexión API de prueba del servidor',
            'wp_cli' => 'Servidor Prueba WP Conexión CLI',
        ],
        'hosting_account' => [
            'ping' => 'Servidor de alojamiento Conexión de prueba',
            'ip_addresses' => 'Direcciones IP del servidor de alojamiento',
            'exists' => 'El servidor de alojamiento existe',
            'local_data' => 'El servidor de alojamiento comprueba si los datos locales son correctos',
        ],
        'domain' => [
            'exists' => 'El dominio existe',
            'ping' => 'Conexión de prueba de dominio',
            'ip_addresses' => 'Domain IP Addresses',
            'installed_ssl_cert' => 'Certificado SSL instalado en el dominio',
            'local_data' => 'Comprobación del dominio Datos locales correctos',
        ],
        'app' => [
            'wp_exists' => 'WordPress existe',
            'ping' => 'Conexión de prueba de la instancia de Wordpress',
            'local_data' => 'Comprobación de datos locales correctos en WordPress',
        ],
    ],
    'instance' => 'instancia',
    'service' => 'servicio',
    'server_alerts' => [
        'high_disk_usage' => 'Uso de disco alto',
        'high_cpu_usage' => 'Uso de CPU alto',
        'high_ram_usage' => 'Uso de RAM alto',
    ],
    'report_providers' => [
        'referer' => [
            'website' => 'Sitios web',
            'direct' => 'Entrada directa',
            'search_engine' => 'Motores de búsqueda',
            'unknown' => 'Desconocido',
            'internal' => 'Interno',
        ],
    ],
    'continent' => [
        'as' => 'Asia',
        'eu' => 'Europa',
        'na' => 'Norteamérica',
        'sa' => 'Sudamérica',
        'af' => 'África',
        'oc' => 'Oceanía',
        'an' => 'Antártida',
    ],
    'field' => [
        'onboarding_domain' => [
            'label' => 'Dominio de onboarding (opcional)',
            'description' => 'Opcional. Si se configura, reemplazará el dominio de onboarding establecido en los ajustes del plan.'
        ]
    ]
];

