<?php

use App\Notifications\Admin\Connection\ServerAccountConnectionError;
use App\Notifications\Admin\DiagnosticMode\DiagnosticModeEnabled;
use App\Notifications\Admin\DnsZone\CreateADnsRecordFailed;
use App\Notifications\Admin\DnsZone\DnsRecordsCreateFailed;
use App\Notifications\Admin\Instance\ImportByUserFailed;
use App\Notifications\Admin\Instance\ImportByUserFinished;
use App\Notifications\Admin\Instance\ManualImportInstanceFailed;
use App\Notifications\Admin\Instance\ManualImportInstanceFinished;
use App\Notifications\Admin\Instance\RestoreInstanceFailed;
use App\Notifications\Admin\Instance\RestoreInstanceFinished;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFailed;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFinished;
use App\Notifications\Admin\EmailDomain\EmailDomainCreateFailed;
use App\Notifications\Admin\EmailDomain\EmailDomainExists;
use App\Notifications\Admin\Plan\PlanConfigurationError;
use App\Notifications\Admin\ReportProvider\SyncReportProvidersFailed;
use App\Notifications\Admin\ReportProvider\SyncReportProvidersFinished;
use App\Notifications\Admin\SslOrder\DnsPropagationExceeded;
use App\Notifications\Admin\SslOrder\SslOrderFailed;
use App\Notifications\User\Instance\CreateFtpAccountForInstance;
use App\Notifications\User\Instance\PushToStagingFailed;
use App\Notifications\User\Instance\PushToStagingFinished;
use App\Notifications\User\Instance\UpdateWordpressFinished;
use App\Notifications\User\Instance\UpdateWordpressFailed;
use App\Notifications\User\Instance\PushToLiveFinished;
use App\Notifications\User\Instance\PushToLiveFailed;
use App\Notifications\User\Instance\InstanceInvitationReceived;
use App\Notifications\User\Instance\InstanceInstallationFinished;
use App\Notifications\User\Instance\InstanceInstallationFailed;
use App\Notifications\User\Instance\CreateStagingFinished;
use App\Notifications\User\Instance\CreateStagingFailed;
use App\Notifications\User\Plugin\UpdateFinished;
use App\Notifications\User\Plugin\UpdateFailed;
use App\Notifications\User\Plugin\InstallFinished;
use App\Notifications\User\Plugin\InstallFailed;
use App\Notifications\User\Backup\AutomaticCreateFinished;
use App\Notifications\User\Backup\AutomaticCreateFailed;
use App\Notifications\User\Backup\RestoreFinished;
use App\Notifications\User\Backup\RestoreFailed;
use App\Notifications\User\Backup\DeleteFinished;
use App\Notifications\User\Backup\DeleteFailed;
use App\Notifications\User\Backup\CreateFinished;
use App\Notifications\User\Backup\CreateFailed;
use App\Notifications\Admin\Service\ServiceUpgraded;
use App\Notifications\Admin\DnsZone\DnsZoneCreateFailed;
use App\Notifications\Admin\DnsZone\DnsZoneExists;
use App\Notifications\Admin\Service\ServiceUnsuspended;
use App\Notifications\Admin\Service\ServiceSuspended;
use App\Notifications\Admin\Queue\QueueTaskSucceeded;
use App\Notifications\Admin\Queue\QueueTaskFailed;
use App\Notifications\Admin\Updates\WordpressUpdateAvailable;
use App\Notifications\Admin\Updates\ThemeUpdateAvailable;
use App\Notifications\Admin\Updates\PluginUpdateAvailable;
use App\Notifications\Admin\System\ResetPassword;
use App\Notifications\Admin\Instance\InstanceDeletedByUser;
use App\Notifications\Admin\Instance\InstanceInstallationByUserFailed;
use App\Notifications\Admin\Instance\InstanceInstallationByUserFinished;
use App\Notifications\Admin\Package\InstallPackageFinished;
use App\Notifications\Admin\Package\InstallPackageFailed;
use App\Notifications\Admin\Theme\ForceUpdateThemeFinished;
use App\Notifications\Admin\Theme\ForceUpdateThemeFailed;
use App\Notifications\Admin\Plugin\ForceUpdatePluginFinished;
use App\Notifications\Admin\Plugin\ForceUpdatePluginFailed;
use App\Notifications\Admin\Server\ServerAlert;
use App\Notifications\User\Instance\ImportFailed;
use App\Notifications\User\Instance\ImportFinished;
use App\Notifications\User\Service\SyncHostingAccountFailed;
use App\Notifications\User\Service\SyncHostingAccountFinished;
use App\Notifications\User\System\ControlPanelUpgrade;
use App\Notifications\User\System\CreateUser;
use App\Notifications\User\Service\AfterTrialExpirationFirstReminder;
use App\Notifications\User\Service\AfterTrialExpirationSecondReminder;
use App\Notifications\User\Service\AfterTrialExpirationThirdReminder;
use App\Notifications\User\Service\BeforeTrialExpirationFirstReminder;
use App\Notifications\User\Service\BeforeTrialExpirationSecondReminder;
use App\Notifications\User\Service\BeforeTrialExpirationThirdReminder;
use App\Notifications\User\Service\TrialExpired;
use App\Notifications\User\System\NewDeviceLogin;
use App\Notifications\User\System\VerifyEmailAddress;

return [
    ForceUpdatePluginFailed::class => [
        'name' => 'Falha no plug-in de atualização forçada',
        'description' => 'A notificação informa ao destinatário que uma tentativa de forçar um plug-in de atualização na instância falhou. A notificação pode incluir detalhes sobre o plug-in e a instância relacionada e quaisquer outras etapas que devam ser tomadas.',
    ],
    ForceUpdatePluginFinished::class => [
        'name' => 'Atualização forçada do plug-in concluída',
        'description' => 'A notificação informa ao destinatário que uma tentativa de forçar um plug-in de atualização na instância foi concluída com êxito. A notificação pode incluir detalhes sobre o plug-in e a instância relacionada e quaisquer outras etapas que devam ser tomadas.',
    ],
    ForceUpdateThemeFailed::class => [
        'name' => 'Falha na atualização forçada do tema',
        'description' => 'The notification is informing the recipient that an attempt to force an update theme in the instance has failed. The notification may include details on the theme and the related instance and any further steps that should be taken.',
    ],
    ForceUpdateThemeFinished::class => [
        'name' => 'Tema da atualização do Force concluído',
        'description' => 'A notificação informa ao destinatário que uma tentativa de forçar um tema de atualização na instância foi concluída com êxito. A notificação pode incluir detalhes sobre o tema e a instância relacionada e quaisquer outras etapas que devam ser executadas.',
    ],
    InstallPackageFailed::class => [
        'name' => 'Falha na instalação do pacote',
        'description' => 'The notification is informing the recipient that an attempt to install and activate plugins and themes from packages assigned in instance has failed. The notification may include details on the related instance and any further steps that should be taken.',
    ],
    InstallPackageFinished::class => [
        'name' => 'Instalação do pacote concluída',
        'description' => 'A notificação informa ao destinatário que uma tentativa de instalar e ativar plug-ins e temas de pacotes na instância foi concluída com êxito. A notificação pode incluir detalhes sobre a instância relacionada e quaisquer outras medidas que devam ser tomadas.',
    ],
    InstanceInstallationByUserFinished::class => [
        'name' => 'Instalação de instância por usuário concluída',
        'description' => 'A notificação informa ao destinatário que a instalação de uma nova instância do WordPress pelo usuário foi concluída. A notificação pode incluir detalhes sobre quem criou a instância, o local da instância e quaisquer outras medidas que devam ser tomadas.',
    ],
    InstanceInstallationByUserFailed::class => [
        'name' => 'Falha na instalação da instância pelo usuário',
        'description' => 'A notificação informa ao destinatário que houve falha na instalação de uma nova instância do WordPress pelo usuário. A notificação pode incluir detalhes sobre quem criou a instância, o local da instância, informações sobre erros e quaisquer outras medidas que devam ser tomadas.',
    ],
    InstanceDeletedByUser::class => [
        'name' => 'Instância excluída pelo usuário',
        'description' => 'A notificação informa ao destinatário que uma instância do WordPress foi excluída por um usuário. A notificação pode incluir detalhes sobre quem excluiu a instância, o nome da instância e quaisquer outras medidas que devam ser tomadas.',
    ],
    ResetPassword::class => [
        'name' => 'Redefinir senha',
        'description' => 'Um e-mail de redefinição de senha é uma mensagem automatizada enviada ao endereço de e-mail de um usuário quando ele solicita a redefinição da senha de uma conta. Normalmente, o e-mail contém um link ou instruções para redefinir a senha, bem como um limite de tempo para a validade do link.',
    ],
    VerifyEmailAddress::class => [
        'name' => 'Verificar endereço de e-mail',
        'description' => 'Um código de verificação é enviado para o endereço de e-mail do usuário quando ele se registra.',
    ],
    BeforeTrialExpirationFirstReminder::class => [
        'name' => 'Antes da expiração do período de avaliação Primeiro lembrete',
        'description' => 'Um lembrete é enviado ao endereço de e-mail do usuário antes da expiração do serviço de avaliação.',
    ],
    BeforeTrialExpirationSecondReminder::class => [
        'name' => 'Antes da expiração do período de avaliação Segundo lembrete',
        'description' => 'Um lembrete é enviado ao endereço de e-mail do usuário antes da expiração do serviço de avaliação.',
    ],
    BeforeTrialExpirationThirdReminder::class => [
        'name' => 'Terceiro lembrete antes da expiração do período de avaliação',
        'description' => 'Um lembrete é enviado ao endereço de e-mail do usuário antes da expiração do serviço de avaliação.',
    ],
    TrialExpired::class => [
        'name' => 'Teste expirado',
        'description' => 'Uma notificação é enviada ao endereço de e-mail do usuário quando o serviço de avaliação expirar.',
    ],
    AfterTrialExpirationFirstReminder::class => [
        'name' => 'Após a expiração do período de avaliação Primeiro lembrete',
        'description' => 'Um lembrete é enviado ao endereço de e-mail do usuário após a expiração do serviço de avaliação.',
    ],
    AfterTrialExpirationSecondReminder::class => [
        'name' => 'Após a expiração do período de avaliação, segundo lembrete',
        'description' => 'Um lembrete é enviado ao endereço de e-mail do usuário após a expiração do serviço de avaliação.',
    ],
    AfterTrialExpirationThirdReminder::class => [
        'name' => 'Terceiro lembrete após a expiração do período de avaliação',
        'description' => 'Um lembrete é enviado ao endereço de e-mail do usuário após a expiração do serviço de avaliação.',
    ],
    PluginUpdateAvailable::class => [
        'name' => 'Atualização de plug-in disponível',
        'description' => 'Notification is informing the recipient that a new update for a plugin they are using on their WordPress website is now available. The update includes bug fixes and new features that will improve the overall performance and functionality of the plugin.',
    ],
    ThemeUpdateAvailable::class => [
        'name' => 'Atualização de tema disponível',
        'description' => 'A notificação está informando ao destinatário que uma nova atualização para um tema que ele está usando em seu site WordPress já está disponível. A atualização inclui correções de bugs e novos recursos que melhorarão o desempenho geral e a funcionalidade do tema.',
    ],
    WordpressUpdateAvailable::class => [
        'name' => 'Atualização do WordPress disponível',
        'description' => 'A notificação está informando ao destinatário que uma nova atualização para o site WordPress está disponível. A atualização inclui importantes correções de segurança e novos recursos que melhorarão o desempenho geral e a funcionalidade do site.',
    ],
    QueueTaskFailed::class => [
        'name' => 'Falha na tarefa da fila',
        'description' => 'A notificação informa ao destinatário que a tarefa na fila falhou. A notificação pode incluir detalhes da tarefa, a instância relacionada e o erro.',
    ],
    QueueTaskSucceeded::class => [
        'name' => 'Tarefa de fila bem-sucedida',
        'description' => 'The notification is informing the recipient that the task in the queue has succeeded. The notification may include details of the task and related instance.',
    ],
    ServiceSuspended::class => [
        'name' => 'Serviço suspenso',
        'description' => 'A notificação informa ao destinatário que seu serviço foi suspenso. A notificação pode incluir informações sobre o domínio suspenso e um link para restaurar o serviço.',
    ],
    ServiceUnsuspended::class => [
        'name' => 'Serviço não suspenso',
        'description' => 'A notificação informa ao destinatário que seu serviço foi suspenso. A notificação pode incluir informações sobre o domínio não suspenso e quaisquer outras medidas que devam ser tomadas.',
    ],
    ServerAlert::class => [
        'name' => 'Alerta do servidor',
        'description' => 'A notificação informa o destinatário sobre alertas detectados no servidor de hospedagem.',
    ],
    DnsZoneExists::class => [
        'name' => 'Existência de zona DNS',
        'description' => 'A notificação informa ao destinatário que a tentativa de criação da zona DNS falhou porque a zona DNS já existe. A notificação pode incluir detalhes sobre a zona DNS existente, o serviço afetado e o servidor DNS envolvido.',
    ],
    DnsZoneCreateFailed::class => [
        'name' => 'Falha na configuração do DNS do domínio',
        'description' => 'A notificação informa ao destinatário que a tentativa de criação da zona DNS falhou. A mensagem pode fornecer informações sobre a tentativa de criação da zona DNS, o serviço em uso e o servidor no qual a criação falhou.',
    ],
    ServiceUpgraded::class => [
        'name' => 'Serviço atualizado',
        'description' => 'A notificação informa ao destinatário que seu serviço foi atualizado. A notificação pode incluir informações sobre o domínio atualizado e quaisquer outras medidas que devam ser tomadas.',
    ],
    CreateFailed::class => [
        'name' => 'Falha na criação de backup',
        'description' => 'A notificação informa ao destinatário que houve falha na criação de um backup de seu site ou sistema. A notificação pode incluir detalhes sobre o motivo da falha do backup e quais medidas devem ser tomadas para resolver o problema.',
    ],
    CreateFinished::class => [
        'name' => 'Criação de backup concluída',
        'description' => 'A notificação informa ao destinatário que um backup de seu site ou sistema foi criado com êxito. A notificação pode incluir detalhes sobre onde o backup está salvo e como acessá-lo.',
    ],
    DeleteFailed::class => [
        'name' => 'Falha na exclusão do backup',
        'description' => 'A notificação informa ao destinatário que um backup de seu site não foi excluído. A notificação pode incluir detalhes sobre o motivo da falha na exclusão e quais medidas devem ser tomadas para resolver o problema.',
    ],
    DeleteFinished::class => [
        'name' => 'Backup concluído excluir',
        'description' => 'A notificação informa ao destinatário que um backup de seu site foi excluído com êxito. A notificação pode incluir detalhes sobre qual backup foi excluído e quaisquer outras medidas que devam ser tomadas.',
    ],
    RestoreFailed::class => [
        'name' => 'Falha na restauração do backup',
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de restaurar um backup do site. A notificação pode incluir detalhes sobre o motivo da falha na restauração e quais medidas devem ser tomadas para resolver o problema.',
    ],
    RestoreFinished::class => [
        'name' => 'Backup Restore Finished (Restauração de backup concluída)',
        'description' => 'A notificação informa ao destinatário que um backup de seu site foi restaurado com êxito. A notificação pode incluir detalhes sobre qual backup foi restaurado e quaisquer outras medidas que devam ser tomadas.',
    ],
    AutomaticCreateFailed::class => [
        'name' => 'Falha na criação automática de backup',
        'description' => 'A notificação informa ao destinatário que houve falha na criação de um backup automático de seu site ou sistema. A notificação pode incluir detalhes sobre o motivo da falha do backup e quais medidas devem ser tomadas para resolver o problema.',
    ],
    AutomaticCreateFinished::class => [
        'name' => 'Criação automática de backup concluída',
        'description' => 'A notificação informa ao destinatário que um backup automático de seu site ou sistema foi criado com sucesso. A notificação pode incluir detalhes sobre onde o backup está salvo e como acessá-lo.',
    ],
    InstallFailed::class => [
        'name' => 'Falha na instalação do plug-in',
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de instalar um plug-in no site do WordPress. A notificação pode incluir detalhes sobre o motivo da falha na instalação e quais medidas devem ser tomadas para resolver o problema.',
    ],
    InstallFinished::class => [
        'name' => 'Plugin Installation Completed',
        'description' => 'A notificação informa ao destinatário que um plug-in para o site do WordPress foi instalado com êxito. A notificação pode incluir detalhes sobre qual plug-in foi instalado e quaisquer outras medidas que devam ser tomadas.',
    ],
    UpdateFailed::class => [
        'name' => 'Falha na atualização do plug-in',
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de atualizar um plug-in do site do WordPress. A notificação pode incluir detalhes sobre o motivo da falha na atualização e quais medidas devem ser tomadas para resolver o problema.',
    ],
    UpdateFinished::class => [
        'name' => 'Instalação do plug-in concluída',
        'description' => 'A notificação informa ao destinatário que um plug-in para o site WordPress foi atualizado com êxito. A notificação pode incluir detalhes sobre qual plug-in foi atualizado e quaisquer outras medidas que devam ser tomadas.',
    ],
    \App\Notifications\User\Theme\InstallFailed::class => [
        'name' => 'Falha na instalação do tema',
        'description' => 'A notificação informa ao destinatário que houve uma falha na tentativa de instalar um tema para o site do WordPress. A notificação pode incluir detalhes sobre o motivo da falha na instalação e quais medidas devem ser tomadas para resolver o problema.',
    ],
    \App\Notifications\User\Theme\InstallFinished::class => [
        'name' => 'Instalação do tema concluída',
        'description' => 'A notificação informa ao destinatário que um tema para o site WordPress foi instalado com êxito. A notificação pode incluir detalhes sobre qual tema foi instalado e quaisquer outras medidas que devam ser tomadas.',
    ],
    \App\Notifications\User\Theme\UpdateFailed::class => [
        'name' => 'Falha na atualização do tema',
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de atualizar um tema para o site do WordPress. A notificação pode incluir detalhes sobre o motivo da falha na atualização e quais medidas devem ser tomadas para resolver o problema.',
    ],
    \App\Notifications\User\Theme\UpdateFinished::class => [
        'name' => 'Atualização do tema concluída',
        'description' => 'A notificação informa ao destinatário que um tema do site WordPress foi atualizado com êxito. A notificação pode incluir detalhes sobre qual tema foi atualizado e quaisquer outras medidas que devam ser tomadas.',
    ],
    CreateStagingFailed::class => [
        'name' => 'Falha na criação de preparação',
        'description' => 'A notificação informa ao destinatário que houve uma falha na tentativa de criar uma instância de teste do site. A notificação pode incluir detalhes sobre o motivo da falha na criação e quais medidas devem ser tomadas para resolver o problema.',
    ],
    CreateStagingFinished::class => [
        'name' => 'Criar preparação finalizada',
        'description' => 'A notificação informa ao destinatário que uma instância de teste de seu site foi criada com sucesso. A notificação pode incluir detalhes sobre onde a instância de teste pode ser acessada e quaisquer outras medidas que devam ser tomadas.',
    ],
    InstanceInstallationFailed::class => [
        'name' => 'Falha na instalação da instância',
        'description' => 'A notificação informa ao destinatário que uma tentativa de instalar uma instância do WordPress falhou. A notificação pode incluir detalhes sobre o motivo da falha na instalação e quais medidas devem ser tomadas para resolver o problema.',
    ],
    InstanceInstallationFinished::class => [
        'name' => 'Instalação da instância concluída',
        'description' => 'A notificação informa ao destinatário que uma instância do WordPress foi instalada com sucesso. A notificação pode incluir detalhes sobre onde a instância pode ser acessada e quaisquer outras medidas que devam ser tomadas.',
    ],
    ImportFailed::class => [
        'name' => 'Falha na importação da instância',
        'description' => 'The notification is informing the recipient that an attempt to import a WordPress instance has failed. The notification may include details on why the import failed and what steps should be taken to resolve the issue.',
    ],
    ImportFinished::class => [
        'name' => 'Importação de instância concluída',
        'description' => 'A notificação informa ao destinatário que uma instância do WordPress foi importada com sucesso. A notificação pode incluir detalhes sobre onde a instância pode ser acessada e quaisquer outras medidas que devam ser tomadas.',
    ],
    InstanceInvitationReceived::class => [
        'name' => 'Convite de instância recebido',
        'description' => 'A notificação informa ao destinatário que ele recebeu um convite para gerenciar uma instância específica. A notificação pode incluir detalhes sobre quem enviou o convite, a instância que está sendo gerenciada e as ações que podem ser executadas na instância.',
    ],
    NewDeviceLogin::class => [
        'name' => 'Login a partir de um novo dispositivo',
        'description' => 'Notificação é um alerta gerado quando um novo dispositivo, um novo navegador ou um novo endereço IP se conecta ao site. A notificação normalmente inclui informações sobre o dispositivo, como seu endereço IP, e a data e a hora da conexão.',
    ],
    PushToLiveFailed::class => [
        'name' => 'Falha no Push To Live',
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de enviar as alterações feitas na instância de preparação para a versão ativa do site. A notificação pode incluir detalhes sobre o motivo da falha no envio e quais medidas devem ser tomadas para resolver o problema.',
    ],
    PushToLiveFinished::class => [
        'name' => 'Push To Live concluído',
        'description' => 'A notificação informa ao destinatário que as alterações feitas na instância de preparação foram transferidas com êxito para a versão ativa do site ou sistema. A notificação pode incluir detalhes sobre quais alterações foram feitas e quaisquer outras medidas que devam ser tomadas.',
    ],
    UpdateWordpressFailed::class => [
        'name' => 'Falha na atualização do WordPress',
        'description' => 'A notificação informa ao destinatário que uma tentativa de atualizar a instância do WordPress falhou. A notificação pode incluir detalhes sobre o motivo da falha na atualização e quais medidas devem ser tomadas para resolver o problema.',
    ],
    UpdateWordpressFinished::class => [
        'name' => 'Atualização do WordPress concluída',
        'description' => 'A notificação informa ao destinatário que a instância do WordPress foi atualizada com êxito. A notificação pode incluir detalhes sobre quais alterações foram feitas na instância e quaisquer outras medidas que devam ser tomadas.',
    ],
    \App\Notifications\User\System\ResetPassword::class => [
        'name' => 'Redefinir senha',
        'description' => 'Um e-mail de redefinição de senha é uma mensagem automatizada enviada ao endereço de e-mail de um usuário quando ele solicita a redefinição da senha de uma conta. Normalmente, o e-mail contém um link ou instruções para redefinir a senha, bem como um limite de tempo para a validade do link.',
    ],
    \App\Notifications\User\Updates\PluginUpdateAvailable::class => [
        'name' => 'Atualização de plug-in disponível',
        'description' => 'A notificação está informando ao destinatário que uma nova atualização para um plug-in que ele está usando em seu site WordPress já está disponível. A atualização inclui correções de bugs e novos recursos que melhorarão o desempenho geral e a funcionalidade do plug-in.',
    ],
    \App\Notifications\User\Updates\ThemeUpdateAvailable::class => [
        'name' => 'Atualização de tema disponível',
        'description' => 'A notificação está informando ao destinatário que uma nova atualização para um tema que ele está usando em seu site WordPress já está disponível. A atualização inclui correções de bugs e novos recursos que melhorarão o desempenho geral e a funcionalidade do tema.',
    ],
    \App\Notifications\User\Updates\WordpressUpdateAvailable::class => [
        'name' => 'Atualização do WordPress disponível',
        'description' => 'A notificação está informando ao destinatário que uma nova atualização para o site WordPress está disponível. A atualização inclui importantes correções de segurança e novos recursos que melhorarão o desempenho geral e a funcionalidade do site.',
    ],
    DnsPropagationExceeded::class => [
        'name' => 'Propagação de DNS excedida para ordem SSL',
        'description' => 'A notificação está informando ao destinatário que o tempo alocado para a propagação do DNS foi excedido em relação ao seu pedido de certificado SSL.',
    ],
    CreateADnsRecordFailed::class => [
        'name' => 'Falha na configuração do DNS do subdomínio',
        'description' => 'A notificação está informando ao destinatário que a criação do registro DNS A falhou.',
    ],
    InstanceTemplateCreateFailed::class => [
        'name' => 'Falha na criação do modelo de instância',
        'description' => 'A notificação informa ao destinatário que o modelo de instância não foi criado.',
    ],
    InstanceTemplateCreateFinished::class => [
        'name' => 'Criação de modelo de instância concluída',
        'description' => 'A notificação informa ao destinatário que o modelo de instância foi criado com sucesso.',
    ],
    EmailDomainCreateFailed::class => [
        'name' => 'Falha na criação do domínio de e-mail',
        'description' => 'A notificação informa ao destinatário que a criação do domínio de e-mail falhou.',
    ],
    EmailDomainExists::class => [
        'name' => 'Domínio de e-mail existente',
        'description' => 'A notificação informa ao destinatário que o domínio do e-mail já existe no servidor de e-mail.',
    ],
    SyncReportProvidersFailed::class => [
        'name' => 'Falha nos provedores de relatórios de sincronização',
        'description' => 'Uma notificação informa ao destinatário que a sincronização dos provedores de relatórios falhou. A notificação pode conter informações sobre a instância e a mensagem de erro.',
    ],
    SyncReportProvidersFinished::class => [
        'name' => 'Provedores de relatórios de sincronização concluídos',
        'description' => 'A notificação informa ao destinatário que a sincronização dos provedores de relatórios foi concluída. A notificação pode conter informações de instância.',
    ],
    DnsRecordsCreateFailed::class => [
        'name' => 'Falha na criação de registros DNS',
        'description' => 'A notificação informa ao destinatário que os registros de DNS listados não foram criados para a zona. A notificação pode conter informações sobre os registros dns ou a zona dns.',
    ],
    ImportByUserFailed::class => [
        'name' => 'Falha na importação da instância pelo usuário',
        'description' => 'A notificação informa ao destinatário que a importação da instância pelo usuário falhou.',
    ],
    ImportByUserFinished::class => [
        'name' => 'Importação de instância por usuário concluída',
        'description' => 'A notificação informa ao destinatário que a importação da instância pelo usuário foi bem-sucedida.',
    ],
    ManualImportInstanceFailed::class => [
        'name' => 'Falha na instância de importação manual',
        'description' => 'A notificação está informando ao destinatário que a importação manual da instância pelo administrador falhou.',
    ],
    ManualImportInstanceFinished::class => [
        'name' => 'Manual Import Instance Finished',
        'description' => 'Notification is informing the recipient that the instance manual import by admin has successful.',
    ],
    ServerAccountConnectionError::class => [
        'name' => 'Erro de conexão da conta de hospedagem',
        'description' => 'A notificação informa ao destinatário que houve falha na conexão com a conta de hospedagem.',
    ],
    RestoreInstanceFailed::class => [
        'name' => 'Falha na restauração da instância',
        'description' => 'A notificação informa ao destinatário que houve uma falha na tentativa de restaurar a instância a partir do backup. A notificação pode incluir detalhes sobre o motivo da falha na restauração e quais medidas devem ser tomadas para resolver o problema.',
    ],
    RestoreInstanceFinished::class => [
        'name' => 'Restauração de instância concluída',
        'description' => 'A notificação informa ao destinatário que a instância foi restaurada com êxito a partir do backup. A notificação pode incluir detalhes sobre qual backup foi restaurado e quaisquer outras medidas que devam ser tomadas.',
    ],
    PlanConfigurationError::class => [
        'name' => 'Erro de configuração do plano',
        'description' => 'A notificação informa ao destinatário que a configuração do plano está mal configurada.',
    ],
    DiagnosticModeEnabled::class => [
        'name' => 'Modo de diagnóstico ativado',
        'description' => 'A notificação está informando ao destinatário que o modo de diagnóstico foi ativado. Esse modo permite o registro e o monitoramento aprimorados, o que pode ajudar na solução de problemas e na identificação de problemas no sistema.',
    ],
    PushToStagingFailed::class => [
        'name' => 'Falha no envio para preparação',
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de enviar as alterações feitas na instância ativa para a versão de teste do site. A notificação pode incluir detalhes sobre o motivo da falha no envio e quais medidas devem ser tomadas para resolver o problema.',
    ],
    PushToStagingFinished::class => [
        'name' => 'Empurrar para a preparação Concluído',
        'description' => 'A notificação informa ao destinatário que as alterações feitas na instância ativa foram transferidas com êxito para a versão de teste do site ou sistema. A notificação pode incluir detalhes sobre quais alterações foram feitas e quaisquer outras medidas que devam ser tomadas.',
    ],
    SslOrderFailed::class => [
        'name' => 'Falha no pedido SSL',
        'description' => 'A notificação informa ao administrador que houve falha em um pedido de SSL para o domínio especificado. Ela inclui detalhes relevantes, como o nome do domínio, o tipo, o provedor de SSL e as informações do cliente. Pode ser necessária atenção imediata para resolver o problema.',
    ],
    CreateFtpAccountForInstance::class => [
        'name' => 'Conta FTP criada para a instância',
        'description' => 'Essa notificação informa ao usuário que uma nova conta de FTP foi criada com êxito. Ela inclui detalhes essenciais, como o nome de usuário do FTP, a senha e o endereço do servidor, permitindo que o usuário acesse seus arquivos.',
    ],
    CreateUser::class => [
        'name' => 'Usuário bem-vindo',
        'description' => 'Essa notificação informa ao usuário que sua conta foi criada com sucesso. Ela inclui os detalhes de login necessários, como nome de usuário e senha, permitindo que o usuário acesse sua conta.',
    ],
    SyncHostingAccountFailed::class => [
        'name' => 'Falha na sincronização da conta de hospedagem do serviço',
        'description' => 'Esta notificação informa o usuário que a conta de hospedagem deste serviço não pôde ser sincronizada.',
    ],
    SyncHostingAccountFinished::class => [
        'name' => 'Sincronização da conta de hospedagem do serviço concluída',
        'description' => 'Esta notificação informa o usuário que a conta de hospedagem deste serviço foi sincronizada com sucesso.',
    ],
    ControlPanelUpgrade::class => [
        'name' => 'E-mail de boas-vindas de upgrade do painel de controle',
        'description' => 'Esta notificação informa que a conta de hospedagem foi atualizada com sucesso no painel de controle. Ela inclui os dados de acesso necessários para o usuário acessar sua conta.',
    ],
];
