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
use App\Jobs\User\EnableWordpressMcp;
use App\Jobs\User\DisableWordpressMcp;
use App\Jobs\User\DeployInstance;
use App\Jobs\System\GitAutoDeploy;

return [
    InstallPackage::class => 'Installare il pacchetto: :name',
    ForceUpdatePlugin::class => 'Forza aggiornamento plugin: :name',
    ForceUpdateTheme::class => 'Forza aggiornamento tema: :name',
    ScanPluginsAndThemes::class => 'Scansione di plugin e temi',
    ProcessSslOrder::class => 'Elaborazione ordine SSL: :name',
    RefreshReportData::class => 'Aggiorna dati del report',
    InstallAndActivatePlugin::class => 'Installare il plugin: :name',
    InstallTheme::class => 'Installare il tema: :name',
    ImportVisitors::class => 'Importazione visitatori',
    CreateBackup::class => 'Creare il backup',
    DeleteBackup::class => 'Eliminare il backup',
    RestoreBackup::class => 'Ripristinare il backup',
    CreateStaging::class => 'Creare staging',
    PushToLive::class => 'Push in live',
    ImportInstance::class => 'Importazione istanza',
    InstallInstance::class => 'Creare istanza',
    InstallPlugin::class => 'Installare il plugin: :name',
    UpdatePlugin::class => 'Aggiornare il plugin: :name',
    UserInstallTheme::class => 'Installare il tema: :name',
    UpdateTheme::class => 'Aggiornare il tema: :name',
    UpdateWordpress::class => 'Aggiornare WordPress',
    CacheInstanceDetails::class => 'Dettagli istanza',
    CacheInstancePageSpeed::class => 'Cache PageSpeed istanza',
    CreateAutomaticBackup::class => 'Creare backup automatico',
    PostInstallInstanceSteps::class => 'Configurare istanza installata',
    PostStagingSteps::class => 'Configurare staging installato',
    SyncInstanceSiteName::class => 'Nome sito istanza',
    SyncReportProviders::class => 'Sincronizzare fornitori di report',
    InstanceHealthCheck::class => 'Controllo salute istanza',
    ConvertInstanceToTemplate::class => 'Creare modello istanza: :name',
    UserSendAvailableUpdateNotification::class => "Notifica aggiornamenti disponibili all'utente",
    AdminSendAvailableUpdateNotification::class => "Notifica aggiornamenti disponibili all'amministratore",
    ManualImportInstance::class => 'Importazione manuale istanza',
    DeleteRedundantBackups::class => 'Eliminare backup ridondanti',
    AdminRestoreBackup::class => 'Ripristinare istanza dal backup',
    SyncBackupsWithRemoteContainer::class => 'Sincronizzare backup con Backup Container',
    PushToStaging::class => 'Push in staging',
    SyncHostingAccount::class => 'Sincronizzare account di hosting',
    SyncWordPressData::class => 'Sincronizzare dati WordPress',
    EnableWordpressMcp::class => 'Abilitare WordPress MCP',
    DisableWordpressMcp::class => 'Disabilitare WordPress MCP',
    DeployInstance::class => 'Deploy istanza',
    GitAutoDeploy::class => 'Git Auto-Deploy',
];
