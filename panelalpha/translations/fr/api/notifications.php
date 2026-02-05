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
        'name' => 'Échec de la mise à jour forcée du plugin',
        'description' => 'La notification informe le destinataire qu\'une tentative de forcer un plugin de mise à jour dans l\'instance a échoué. La notification peut inclure des détails sur le plugin et l\'instance concernée, ainsi que toute autre mesure à prendre.',
    ],
    ForceUpdatePluginFinished::class => [
        'name' => 'Forcer la mise à jour du plugin terminée',
        'description' => 'La notification informe le destinataire qu\'une tentative de forcer un plugin de mise à jour dans l\'instance s\'est terminée avec succès. La notification peut inclure des détails sur le plugin et l\'instance concernée, ainsi que toute autre mesure à prendre.',
    ],
    ForceUpdateThemeFailed::class => [
        'name' => 'Échec de la mise à jour forcée du thème',
        'description' => 'La notification informe le destinataire qu\'une tentative de forcer un thème de mise à jour dans l\'instance a échoué. La notification peut inclure des détails sur le thème et l\'instance concernée, ainsi que toute autre mesure à prendre.',
    ],
    ForceUpdateThemeFinished::class => [
        'name' => 'Le thème de la mise à jour de Force est terminé',
        'description' => 'La notification informe le destinataire qu\'une tentative de forcer un thème de mise à jour dans l\'instance s\'est terminée avec succès. La notification peut inclure des détails sur le thème et l\'instance concernée, ainsi que toute autre mesure à prendre.',
    ],
    InstallPackageFailed::class => [
        'name' => 'Échec de l\'installation du paquet',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'installation et d\'activation de plugins et de thèmes à partir des paquets attribués dans l\'instance a échoué. La notification peut inclure des détails sur l\'instance concernée et toute autre mesure à prendre.',
    ],
    InstallPackageFinished::class => [
        'name' => 'Paquet d\'installation terminé',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'installation et d\'activation de plugins et de thèmes à partir de paquets dans l\'instance s\'est terminée avec succès. La notification peut inclure des détails sur l\'instance concernée et toute autre mesure à prendre.',
    ],
    InstanceInstallationByUserFinished::class => [
        'name' => 'Installation de l\'instance par l\'utilisateur terminée',
        'description' => 'La notification informe le destinataire que l\'installation d\'une nouvelle instance WordPress par l\'utilisateur est terminée. La notification peut inclure des détails sur la personne qui a créé l\'instance, l\'emplacement de l\'instance et toute autre mesure à prendre.',
    ],
    InstanceInstallationByUserFailed::class => [
        'name' => 'Échec de l\'installation de l\'instance par l\'utilisateur',
        'description' => 'La notification informe le destinataire que l\'installation d\'une nouvelle instance WordPress par l\'utilisateur a échoué. La notification peut inclure des détails sur la personne qui a créé l\'instance, l\'emplacement de l\'instance, des informations sur les erreurs et toute autre mesure à prendre.',
    ],
    InstanceDeletedByUser::class => [
        'name' => 'Instance supprimée par l\'utilisateur',
        'description' => 'La notification informe le destinataire qu\'une instance de WordPress a été supprimée par un utilisateur. La notification peut inclure des détails sur la personne qui a supprimé l\'instance, le nom de l\'instance et toute autre mesure à prendre.',
    ],
    ResetPassword::class => [
        'name' => 'Réinitialiser le mot de passe',
        'description' => 'Un courriel de réinitialisation du mot de passe est un message automatisé envoyé à l\'adresse électronique d\'un utilisateur qui demande à réinitialiser le mot de passe de son compte. Le courriel contient généralement un lien ou des instructions pour réinitialiser le mot de passe, ainsi qu\'une limite de temps pour la validité du lien.',
    ],
    VerifyEmailAddress::class => [
        'name' => 'Vérifier l\'adresse électronique',
        'description' => 'Un code de vérification est envoyé à l\'adresse électronique de l\'utilisateur lors de son inscription.',
    ],
    BeforeTrialExpirationFirstReminder::class => [
        'name' => 'Avant l\'expiration de la période d\'essai Premier rappel',
        'description' => 'Un rappel est envoyé à l\'adresse électronique de l\'utilisateur avant l\'expiration du service d\'essai.',
    ],
    BeforeTrialExpirationSecondReminder::class => [
        'name' => 'Avant l\'expiration de la période d\'essai Deuxième rappel',
        'description' => 'Un rappel est envoyé à l\'adresse électronique de l\'utilisateur avant l\'expiration du service d\'essai.',
    ],
    BeforeTrialExpirationThirdReminder::class => [
        'name' => 'Avant l\'expiration de la période d\'essai Troisième rappel',
        'description' => 'Un rappel est envoyé à l\'adresse électronique de l\'utilisateur avant l\'expiration du service d\'essai.',
    ],
    TrialExpired::class => [
        'name' => 'Essai expiré',
        'description' => 'Une notification est envoyée à l\'adresse électronique de l\'utilisateur lorsque son service d\'essai expire.',
    ],
    AfterTrialExpirationFirstReminder::class => [
        'name' => 'Après l\'expiration de la période d\'essai Premier rappel',
        'description' => 'Un rappel est envoyé à l\'adresse électronique de l\'utilisateur après l\'expiration du service d\'essai.',
    ],
    AfterTrialExpirationSecondReminder::class => [
        'name' => 'Après l\'expiration de la période d\'essai Deuxième rappel',
        'description' => 'Un rappel est envoyé à l\'adresse électronique de l\'utilisateur après l\'expiration du service d\'essai.',
    ],
    AfterTrialExpirationThirdReminder::class => [
        'name' => 'Après l\'expiration de la période d\'essai Troisième rappel',
        'description' => 'Un rappel est envoyé à l\'adresse électronique de l\'utilisateur après l\'expiration du service d\'essai.',
    ],
    PluginUpdateAvailable::class => [
        'name' => 'Mise à jour du plugin disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour d\'un plugin qu\'il utilise sur son site web WordPress est désormais disponible. La mise à jour comprend des corrections de bogues et de nouvelles fonctionnalités qui amélioreront les performances générales et la fonctionnalité du plugin.',
    ],
    ThemeUpdateAvailable::class => [
        'name' => 'Mise à jour du thème disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour d\'un thème qu\'il utilise sur son site web WordPress est désormais disponible. La mise à jour comprend des corrections de bogues et de nouvelles fonctionnalités qui amélioreront les performances et les fonctionnalités générales du thème.',
    ],
    WordpressUpdateAvailable::class => [
        'name' => 'Mise à jour de WordPress disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour de son site web WordPress est désormais disponible. Cette mise à jour comprend d\'importants correctifs de sécurité et de nouvelles fonctionnalités qui amélioreront les performances et la fonctionnalité globales du site web.',
    ],
    QueueTaskFailed::class => [
        'name' => 'Échec de la tâche de mise en file d\'attente',
        'description' => 'La notification informe le destinataire que la tâche dans la file d\'attente a échoué. La notification peut inclure des détails sur la tâche, l\'instance concernée et l\'erreur.',
    ],
    QueueTaskSucceeded::class => [
        'name' => 'Tâche de mise en file d\'attente réussie',
        'description' => 'La notification informe le destinataire que la tâche dans la file d\'attente a abouti. La notification peut inclure des détails sur la tâche et l\'instance correspondante.',
    ],
    ServiceSuspended::class => [
        'name' => 'Service suspendu',
        'description' => 'La notification informe le destinataire que son service a été suspendu. La notification peut contenir des informations sur le domaine suspendu et un lien permettant de rétablir le service.',
    ],
    ServiceUnsuspended::class => [
        'name' => 'Service non suspendu',
        'description' => 'La notification informe le destinataire que son service a été suspendu. La notification peut contenir des informations sur le domaine suspendu et sur les mesures à prendre.',
    ],
    ServerAlert::class => [
        'name' => 'Alerte du serveur',
        'description' => 'La notification informe le destinataire des alertes détectées sur le serveur d\'hébergement.',
    ],
    DnsZoneExists::class => [
        'name' => 'La zone DNS existe',
        'description' => 'La notification informe le destinataire que la tentative de création de la zone DNS a échoué parce que la zone DNS existe déjà. La notification peut inclure des détails sur la zone DNS existante, le service affecté et le serveur DNS concerné.',
    ],
    DnsZoneCreateFailed::class => [
        'name' => 'Échec de la configuration du DNS du domaine',
        'description' => 'La notification informe le destinataire que la tentative de création d\'une zone DNS a échoué. Le message peut fournir des informations sur la zone DNS tentée, le service utilisé et le serveur sur lequel la création a échoué.',
    ],
    ServiceUpgraded::class => [
        'name' => 'Service amélioré',
        'description' => 'La notification informe le destinataire que son service a été mis à niveau. La notification peut contenir des informations sur le domaine mis à niveau et sur les mesures à prendre.',
    ],
    CreateFailed::class => [
        'name' => 'Échec de la création d\'une sauvegarde',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde de son site web ou de son système n\'a pas pu être créée. La notification peut inclure des détails sur la raison de l\'échec de la sauvegarde et sur les mesures à prendre pour résoudre le problème.',
    ],
    CreateFinished::class => [
        'name' => 'Création de la sauvegarde terminée',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde de son site web ou de son système a été créée avec succès. La notification peut inclure des détails sur l\'endroit où la sauvegarde est enregistrée et sur la manière d\'y accéder.',
    ],
    DeleteFailed::class => [
        'name' => 'Échec de la suppression de la sauvegarde',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde de son site web n\'a pas pu être supprimée. La notification peut inclure des détails sur la raison de l\'échec de la suppression et sur les mesures à prendre pour résoudre le problème.',
    ],
    DeleteFinished::class => [
        'name' => 'Sauvegarde Suppression terminée',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde de son site web a été supprimée avec succès. La notification peut inclure des détails sur la sauvegarde qui a été supprimée et toute autre mesure à prendre.',
    ],
    RestoreFailed::class => [
        'name' => 'Échec de la restauration de la sauvegarde',
        'description' => 'La notification informe le destinataire qu\'une tentative de restauration d\'une sauvegarde de son site web a échoué. La notification peut inclure des détails sur la raison de l\'échec de la restauration et sur les mesures à prendre pour résoudre le problème.',
    ],
    RestoreFinished::class => [
        'name' => 'Sauvegarde Restauration terminée',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde de son site web a été restaurée avec succès. La notification peut inclure des détails sur la sauvegarde qui a été restaurée et toute autre mesure à prendre.',
    ],
    AutomaticCreateFailed::class => [
        'name' => 'Échec de la création automatique d\'une sauvegarde',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde automatique de son site web ou de son système n\'a pas pu être créée. La notification peut inclure des détails sur la raison de l\'échec de la sauvegarde et sur les mesures à prendre pour résoudre le problème.',
    ],
    AutomaticCreateFinished::class => [
        'name' => 'La création automatique de la sauvegarde est terminée',
        'description' => 'La notification informe le destinataire qu\'une sauvegarde automatique de son site web ou de son système a été créée avec succès. La notification peut contenir des détails sur l\'endroit où la sauvegarde est enregistrée et sur la manière d\'y accéder.',
    ],
    InstallFailed::class => [
        'name' => 'Échec de l\'installation du plugin',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'installation d\'un plugin pour son site web WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de l\'installation et sur les mesures à prendre pour résoudre le problème.',
    ],
    InstallFinished::class => [
        'name' => 'L\'installation du plugin est terminée',
        'description' => 'La notification informe le destinataire qu\'un plugin pour son site web WordPress a été installé avec succès. La notification peut inclure des détails sur le plugin qui a été installé et sur les étapes ultérieures à suivre.',
    ],
    UpdateFailed::class => [
        'name' => 'Échec de la mise à jour du plugin',
        'description' => 'La notification informe le destinataire qu\'une tentative de mise à jour d\'un plugin pour son site web WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de la mise à jour et sur les mesures à prendre pour résoudre le problème.',
    ],
    UpdateFinished::class => [
        'name' => 'L\'installation du plugin est terminée',
        'description' => 'La notification informe le destinataire qu\'un plugin pour son site web WordPress a été mis à jour avec succès. La notification peut inclure des détails sur le plugin qui a été mis à jour et sur toute autre mesure à prendre.',
    ],
    \App\Notifications\User\Theme\InstallFailed::class => [
        'name' => 'Échec de l\'installation du thème',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'installation d\'un thème pour son site web WordPress a échoué. La notification peut contenir des détails sur la raison de l\'échec de l\'installation et sur les mesures à prendre pour résoudre le problème.',
    ],
    \App\Notifications\User\Theme\InstallFinished::class => [
        'name' => 'Installation du thème terminée',
        'description' => 'La notification informe le destinataire qu\'un thème pour son site web WordPress a été installé avec succès. La notification peut inclure des détails sur le thème qui a été installé et sur les étapes ultérieures à suivre.',
    ],
    \App\Notifications\User\Theme\UpdateFailed::class => [
        'name' => 'Échec de la mise à jour du thème',
        'description' => 'La notification informe le destinataire qu\'une tentative de mise à jour d\'un thème pour son site web WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de la mise à jour et sur les mesures à prendre pour résoudre le problème.',
    ],
    \App\Notifications\User\Theme\UpdateFinished::class => [
        'name' => 'Mise à jour du thème terminée',
        'description' => 'La notification informe le destinataire qu\'un thème de son site web WordPress a été mis à jour avec succès. La notification peut inclure des détails sur le thème qui a été mis à jour et sur toute autre mesure à prendre.',
    ],
    CreateStagingFailed::class => [
        'name' => 'Échec de la création d\'une étape',
        'description' => 'La notification informe le destinataire de l\'échec d\'une tentative de création d\'une instance d\'essai de son site web. La notification peut inclure des détails sur la raison de l\'échec de la création et sur les mesures à prendre pour résoudre le problème.',
    ],
    CreateStagingFinished::class => [
        'name' => 'Création d\'une phase finie',
        'description' => 'La notification informe le destinataire qu\'une instance de transition de son site web a été créée avec succès. La notification peut inclure des détails sur l\'endroit où l\'on peut accéder à l\'instance de transition et sur les étapes ultérieures à suivre.',
    ],
    InstanceInstallationFailed::class => [
        'name' => 'Échec de l\'installation de l\'instance',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'installation d\'une instance de WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de l\'installation et sur les mesures à prendre pour résoudre le problème.',
    ],
    InstanceInstallationFinished::class => [
        'name' => 'Installation de l\'instance terminée',
        'description' => 'La notification informe le destinataire qu\'une instance de WordPress a été installée avec succès. La notification peut inclure des détails sur l\'endroit où l\'instance est accessible et sur les étapes ultérieures à suivre.',
    ],
    ImportFailed::class => [
        'name' => 'Échec de l\'importation d\'une instance',
        'description' => 'La notification informe le destinataire qu\'une tentative d\'importation d\'une instance de WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de l\'importation et sur les mesures à prendre pour résoudre le problème.',
    ],
    ImportFinished::class => [
        'name' => 'Importation de l\'instance terminée',
        'description' => 'La notification informe le destinataire qu\'une instance de WordPress a été importée avec succès. La notification peut inclure des détails sur l\'endroit où l\'instance est accessible et sur les étapes ultérieures à suivre.',
    ],
    InstanceInvitationReceived::class => [
        'name' => 'Instance Invitation reçue',
        'description' => 'La notification informe le destinataire qu\'il a reçu une invitation à gérer une instance spécifique. La notification peut contenir des détails sur l\'expéditeur de l\'invitation, l\'instance gérée et les actions qui peuvent être effectuées sur l\'instance.',
    ],
    NewDeviceLogin::class => [
        'name' => 'Connexion à partir d\'un nouveau dispositif',
        'description' => 'La notification est une alerte générée lorsqu\'un nouvel appareil, un nouveau navigateur ou une nouvelle adresse IP se connecte au site web. La notification comprend généralement des informations sur l\'appareil, telles que son adresse IP, ainsi que la date et l\'heure de la connexion.',
    ],
    PushToLiveFailed::class => [
        'name' => 'Échec de l\'incitation à vivre',
        'description' => 'La notification informe le destinataire de l\'échec d\'une tentative de transfert des modifications effectuées sur l\'instance d\'essai vers la version en ligne du site web. La notification peut contenir des détails sur la raison de l\'échec et sur les mesures à prendre pour résoudre le problème.',
    ],
    PushToLiveFinished::class => [
        'name' => 'Push To Live Terminé',
        'description' => 'La notification informe le destinataire que les modifications apportées à l\'instance de préparation ont été transférées avec succès à la version active du site web ou du système. La notification peut contenir des détails sur les modifications apportées et sur les mesures à prendre.',
    ],
    UpdateWordpressFailed::class => [
        'name' => 'Échec de la mise à jour de WordPress',
        'description' => 'La notification informe le destinataire qu\'une tentative de mise à jour de l\'instance de WordPress a échoué. La notification peut inclure des détails sur la raison de l\'échec de la mise à jour et sur les mesures à prendre pour résoudre le problème.',
    ],
    UpdateWordpressFinished::class => [
        'name' => 'Mise à jour de WordPress terminée',
        'description' => 'La notification informe le destinataire que l\'instance de WordPress a été mise à jour avec succès. La notification peut inclure des détails sur les changements apportés à l\'instance et sur les mesures à prendre.',
    ],
    \App\Notifications\User\System\ResetPassword::class => [
        'name' => 'Réinitialiser le mot de passe',
        'description' => 'Un courriel de réinitialisation du mot de passe est un message automatisé envoyé à l\'adresse électronique d\'un utilisateur qui demande à réinitialiser le mot de passe de son compte. Le courriel contient généralement un lien ou des instructions pour réinitialiser le mot de passe, ainsi qu\'une limite de temps pour la validité du lien.',
    ],
    \App\Notifications\User\Updates\PluginUpdateAvailable::class => [
        'name' => 'Mise à jour du plugin disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour d\'un plugin qu\'il utilise sur son site web WordPress est désormais disponible. La mise à jour comprend des corrections de bogues et de nouvelles fonctionnalités qui amélioreront les performances générales et la fonctionnalité du plugin.',
    ],
    \App\Notifications\User\Updates\ThemeUpdateAvailable::class => [
        'name' => 'Mise à jour du thème disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour d\'un thème qu\'il utilise sur son site web WordPress est désormais disponible. La mise à jour comprend des corrections de bogues et de nouvelles fonctionnalités qui amélioreront les performances et les fonctionnalités générales du thème.',
    ],
    \App\Notifications\User\Updates\WordpressUpdateAvailable::class => [
        'name' => 'Mise à jour de WordPress disponible',
        'description' => 'La notification informe le destinataire qu\'une nouvelle mise à jour de son site web WordPress est désormais disponible. Cette mise à jour comprend d\'importants correctifs de sécurité et de nouvelles fonctionnalités qui amélioreront les performances et la fonctionnalité globales du site web.',
    ],
    DnsPropagationExceeded::class => [
        'name' => 'Propagation DNS dépassée pour la commande SSL',
        'description' => 'La notification informe le destinataire que le temps alloué pour la propagation DNS a été dépassé par rapport à sa commande de certificat SSL.',
    ],
    CreateADnsRecordFailed::class => [
        'name' => 'Échec de la configuration DNS du sous-domaine',
        'description' => 'La notification informe le destinataire que la création de l\'enregistrement DNS A a échoué.',
    ],
    InstanceTemplateCreateFailed::class => [
        'name' => 'Échec de la création d\'un modèle d\'instance',
        'description' => 'La notification informe le destinataire que le modèle d\'instance n\'est pas créé.',
    ],
    InstanceTemplateCreateFinished::class => [
        'name' => 'Modèle d\'instance Créer Terminé',
        'description' => 'La notification informe le destinataire que le modèle d\'instance a été créé avec succès.',
    ],
    EmailDomainCreateFailed::class => [
        'name' => 'Échec de la création d\'un domaine de messagerie',
        'description' => 'La notification informe le destinataire que la création du domaine de messagerie a échoué.',
    ],
    EmailDomainExists::class => [
        'name' => 'Le domaine de l\'email existe',
        'description' => 'La notification consiste à informer le destinataire que le domaine de l\'e-mail existe déjà sur le serveur de messagerie.',
    ],
    SyncReportProvidersFailed::class => [
        'name' => 'Échec de la synchronisation des fournisseurs de rapports',
        'description' => 'Une notification informe le destinataire que la synchronisation des fournisseurs de rapports a échoué. La notification peut contenir des informations sur l\'instance et le message d\'erreur.',
    ],
    SyncReportProvidersFinished::class => [
        'name' => 'Synchronisation des fournisseurs de rapports Terminé',
        'description' => 'La notification informe le destinataire que la synchronisation des fournisseurs de rapports est terminée La notification peut contenir des informations sur l\'instance.',
    ],
    DnsRecordsCreateFailed::class => [
        'name' => 'Échec de la création des enregistrements DNS',
        'description' => 'La notification informe le destinataire que les enregistrements dns listés n\'ont pas été créés pour la zone. La notification peut contenir des informations sur les enregistrements dns ou la zone dns.',
    ],
    ImportByUserFailed::class => [
        'name' => 'Échec de l\'importation d\'une instance par un utilisateur',
        'description' => 'La notification informe le destinataire que l\'importation de l\'instance par l\'utilisateur a échoué.',
    ],
    ImportByUserFinished::class => [
        'name' => 'Importation d\'instance par utilisateur terminée',
        'description' => 'La notification informe le destinataire que l\'importation de l\'instance par l\'utilisateur a réussi.',
    ],
    ManualImportInstanceFailed::class => [
        'name' => 'Échec de l\'importation manuelle',
        'description' => 'La notification informe le destinataire que l\'importation manuelle de l\'instance par l\'administrateur a échoué.',
    ],
    ManualImportInstanceFinished::class => [
        'name' => 'Importation manuelle Instance terminée',
        'description' => 'La notification informe le destinataire que l\'importation manuelle de l\'instance par l\'administrateur a réussi.',
    ],
    ServerAccountConnectionError::class => [
        'name' => 'Erreur de connexion du compte d\'hébergement',
        'description' => 'La notification informe le destinataire que la connexion au compte d\'hébergement a échoué.',
    ],
    RestoreInstanceFailed::class => [
        'name' => 'Échec de la restauration de l\'instance',
        'description' => 'La notification informe le destinataire qu\'une tentative de restauration de l\'instance à partir d\'une sauvegarde a échoué. La notification peut inclure des détails sur la raison de l\'échec de la restauration et sur les mesures à prendre pour résoudre le problème.',
    ],
    RestoreInstanceFinished::class => [
        'name' => 'Restauration de l\'instance terminée',
        'description' => 'La notification informe le destinataire que l\'instance a été restaurée avec succès à partir de la sauvegarde. La notification peut inclure des détails sur la sauvegarde qui a été restaurée et toute autre mesure à prendre.',
    ],
    PlanConfigurationError::class => [
        'name' => 'Erreur de configuration du plan',
        'description' => 'La notification informe le destinataire que la configuration du plan est erronée.',
    ],
    DiagnosticModeEnabled::class => [
        'name' => 'Mode diagnostic activé',
        'description' => 'La notification informe le destinataire que le mode diagnostic a été activé. Ce mode permet d\'améliorer la journalisation et la surveillance, ce qui peut faciliter le dépannage et l\'identification des problèmes au sein du système.',
    ],
    PushToStagingFailed::class => [
        'name' => 'Échec de la poussée vers la mise en scène',
        'description' => 'La notification informe le destinataire de l\'échec d\'une tentative de transfert des modifications effectuées sur l\'instance live vers la version staging du site web. La notification peut inclure des détails sur la raison de l\'échec et sur les mesures à prendre pour résoudre le problème.',
    ],
    PushToStagingFinished::class => [
        'name' => 'Envoi vers la mise en scène terminé',
        'description' => 'La notification informe le destinataire que les modifications apportées à l\'instance en direct ont été transférées avec succès à la version d\'essai du site web ou du système. La notification peut contenir des détails sur les modifications apportées et sur les mesures à prendre.',
    ],
    SslOrderFailed::class => [
        'name' => 'Échec de la commande SSL',
        'description' => 'La notification informe l\'administrateur qu\'une commande SSL a échoué pour le domaine spécifié. Elle inclut des détails pertinents tels que le nom de domaine, le type, le fournisseur SSL et les informations sur le client. Une attention immédiate peut être requise pour résoudre le problème.',
    ],
    CreateFtpAccountForInstance::class => [
        'name' => 'Compte FTP créé pour l\'instance',
        'description' => 'Cette notification informe l\'utilisateur qu\'un nouveau compte FTP a été créé avec succès. Elle contient des informations essentielles telles que le nom d\'utilisateur FTP, le mot de passe et l\'adresse du serveur, ce qui permet à l\'utilisateur d\'accéder à ses fichiers.',
    ],
    CreateUser::class => [
        'name' => 'Bienvenue à l\'utilisateur',
        'description' => 'Cette notification informe l\'utilisateur que son compte a été créé avec succès. Elle contient les données de connexion nécessaires, telles que le nom d\'utilisateur et le mot de passe, qui permettent à l\'utilisateur d\'accéder à son compte.',
    ],
    SyncHostingAccountFailed::class => [
        'name' => 'Échec de la synchronisation du compte d\'hébergement du service',
        'description' => 'Cette notification informe l\'utilisateur que son compte d\'hébergement sur ce service n\'a pas pu être synchronisé.',
    ],
    SyncHostingAccountFinished::class => [
        'name' => 'Synchronisation du compte d\'hébergement du service terminée',
        'description' => 'Cette notification informe l\'utilisateur que son compte d\'hébergement sur ce service a été synchronisé avec succès.',
    ],
    ControlPanelUpgrade::class => [
        'name' => 'E-mail de bienvenue après la mise à niveau du panneau de contrôle',
        'description' => 'Cette notification informe que le compte d\'hébergement a été mis à niveau avec succès depuis le panneau de contrôle. Elle contient les identifiants nécessaires permettant à l\'utilisateur d\'accéder à son compte.',
    ],
];
