<?php

use App\Lib\Integrations\Auth\Apple;
use App\Lib\Integrations\Auth\Facebook;
use App\Lib\Integrations\Auth\Github;
use App\Lib\Integrations\Auth\Google;
use App\Lib\Integrations\Auth\Linkedin;
use App\Lib\Integrations\Auth\Microsoft;
use App\Lib\Integrations\DbIp;
use App\Lib\Integrations\EmailProvider\MailerSend;
use App\Lib\Integrations\EmailProvider\Mailgun;
use App\Lib\Integrations\EmailProvider\Postmark;
use App\Lib\Integrations\EmailProvider\SendGrid;
use App\Lib\Integrations\EmailProvider\Smtp;
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
        'title' => 'DB IP',
        'subtitle' => 'משמש לקביעת המיקום בעת כניסה ממכשיר חדש',
        'description' => 'DB-IP הוא מסד נתונים גאוגרפי חזק הממפה כתובות IP למיקומים פיזיים. הוא מאפשר לעסקים להתאים אישית תוכן ושירותים בהתבסס על אזורים ספציפיים, לשפר פרסום ממוקד ולשפר את חווית המשתמש.',
        'instruction' => 'PanelAlpha משתמשת במסד נתונים גאוגרפי חינמי שהוכן על ידי DB-IP. התנאי לשימוש במסד נתונים זה הוא לכלול קישור חזרה ל-DB-IP.com בכל דף המציג או משתמש בתוצאות ממסד הנתונים.<br>לכן, קישור זה ייכלל בהודעת הדוא"ל לזיהוי מכשיר חדש.',
        'fields' => [
            'db-ip-accepted' => [
                'label' => 'אני מסכים לתנאי הרישוי',
            ],
        ],
    ],
    GooglePageSpeedInsights::class => [
        'title' => 'Google PageSpeed Insights ',
        'subtitle' => 'משמש לצילום מסך של מופעים ולחישוב מהירות טעינת דפים',
        'description' => "Google PageSpeed Insights הוא כלי המנתח את מהירות וביצועי האתר שלך במחשבים שולחניים ובמכשירים ניידים. הוא מספק הצעות מעשיות לשיפור זמני טעינה וחווית משתמש.",
        'instruction' => "כדי להשתמש ב-Google PageSpeed Insights, בצע את השלבים הבאים:<ol><li>עבור אל <a href='https://developers.google.com/speed/docs/insights/v5/get-started#key' target='_blank'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>התחבר לחשבון Google שלך במידת הצורך.</li><li>צור מפתח API חדש על ידי לחיצה על כפתור \"Get a Key\".</li><li>בחר פרויקט קיים או צור פרויקט חדש ולחץ על כפתור \"Next\".</li><li>לאחר יצירת מפתח ה-API, הוא יוצג על המסך. העתק מפתח זה והשתמש בו לשילוב Google PageSpeed Insights.</li></ol>",
        'fields' => [
            'api-key' => [
                'label' => 'מפתח API',
                'placeholder' => 'הזן את מפתח ה-API שלך...',
            ],
        ],
    ],
    LetsEncrypt::class => [
        'title' => "Let's Encrypt",
        'subtitle' => 'משמש להנפקת אישורי SSL למופעים',
        'description' => "Let's Encrypt היא רשות אישורים חינמית, אוטומטית ופתוחה המספקת הצפנת HTTPS לאתרים. היא קלה להתקנה ולשימוש, ומבטיחה שהאתר שלך בטוח ונגיש לכולם.",
        'instruction' => "כדי להשתמש ב-Let's Encrypt, בצע את השלבים הבאים:<ol><li>הזן את כתובת הדוא\"ל שלך בשדה 'דוא\"ל ליצירת קשר'.</li><li>קרא בעיון את \"הסכם המנוי של Let's Encrypt\" וקבל את תנאי השירות.</li><li>חשבונך ייווצר, ושילוב אישור ה-SSL יופעל אוטומטית.</li><li>עבור אל 'תצורה' > 'SSL אוטומטי' והגדר את 'ספק SSL אוטומטי' ל-\"Let's Encrypt\".</li><li>מעתה ואילך, Let's Encrypt תנפיק אוטומטית אישורי SSL למופעים.</li></ol>",
        'fields' => [
            'account-id' => [
                'label' => "חשבון Let's Encrypt",
                'placeholder' => 'החשבון ייווצר לאחר שמירת השינויים',
            ],
            'contact-email' => [
                'label' => 'דוא"ל ליצירת קשר',
                'placeholder' => 'הזן את הדוא"ל שלך...',
            ],
            'tos-accepted' => [
                'label' => 'קבל את תנאי השירות',
            ],
        ],
    ],
    SelfSigned::class => [
        'title' => 'חתימה עצמית',
    ],
    Matomo::class => [
        'title' => 'Matomo',
        'subtitle' => 'משמש לאיסוף וניתוח נתוני תעבורת אתרים',
        'description' => "Matomo Analytics היא פלטפורמת ניתוח אינטרנט המתמקדת בפרטיות המסייעת במעקב אחר תעבורת אתרים והתנהגות משתמשים. היא ניתנת להתאמה אישית ומספקת תובנות מפורטות תוך שמירה על אבטחת נתוני המשתמשים.",
        'instruction' => 'כדי להשתמש ב-Matomo, בצע את השלבים הבאים:<ol><li>עבור לכתובת ה-URL של Matomo: <a href="{{$url}}" target="_blank">{{$url}}</a></li><li>עבור את תהליך ההתקנה של Matomo.</li><li>התחבר ל-Matomo.</li><li>נווט אל \'תצורה\' > \'אישי\' > \'אבטחה\'.</li><li>בתחתית הדף, לחץ על "צור אסימון חדש" כדי ליצור אסימון חדש.</li><li>חזור ל-PanelAlpha והזן את אסימון ה-API.</li></ol>',
        'fields' => [
            'url' => [
                'label' => 'כתובת URL',
                'placeholder' => 'הזן כתובת URL של Matomo',
            ],
            'api-token' => [
                'label' => 'אסימון API',
                'placeholder' => 'הזן אסימון API',
            ],
        ],
    ],
    Extendify::class => [
        'title' => 'Extendify',
        'subtitle' => 'משמש להטמעה מהירה במיוחד של מופעים',
        'description' => 'Extendify מספקת חווית הטמעה דמוית בונה אתרים עבור לקוחות הקצה שלך. העצם את לקוחות האירוח שלך ליצור אתרים יפים ומקצועיים תוך דקות באמצעות טכנולוגיות ה-AI העדכניות ביותר באופן מקורי בוורדפרס.',
        'instruction' => "כדי להשתמש ב-<b>Extendify</b>, אנא השתמש בשיטת \"הטמעה מהירה במיוחד\" בתוכניות שלך.<br>אין לך עדיין חשבון? <a href=\"https://extendify.com/pricing/\" target=\"_blank\">הגדר את חשבונך</a>.",
        'fields' => [
            'partner_id' => [
                'label' => 'מזהה שותף',
                'placeholder' => 'הזן מזהה שותף',
            ],
        ],
    ],
    GoogleAnalytics::class => [
        'title' => 'Google Analytics',
        'subtitle' => 'משמש לאיסוף וניתוח נתוני תעבורת אתרים',
        'description' => "Google Analytics מציעה כלים חינמיים לאיחוד וניתוח נתוני החברה שלך, המאפשרים תהליך קבלת החלטות מבוסס נתונים",
        'instruction' => 'כדי להשתמש ב-Google Analytics, בצע את השלבים הבאים:<ol><li>עבור לאתר Google Analytics: <a href="https://analytics.google.com" target="_blank">https://analytics.google.com/</a></li><li>התחבר לחשבון Google שלך אם אינך מחובר כבר.</li><li>צור חשבון Google Analytics.</li><li>נווט אל \'ניהול\' > \'הגדרות חשבון\' > \'פרטי חשבון\' ומצא את מזהה החשבון שלך.</li><li>העתק והדבק את מזהה הנכס בטופס שלהלן.</li><li>צור קובץ JSON של אישורים כפי ש<a href="https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file" target="_blank">מתואר בתיעוד</a>.</li><li>צרף את קובץ ה-JSON בשדה \'אישורי חשבון שירות\' שלהלן.</li></ol><br>אזהרה! שילוב זה פועל על בסיס קוד javascript המותקן אוטומטית במופעי לקוחות. המשתמש יכול להסיר קוד זה והשילוב יפסיק לפעול.',
        'fields' => [
            'account-id' => [
                'label' => 'מזהה חשבון',
                'placeholder' => 'הזן מזהה חשבון',
            ],
            'service-account-credentials-json' => [
                'label' => 'אישורי חשבון שירות',
                'placeholder' => 'צרף קובץ JSON של אישורי שירות',
            ],
        ],
    ],
    WithoutDns::class => [
        'title' => 'WithoutDNS',
        'subtitle' => 'מאפשר תצוגה מקדימה מהירה של וורדפרס',
        'description' => 'WithoutDNS מספקת ערכת כלים מקיפה המפשטת תהליכי בדיקה והעברה. היא מספקת כתובת URL זמנית המכוונת את הדומיין שלך לכתובת IP של שרת שצוינה דרך אחד משרתי הפרוקסי שלנו.',
        'instruction' => 'כדי להשתמש ב-WithoutDNS, בצע את השלבים הבאים:<ol><li>עבור אל <a href="https://withoutdns.com/api-configuration" target="_blank">https://withoutdns.com/</a></li><li>התחבר לחשבונך במידת הצורך.</li><li>צור אסימון API חדש על ידי לחיצה על כפתור "Generate Token".</li><li>העתק והדבק את אסימון ה-API בטופס שלהלן.</li><li>בצע בדיקת חיבור.</li><li>לאחר ביצוע בדיקת החיבור, יופיעו האפשרויות עבור \'דומיין זמני\' ו\'משך כתובת URL זמנית\'. לאחר שתבחר אותן, השילוב יהיה מוכן לשימוש.</li></ol><br>ללא השלמה מלאה של התצורה, השילוב מאפשר יצירה של עד שלושה קישורים זמניים.',
        'fields' => [
            'api-token' => [
                'label' => 'אסימון API',
                'placeholder' => 'הזן את אסימון ה-API שלך',
            ],
            'temporary-url-duration' => [
                'label' => 'משך כתובת URL זמנית',
                'tooltip' => 'הגדר כמה זמן כתובת ה-URL לתצוגה מקדימה שנוצרה עבור האתר תישאר נגישה לפני שתפוג.',
                'options' => [
                    '15m' => '15 דקות',
                    '1h' => 'שעה אחת',
                    '24h' => '24 שעות',
                    '7d' => '7 ימים',
                    '30d' => '30 יום',
                    'never' => 'לעולם לא',
                ],
            ],
            'temporary_domain' => [
                'label' => 'דומיין זמני',
                'tooltip' => 'בחר את הדומיין שישמש ליצירת כתובת ה-URL הזמנית עבור לקוחות לתצוגה מקדימה של האתר.',
            ],
        ],
    ],

    //Email Providers
    Smtp::class => [
        'title' => 'SMTP',
        'fields' => [
            'host' => [
                'label' => 'מארח',
                'tooltip' => 'מארח דוא"ל מתייחס לשרת או לספק האירוח.',
            ],
            'port' => [
                'label' => 'יציאה',
                'tooltip' => 'יציאת דוא"ל מתייחסת ליציאה ספציפית המוקדשת לטיפול בתעבורת דוא"ל.',
            ],
            'encryption' => [
                'label' => 'סוג SSL',
                'tooltip' => 'סוג SSL מתייחס לשיטת ההצפנה (SSL או TLS) המשמשת לאבטחת החיבור בין לקוח הדוא"ל לשרת.',
                'options' => [
                    'none' => 'ללא',
                    'ssl' => 'SSL',
                    'tls' => 'TLS',
                ],
            ],
            'username' => [
                'label' => 'שם משתמש',
                'tooltip' => 'שם משתמש הוא שם המשויך לחשבון דוא"ל.',
            ],
            'password' => [
                'label' => 'סיסמה',
                'tooltip' => 'סיסמת דוא"ל היא סיסמה לאימות וגישה לחשבון דוא"ל.',
            ],
        ],
    ],
    Postmark::class => [
        'title' => 'Postmark',
        'fields' => [
            'token' => [
                'label' => 'אסימון',
                'tooltip' => 'אסימון Postmark מתייחס לאסימון API המשמש לגישה לשירות משלוח הדוא"ל של Postmark.',
            ],
        ],
    ],
    MailerSend::class => [
        'title' => 'MailerSend',
        'fields' => [
            'api_token' => [
                'label' => 'אסימון API',
                'tooltip' => 'אסימון API משמש לאימות בקשות הנעשות בעת שליחת הודעות דוא"ל.',
            ],
        ],
    ],
    Mailgun::class => [
        'title' => 'Mailgun',
        'fields' => [
            'domain' => [
                'label' => 'דומיין',
                'tooltip' => 'הזן את שם הדומיין שלך ב-Mailgun.',
            ],
            'secret' => [
                'label' => 'מפתח API',
                'tooltip' => 'ספק את מפתח ה-API שלך ב-Mailgun לאימות.',
            ],
            'endpoint' => [
                'label' => 'אזור',
                'tooltip' => 'בחר את אזור Mailgun שלך.',
                'options' => [
                    'us' => 'ארצות הברית',
                    'eu' => 'האיחוד האירופי',
                ],
            ],
        ],
    ],
    SendGrid::class => [
        'title' => 'SendGrid',
        'fields' => [
            'api_key' => [
                'label' => 'מפתח API',
                'tooltip' => 'מפתח API משמש לאימות בקשות הנעשות בעת שליחת הודעות דוא"ל.',
            ],
        ],
    ],

    // Email Servers
    Mailcow::class => [
        'title' => 'Mailcow',
        'description' => 'mailcow - dockerized היא חבילת תוכנה קבוצתית/דוא"ל בקוד פתוח המבוססת על docker',
        'fields' => [
            'api_url' => [
                'label' => 'כתובת URL של API',
            ],
            'api_key' => [
                'label' => 'מפתח API',
            ],
        ],
        'config' => [
            'domain_template' => [
                'label' => 'תבנית דומיין',
            ],
        ],
    ],
    CpanelEmailServer::class => [
        'title' => 'cPanel',
        'description' => 'cPanel - תוכנת שיתוף פעולה ופלטפורמת דוא"ל המתארחת בענן',
        'fields' => [
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
        'config' => [
            'whm_package' => [
                'label' => 'חבילת WHM',
            ],
        ],
    ],
    Google::class => [
        'title' => 'Google',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'בצע את השלבים הבאים כדי לאפשר אימות עם ספק זה ולרשום יישום חדש:
                <ol>
                <li>עבור אל: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> והתחבר במידת הצורך.</li>
                <li>לחץ על <b>בחר פרויקט</b>, לאחר מכן לחץ על <b>צור פרויקט</b> ובחר אותו לאחר שנוצר. </li>
                <li>עבור אל <b>מנהל API ← אישורים ← מסך הסכמת OAuth</b> ומלא שם את הטופס. </li>
                <li>לאחר מכן, עבור אל <b>אישורים ← צור אישורים (סוג מזהה לקוח OAuth)</b> ובחר <b>יישום אינטרנט</b>.</li>
                <li>הגדר <b>כתובות URI מורשות להפניה מחדש</b> ל- <br /><b>{{$callback_url}}</b></li>
                <li>לאחר שנרשמת, הדבק את אישורי היישום שנוצרו (מזהה לקוח עבור מזהה יישום וסוד לקוח עבור סוד יישום) בטופס שלהלן.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ],
    ],
    Apple::class => [
        'title' => 'Apple',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'בצע את השלבים הבאים כדי לאפשר אימות עם ספק זה ולרשום יישום חדש:
            ',
        'fields' => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ],
    ],
    Microsoft::class => [
        'title' => 'Microsoft',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'בצע את השלבים הבאים כדי לאפשר אימות עם ספק זה ולרשום יישום חדש:
                <ol>
                <li>עבור אל: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> והתחבר במידת הצורך</li>
                <li>צור יישום חדש.</li>
                <li>מלא את כל השדות הנדרשים כגון שם היישום ותיאורו.</li>
                <li>הגדר <b>כתובת URL להפניה מחדש</b> ל- <br /><b>{{$callback_url}}</b></li>
                <li>לאחר שנרשמת, הדבק את אישורי היישום שנוצרו בטופס שלהלן. </li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ],
    ],
    Linkedin::class => [
        'title' => 'LinkedIn',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'בצע את השלבים הבאים כדי לאפשר אימות עם ספק זה ולרשום יישום חדש:
            <ol>
                <li>עבור אל: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> והתחבר במידת הצורך.</li>
                <li>צור יישום חדש.</li>
                <li>מלא את כל השדות הנדרשים, כגון שם היישום ותיאורו</li>
                <li>בחר <b>Live</b> תחת <b>Live Status</b>.</li>
                <li>בחר הרשאות <b>r_liteprofile</b> ו-<b>r_emailaddress</b>.</li>
                <li>הגדר <b>כתובת URL להפניה מחדש</b> ל- <br /><b>{{$callback_url}}</b></li>
                <li>לאחר שנרשמת, הדבק את אישורי היישום שנוצרו בטופס שלהלן.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ],
    ],
    Facebook::class => [
        'title' => 'Facebook',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'בצע את השלבים הבאים כדי לאפשר אימות עם ספק זה ולרשום יישום חדש:
            <ol>
                <li>עבור אל: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> והתחבר במידת הצורך.</li>
                <li>צור יישום חדש.</li>
                <li>מלא <b>שם תצוגה</b>, <b>דוא"ל ליצירת קשר</b>, בחר קטגוריה ולחץ על <b>צור מזהה אפליקציה</b>. </li>
                <li>עבור לדף <b>הגדרות</b> והעתק <b>מזהה אפליקציה</b> ו<b>סוד אפליקציה</b> לטופס זה.</li>
                <li>חזור אל <b>+הוסף מוצר</b> ובחר <b>כניסה עם פייסבוק</b></li>
                <li>הגדר <b>כתובות URI חוקיות להפניית OAuth</b> ל- <br /><b>{{$callback_url}}</b></li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ],
    ],
    Github::class => [
        'title' => 'GitHub',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'בצע את השלבים הבאים כדי לאפשר אימות עם ספק זה ולרשום יישום חדש:
            <ol>
                <li>עבור אל: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> והתחבר במידת הצורך.</li> 
                <li>צור יישום חדש.</li> 
                <li>מלא <b>שם, תיאור, כתובת אתר</b>.</li> 
                <li>הגדר <b>כתובת URL להפניה מחדש</b> ל- <br /><b>{{$callback_url}}</b></li> 
                <li>שלח את הטופס ועדכן את הגדרות היישום. </li> 
                <li>מצא בדף הבא והעתק מזהה לקוח וסוד לקוח מ-<b>פרטי OAuth</b> לשדות שלהלן.</li> 
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'מזהה לקוח',
            ],
            'client_secret' => [
                'label' => 'סוד לקוח',
            ],
        ],
    ],
];
