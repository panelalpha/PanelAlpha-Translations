<?php

return [
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFailed' => [
        'name' => 'Échec de la mise à jour forcée du plugin',
        'description' => 'La notification informe le destinataire qu\'une tentative de forcer un plugin de mise à jour dans l\'instance a échoué. La notification peut inclure des détails sur le plugin et l\'instance concernée, ainsi que toute autre mesure à prendre.',
    ],
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFinished' => [
        'description' => 'La notification informe le destinataire qu\'une tentative de forcer un plugin de mise à jour dans l\'instance s\'est terminée avec succès. La notification peut inclure des détails sur le plugin et l\'instance concernée, ainsi que toute autre mesure à prendre.',
        'name' => 'Forcer la mise à jour du plugin terminée',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFailed' => [
        'name' => 'Échec de la mise à jour forcée du thème',
        'description' => 'La notification informe le destinataire qu\'une tentative de forcer un thème de mise à jour dans l\'instance a échoué. La notification peut inclure des détails sur le thème et l\'instance concernée, ainsi que toute autre mesure à prendre.',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFinished' => [
        'description' => 'La notification informe le destinataire qu\'une tentative de forcer un thème de mise à jour dans l\'instance s\'est terminée avec succès. La notification peut inclure des détails sur le thème et l\'instance concernée, ainsi que toute autre mesure à prendre.',
        'name' => 'Le thème de la mise à jour de Force est terminé',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFailed' => [
        'name' => 'Échec de l\'installation du paquet',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'installation et d\'activation de plugins et de thèmes à partir des paquets attribués dans l\'instance a échoué. La notification peut inclure des détails sur l\'instance concernée et toute autre mesure à prendre.',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFinished' => [
        'name' => 'Paquet d\'installation terminé',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'installation et d\'activation de plugins et de thèmes à partir de paquets dans l\'instance s\'est terminée avec succès. La notification peut inclure des détails sur l\'instance concernée et toute autre mesure à prendre.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFinished' => [
        'name' => 'Installation de l\'instance par l\'utilisateur terminée',
        'description' => 'La notification informe le destinataire que l\'installation d\'une nouvelle instance WordPress par l\'utilisateur est terminée. La notification peut inclure des détails sur la personne qui a créé l\'instance, l\'emplacement de l\'instance et toute autre mesure à prendre.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFailed' => [
        'name' => 'Échec de l\'installation de l\'instance par l\'utilisateur',
        'description' => 'La notification informe le destinataire que l\'installation d\'une nouvelle instance WordPress par l\'utilisateur a échoué. La notification peut inclure des détails sur la personne qui a créé l\'instance, l\'emplacement de l\'instance, des informations sur les erreurs et toute autre mesure à prendre.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceDeletedByUser' => [
        'name' => 'Instance supprimée par l\'utilisateur',
        'description' => 'La notification informe le destinataire qu\'une instance de WordPress a été supprimée par un utilisateur. La notification peut inclure des détails sur la personne qui a supprimé l\'instance, le nom de l\'instance et toute autre mesure à prendre.',
    ],
    'App\\Notifications\\Admin\\System\\ResetPassword' => [
        'name' => 'Réinitialiser le mot de passe',
        'description' => 'Un courriel de réinitialisation du mot de passe est un message automatisé envoyé à l\'adresse électronique d\'un utilisateur qui demande à réinitialiser le mot de passe de son compte. Le courriel contient généralement un lien ou des instructions pour réinitialiser le mot de passe, ainsi qu\'une limite de temps pour la validité du lien.',
    ],
    'App\\Notifications\\Admin\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Mise à jour du plugin disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour d\'un plugin qu\'il utilise sur son site web WordPress est désormais disponible. La mise à jour comprend des corrections de bogues et de nouvelles fonctionnalités qui amélioreront les performances générales et la fonctionnalité du plugin.',
    ],
    'App\\Notifications\\Admin\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Mise à jour du thème disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour d\'un thème qu\'il utilise sur son site web WordPress est désormais disponible. La mise à jour comprend des corrections de bogues et de nouvelles fonctionnalités qui amélioreront les performances et les fonctionnalités générales du thème.',
    ],
    'App\\Notifications\\Admin\\Updates\\WordpressUpdateAvailable' => [
        'name' => 'Mise à jour de WordPress disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour de son site web WordPress est désormais disponible. Cette mise à jour comprend d\'importants correctifs de sécurité et de nouvelles fonctionnalités qui amélioreront les performances et la fonctionnalité globales du site web.',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskFailed' => [
        'name' => 'Échec de la tâche de mise en file d\'attente',
        'description' => 'La notification informe le destinataire que la tâche dans la file d\'attente a échoué. La notification peut inclure des détails sur la tâche, l\'instance concernée et l\'erreur.',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskSucceeded' => [
        'name' => 'Tâche de mise en file d\'attente réussie',
        'description' => 'La notification informe le destinataire que la tâche dans la file d\'attente a abouti. La notification peut inclure des détails sur la tâche et l\'instance correspondante.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceSuspended' => [
        'name' => 'Service suspendu',
        'description' => 'La notification informe le destinataire que son service a été suspendu. La notification peut contenir des informations sur le domaine suspendu et un lien permettant de rétablir le service.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUnsuspended' => [
        'description' => 'La notification informe le destinataire que son service a été suspendu. La notification peut contenir des informations sur le domaine suspendu et sur les mesures à prendre.',
        'name' => 'Service non suspendu',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneExists' => [
        'name' => 'La zone DNS existe',
        'description' => 'La notification informe le destinataire que la tentative de création de la zone DNS a échoué parce que la zone DNS existe déjà. La notification peut inclure des détails sur la zone DNS existante, le service affecté et le serveur DNS concerné.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneCreateFailed' => [
        'name' => 'Échec de la configuration du DNS du domaine',
        'description' => 'La notification informe le destinataire que la tentative de création d\'une zone DNS a échoué. Le message peut fournir des informations sur la zone DNS tentée, le service utilisé et le serveur sur lequel la création a échoué.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUpgraded' => [
        'name' => 'Service amélioré',
        'description' => 'La notification informe le destinataire que son service a été mis à niveau. La notification peut contenir des informations sur le domaine mis à niveau et sur les mesures à prendre.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFailed' => [
        'name' => 'Échec de la création d\'une sauvegarde',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde de son site web ou de son système n\'a pas pu être créée. La notification peut inclure des détails sur la raison de l\'échec de la sauvegarde et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFinished' => [
        'name' => 'Création de la sauvegarde terminée',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde de son site web ou de son système a été créée avec succès. La notification peut inclure des détails sur l\'endroit où la sauvegarde est enregistrée et sur la manière d\'y accéder.',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFailed' => [
        'description' => 'La notification informe le destinataire qu\'une sauvegarde de son site web n\'a pas pu être supprimée. La notification peut inclure des détails sur la raison de l\'échec de la suppression et sur les mesures à prendre pour résoudre le problème.',
        'name' => 'Échec de la suppression de la sauvegarde',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFinished' => [
        'name' => 'Sauvegarde Suppression terminée',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde de son site web a été supprimée avec succès. La notification peut inclure des détails sur la sauvegarde qui a été supprimée et toute autre mesure à prendre.',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFailed' => [
        'name' => 'Échec de la restauration de la sauvegarde',
        'description' => 'La notification informe le destinataire qu\'une tentative de restauration d\'une sauvegarde de son site web a échoué. La notification peut inclure des détails sur la raison de l\'échec de la restauration et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFinished' => [
        'name' => 'Sauvegarde Restauration terminée',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde de son site web a été restaurée avec succès. La notification peut inclure des détails sur la sauvegarde qui a été restaurée et toute autre mesure à prendre.',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFailed' => [
        'name' => 'Échec de la création automatique d\'une sauvegarde',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde automatique de son site web ou de son système n\'a pas pu être créée. La notification peut inclure des détails sur la raison de l\'échec de la sauvegarde et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFinished' => [
        'name' => 'La création automatique de la sauvegarde est terminée',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde automatique de son site web ou de son système a été créée avec succès. La notification peut contenir des détails sur l\'endroit où la sauvegarde est enregistrée et sur la manière d\'y accéder.',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFailed' => [
        'name' => 'Échec de l\'installation du plugin',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'installation d\'un plugin pour son site web WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de l\'installation et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFinished' => [
        'name' => 'L\'installation du plugin est terminée',
        'description' => 'La notification informe le destinataire qu\'un plugin pour son site web WordPress a été installé avec succès. La notification peut inclure des détails sur le plugin qui a été installé et sur les étapes ultérieures à suivre.',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFailed' => [
        'name' => 'Échec de la mise à jour du plugin',
        'description' => 'La notification informe le destinataire qu\'une tentative de mise à jour d\'un plugin pour son site web WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de la mise à jour et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFinished' => [
        'description' => 'La notification informe le destinataire qu\'un plugin pour son site web WordPress a été mis à jour avec succès. La notification peut inclure des détails sur le plugin qui a été mis à jour et sur toute autre mesure à prendre.',
        'name' => 'L\'installation du plugin est terminée',
    ],
    'App\\Notifications\\User\\Theme\\InstallFailed' => [
        'name' => 'Échec de l\'installation du thème',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'installation d\'un thème pour son site web WordPress a échoué. La notification peut contenir des détails sur la raison de l\'échec de l\'installation et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFinished' => [
        'name' => 'Installation du thème terminée',
        'description' => 'La notification informe le destinataire qu\'un thème pour son site web WordPress a été installé avec succès. La notification peut inclure des détails sur le thème qui a été installé et sur les étapes ultérieures à suivre.',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFailed' => [
        'name' => 'Échec de la mise à jour du thème',
        'description' => 'La notification informe le destinataire qu\'une tentative de mise à jour d\'un thème pour son site web WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de la mise à jour et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFinished' => [
        'name' => 'Mise à jour du thème terminée',
        'description' => 'La notification informe le destinataire qu\'un thème de son site web WordPress a été mis à jour avec succès. La notification peut inclure des détails sur le thème qui a été mis à jour et sur toute autre mesure à prendre.',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFailed' => [
        'name' => 'Échec de la création d\'une étape',
        'description' => 'La notification informe le destinataire de l\'échec d\'une tentative de création d\'une instance d\'essai de son site web. La notification peut inclure des détails sur la raison de l\'échec de la création et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFinished' => [
        'name' => 'Création d\'une phase finie',
        'description' => 'La notification informe le destinataire qu\'une instance de transition de son site web a été créée avec succès. La notification peut inclure des détails sur l\'endroit où l\'on peut accéder à l\'instance de transition et sur les étapes ultérieures à suivre.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFailed' => [
        'name' => 'Échec de l\'installation de l\'instance',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'installation d\'une instance de WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de l\'installation et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFinished' => [
        'name' => 'Installation de l\'instance terminée',
        'description' => 'La notification informe le destinataire qu\'une instance de WordPress a été installée avec succès. La notification peut inclure des détails sur l\'endroit où l\'instance est accessible et sur les étapes ultérieures à suivre.',
    ],
    'App\\Notifications\\User\\Instance\\ImportFailed' => [
        'name' => 'Échec de l\'importation d\'une instance',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'importation d\'une instance de WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de l\'importation et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Instance\\ImportFinished' => [
        'name' => 'Importation de l\'instance terminée',
        'description' => 'La notification informe le destinataire qu\'une instance de WordPress a été importée avec succès. La notification peut inclure des détails sur l\'endroit où l\'instance est accessible et sur les étapes ultérieures à suivre.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInvitationReceived' => [
        'name' => 'Instance Invitation reçue',
        'description' => 'La notification informe le destinataire qu\'il a reçu une invitation à gérer une instance spécifique. La notification peut contenir des détails sur l\'expéditeur de l\'invitation, l\'instance gérée et les actions qui peuvent être effectuées sur l\'instance.',
    ],
    'App\\Notifications\\User\\System\\NewDeviceLogin' => [
        'name' => 'Connexion à partir d\'un nouveau dispositif',
        'description' => 'La notification est une alerte générée lorsqu\'un nouvel appareil, un nouveau navigateur ou une nouvelle adresse IP se connecte au site web. La notification comprend généralement des informations sur l\'appareil, telles que son adresse IP, ainsi que la date et l\'heure de la connexion.',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFailed' => [
        'name' => 'Échec de l\'incitation à vivre',
        'description' => 'La notification informe le destinataire de l\'échec d\'une tentative de transfert des modifications effectuées sur l\'instance d\'essai vers la version en ligne du site web. La notification peut contenir des détails sur la raison de l\'échec et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFinished' => [
        'name' => 'Push To Live Terminé',
        'description' => 'La notification informe le destinataire que les modifications apportées à l\'instance de préparation ont été transférées avec succès à la version active du site web ou du système. La notification peut contenir des détails sur les modifications apportées et sur les mesures à prendre.',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFailed' => [
        'name' => 'Échec de la mise à jour de WordPress',
        'description' => 'La notification informe le destinataire qu\'une tentative de mise à jour de l\'instance de WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de la mise à jour et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFinished' => [
        'description' => 'La notification informe le destinataire que l\'instance de WordPress a été mise à jour avec succès. La notification peut inclure des détails sur les changements apportés à l\'instance et sur les mesures à prendre.',
        'name' => 'Mise à jour de WordPress terminée',
    ],
    'App\\Notifications\\User\\System\\ResetPassword' => [
        'name' => 'Réinitialiser le mot de passe',
        'description' => 'Un courriel de réinitialisation du mot de passe est un message automatisé envoyé à l\'adresse électronique d\'un utilisateur qui demande à réinitialiser le mot de passe de son compte. Le courriel contient généralement un lien ou des instructions pour réinitialiser le mot de passe, ainsi qu\'une limite de temps pour la validité du lien.',
    ],
    'App\\Notifications\\User\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Mise à jour du plugin disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour d\'un plugin qu\'il utilise sur son site web WordPress est désormais disponible. La mise à jour comprend des corrections de bogues et de nouvelles fonctionnalités qui amélioreront les performances générales et la fonctionnalité du plugin.',
    ],
    'App\\Notifications\\User\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Mise à jour du thème disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour d\'un thème qu\'il utilise sur son site web WordPress est désormais disponible. La mise à jour comprend des corrections de bogues et de nouvelles fonctionnalités qui amélioreront les performances et les fonctionnalités générales du thème.',
    ],
    'App\\Notifications\\User\\Updates\\WordpressUpdateAvailable' => [
        'name' => 'Mise à jour de WordPress disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour de son site web WordPress est désormais disponible. Cette mise à jour comprend d\'importants correctifs de sécurité et de nouvelles fonctionnalités qui amélioreront les performances et la fonctionnalité globales du site web.',
    ],
    'App\\Notifications\\Admin\\SslOrder\\DnsPropagationExceeded' => [
        'name' => 'Propagation DNS dépassée pour la commande SSL',
        'description' => 'La notification informe le destinataire que le temps alloué pour la propagation DNS a été dépassé par rapport à sa commande de certificat SSL.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\CreateADnsRecordFailed' => [
        'name' => 'Échec de la configuration DNS du sous-domaine',
        'description' => 'La notification informe le destinataire que la création de l\'enregistrement DNS A a échoué.',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFailed' => [
        'name' => 'Échec de la création d\'un modèle d\'instance',
        'description' => 'La notification informe le destinataire que le modèle d\'instance n\'est pas créé.',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFinished' => [
        'name' => 'Modèle d\'instance Créer Terminé',
        'description' => 'La notification informe le destinataire que le modèle d\'instance a été créé avec succès.',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainCreateFailed' => [
        'name' => 'Échec de la création d\'un domaine de messagerie',
        'description' => 'La notification informe le destinataire que la création du domaine de messagerie a échoué.',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainExists' => [
        'name' => 'Le domaine de l\'email existe',
        'description' => 'La notification consiste à informer le destinataire que le domaine de l\'e-mail existe déjà sur le serveur de messagerie.',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFailed' => [
        'name' => 'Échec de la synchronisation des fournisseurs de rapports',
        'description' => 'Une notification informe le destinataire que la synchronisation des fournisseurs de rapports a échoué. La notification peut contenir des informations sur l\'instance et le message d\'erreur.',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFinished' => [
        'name' => 'Synchronisation des fournisseurs de rapports Terminé',
        'description' => 'La notification informe le destinataire que la synchronisation des fournisseurs de rapports est terminée La notification peut contenir des informations sur l\'instance.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsRecordsCreateFailed' => [
        'name' => 'Échec de la création des enregistrements DNS',
        'description' => 'La notification informe le destinataire que les enregistrements dns listés n\'ont pas été créés pour la zone. La notification peut contenir des informations sur les enregistrements dns ou la zone dns.',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFailed' => [
        'name' => 'Échec de l\'importation d\'une instance par un utilisateur',
        'description' => 'La notification informe le destinataire que l\'importation de l\'instance par l\'utilisateur a échoué.',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFinished' => [
        'name' => 'Importation d\'instance par utilisateur terminée',
        'description' => 'La notification informe le destinataire que l\'importation de l\'instance par l\'utilisateur a réussi.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFailed' => [
        'name' => 'Échec de l\'importation manuelle',
        'description' => 'La notification informe le destinataire que l\'importation manuelle de l\'instance par l\'administrateur a échoué.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFinished' => [
        'name' => 'Importation manuelle Instance terminée',
        'description' => 'La notification informe le destinataire que l\'importation manuelle de l\'instance par l\'administrateur a réussi.',
    ],
    'App\\Notifications\\Admin\\Connection\\ServerAccountConnectionError' => [
        'description' => 'La notification informe le destinataire que la connexion au compte d\'hébergement a échoué.',
        'name' => 'Erreur de connexion du compte d\'hébergement',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFailed' => [
        'name' => 'Échec de la restauration de l\'instance',
        'description' => 'La notification informe le destinataire qu\'une tentative de restauration de l\'instance à partir d\'une sauvegarde a échoué. La notification peut inclure des détails sur la raison de l\'échec de la restauration et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFinished' => [
        'name' => 'Restauration de l\'instance terminée',
        'description' => 'La notification informe le destinataire que l\'instance a été restaurée avec succès à partir de la sauvegarde. La notification peut inclure des détails sur la sauvegarde qui a été restaurée et toute autre mesure à prendre.',
    ],
    'App\\Notifications\\Admin\\Plan\\PlanConfigurationError' => [
        'name' => 'Erreur de configuration du plan',
        'description' => 'La notification informe le destinataire que la configuration du plan est erronée.',
    ],
    'App\\Notifications\\Admin\\DiagnosticMode\\DiagnosticModeEnabled' => [
        'name' => 'Mode diagnostic activé',
        'description' => 'La notification informe le destinataire que le mode diagnostic a été activé. Ce mode permet d\'améliorer la journalisation et la surveillance, ce qui peut faciliter le dépannage et l\'identification des problèmes au sein du système.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFailed' => [
        'name' => 'Échec de la poussée vers la mise en scène',
        'description' => 'La notification informe le destinataire de l\'échec d\'une tentative de transfert des modifications effectuées sur l\'instance live vers la version staging du site web. La notification peut inclure des détails sur la raison de l\'échec et sur les mesures à prendre pour résoudre le problème.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFinished' => [
        'description' => 'La notification informe le destinataire que les modifications apportées à l\'instance en direct ont été transférées avec succès à la version d\'essai du site web ou du système. La notification peut contenir des détails sur les modifications apportées et sur les mesures à prendre.',
        'name' => 'Envoi vers la mise en scène terminé',
    ],
];
