<?php

return [
    'instance' => 'מופע',
    'hosting_account' => 'חשבון אירוח',
    'service' => 'שירות',
    'self_signed' => 'חתימה עצמית',
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
];
