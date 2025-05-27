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

return [
    'apple' => [
        'name' => 'אפל',
        'auth' => [
            'client_id' => 'מזהה לקוח',
            'client_secret' => 'סוד לקוח',
            'redirect' => 'הפניה',
            'redirect_uri' => 'כתובת הפניה',
        ],
    ],
    'github' => [
        'name' => 'גיטהאב',
        'auth' => [
            'client_id' => 'מזהה לקוח',
            'client_secret' => 'סוד לקוח',
            'redirect' => 'הפניה',
            'redirect_uri' => 'כתובת הפניה',
        ],
    ],
    'google' => [
        'name' => 'גוגל',
        'auth' => [
            'client_id' => 'מזהה לקוח',
            'client_secret' => 'סוד לקוח',
            'redirect' => 'הפניה',
            'redirect_uri' => 'כתובת הפניה',
        ],
    ],
    'analytics' => [
        'client_id' => 'מזהה לקוח',
        'client_secret' => 'סוד לקוח',
        'redirect' => 'הפניה',
        'redirect_uri' => 'כתובת הפניה',
        'view_id' => 'מזהה תצוגה',
        'name' => 'אנליטיקס',
        'property_id' => 'מזהה נכס',
    ],
    'facebook' => [
        'name' => 'פייסבוק',
        'auth' => [
            'client_id' => 'מזהה לקוח',
            'client_secret' => 'סוד לקוח',
            'redirect' => 'הפניה',
            'redirect_uri' => 'כתובת הפניה',
        ],
    ],
    'microsoft' => [
        'name' => 'מיקרוסופט',
        'auth' => [
            'client_id' => 'מזהה לקוח',
            'client_secret' => 'סוד לקוח',
            'redirect' => 'הפניה',
            'redirect_uri' => 'כתובת הפניה',
        ],
    ],
    'linkedin' => [
        'name' => 'לינקדאין',
        'auth' => [
            'client_id' => 'מזהה לקוח',
            'client_secret' => 'סוד לקוח',
            'redirect' => 'הפניה',
            'redirect_uri' => 'כתובת הפניה',
        ],
    ],
    'mailgun' => [
        'name' => 'Mailgun',
        'domain' => 'דומיין',
        'api_key' => 'מפתח API',
        'region' => 'אזור',
        'regions' => [
            'us' => 'ארה"ב',
            'eu' => 'אירופה',
        ],
    ],
    'sendgrid' => [
        'name' => 'SendGrid',
        'api_key' => 'מפתח API',
    ],
    'smtp' => [
        'name' => 'SMTP',
        'host' => 'מארח',
        'port' => 'פורט',
        'username' => 'שם משתמש',
        'password' => 'סיסמה',
        'encryption' => 'הצפנה',
        'from_address' => 'כתובת מאת',
        'from_name' => 'שם מאת',
        'encryption_types' => [
            'tls' => 'TLS',
            'ssl' => 'SSL',
        ],
    ],
    'mailersend' => [
        'name' => 'MailerSend',
        'api_key' => 'מפתח API',
    ],
    'postmark' => [
        'name' => 'Postmark',
        'api_key' => 'מפתח API',
    ],
    'page_speed_insights' => [
        'name' => 'Google PageSpeed Insights',
        'api_key' => 'מפתח API',
    ],
    'matomo' => [
        'name' => 'Matomo',
        'url' => 'כתובת URL',
        'site_id' => 'מזהה אתר',
        'auth_token' => 'אסימון אימות',
    ],
    'db_ip' => [
        'name' => 'DB-IP',
        'api_key' => 'מפתח API',
    ],
    'extendify' => [
        'name' => 'Extendify',
        'api_key' => 'מפתח API',
    ],
    'preview_with_dns' => [
        'name' => 'תצוגה מקדימה עם DNS',
    ],
    'preview_without_dns' => [
        'name' => 'תצוגה מקדימה ללא DNS',
        'api_url' => 'כתובת URL של ה-API',
    ],
    'cpanel' => [
        'name' => 'cPanel',
        'url' => 'כתובת URL',
        'username' => 'שם משתמש',
        'password' => 'סיסמה',
    ],
    'mailcow' => [
        'name' => 'Mailcow',
        'url' => 'כתובת URL',
        'api_key' => 'מפתח API',
    ],
];
