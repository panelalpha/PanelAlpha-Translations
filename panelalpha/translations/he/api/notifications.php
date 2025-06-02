<?php

use App\Notifications\Admin\Connection\ServerAccountConnectionError;
use App\Notifications\Admin\DiagnosticMode\DiagnosticModeEnabled;
use App\Notifications\Admin\DnsZone\CreateADnsRecordFailed;
use App\Notifications\Admin\DnsZone\DnsRecordsCreateFailed;
use App\Notifications\Admin\DnsZone\DnsZoneCreateFailed;
use App\Notifications\Admin\DnsZone\DnsZoneExists;
use App\Notifications\Admin\EmailDomain\EmailDomainCreateFailed;
use App\Notifications\Admin\EmailDomain\EmailDomainExists;
use App\Notifications\Admin\Instance\ImportByUserFailed;
use App\Notifications\Admin\Instance\ImportByUserFinished;
use App\Notifications\Admin\Instance\InstanceDeletedByUser;
use App\Notifications\Admin\Instance\InstanceInstallationByUserFailed;
use App\Notifications\Admin\Instance\InstanceInstallationByUserFinished;
use App\Notifications\Admin\Instance\ManualImportInstanceFailed;
use App\Notifications\Admin\Instance\ManualImportInstanceFinished;
use App\Notifications\Admin\Instance\RestoreInstanceFailed;
use App\Notifications\Admin\Instance\RestoreInstanceFinished;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFailed;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFinished;
use App\Notifications\Admin\Introduce\IntroduceAutoImportWebsite;
use App\Notifications\Admin\Introduce\IntroduceCreateBackup;
use App\Notifications\Admin\Introduce\IntroduceCreateFtpAccount;
use App\Notifications\Admin\Introduce\IntroduceCreateInstance;
use App\Notifications\Admin\Introduce\IntroduceCreateTemplate;
use App\Notifications\Admin\Introduce\IntroduceMailConnections;
use App\Notifications\Admin\Introduce\IntroduceSecuritySettings;
use App\Notifications\Admin\Introduce\IntroduceSettingsGeneral;
use App\Notifications\Admin\Introduce\IntroduceSettingsSmtp;
use App\Notifications\Admin\Introduce\IntroduceSettingsSso;
use App\Notifications\Admin\Service\ServiceCanceled;
use App\Notifications\Admin\Service\ServiceSuspended;
use App\Notifications\Admin\Service\ServiceUnsuspended;
use App\Notifications\Admin\Service\ServiceUpgraded;
use App\Notifications\Admin\SslOrder\DnsPropagationExceeded;
use App\Notifications\Admin\SslOrder\SslOrderFailed;
use App\Notifications\Admin\System\ResetPassword;
use App\Notifications\Admin\Theme\ForceUpdateThemeFailed;
use App\Notifications\Admin\Theme\ForceUpdateThemeFinished;
use App\Notifications\Admin\Updates\PluginUpdateAvailable;
use App\Notifications\Admin\Updates\ThemeUpdateAvailable;
use App\Notifications\Admin\Updates\WordpressUpdateAvailable;
use App\Notifications\User\Backup\AutomaticCreateFailed;
use App\Notifications\User\Backup\AutomaticCreateFinished;
use App\Notifications\User\Backup\CreateFailed;
use App\Notifications\User\Backup\CreateFinished;
use App\Notifications\User\Backup\DeleteFailed;
use App\Notifications\User\Backup\DeleteFinished;
use App\Notifications\User\Backup\RestoreFailed;
use App\Notifications\User\Backup\RestoreFinished;
use App\Notifications\User\Instance\CreateFtpAccountForInstance;
use App\Notifications\User\Instance\CreateStagingFailed;
use App\Notifications\User\Instance\CreateStagingFinished;
use App\Notifications\User\Instance\ImportFailed;
use App\Notifications\User\Instance\ImportFinished;
use App\Notifications\User\Instance\InstanceDeletedFinished;
use App\Notifications\User\Instance\InstallationFailed;
use App\Notifications\User\Instance\InstallationFinished;
use App\Notifications\User\Plugin\AutomaticActivationFailed;
use App\Notifications\User\Plugin\AutomaticActivationFinished;
use App\Notifications\User\Plugin\AutomaticDeactivationFailed;
use App\Notifications\User\Plugin\AutomaticDeactivationFinished;
use App\Notifications\User\Plugin\AutomaticInstallationFailed;
use App\Notifications\User\Plugin\AutomaticInstallationFinished;
use App\Notifications\User\Plugin\AutomaticUninstallationFailed;
use App\Notifications\User\Plugin\AutomaticUninstallationFinished;
use App\Notifications\User\Plugin\ForceUpdateFailed;
use App\Notifications\User\Plugin\ForceUpdateFinished;
use App\Notifications\User\Plugin\ManualActivationFailed;
use App\Notifications\User\Plugin\ManualActivationFinished;
use App\Notifications\User\Plugin\ManualDeactivationFailed;
use App\Notifications\User\Plugin\ManualDeactivationFinished;
use App\Notifications\User\Plugin\ManualInstallationFailed;
use App\Notifications\User\Plugin\ManualInstallationFinished;
use App\Notifications\User\Plugin\ManualUninstallationFailed;
use App\Notifications\User\Plugin\ManualUninstallationFinished;
use App\Notifications\User\SslOrder\SslInstallationError;
use App\Notifications\User\SslOrder\SslOrderCreating;
use App\Notifications\User\SslOrder\SslVerificationChallengeCreated;
use App\Notifications\User\Theme\AutomaticActivationFailed;
use App\Notifications\User\Theme\AutomaticActivationFinished;
use App\Notifications\User\Theme\AutomaticInstallationFailed;
use App\Notifications\User\Theme\AutomaticInstallationFinished;
use App\Notifications\User\Theme\AutomaticUninstallationFailed;
use App\Notifications\User\Theme\AutomaticUninstallationFinished;
use App\Notifications\User\Theme\ForceUpdateFailed;
use App\Notifications\User\Theme\ForceUpdateFinished;
use App\Notifications\User\Theme\ManualActivationFailed;
use App\Notifications\User\Theme\ManualActivationFinished;
use App\Notifications\User\Theme\ManualInstallationFailed;
use App\Notifications\User\Theme\ManualInstallationFinished;
use App\Notifications\User\Theme\ManualUninstallationFailed;
use App\Notifications\User\Theme\ManualUninstallationFinished;
use App\Notifications\User\Updates\UpdatesFailed;
use App\Notifications\User\Updates\UpdatesFinished;
use App\Notifications\User\WordPressClone\CloneCancelFailed;
use App\Notifications\User\WordPressClone\CloneCancelFinished;
use App\Notifications\User\WordPressClone\CloneCreateFailed;
use App\Notifications\User\WordPressClone\CloneCreateFinished;
use App\Notifications\User\WordPressClone\ClonePushFailed;
use App\Notifications\User\WordPressClone\ClonePushFinished;
use App\Notifications\User\WordPressRepair\AdminEmailVerificationError;
use App\Notifications\User\WordPressRepair\WordPressRepairError;
use App\Notifications\User\WordPressRepair\WordPressRepairSuccessful;
use App\Notifications\UserSettings\PasswordChanged;

return [
    ServerAccountConnectionError::class => [
        'name' => 'שגיאת חיבור לחשבון שרת',
        'description' => 'ההתראה מודיעה למקבל שישנה שגיאת חיבור בחשבון השרת.',
    ],
    DiagnosticModeEnabled::class => [
        'name' => 'מצב אבחון הופעל',
        'description' => 'ההתראה מודיעה למקבל שמצב האבחון הופעל.',
    ],
    CreateADnsRecordFailed::class => [
        'name' => 'יצירת רשומת DNS נכשלה',
        'description' => 'ההתראה מודיעה למקבל שלא היה ניתן ליצור את רשומת ה-DNS המצוינת עבור האזור.',
    ],
    DnsRecordsCreateFailed::class => [
        'name' => 'יצירת רשומות DNS נכשלה',
        'description' => 'ההתראה מודיעה למקבל שרשומות ה-DNS המפורטות לא נוצרו עבור האזור. ההתראה עשויה להכיל מידע על רשומות DNS או אזור DNS.',
    ],
    ImportByUserFailed::class => [
        'name' => 'ייבוא אינסטנס על ידי משתמש נכשל',
        'description' => 'ההתראה מודיעה למקבל שייבוא האינסטנס על ידי המשתמש נכשל.',
    ],
    ImportByUserFinished::class => [
        'name' => 'ייבוא אינסטנס על ידי משתמש הושלם',
        'description' => 'ההתראה מודיעה למקבל שייבוא האינסטנס על ידי המשתמש הצליח.',
    ],
    ManualImportInstanceFailed::class => [
        'name' => 'ייבוא ידני של אינסטנס נכשל',
        'description' => 'ההתראה מודיעה למקבל שהייבוא הידני של האינסטנס על ידי מנהל המערכת נכשל.',
    ],
    ManualImportInstanceFinished::class => [
        'name' => 'ייבוא ידני של אינסטנס הושלם',
        'description' => 'ההתראה מודיעה למקבל שהייבוא הידני של האינסטנס על ידי מנהל המערכת הצליח.',
    ],
    AutomaticCreateFailed::class => [
        'name' => 'יצירת גיבוי אוטומטי נכשלה',
        'description' => 'ההתראה מודיעה למקבל שיצירת הגיבוי האוטומטי נכשלה.',
    ],
    AutomaticCreateFinished::class => [
        'name' => 'יצירת גיבוי אוטומטי הושלמה',
        'description' => 'ההתראה מודיעה למקבל שיצירת הגיבוי האוטומטי הושלמה בהצלחה.',
    ],
    CreateFailed::class => [
        'name' => 'יצירת גיבוי נכשלה',
        'description' => 'ההתראה מודיעה למקבל שיצירת הגיבוי נכשלה.',
    ],
    CreateFinished::class => [
        'name' => 'יצירת גיבוי הושלמה',
        'description' => 'ההתראה מודיעה למקבל שיצירת הגיבוי הושלמה בהצלחה.',
    ],
    DeleteFailed::class => [
        'name' => 'מחיקת גיבוי נכשלה',
        'description' => 'ההתראה מודיעה למקבל שמחיקת הגיבוי נכשלה.',
    ],
    DeleteFinished::class => [
        'name' => 'מחיקת גיבוי הושלמה',
        'description' => 'ההתראה מודיעה למקבל שמחיקת הגיבוי הושלמה בהצלחה.',
    ],
    RestoreFailed::class => [
        'name' => 'שחזור גיבוי נכשל',
        'description' => 'ההתראה מודיעה למקבל ששחזור הגיבוי נכשל.',
    ],
    RestoreFinished::class => [
        'name' => 'שחזור גיבוי הושלם',
        'description' => 'ההתראה מודיעה למקבל ששחזור הגיבוי הושלם בהצלחה.',
    ],
    SslInstallationError::class => [
        'name' => 'שגיאת התקנת SSL',
        'description' => 'ההתראה מודיעה למקבל שהתקנת אישור SSL נכשלה.',
    ],
    SslOrderCreating::class => [
        'name' => 'יצירת הזמנת SSL',
        'description' => 'ההתראה מודיעה למקבל שהזמנת SSL נוצרה.',
    ],
    SslVerificationChallengeCreated::class => [
        'name' => 'אימות אתגר SSL נוצר',
        'description' => 'ההתראה מודיעה למקבל שאתגר האימות של SSL נוצר.',
    ],
    WordPressRepairError::class => [
        'name' => 'שגיאת תיקון וורדפרס',
        'description' => 'ההתראה מודיעה למקבל שתיקון וורדפרס נכשל.',
    ],
    WordPressRepairSuccessful::class => [
        'name' => 'תיקון וורדפרס הצליח',
        'description' => 'ההתראה מודיעה למקבל שתיקון וורדפרס הצליח.',
    ],
    PasswordChanged::class => [
        'name' => 'הסיסמה שונתה',
        'description' => 'ההתראה מודיעה למקבל שהסיסמה שלו שונתה.',
    ],
];
