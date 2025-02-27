<?php

return [
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFailed' => [
        'name' => 'Falha no plug-in de atualização forçada',
        'description' => 'A notificação informa ao destinatário que uma tentativa de forçar um plug-in de atualização na instância falhou. A notificação pode incluir detalhes sobre o plug-in e a instância relacionada e quaisquer outras etapas que devam ser tomadas.',
    ],
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFinished' => [
        'description' => 'A notificação informa ao destinatário que uma tentativa de forçar um plug-in de atualização na instância foi concluída com êxito. A notificação pode incluir detalhes sobre o plug-in e a instância relacionada e quaisquer outras etapas que devam ser tomadas.',
        'name' => 'Atualização forçada do plug-in concluída',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFailed' => [
        'description' => 'The notification is informing the recipient that an attempt to force an update theme in the instance has failed. The notification may include details on the theme and the related instance and any further steps that should be taken.',
        'name' => 'Falha na atualização forçada do tema',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFinished' => [
        'name' => 'Tema da atualização do Force concluído',
        'description' => 'A notificação informa ao destinatário que uma tentativa de forçar um tema de atualização na instância foi concluída com êxito. A notificação pode incluir detalhes sobre o tema e a instância relacionada e quaisquer outras etapas que devam ser executadas.',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFailed' => [
        'description' => 'The notification is informing the recipient that an attempt to install and activate plugins and themes from packages assigned in instance has failed. The notification may include details on the related instance and any further steps that should be taken.',
        'name' => 'Falha na instalação do pacote',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFinished' => [
        'description' => 'A notificação informa ao destinatário que uma tentativa de instalar e ativar plug-ins e temas de pacotes na instância foi concluída com êxito. A notificação pode incluir detalhes sobre a instância relacionada e quaisquer outras medidas que devam ser tomadas.',
        'name' => 'Instalação do pacote concluída',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFinished' => [
        'name' => 'Instalação de instância por usuário concluída',
        'description' => 'A notificação informa ao destinatário que a instalação de uma nova instância do WordPress pelo usuário foi concluída. A notificação pode incluir detalhes sobre quem criou a instância, o local da instância e quaisquer outras medidas que devam ser tomadas.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFailed' => [
        'description' => 'A notificação informa ao destinatário que houve falha na instalação de uma nova instância do WordPress pelo usuário. A notificação pode incluir detalhes sobre quem criou a instância, o local da instância, informações sobre erros e quaisquer outras medidas que devam ser tomadas.',
        'name' => 'Falha na instalação da instância pelo usuário',
    ],
    'App\\Notifications\\Admin\\System\\ResetPassword' => [
        'description' => 'Um e-mail de redefinição de senha é uma mensagem automatizada enviada ao endereço de e-mail de um usuário quando ele solicita a redefinição da senha de uma conta. Normalmente, o e-mail contém um link ou instruções para redefinir a senha, bem como um limite de tempo para a validade do link.',
        'name' => 'Redefinir senha',
    ],
    'App\\Notifications\\Admin\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Atualização de plug-in disponível',
        'description' => 'Notification is informing the recipient that a new update for a plugin they are using on their WordPress website is now available. The update includes bug fixes and new features that will improve the overall performance and functionality of the plugin.',
    ],
    'App\\Notifications\\Admin\\Updates\\WordpressUpdateAvailable' => [
        'name' => 'Atualização do WordPress disponível',
        'description' => 'A notificação está informando ao destinatário que uma nova atualização para o site WordPress está disponível. A atualização inclui importantes correções de segurança e novos recursos que melhorarão o desempenho geral e a funcionalidade do site.',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskFailed' => [
        'description' => 'A notificação informa ao destinatário que a tarefa na fila falhou. A notificação pode incluir detalhes da tarefa, a instância relacionada e o erro.',
        'name' => 'Falha na tarefa da fila',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskSucceeded' => [
        'name' => 'Tarefa de fila bem-sucedida',
        'description' => 'The notification is informing the recipient that the task in the queue has succeeded. The notification may include details of the task and related instance.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceSuspended' => [
        'description' => 'A notificação informa ao destinatário que seu serviço foi suspenso. A notificação pode incluir informações sobre o domínio suspenso e um link para restaurar o serviço.',
        'name' => 'Serviço suspenso',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneExists' => [
        'name' => 'Existência de zona DNS',
        'description' => 'A notificação informa ao destinatário que a tentativa de criação da zona DNS falhou porque a zona DNS já existe. A notificação pode incluir detalhes sobre a zona DNS existente, o serviço afetado e o servidor DNS envolvido.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUpgraded' => [
        'name' => 'Serviço atualizado',
        'description' => 'A notificação informa ao destinatário que seu serviço foi atualizado. A notificação pode incluir informações sobre o domínio atualizado e quaisquer outras medidas que devam ser tomadas.',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFailed' => [
        'name' => 'Falha na exclusão do backup',
        'description' => 'A notificação informa ao destinatário que um backup de seu site não foi excluído. A notificação pode incluir detalhes sobre o motivo da falha na exclusão e quais medidas devem ser tomadas para resolver o problema.',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFailed' => [
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de restaurar um backup do site. A notificação pode incluir detalhes sobre o motivo da falha na restauração e quais medidas devem ser tomadas para resolver o problema.',
        'name' => 'Falha na restauração do backup',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFinished' => [
        'description' => 'A notificação informa ao destinatário que um backup de seu site foi restaurado com êxito. A notificação pode incluir detalhes sobre qual backup foi restaurado e quaisquer outras medidas que devam ser tomadas.',
        'name' => 'Backup Restore Finished (Restauração de backup concluída)',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFinished' => [
        'name' => 'Criação automática de backup concluída',
        'description' => 'A notificação informa ao destinatário que um backup automático de seu site ou sistema foi criado com sucesso. A notificação pode incluir detalhes sobre onde o backup está salvo e como acessá-lo.',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFailed' => [
        'name' => 'Falha na instalação do plug-in',
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de instalar um plug-in no site do WordPress. A notificação pode incluir detalhes sobre o motivo da falha na instalação e quais medidas devem ser tomadas para resolver o problema.',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFinished' => [
        'name' => 'Plugin Installation Completed',
        'description' => 'A notificação informa ao destinatário que um plug-in para o site do WordPress foi instalado com êxito. A notificação pode incluir detalhes sobre qual plug-in foi instalado e quaisquer outras medidas que devam ser tomadas.',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFailed' => [
        'name' => 'Falha na atualização do plug-in',
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de atualizar um plug-in do site do WordPress. A notificação pode incluir detalhes sobre o motivo da falha na atualização e quais medidas devem ser tomadas para resolver o problema.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFailed' => [
        'name' => 'Falha na instalação do tema',
        'description' => 'A notificação informa ao destinatário que houve uma falha na tentativa de instalar um tema para o site do WordPress. A notificação pode incluir detalhes sobre o motivo da falha na instalação e quais medidas devem ser tomadas para resolver o problema.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFinished' => [
        'description' => 'A notificação informa ao destinatário que um tema para o site WordPress foi instalado com êxito. A notificação pode incluir detalhes sobre qual tema foi instalado e quaisquer outras medidas que devam ser tomadas.',
        'name' => 'Instalação do tema concluída',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFailed' => [
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de atualizar um tema para o site do WordPress. A notificação pode incluir detalhes sobre o motivo da falha na atualização e quais medidas devem ser tomadas para resolver o problema.',
        'name' => 'Falha na atualização do tema',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFinished' => [
        'description' => 'A notificação informa ao destinatário que um tema do site WordPress foi atualizado com êxito. A notificação pode incluir detalhes sobre qual tema foi atualizado e quaisquer outras medidas que devam ser tomadas.',
        'name' => 'Atualização do tema concluída',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFailed' => [
        'name' => 'Falha na criação de preparação',
        'description' => 'A notificação informa ao destinatário que houve uma falha na tentativa de criar uma instância de teste do site. A notificação pode incluir detalhes sobre o motivo da falha na criação e quais medidas devem ser tomadas para resolver o problema.',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFinished' => [
        'name' => 'Criar preparação finalizada',
        'description' => 'A notificação informa ao destinatário que uma instância de teste de seu site foi criada com sucesso. A notificação pode incluir detalhes sobre onde a instância de teste pode ser acessada e quaisquer outras medidas que devam ser tomadas.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFailed' => [
        'description' => 'A notificação informa ao destinatário que uma tentativa de instalar uma instância do WordPress falhou. A notificação pode incluir detalhes sobre o motivo da falha na instalação e quais medidas devem ser tomadas para resolver o problema.',
        'name' => 'Falha na instalação da instância',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFinished' => [
        'description' => 'A notificação informa ao destinatário que uma instância do WordPress foi instalada com sucesso. A notificação pode incluir detalhes sobre onde a instância pode ser acessada e quaisquer outras medidas que devam ser tomadas.',
        'name' => 'Instalação da instância concluída',
    ],
    'App\\Notifications\\User\\Instance\\ImportFailed' => [
        'description' => 'The notification is informing the recipient that an attempt to import a WordPress instance has failed. The notification may include details on why the import failed and what steps should be taken to resolve the issue.',
        'name' => 'Falha na importação da instância',
    ],
    'App\\Notifications\\User\\Instance\\ImportFinished' => [
        'description' => 'A notificação informa ao destinatário que uma instância do WordPress foi importada com sucesso. A notificação pode incluir detalhes sobre onde a instância pode ser acessada e quaisquer outras medidas que devam ser tomadas.',
        'name' => 'Importação de instância concluída',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInvitationReceived' => [
        'description' => 'A notificação informa ao destinatário que ele recebeu um convite para gerenciar uma instância específica. A notificação pode incluir detalhes sobre quem enviou o convite, a instância que está sendo gerenciada e as ações que podem ser executadas na instância.',
        'name' => 'Convite de instância recebido',
    ],
    'App\\Notifications\\User\\System\\NewDeviceLogin' => [
        'description' => 'Notificação é um alerta gerado quando um novo dispositivo, um novo navegador ou um novo endereço IP se conecta ao site. A notificação normalmente inclui informações sobre o dispositivo, como seu endereço IP, e a data e a hora da conexão.',
        'name' => 'Login a partir de um novo dispositivo',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFinished' => [
        'description' => 'A notificação informa ao destinatário que as alterações feitas na instância de preparação foram transferidas com êxito para a versão ativa do site ou sistema. A notificação pode incluir detalhes sobre quais alterações foram feitas e quaisquer outras medidas que devam ser tomadas.',
        'name' => 'Push To Live concluído',
    ],
    'App\\Notifications\\User\\System\\ResetPassword' => [
        'description' => 'Um e-mail de redefinição de senha é uma mensagem automatizada enviada ao endereço de e-mail de um usuário quando ele solicita a redefinição da senha de uma conta. Normalmente, o e-mail contém um link ou instruções para redefinir a senha, bem como um limite de tempo para a validade do link.',
        'name' => 'Redefinir senha',
    ],
    'App\\Notifications\\Admin\\SslOrder\\DnsPropagationExceeded' => [
        'name' => 'Propagação de DNS excedida para ordem SSL',
        'description' => 'A notificação está informando ao destinatário que o tempo alocado para a propagação do DNS foi excedido em relação ao seu pedido de certificado SSL.',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFailed' => [
        'name' => 'Falha na criação do modelo de instância',
        'description' => 'A notificação informa ao destinatário que o modelo de instância não foi criado.',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainExists' => [
        'description' => 'A notificação informa ao destinatário que o domínio do e-mail já existe no servidor de e-mail.',
        'name' => 'Domínio de e-mail existente',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFailed' => [
        'name' => 'Falha nos provedores de relatórios de sincronização',
        'description' => 'Uma notificação informa ao destinatário que a sincronização dos provedores de relatórios falhou. A notificação pode conter informações sobre a instância e a mensagem de erro.',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFinished' => [
        'description' => 'A notificação informa ao destinatário que a sincronização dos provedores de relatórios foi concluída. A notificação pode conter informações de instância.',
        'name' => 'Provedores de relatórios de sincronização concluídos',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsRecordsCreateFailed' => [
        'description' => 'A notificação informa ao destinatário que os registros de DNS listados não foram criados para a zona. A notificação pode conter informações sobre os registros dns ou a zona dns.',
        'name' => 'Falha na criação de registros DNS',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFailed' => [
        'description' => 'A notificação informa ao destinatário que a importação da instância pelo usuário falhou.',
        'name' => 'Falha na importação da instância pelo usuário',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFinished' => [
        'name' => 'Importação de instância por usuário concluída',
        'description' => 'A notificação informa ao destinatário que a importação da instância pelo usuário foi bem-sucedida.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFinished' => [
        'name' => 'Manual Import Instance Finished',
        'description' => 'Notification is informing the recipient that the instance manual import by admin has successful.',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFailed' => [
        'description' => 'A notificação informa ao destinatário que houve uma falha na tentativa de restaurar a instância a partir do backup. A notificação pode incluir detalhes sobre o motivo da falha na restauração e quais medidas devem ser tomadas para resolver o problema.',
        'name' => 'Falha na restauração da instância',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFinished' => [
        'name' => 'Restauração de instância concluída',
        'description' => 'A notificação informa ao destinatário que a instância foi restaurada com êxito a partir do backup. A notificação pode incluir detalhes sobre qual backup foi restaurado e quaisquer outras medidas que devam ser tomadas.',
    ],
    'App\\Notifications\\Admin\\Plan\\PlanConfigurationError' => [
        'name' => 'Erro de configuração do plano',
        'description' => 'A notificação informa ao destinatário que a configuração do plano está mal configurada.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFailed' => [
        'name' => 'Falha no envio para preparação',
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de enviar as alterações feitas na instância ativa para a versão de teste do site. A notificação pode incluir detalhes sobre o motivo da falha no envio e quais medidas devem ser tomadas para resolver o problema.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFinished' => [
        'name' => 'Empurrar para a preparação Concluído',
        'description' => 'A notificação informa ao destinatário que as alterações feitas na instância ativa foram transferidas com êxito para a versão de teste do site ou sistema. A notificação pode incluir detalhes sobre quais alterações foram feitas e quaisquer outras medidas que devam ser tomadas.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceDeletedByUser' => [
        'name' => 'Instância excluída pelo usuário',
        'description' => 'A notificação informa ao destinatário que uma instância do WordPress foi excluída por um usuário. A notificação pode incluir detalhes sobre quem excluiu a instância, o nome da instância e quaisquer outras medidas que devam ser tomadas.',
    ],
    'App\\Notifications\\Admin\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Atualização de tema disponível',
        'description' => 'A notificação está informando ao destinatário que uma nova atualização para um tema que ele está usando em seu site WordPress já está disponível. A atualização inclui correções de bugs e novos recursos que melhorarão o desempenho geral e a funcionalidade do tema.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUnsuspended' => [
        'name' => 'Serviço não suspenso',
        'description' => 'A notificação informa ao destinatário que seu serviço foi suspenso. A notificação pode incluir informações sobre o domínio não suspenso e quaisquer outras medidas que devam ser tomadas.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneCreateFailed' => [
        'name' => 'Falha na configuração do DNS do domínio',
        'description' => 'A notificação informa ao destinatário que a tentativa de criação da zona DNS falhou. A mensagem pode fornecer informações sobre a tentativa de criação da zona DNS, o serviço em uso e o servidor no qual a criação falhou.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFailed' => [
        'name' => 'Falha na criação de backup',
        'description' => 'A notificação informa ao destinatário que houve falha na criação de um backup de seu site ou sistema. A notificação pode incluir detalhes sobre o motivo da falha do backup e quais medidas devem ser tomadas para resolver o problema.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFinished' => [
        'name' => 'Criação de backup concluída',
        'description' => 'A notificação informa ao destinatário que um backup de seu site ou sistema foi criado com êxito. A notificação pode incluir detalhes sobre onde o backup está salvo e como acessá-lo.',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFinished' => [
        'description' => 'A notificação informa ao destinatário que um backup de seu site foi excluído com êxito. A notificação pode incluir detalhes sobre qual backup foi excluído e quaisquer outras medidas que devam ser tomadas.',
        'name' => 'Backup concluído excluir',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFailed' => [
        'name' => 'Falha na criação automática de backup',
        'description' => 'A notificação informa ao destinatário que houve falha na criação de um backup automático de seu site ou sistema. A notificação pode incluir detalhes sobre o motivo da falha do backup e quais medidas devem ser tomadas para resolver o problema.',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFinished' => [
        'name' => 'Instalação do plug-in concluída',
        'description' => 'A notificação informa ao destinatário que um plug-in para o site WordPress foi atualizado com êxito. A notificação pode incluir detalhes sobre qual plug-in foi atualizado e quaisquer outras medidas que devam ser tomadas.',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFailed' => [
        'name' => 'Falha no Push To Live',
        'description' => 'A notificação informa ao destinatário que houve falha na tentativa de enviar as alterações feitas na instância de preparação para a versão ativa do site. A notificação pode incluir detalhes sobre o motivo da falha no envio e quais medidas devem ser tomadas para resolver o problema.',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFailed' => [
        'name' => 'Falha na atualização do WordPress',
        'description' => 'A notificação informa ao destinatário que uma tentativa de atualizar a instância do WordPress falhou. A notificação pode incluir detalhes sobre o motivo da falha na atualização e quais medidas devem ser tomadas para resolver o problema.',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFinished' => [
        'name' => 'Atualização do WordPress concluída',
        'description' => 'A notificação informa ao destinatário que a instância do WordPress foi atualizada com êxito. A notificação pode incluir detalhes sobre quais alterações foram feitas na instância e quaisquer outras medidas que devam ser tomadas.',
    ],
    'App\\Notifications\\User\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Atualização de tema disponível',
        'description' => 'A notificação está informando ao destinatário que uma nova atualização para um tema que ele está usando em seu site WordPress já está disponível. A atualização inclui correções de bugs e novos recursos que melhorarão o desempenho geral e a funcionalidade do tema.',
    ],
    'App\\Notifications\\User\\Updates\\WordpressUpdateAvailable' => [
        'description' => 'A notificação está informando ao destinatário que uma nova atualização para o site WordPress está disponível. A atualização inclui importantes correções de segurança e novos recursos que melhorarão o desempenho geral e a funcionalidade do site.',
        'name' => 'Atualização do WordPress disponível',
    ],
    'App\\Notifications\\Admin\\DnsZone\\CreateADnsRecordFailed' => [
        'name' => 'Falha na configuração do DNS do subdomínio',
        'description' => 'A notificação está informando ao destinatário que a criação do registro DNS A falhou.',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFinished' => [
        'description' => 'A notificação informa ao destinatário que o modelo de instância foi criado com sucesso.',
        'name' => 'Criação de modelo de instância concluída',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainCreateFailed' => [
        'name' => 'Falha na criação do domínio de e-mail',
        'description' => 'A notificação informa ao destinatário que a criação do domínio de e-mail falhou.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFailed' => [
        'name' => 'Falha na instância de importação manual',
        'description' => 'A notificação está informando ao destinatário que a importação manual da instância pelo administrador falhou.',
    ],
    'App\\Notifications\\Admin\\Connection\\ServerAccountConnectionError' => [
        'description' => 'A notificação informa ao destinatário que houve falha na conexão com a conta de hospedagem.',
        'name' => 'Erro de conexão da conta de hospedagem',
    ],
    'App\\Notifications\\Admin\\DiagnosticMode\\DiagnosticModeEnabled' => [
        'name' => 'Modo de diagnóstico ativado',
        'description' => 'A notificação está informando ao destinatário que o modo de diagnóstico foi ativado. Esse modo permite o registro e o monitoramento aprimorados, o que pode ajudar na solução de problemas e na identificação de problemas no sistema.',
    ],
    'App\\Notifications\\User\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Atualização de plug-in disponível',
        'description' => 'A notificação está informando ao destinatário que uma nova atualização para um plug-in que ele está usando em seu site WordPress já está disponível. A atualização inclui correções de bugs e novos recursos que melhorarão o desempenho geral e a funcionalidade do plug-in.',
    ],
];
