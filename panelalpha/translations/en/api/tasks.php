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
    InstallPackage::class => 'Install Package: :name',
    ForceUpdatePlugin::class => 'Force Update Plugin: :name',
    ForceUpdateTheme::class => 'Force Update Theme: :name',
    ScanPluginsAndThemes::class => 'Scan Plugins And Themes',
    ProcessSslOrder::class => 'Process SSL Order: :name',
    RefreshReportData::class => 'Refresh Report Data',
    InstallAndActivatePlugin::class => 'Install Plugin: :name',
    InstallTheme::class => 'Install Theme: :name',
    ImportVisitors::class => 'Import Visitors',
    CreateBackup::class => 'Create Backup',
    DeleteBackup::class => 'Delete Backup',
    RestoreBackup::class => 'Restore Backup',
    CreateStaging::class => 'Create Staging',
    PushToLive::class => 'Push To Live',
    ImportInstance::class => 'Import Instance',
    InstallInstance::class => 'Create Instance',
    InstallPlugin::class => 'Install Plugin: :name',
    UpdatePlugin::class => 'Update Plugin: :name',
    UserInstallTheme::class => 'Install Theme: :name',
    UpdateTheme::class => 'Update Theme: :name',
    UpdateWordpress::class => 'Update WordPress',
    CacheInstanceDetails::class => 'Cache Instance Details',
    CacheInstancePageSpeed::class => 'Cache Instance PageSpeed',
    CreateAutomaticBackup::class => 'Create Automatic Backup',
    PostInstallInstanceSteps::class => 'Configure Installed Instance',
    PostStagingSteps::class => 'Configure Installed Staging',
    SyncInstanceSiteName::class => 'Sync Instance Site Name',
    SyncReportProviders::class => 'Sync Report Providers',
    InstanceHealthCheck::class => 'Instance Health Check',
    ConvertInstanceToTemplate::class => 'Create Instance Template: :name',
    UserSendAvailableUpdateNotification::class => 'User Notification Of Available Updates',
    AdminSendAvailableUpdateNotification::class => 'Admin Notification Of Available Updates',
    ManualImportInstance::class => 'Manual Import Instance',
    DeleteRedundantBackups::class => 'Delete Redundant Backups',
    AdminRestoreBackup::class => 'Restore Instance From Backup',
    SyncBackupsWithRemoteContainer::class => 'Sync Backups With Backup Container',
    PushToStaging::class => 'Push To Staging',
];
