<?php

return [
    'instance' => 'מופע',
    'hosting_account' => 'חשבון אירוח',
    'service' => 'שירות',
    'self_signed' => 'חתימה עצמית',
    'files' => 'קבצים',
    'database' => 'מסד נתונים',
    'import_steps' => [
        'downloading-files' => 'מוריד קבצים',
        'downloading-database' => 'מוריד מסד נתונים',
        'creating-hosting-account' => 'יוצר חשבון אירוח',
        'creating-domain' => 'יוצר דומיין',
        'creating-database' => 'יוצר מסד נתונים',
        'uploading-files' => 'מעלה קבצים',
        'uploading-database' => 'מעלה מסד נתונים',
        'extracting-files' => 'מחלץ קבצים',
        'extracting-database' => 'מחלץ מסד נתונים',
        'importing-database' => 'מייבא מסד נתונים',
        'configuring-wordpress' => 'מגדיר וורדפרס',
        'cleaning-files' => 'מנקה קבצים',
        'removing-ftp-account' => 'מסיר חשבון FTP',
        'creating-ftp-account' => 'יוצר חשבון FTP',
        'creating-temporary-directory' => 'יוצר תיקייה זמנית',
        'creating-site' => 'יוצר אתר',
        'checking-domain' => 'בודק דומיין',

            'installNewInstance' => 'התקנת מופע חדש',
        'installPluginOnNewInstance' => "התקנת התוסף WordPress Migrator במופע החדש",
        'prepareNewInstanceToMigration' => 'הכנת המופע החדש למיגרציה',
        'installPluginOnImportedInstance' => "התקנת התוסף WordPress Migrator במופע שיובא",
        'prepareMigrationUsingPlugin' => 'הכנת המיגרציה',
        'runMigrationUsingPlugin' => 'הרצת המיגרציה',
        'prepareInstance' => 'הכנת המופע למיגרציה',
        'downloadDatabase' => 'הורדת מסד הנתונים',
        'downloadFiles' => 'הורדת הקבצים',
        'uploadFiles' => 'העלאת הקבצים',
        'prepareFiles' => 'הכנת הקבצים',
        'uploadDatabase' => 'העלאת מסד הנתונים',
        'importDatabase' => 'ייבוא מסד הנתונים',
        'configureWordPress' => 'הגדרת וורדפרס',
        'cleanUp' => 'ניקוי קבצים',
        'createFtpAccount' => 'יצירת חשבון FTP/SFTP',
        'cleanUpPlugins' => 'ניקוי תוספים',
],
    'health-checks' => [
        'server' => [
            'ping' => 'בדיקת חיבור לשרת',
            'api' => 'בדיקת חיבור API לשרת',
            'wp_cli' => 'בדיקת חיבור WP CLI לשרת',
        ],
        'hosting_account' => [
            'exists' => 'חשבון אירוח קיים',
            'local_data' => 'חשבון אירוח בודק נתונים מקומיים תקינים',
            'ping' => 'בדיקת חיבור לחשבון אירוח',
            'ip_addresses' => 'כתובות IP של חשבון אירוח',
        ],
        'domain' => [
            'exists' => 'דומיין קיים',
            'local_data' => 'דומיין בודק נתונים מקומיים תקינים',
            'ping' => 'בדיקת חיבור לדומיין',
            'ip_addresses' => 'כתובות IP של דומיין',
            'installed_ssl_cert' => 'תעודת SSL מותקנת בדומיין',
        ],
        'app' => [
            'wp_exists' => 'וורדפרס קיים',
            'ping' => 'בדיקת חיבור למופע וורדפרס',
            'local_data' => 'וורדפרס בודק נתונים מקומיים תקינים',
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

    'קבצים',

    'מסד נתונים',
];