<?php

use App\Lib\Integrations\Atarim;
use App\Lib\Integrations\Auth\Apple;
use App\Lib\Integrations\Auth\Facebook;
use App\Lib\Integrations\Auth\Github;
use App\Lib\Integrations\Auth\Google;
use App\Lib\Integrations\Auth\Linkedin;
use App\Lib\Integrations\Auth\Microsoft;
use App\Lib\Integrations\DbIp;
use App\Lib\Integrations\DnsServers\Cloudflare;
use App\Lib\Integrations\DnsServers\PowerDns;
use App\Lib\Integrations\EmailProvider\MailerSend;
use App\Lib\Integrations\EmailProvider\Mailgun;
use App\Lib\Integrations\EmailProvider\Postmark;
use App\Lib\Integrations\EmailProvider\Smtp;
use App\Lib\Integrations\EmailProvider\SendGrid;
use App\Lib\Integrations\EmailServers\Cpanel as CpanelEmailServer;
use App\Lib\Integrations\EmailServers\Mailcow;
use App\Lib\Integrations\GooglePageSpeedInsights;
use App\Lib\Integrations\Onboarding\Extendify;
use App\Lib\Integrations\PreviewSiteProvider\WithoutDns;
use App\Lib\Integrations\ReportProviders\GoogleAnalytics;
use App\Lib\Integrations\ReportProviders\Matomo;
use App\Lib\Integrations\SslProviders\LetsEncrypt;
use App\Lib\Integrations\SslProviders\SelfSigned;

return [
    DbIp::class => [
        "title" => "DB IP",
        "subtitle" => "משמש לקביעת המיקום בעת התחברות ממכשיר חדש",
        "description" => "DB-IP היא מסד נתונים חזק לגיאולוקציה הממפה כתובות IP למיקומים פיזיים. היא מאפשרת לעסקים להתאים תוכן ושירותים על בסיס אזורים ספציפיים, לשפר פרסום ממוקד ולשפר את חוויית המשתמש.",
        "instruction" => "PanelAlpha משתמש במסד נתונים חינמי לגיאולוקציה שהוכן על ידי DB-IP. התנאי לשימוש במסד נתונים זה הוא לכלול קישור חזרה ל-DB-IP.com בכל דפים המציגים או משתמשים בתוצאות ממסד הנתונים.<br>לפיכך, קישור זה ייכלל במייל לזיהוי מכשיר חדש.",
        "fields" => [
            "db-ip-accepted" => [
                "label" => "אני מסכים עם תנאי הרישוי"
            ]
        ]
    ],
    GooglePageSpeedInsights::class => [
        "title" => "Google PageSpeed Insights ",
        "subtitle" => "משמש לצילום מסך של מופעים ולחישוב מהירות טעינת דפים",
        "description" => "Google PageSpeed Insights הוא כלי המנתח את מהירות הביצועים של האתר שלך במכשירי שולחן עבודה וניידים. הוא מספק הצעות פעולה לשיפור זמני הטעינה ולשיפור חוויית המשתמש.",
        "instruction" => "כדי להשתמש ב-Google PageSpeed Insights, בצע את השלבים הבאים:<ol><li>עבור אל <a href='https://developers.google.com/speed/docs/insights/v5/get-started#key' target='_blank'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>התחבר לחשבון Google שלך אם נדרש.</li><li>צור מפתח API חדש על ידי לחיצה על כפתור \"Get a Key\".</li><li>בחר פרויקט קיים או צור פרויקט חדש ולחץ על כפתור \"Next\".</li><li>לאחר יצירת מפתח ה-API, הוא יוצג על המסך. העתק את המפתח הזה והשתמש בו לשילוב Google PageSpeed Insights.</li></ol>",
        "fields" => [
            "api-key" => [
                "label" => "מפתח API",
                "placeholder" => "הזן את מפתח ה-API שלך..."
            ]
        ]
    ],
    LetsEncrypt::class => [
        "title" => "Let's Encrypt",
        "subtitle" => "משמש להנפקת תעודות SSL עבור מופעים",
        "description" => "Let's Encrypt הוא רשות תעודות חינמית, אוטומטית ופתוחה המספקת הצפנת HTTPS לאתרי אינטרנט. קל להתקין ולהשתמש בו, והוא מבטיח שהאתר שלך בטוח ונגיש לכולם.",
        "instruction" => "כדי להשתמש ב-Let's Encrypt, עליך לבצע את השלבים הבאים:<ol><li>הזן את כתובת הדוא\"ל שלך בשדה Contact Email.</li><li>קרא בעיון את \"הסכם המנוי של Let's Encrypt\" וקבל את תנאי השירות.</li><li>החשבון שלך ייווצר אז, ושילוב תעודת ה-SSL יופעל אוטומטית.</li><li>עבור אל Configuration > Automatic SSL והגדר את Automatic SSL Provider ל-\"Let's Encrypt\".</li><li>מעתה, Let's Encrypt ינפיק אוטומטית תעודות SSL עבור מופעים.</li></ol>",
        "fields" => [
            "account-id" => [
                "label" => "חשבון Let's Encrypt",
                "placeholder" => "החשבון ייווצר לאחר שמירת השינויים"
            ],
            "contact-email" => [
                "label" => "דוא\"ל ליצירת קשר",
                "placeholder" => "הזן את הדוא\"ל שלך..."
            ],
            "tos-accepted" => [
                "label" => "קבל תנאי שירות"
            ]
        ]
    ],
    SelfSigned::class => [
        "title" => "חתום עצמית",
    ],
    Matomo::class => [
        "title" => "Matomo (מיושן)",
        "subtitle" => "משמש לאיסוף וניתוח נתוני תעבורת אתר",
        "description" => "מגרסה 1.4.1, PanelAlpha כבר לא צריך את Matomo כדי לקבל סטטיסטיקות אתר והוא מבוסס כעת על כלי פנימי. השילוב עם Matomo יוסר לחלוטין מ-PanelAlpha בגרסה 1.5 (מתוכנן ליולי/אוגוסט). השבתת תוסף זה לא תגרום לבעיות בסטטיסטיקות האתר.",
        "instruction" => "כדי להשתמש ב-Matomo, בצע את השלבים הבאים:<ol><li>עבור לכתובת ה-URL של Matomo: <a href=\"{{\$url}}\" target=\"_blank\">{{\$url}}</a></li><li>עבור דרך תהליך ההתקנה של Matomo.</li><li>התחבר ל-Matomo.</li><li>נווט אל Configuration &gt; Personal &gt; Security.</li><li>בתחתית הדף, לחץ על \"Create new token\" כדי ליצור אסימון חדש.</li><li>חזור ל-PanelAlpha והזן את אסימון ה-API.</li></ol>",
        "fields" => [
            "url" => [
                "label" => "כתובת URL",
                "placeholder" => "הזן כתובת URL של Matomo"
            ],
            "api-token" => [
                "label" => "אסימון API",
                "placeholder" => "הזן אסימון API"
            ]
        ]
    ],
    Extendify::class => [
        "title" => "Extendify",
        "subtitle" => "משמש להכשרה מהירה מאוד של מופעים",
        "description" => "Extendify מספק חוויית הכשרה דמוית בונה אתרים עבור לקוחות הקצה שלך. העצם את לקוחות האירוח שלך ליצור אתרים יפים ונראים מקצועיים בדקות באמצעות טכנולוגיות AI מתקדמות באופן מקורי ב-WordPress.",
        "instruction" => "כדי להשתמש ב-<b>Extendify</b>, אנא השתמש בשיטת \"Super Quick Onboarding\" בתוכניות שלך.<br>אין לך עדיין חשבון? <a href=\"https://extendify.com/pricing/\" target=\"_blank\">הגדר חשבון</a>.",
        "fields" => [
            "partner_id" => [
                "label" => "מזהה שותף",
                "placeholder" => "הזן מזהה שותף"
            ]
        ]
    ],
    GoogleAnalytics::class => [
        "title" => "Google Analytics",
        "subtitle" => "משמש לאיסוף וניתוח נתוני תעבורת אתר",
        "description" => "Google Analytics מציע כלים חינמיים לאיחוד וניתוח נתוני החברה שלך, המאפשרים לתהליך קבלת ההחלטות להיות מונח נתונים",
        "instruction" => "כדי להשתמש ב-Google Analytics, בצע את השלבים הבאים:<ol><li>עבור לאתר Google Analytics: <a href=\"https://analytics.google.com\" target=\"_blank\">https://analytics.google.com/</a></li><li>התחבר לחשבון Google שלך אם עדיין לא מחובר.</li><li>צור חשבון Google Analytics.</li><li>נווט אל Administration > Account Settings > Account Details ומצא את Account ID שלך.</li><li>העתק והדבק את Property ID בטופס למטה.</li><li>צור קובץ credentials JSON כפי ש-<a href=\"https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file\" target=\"_blank\">מתואר בתיעוד</a>.</li><li>צרף את קובץ ה-JSON בשדה Service Account Credentials למטה.</li></ol><br>אזהרה! שילוב זה עובד על בסיס קוד javascript המותקן אוטומטית במופעי לקוחות. המשתמש יכול להסיר קוד זה והשילוב יפסיק לעבוד.",
        "fields" => [
            "account-id" => [
                "label" => "מזהה חשבון",
                "placeholder" => "הזן מזהה חשבון"
            ],
            "service-account-credentials-json" => [
                "label" => "אישורי חשבון שירות",
                "placeholder" => "צרף קובץ אישורי שירות JSON"
            ]
        ]
    ],
    WithoutDns::class => [
        "title" => "WithoutDNS",
        "subtitle" => "מאפשר תצוגה מקדימה מהירה של WordPress",
        "description" => "WithoutDNS מספק ערכת כלים מקיפה המפשטת תהליכי בדיקה והעברה. הוא מספק כתובת URL זמנית המפנה את הדומיין שלך לכתובת IP שרת מוגדרת דרך אחד משרתי ה-proxy שלנו.",
        "instruction" => "כדי להשתמש ב-WithoutDNS, בצע את השלבים הבאים:<ol><li>עבור אל <a href=\"https://withoutdns.com/api-configuration\" target=\"_blank\">https://withoutdns.com/</a></li><li>התחבר לחשבון שלך אם נדרש.</li><li>צור אסימון API חדש על ידי לחיצה על כפתור \"Generate Token\".</li><li>העתק והדבק את אסימון ה-API בטופס למטה.</li><li>בצע חיבור בדיקה.</li><li>לאחר ביצוע חיבור הבדיקה, האפשרויות עבור Temporary Domain ו-Temporary URL Duration יופיעו. לאחר בחירתם, השילוב יהיה מוכן לשימוש.</li></ol><br>ללא השלמת התצורה במלואה, השילוב מאפשר יצירת עד שלושה קישורים זמניים.",
        "fields" => [
            "api-token" => [
                "label" => "אסימון API",
                "placeholder" => "הזן את אסימון ה-API שלך"
            ],
            'temporary-url-duration' => [
                "label" => 'משך כתובת URL זמנית',
                "tooltip" => "הגדר כמה זמן כתובת ה-URL שנוצרה לתצוגה מקדימה של האתר תישאר נגישה לפני שתפוג.",
                "options" => [
                    "15m" => "15 דקות",
                    "1h" => "שעה אחת",
                    "24h" => '24 שעות',
                    "7d" => '7 ימים',
                    "30d" => '30 ימים',
                    "never" => 'לעולם לא'
                ]
            ],
            'temporary_domain' => [
                'label' => "דומיין זמני",
                "tooltip" => "בחר את הדומיין שישמש ליצירת כתובת ה-URL הזמנית עבור לקוחות לתצוגה מקדימה של האתר.",
            ]
        ]
    ],

    //Email Providers
    Smtp::class => [
        "title" => "SMTP",
        "fields" => [
            "host" => [
                "label" => "מארח",
                "tooltip" => "מארח דוא\"ל מתייחס לשרת או לספק האירוח."
            ],
            "port" => [
                "label" => "פורט",
                "tooltip" => "פורט דוא\"ל מתייחס לפורט ספציפי המוקדש לטיפול בתעבורת דוא\"ל."
            ],
            "encryption" => [
                "label" => "סוג SSL",
                "tooltip" => "סוג SSL מתייחס לשיטת ההצפנה (SSL או TLS) המשמשת לאבטחת החיבור בין לקוח הדוא\"ל לשרת.",
                "options" => [
                    "none" => "ללא",
                    "ssl" => "SSL",
                    "tls" => "TLS",
                ]
            ],
            "username" => [
                "label" => "שם משתמש",
                "tooltip" => "שם משתמש הוא שם המשויך לחשבון דוא\"ל."
            ],
            "password" => [
                "label" => "סיסמה",
                "tooltip" => "סיסמת דוא\"ל היא סיסמה לאימות וגישה לחשבון דוא\"ל."
            ]
        ]
    ],
    Postmark::class => [
        "title" => "Postmark",
        "fields" => [
            "token" => [
                "label" => "אסימון",
                "tooltip" => "אסימון Postmark מתייחס לאסימון API המשמש לגישה לשירות משלוח הדוא\"ל של Postmark."
            ],
        ]
    ],
    MailerSend::class => [
        "title" => "MailerSend",
        "fields" => [
            "api_token" => [
                "label" => "אסימון API",
                "tooltip" => "אסימון API משמש לאימות בקשות שנשלחות בעת שליחת דוא\"ל."
            ],
        ]
    ],
    Mailgun::class => [
        "title" => "Mailgun",
        "fields" => [
            "domain" => [
                "label" => "דומיין",
                "tooltip" => "הזן את שם הדומיין של Mailgun."
            ],
            "secret" => [
                "label" => "מפתח API",
                "tooltip" => "ספק את מפתח ה-API של Mailgun לאימות."
            ],
            "endpoint" => [
                "label" => "אזור",
                "tooltip" => "בחר את אזור Mailgun שלך.",
                "options" => [
                    "us" => "ארצות הברית",
                    "eu" => "האיחוד האירופי",
                ]
            ],
        ]
    ],
    SendGrid::class => [
        "title" => "SendGrid",
        "fields" => [
            "api_key" => [
                "label" => "מפתח API",
                "tooltip" => "מפתח API משמש לאימות בקשות שנשלחות בעת שליחת דוא\"ל."
            ],
        ]
    ],
    // Hosting Servers
    App\Lib\Integrations\HostingServers\Cpanel::class => [
        "title" => "cPanel",
        "description" => "cPanel - תוכנת שיתוף פעולה מתארחת בענן ופלטפורמת דוא״ל",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'שם משתמש',
            ],
            'api_token' => [
                'label' => 'אסימון API',
                'link_label' => 'איך ליצור אסימון API',
            ],
            'ssl_verification' => [
                'label' => 'אימות SSL',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'חבילת WHM',
            ]
        ]
    ],
    App\Lib\Integrations\HostingServers\DirectAdmin::class => [
        "title" => "Direct Admin",
        "description" => "DirectAdmin - תוכנת שיתוף פעולה מתארחת בענן ופלטפורמת דוא״ל",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'שם משתמש',
            ],
            'password' => [
                'label' => 'סיסמה',
            ],
            'ssl_verification' => [
                'label' => 'אימות SSL',
            ],
        ],
        "config" => [
            'package' => [
                'label' => 'חבילה',
            ],
            'ip_address' => [
                'label' => 'כתובת IP',
            ]
        ]
    ],
    App\Lib\Integrations\HostingServers\Plesk::class => [
        "title" => "Plesk",
        "description" => "Plesk - תוכנת שיתוף פעולה מתארחת בענן ופלטפורמת דוא״ל",
        "fields" => [
            'url' => [
                'label' => 'IP/שם מארח',
            ],
            'username' => [
                'label' => 'שם משתמש',
            ],
            'password' => [
                'label' => 'סיסמה',
            ],
            'ssl_verification' => [
                'label' => 'אימות SSL',
            ],
        ],
        "config" => [
            'ip_address' => [
                'label' => 'כתובת IP',
                'tooltip' => "בחר כתובת IP זמינה",
            ],
            'hosting_plan' => [
                'label' => 'תוכנית אירוח',
                'tooltip' => "בחר תוכנית אירוח למנוי. חשוב: אפשרות זו זמינה רק כאשר 'חשבון משווק' מושבת.",
            ],
            'reseller_account' => [
                'label' => 'חשבון משווק',
                'tooltip' => "הפעל אפשרות זו כדי לאפשר יצירת חשבונות לקוחות תחת המשווק. דורש בחירת 'תוכנית משווק'. הערה: אפשרות זו עשויה שלא להיות זמינה אם השרת לא תומך בחשבונות משווק.",
            ],
            'reseller_plan' => [
                'label' => 'תוכנית משווק',
                'tooltip' => "בחר תוכנית משווק. חשוב: אפשרות זו זמינה רק כאשר 'חשבון משווק' מופעל. הערה: אפשרות זו עשויה שלא להיות זמינה אם השרת לא תומך בחשבונות משווק.",
            ],
        ]
    ],
    App\Lib\Integrations\HostingServers\PanelAlpha::class => [
        "title" => "PanelAlpha Engine",
        "description" => "PanelAlpha - פתרון אחסון אתרים מבוסס Docker",
        "fields" => [
            'api_url' => [
                'label' => 'כתובת API',
            ],
            'api_token' => [
                'label' => 'אסימון API',
            ],
        ],
        "config" => [
            'disk_space_limit' => [
                'label' => 'מגבלת שטח דיסק (MB)',
            ],
            'memory_limit' => [
                'label' => 'מגבלת זיכרון (MB)',
            ],
            'cpu_limit' => [
                'label' => 'מגבלת CPU',
            ],
            'device_read_bps' => [
                'label' => 'מגבלת קצב קריאה (בתים לשנייה)',
            ],
            'device_write_bps' => [
                'label' => 'מגבלת קצב כתיבה (בתים לשנייה)',
            ],
            'bandwidth_limit' => [
                'label' => 'מגבלת רוחב פס (MB לחודש)',
            ],
            'mysql_databases_limit' => [
                'label' => 'מגבלת מסדי נתונים MySQL'
            ],
            'ftp_accounts_limit' => [
                'label' => 'מגבלת חשבונות FTP',
            ],
            'sftp_accounts_limit' => [
                'label' => 'מגבלת חשבונות SFTP',
            ],
            'addon_domains_limit' => [
                'label' => 'מגבלת דומייני Addon',
            ],
            'subdomains_limit' => [
                'label' => 'מגבלת תתי-דומיינים',
            ],
            'inodes_limit' => [
                'label' => 'מגבלת inodes',
            ],
            'enable_redis_cache' => [
                'label' => 'הפעלת מטמון Redis',
            ],
            'enable_litespeed_cache' => [
                'label' => 'הפעלת מטמון LiteSpeed',
            ],
            'php_fpm_pool_settings' => [
                'label' => 'הגדרות Pool של PHP-FPM',
            ],
            'lsphp_settings' => [
                'label' => 'הגדרות LSPHP',
            ],
            'dedicated_ipv4' => [
                'label' => 'IPv4 ייעודי',
            ],
            'dedicated_ipv6' => [
                'label' => 'IPv6 ייעודי',
            ],
        ]
    ],
    App\Lib\Integrations\HostingServers\WpCloud::class => [
        "title" => "WP Cloud",
        "description" => "WP Cloud - אחסון ענן ממוקד WordPress",
        "fields" => [
            'client_identifier' => [
                'label' => 'מזהה לקוח',
            ],
            'api_key' => [
                'label' => 'מפתח API',
            ]
        ],
        "config" => [
            'space_quota' => [
                'label' => 'מכסת דיסק',
                'tooltip' => 'שטח דיסק לאתרים. ערך ברירת המחדל נמדד במגה-בייט, אך כדי לציין אותו בגיגה-בייט יש להוסיף את הסיומת \'GB\'. הערך המרבי הוא 200 GB.',
            ],
            'php_workers' => [
                'label' => 'PHP Workers',
                'tooltip' => 'הגדר את מספר ה-CPU וה-PHP Workers. כברירת מחדל ניתן להגדיר ערך בין 2 ל-10. לאפשרויות אחרות, נא לפנות ל-WP Cloud.',
            ],
            'php_memory_limit' => [
                'label' => 'מגבלת זיכרון PHP',
                'tooltip' => 'הגדר את מגבלת זיכרון ה-PHP לכל בקשה.',
            ],
            'burst_up_php_workers' => [
                'label' => 'Burst ל-PHP Workers',
                'tooltip' => 'מאפשר burst דינמי עד 110 PHP Workers.',
            ],
            'allow_user_choose_location' => [
                'label' => 'אפשר למשתמש לבחור מיקום',
                'tooltip' => 'אפשר למשתמשים לבחור מיקום עבור מופעים חדשים.',
            ],
            'geo_affinity' => [
                'label' => 'דאטה-סנטר ברירת מחדל',
                'tooltip' => 'בחר את הדאטה-סנטר שאליו ישויכו הדפים.',
            ],
            'default_ssh_access_enabled' => [
                'label' => 'גישה ל-SSH מופעלת כברירת מחדל',
                'tooltip' => 'קובע שגישת SSH תהיה מופעלת כברירת מחדל בכל מופעי WP Cloud החדשים.',
            ],
            'allow_user_enable_ssh_access' => [
                'label' => 'אפשר למשתמש לאפשר גישת SSH',
                'tooltip' => 'אפשר למשתמשים לנהל גישת SSH/SFTP למופע WP Cloud שלהם.',
            ],
        ]
    ],
    // Email Servers
    Mailcow::class => [
        "title" => "Mailcow",
        "description" => "mailcow - dockerized הוא חבילת groupware/דוא\"ל בקוד פתוח מבוססת על docker",
        "fields" => [
            'api_url' => [
                'label' => 'כתובת API',
            ],
            'api_key' => [
                'label' => 'מפתח API',
            ],
        ],
        "config" => [
            'domain_template' => [
                'label' => 'תבנית דומיין',
            ]
        ]
    ],
    CpanelEmailServer::class => [
        "title" => "cPanel",
        "description" => 'cPanel - תוכנת שיתוף פעולה מתארחת בענן ופלטפורמת דוא״ל',
        "fields" => [
            'url' => [
                'label' => 'IP/שם מארח',
            ],
            'username' => [
                'label' => 'שם משתמש',
            ],
            'api_token' => [
                'label' => 'אסימון API',
            ],
            'ssl_verification' => [
                'label' => 'אימות SSL',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'חבילת WHM',
            ]
        ]
    ],

    // DNS Servers
    Cloudflare::class => [
        "title" => "Cloudflare",
        "description" => 'Cloudflare - חברת ביצועי האינטרנט ואבטחה',
        "fields" => [
            'api_token' => [
                'label' => 'אסימון API',
            ],
            'account_id' => [
                'label' => 'מזהה חשבון',
            ],
        ],
    ],
    App\Lib\Integrations\DnsServers\CpanelDnsOnly::class => [
        "title" => "cPanel DNSOnly",
        "description" => 'cPanel DNSOnly - מאפשר להפעיל שרת שמות ייעודי',
        "fields" => [
            'url' => [
                'label' => 'IP/שם מארח',
            ],
            'username' => [
                'label' => 'שם משתמש',
            ],
            'api_token' => [
                'label' => 'אסימון API',
                'link_label' => 'איך ליצור אסימון API',
            ],
            'nameserver_1' => [
                'label' => 'שרת שמות 1',
            ],
            'nameserver_2' => [
                'label' => 'שרת שמות 2',
            ],
            'nameserver_3' => [
                'label' => 'שרת שמות 3',
            ],
            'nameserver_4' => [
                'label' => 'שרת שמות 4',
            ]
        ],
    ],
    App\Lib\Integrations\DnsServers\DnsManagerForWhmcs::class => [
        "title" => "DNS Manager For WHMCS",
        "description" => 'DNS Manager For WHMCS - מודול לניהול אזורי DNS',
        "fields" => [
            'whmcs_url' => [
                'label' => 'כתובת WHMCS',
            ],
            'whmcs_api_token' => [
                'label' => 'אסימון API של WHMCS',
            ],
        ]
    ],
    PowerDns::class => [
        "title" => "PowerDNS",
        "description" => 'PowerDNS - ספק מוביל של תוכנת DNS מאובטחת בקוד פתוח ומסחרית',
        "fields" => [
            'api_url' => [
                'label' => 'כתובת API',
            ],
            'api_token' => [
                'label' => 'אסימון API',
            ],
            'server' => [
                'label' => 'שרת',
            ],
            'zones_kind' => [
                'label' => 'סוג אזורים',
            ],
            'nameservers' => [
                'label' => 'שרתי שמות (מופרדים בפסיק)',
            ],
        ]
    ],

    // Auth
    Google::class => [
        "title" => "Google",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'בצע את השלבים הבאים כדי להפעיל את האימות עם ספק זה ולרשום יישום חדש:
                <ol>
                <li>המשך אל:: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> והתחבר אם נדרש.</li>
                <li>לחץ על <b>Select Project</b>, ואז לחץ על <b>Create Project</b> ובחר אותו כאשר נוצר. </li>
                <li>עבור אל <b>API Manager → Credentials → OAuth</b> מסך הסכמה ומלא את הטופס שם. </li>
                <li>לאחר מכן, עבור אל <b>Credentials → Create credentials (OAuth client ID type)</b> ובחר <b>Web application</b>.</li>
                <li>הגדר <b>Authorize redirect URIs</b> ל- <br /><b>{{$callback_url}}</b></li>
                <li>לאחר שרשמת, הדבק את אישורי היישום שנוצרו (Client ID עבור application ID ו-Client Secret עבור Application secret) בטופס למטה.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ]
    ],
    Apple::class => [
        "title" => "Apple",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'בצע את השלבים הבאים כדי להפעיל את האימות עם ספק זה ולרשום יישום חדש:
            ',
        "fields" => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ]
    ],
    Microsoft::class => [
        "title" => "Microsoft",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'בצע את השלבים הבאים כדי להפעיל את האימות עם ספק זה ולרשום יישום חדש:
                <ol>
                <li>המשך אל: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> והתחבר אם נדרש</li>
                <li>צור יישום חדש.</li>
                <li>מלא את כל השדות הנדרשים כגון שם היישום ותיאורו.</li>
                <li>הגדר <b>Redirect URL</b> ל- <br /><b>{{$callback_url}}</b></li>
                <li>לאחר שרשמת, הדבק את אישורי היישום שנוצרו בטופס למטה. </li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ]
    ],
    Linkedin::class => [
        "title" => "LinkedIn",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'בצע את השלבים הבאים כדי להפעיל את האימות עם ספק זה ולרשום יישום חדש:
            <ol>
                <li>המשך אל: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> והתחבר אם נדרש.</li>
                <li>צור יישום חדש.</li>
                <li>מלא את כל השדות הנדרשים, כגון שם היישום ותיאורו</li>
                <li>בחר <b>Live</b> תחת <b>Live Status</b>.</li>
                <li>בחר הרשאות <b>r_liteprofile</b> ו-<b>r_emailaddress</b>.</li>
                <li>הגדר <b>Redirect URL</b> ל- <br /><b>{{$callback_url}}</b></li>
                <li>לאחר שרשמת, הדבק את אישורי היישום שנוצרו בטופס למטה.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ]
    ],
    Facebook::class => [
        "title" => "Facebook",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'בצע את השלבים הבאים כדי להפעיל את האימות עם ספק זה ולרשום יישום חדש:
            <ol>
                <li>המשך אל: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> והתחבר אם נדרש.</li>
                <li>צור יישום חדש.</li>
                <li>מלא <b>Display Name</b>, <b>Contact Email</b>, בחר קטגוריה ולחץ על <b>Create App ID</b>. </li>
                <li>עבור לדף <b>Settings</b> והעתק <b>App ID</b> ו-<b>App Secret</b> לטופס זה.</li>
                <li>חזור ל-<b>+Add Product</b> ובחר <b>Facebook Login</b></li>
                <li>הגדר <b>Valid OAuth redirect URIs</b> ל- <br /><b>{{$callback_url}}</b></li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ]
    ],
    Github::class => [
        "title" => "GitHub",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'בצע את השלבים הבאים כדי להפעיל את האימות עם ספק זה ולרשום יישום חדש:
            <ol>
                <li>המשך אל: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> והתחבר אם נדרש.</li>
                <li>צור יישום חדש.</li>
                <li>מלא <b>Name, Description, Website URL</b>.</li>
                <li>הגדר <b>Redirect URL</b> ל- <br /><b>{{$callback_url}}</b></li>
                <li>שלח את הטופס ועדכן את הגדרות היישום. </li>
                <li>מצא בדף הבא והעתק Client ID ו-Client Secret מ-<b>OAuth Information</b> לשדות למטה.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ]
    ],
    Atarim::class => [
        "title" => "Atarim",
        "subtitle" => "משמש לשיתוף פעולה חזותי ומשוב על אתרים",
        "description" => "Atarim מייעל את שיתוף הפעולה באתרי אינטרנט בכך שהוא מאפשר לצוותים וללקוחות להשאיר משוב חזותי ישירות באתר חי, ולהפוך הערות למשימות לביצוע כדי לזרז את מסירת הפרויקט.",
        "instruction" => "כדי להשתמש ב-Atarim, בצע את השלבים הבאים:
            <ol>
                <li>היכנס ל<a href=\"https://atarim.firstpromoter.com/signup/32353\" target=\"_blank\">דף ההרשמה של Atarim</a></li>
                <li>צור חשבון או התחבר לחשבון קיים.</li>
                <li>העתק את <strong>קישור ההפניה</strong> והדבק אותו בשדה למטה.</li>
            </ol>",
        "fields" => [
            'link' => [
                'label' => 'קישור',
            ],
        ]
    ],
];
