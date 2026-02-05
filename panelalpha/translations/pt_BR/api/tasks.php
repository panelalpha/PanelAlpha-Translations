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
    InstallPackage::class => 'Instalar pacote: :name',
    ForceUpdatePlugin::class => 'Forçar atualização do plug-in: :name',
    ForceUpdateTheme::class => 'Forçar atualização do tema: :name',
    ScanPluginsAndThemes::class => 'Verificar plug-ins e temas',
    ProcessSslOrder::class => 'Processar pedido SSL: :name',
    RefreshReportData::class => 'Atualizar dados do relatório',
    InstallAndActivatePlugin::class => 'Instalar o plug-in: :name',
    InstallTheme::class => 'Instalar tema: :name',
    ImportVisitors::class => 'Importar visitantes',
    CreateBackup::class => 'Criar backup',
    DeleteBackup::class => 'Excluir backup',
    RestoreBackup::class => 'Restaurar backup',
    CreateStaging::class => 'Criar preparação',
    PushToLive::class => 'Impulso para viver',
    ImportInstance::class => 'Importar instância',
    InstallInstance::class => 'Criar instância',
    InstallPlugin::class => 'Instalar o plug-in: :name',
    UpdatePlugin::class => 'Atualizar plug-in: :name',
    UserInstallTheme::class => 'Instalar tema: :name',
    UpdateTheme::class => 'Atualizar tema: :name',
    UpdateWordpress::class => 'Atualizar o WordPress',
    CacheInstanceDetails::class => 'Detalhes da instância de cache',
    CacheInstancePageSpeed::class => 'Instância de cache PageSpeed',
    CreateAutomaticBackup::class => 'Criar backup automático',
    PostInstallInstanceSteps::class => 'Configurar a instância instalada',
    PostStagingSteps::class => 'Configurar a preparação instalada',
    SyncInstanceSiteName::class => 'Nome do site da instância de sincronização',
    SyncReportProviders::class => 'Provedores de relatórios de sincronização',
    InstanceHealthCheck::class => 'Verificação da integridade da instância',
    ConvertInstanceToTemplate::class => 'Criar modelo de instância: :name',
    UserSendAvailableUpdateNotification::class => 'Notificação do usuário sobre as atualizações disponíveis',
    AdminSendAvailableUpdateNotification::class => 'Notificação do administrador sobre as atualizações disponíveis',
    ManualImportInstance::class => 'Instância de importação manual',
    DeleteRedundantBackups::class => 'Excluir backups redundantes',
    AdminRestoreBackup::class => 'Restaurar a instância a partir do backup',
    SyncBackupsWithRemoteContainer::class => 'Sincronização de backups com o contêiner de backup',
    PushToStaging::class => 'Empurrar para a preparação',
    SyncHostingAccount::class => 'Sincronizar conta de hospedagem',
    SyncWordPressData::class => 'Sincronizar dados do WordPress',
];
