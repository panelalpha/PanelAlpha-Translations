<?php

use App\Jobs\Admin\ManualImportInstance;
use App\Jobs\Admin\RestoreBackup as AdminRestoreBackup;
use App\Jobs\Admin\SyncReportProviders;
use App\Jobs\System\AdminSendAvailableUpdateNotification;
use App\Jobs\System\DeleteRedundantBackups;
use App\Jobs\System\InstanceHealthCheck;
use App\Jobs\Admin\ConvertInstanceToTemplate;
use App\Jobs\System\PostInstallInstanceSteps;
use App\Jobs\System\CreateAutomaticBackup;
use App\Jobs\System\CacheInstancePageSpeed;
use App\Jobs\System\CacheInstanceDetails;
use App\Jobs\System\PostStagingSteps;
use App\Jobs\System\SyncBackupsWithRemoteContainer;
use App\Jobs\System\SyncInstanceSiteName;
use App\Jobs\System\SyncWordPressData;
use App\Jobs\System\UserSendAvailableUpdateNotification;
use App\Jobs\User\ImportInstance;
use App\Jobs\System\ImportVisitors;
use App\Jobs\System\InstallTheme;
use App\Jobs\System\InstallAndActivatePlugin;
use App\Jobs\System\RefreshReportData;
use App\Jobs\System\ProcessSslOrder;
use App\Jobs\System\ScanPluginsAndThemes;
use App\Jobs\Admin\ForceUpdateTheme;
use App\Jobs\Admin\ForceUpdatePlugin;
use App\Jobs\Admin\InstallPackage;
use App\Jobs\User\CreateBackup;
use App\Jobs\User\DeleteBackup;
use App\Jobs\User\PushToStaging;
use App\Jobs\User\RestoreBackup;
use App\Jobs\User\CreateStaging;
use App\Jobs\User\PushToLive;
use App\Jobs\User\InstallInstance;
use App\Jobs\User\InstallPlugin;
use App\Jobs\User\SyncHostingAccount;
use App\Jobs\User\UpdatePlugin;
use App\Jobs\User\InstallTheme as UserInstallTheme;
use App\Jobs\User\UpdateTheme;
use App\Jobs\User\UpdateWordpress;

return [
    InstallPackage::class => 'Pakket installeren: :naam',
    ForceUpdatePlugin::class => 'Forceer update-plugin: :naam',
    ForceUpdateTheme::class => 'Forceer update thema: :naam',
    ScanPluginsAndThemes::class => 'Plugins en thema\\',
    ProcessSslOrder::class => 'SSL-bevel verwerken: :naam',
    RefreshReportData::class => 'Rapportgegevens vernieuwen',
    InstallAndActivatePlugin::class => 'Plugin installeren: :naam',
    InstallTheme::class => 'Thema installeren: :naam',
    ImportVisitors::class => 'Bezoekers importeren',
    CreateBackup::class => 'Back-up maken',
    DeleteBackup::class => 'Back-up verwijderen',
    RestoreBackup::class => 'Back-up herstellen',
    CreateStaging::class => 'Creëer enscenering',
    PushToLive::class => 'Push om te leven',
    ImportInstance::class => 'Instantie importeren',
    InstallInstance::class => 'Instantie maken',
    InstallPlugin::class => 'Plugin installeren: :naam',
    UpdatePlugin::class => 'Plugin bijwerken: :naam',
    UserInstallTheme::class => 'Thema installeren: :naam',
    UpdateTheme::class => 'Thema bijwerken: :naam',
    UpdateWordpress::class => 'WordPress bijwerken',
    CacheInstanceDetails::class => 'Details cache-instantie',
    CacheInstancePageSpeed::class => 'Cache-instantie PageSpeed',
    CreateAutomaticBackup::class => 'Automatische back-up maken',
    PostInstallInstanceSteps::class => 'Geïnstalleerde instantie configureren',
    PostStagingSteps::class => 'Geïnstalleerde staging configureren',
    SyncInstanceSiteName::class => 'Naam synchronisatie-instantie',
    SyncReportProviders::class => 'Rapportaanbieders synchroniseren',
    InstanceHealthCheck::class => 'Instance gezondheidscontrole',
    ConvertInstanceToTemplate::class => 'Instance-sjabloon aanmaken: :name',
    UserSendAvailableUpdateNotification::class => 'Gebruikersmelding van beschikbare updates',
    AdminSendAvailableUpdateNotification::class => 'Administratieve melding van beschikbare updates',
    ManualImportInstance::class => 'Handmatig importeren Instantie',
    DeleteRedundantBackups::class => 'Overtollige back-ups verwijderen',
    AdminRestoreBackup::class => 'Instance herstellen vanuit back-up',
    SyncBackupsWithRemoteContainer::class => 'Back-ups synchroniseren met Backup Container',
    PushToStaging::class => 'Push naar enscenering',
    SyncHostingAccount::class => 'Hostingaccount synchroniseren',
    SyncWordPressData::class => 'WordPress-gegevens synchroniseren',
];
