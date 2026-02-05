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
    InstallPackage::class => 'Installare il pacchetto: :nome',
    ForceUpdatePlugin::class => 'Forza l\\',
    ForceUpdateTheme::class => 'Forza l\\',
    ScanPluginsAndThemes::class => 'Scansione di plugin e temi',
    ProcessSslOrder::class => 'Elaborazione dell\\',
    RefreshReportData::class => 'Aggiorna i dati del rapporto',
    InstallAndActivatePlugin::class => 'Installare il plugin: :name',
    InstallTheme::class => 'Installare il tema: :name',
    ImportVisitors::class => 'Importazione di visitatori',
    CreateBackup::class => 'Creare il backup',
    DeleteBackup::class => 'Eliminazione del backup',
    RestoreBackup::class => 'Ripristino del backup',
    CreateStaging::class => 'Creare una messa in scena',
    PushToLive::class => 'Spingere per vivere',
    ImportInstance::class => 'Importazione dell\\',
    InstallInstance::class => 'Creare un\\',
    InstallPlugin::class => 'Installare il plugin: :name',
    UpdatePlugin::class => 'Aggiornamento del plugin: :name',
    UserInstallTheme::class => 'Installare il tema: :name',
    UpdateTheme::class => 'Aggiornamento del tema: :name',
    UpdateWordpress::class => 'Aggiornare WordPress',
    CacheInstanceDetails::class => 'Dettagli dell\\',
    CacheInstancePageSpeed::class => 'Istanza di cache PageSpeed',
    CreateAutomaticBackup::class => 'Creare un backup automatico',
    PostInstallInstanceSteps::class => 'Configurare l\\',
    PostStagingSteps::class => 'Configurare lo Staging installato',
    SyncInstanceSiteName::class => 'Nome del sito dell\\',
    SyncReportProviders::class => 'Sincronizzazione dei fornitori di report',
    InstanceHealthCheck::class => 'Controllo dello stato di salute dell\\',
    ConvertInstanceToTemplate::class => 'Creare un modello di istanza: :name',
    UserSendAvailableUpdateNotification::class => 'Notifica all\\',
    AdminSendAvailableUpdateNotification::class => 'Notifica all\\',
    ManualImportInstance::class => 'Istanza di importazione manuale',
    DeleteRedundantBackups::class => 'Eliminare i backup ridondanti',
    AdminRestoreBackup::class => 'Ripristino dell\\',
    SyncBackupsWithRemoteContainer::class => 'Sincronizzazione dei backup con Backup Container',
    PushToStaging::class => 'Spingere verso la messa in scena',
    SyncHostingAccount::class => 'Sincronizza account di hosting',
    SyncWordPressData::class => 'Sincronizza dati di WordPress',
];
