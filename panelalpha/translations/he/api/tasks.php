<?php

use App\Jobs\Admin\ConvertInstanceToTemplate;
use App\Jobs\Admin\ForceUpdatePlugin;
use App\Jobs\Admin\ForceUpdateTheme;
use App\Jobs\Admin\InstallPackage;
use App\Jobs\Admin\ManualImportInstance;
use App\Jobs\Admin\RestoreBackup as AdminRestoreBackup;
use App\Jobs\Admin\SyncReportProviders;
use App\Jobs\System\AdminSendAvailableUpdateNotification;
use App\Jobs\System\CacheInstanceDetails;
use App\Jobs\System\CacheInstancePageSpeed;
use App\Jobs\System\CreateAutomaticBackup;
use App\Jobs\System\DeleteRedundantBackups;
use App\Jobs\System\ImportVisitors;
use App\Jobs\System\InstallAndActivatePlugin;
use App\Jobs\System\InstallTheme;
use App\Jobs\System\InstanceHealthCheck;
use App\Jobs\System\PostInstallInstanceSteps;
use App\Jobs\System\PostStagingSteps;
use App\Jobs\System\ProcessSslOrder;
use App\Jobs\System\RefreshReportData;
use App\Jobs\System\ScanPluginsAndThemes;
use App\Jobs\System\SyncBackupsWithRemoteContainer;
use App\Jobs\System\SyncInstanceSiteName;
use App\Jobs\System\UserSendAvailableUpdateNotification;
use App\Jobs\User\CreateBackup;
use App\Jobs\User\CreateStaging;
use App\Jobs\User\DeleteBackup;
use App\Jobs\User\ImportInstance;
use App\Jobs\User\InstallInstance;
use App\Jobs\User\InstallPlugin;
use App\Jobs\User\InstallTheme as UserInstallTheme;
use App\Jobs\User\PushToLive;
use App\Jobs\User\PushToStaging;
use App\Jobs\User\RestoreBackup;
use App\Jobs\User\UpdatePlugin;
use App\Jobs\User\UpdateTheme;
use App\Jobs\User\UpdateWordpress;

return [
    InstallPackage::class => 'התקנת חבילה: :name',
    ForceUpdatePlugin::class => 'כפיית עדכון לתוסף: :name',
    ForceUpdateTheme::class => 'כפיית עדכון לערכת עיצוב: :name',
    ScanPluginsAndThemes::class => 'סריקת תוספים וערכות עיצוב',
    ProcessSslOrder::class => 'עיבוד הזמנת SSL: :name',
    CacheInstanceDetails::class => 'מטמון פרטי אינסטנס',
    CacheInstancePageSpeed::class => 'מטמון מהירות דף של אינסטנס',
    CreateAutomaticBackup::class => 'יצירת גיבוי אוטומטי',
    DeleteRedundantBackups::class => 'מחיקת גיבויים מיותרים',
    ImportVisitors::class => 'ייבוא מבקרים',
    InstallAndActivatePlugin::class => 'התקנה והפעלה של תוסף',
    InstallTheme::class => 'התקנת ערכת עיצוב',
    InstanceHealthCheck::class => 'בדיקת תקינות אינסטנס',
    PostInstallInstanceSteps::class => 'שלבים לאחר התקנת אינסטנס',
    PostStagingSteps::class => 'שלבים לאחר סביבת פיתוח',
    RefreshReportData::class => 'רענון נתוני דוח',
    SyncBackupsWithRemoteContainer::class => 'סנכרון גיבויים עם מיכל מרוחק',
    SyncInstanceSiteName::class => 'סנכרון שם אתר של אינסטנס',
    UserSendAvailableUpdateNotification::class => 'שליחת התראת עדכון זמין למשתמש',
    AdminSendAvailableUpdateNotification::class => 'שליחת התראת עדכון זמין למנהל',
    CreateBackup::class => 'יצירת גיבוי',
    CreateStaging::class => 'יצירת סביבת פיתוח',
    DeleteBackup::class => 'מחיקת גיבוי',
    ImportInstance::class => 'ייבוא אינסטנס',
    InstallInstance::class => 'התקנת אינסטנס',
    InstallPlugin::class => 'התקנת תוסף',
    UserInstallTheme::class => 'התקנת ערכת עיצוב',
    PushToLive::class => 'העלאה לאתר החי',
    PushToStaging::class => 'העלאה לסביבת פיתוח',
    RestoreBackup::class => 'שחזור גיבוי',
    UpdatePlugin::class => 'עדכון תוסף',
    UpdateTheme::class => 'עדכון ערכת עיצוב',
    UpdateWordpress::class => 'עדכון וורדפרס',
    ConvertInstanceToTemplate::class => 'המרת אינסטנס לתבנית',
    ManualImportInstance::class => 'ייבוא ידני של אינסטנס',
    AdminRestoreBackup::class => 'שחזור גיבוי על ידי מנהל',
    SyncReportProviders::class => 'סנכרון ספקי דוחות',
];
