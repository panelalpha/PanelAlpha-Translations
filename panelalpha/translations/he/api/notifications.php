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
        'name' => '',
        'description' => '',
    ],
    ForceUpdatePluginFinished::class => [
        'name' => '',
        'description' => '',
    ],
    ForceUpdateThemeFailed::class => [
        'name' => '',
        'description' => '',
    ],
    ForceUpdateThemeFinished::class => [
        'name' => '',
        'description' => '',
    ],
    InstallPackageFailed::class => [
        'name' => '',
        'description' => '',
    ],
    InstallPackageFinished::class => [
        'name' => '',
        'description' => '',
    ],
    InstanceInstallationByUserFinished::class => [
        'name' => '',
        'description' => '',
    ],
    InstanceInstallationByUserFailed::class => [
        'name' => '',
        'description' => '',
    ],
    InstanceDeletedByUser::class => [
        'name' => '',
        'description' => '',
    ],
    ResetPassword::class => [
        'name' => '',
        'description' => '',
    ],
    VerifyEmailAddress::class => [
        'name' => '',
        'description' => '',
    ],
    BeforeTrialExpirationFirstReminder::class => [
        'name' => '',
        'description' => '',
    ],
    BeforeTrialExpirationSecondReminder::class => [
        'name' => '',
        'description' => '',
    ],
    BeforeTrialExpirationThirdReminder::class => [
        'name' => '',
        'description' => '',
    ],
    TrialExpired::class => [
        'name' => '',
        'description' => '',
    ],
    AfterTrialExpirationFirstReminder::class => [
        'name' => '',
        'description' => '',
    ],
    AfterTrialExpirationSecondReminder::class => [
        'name' => '',
        'description' => '',
    ],
    AfterTrialExpirationThirdReminder::class => [
        'name' => '',
        'description' => '',
    ],
    PluginUpdateAvailable::class => [
        'name' => '',
        'description' => '',
    ],
    ThemeUpdateAvailable::class => [
        'name' => '',
        'description' => '',
    ],
    WordpressUpdateAvailable::class => [
        'name' => '',
        'description' => '',
    ],
    QueueTaskFailed::class => [
        'name' => '',
        'description' => '',
    ],
    QueueTaskSucceeded::class => [
        'name' => '',
        'description' => '',
    ],
    ServiceSuspended::class => [
        'name' => '',
        'description' => '',
    ],
    ServiceUnsuspended::class => [
        'name' => '',
        'description' => '',
    ],
    ServerAlert::class => [
        'name' => 'התראת שרת',
        'description' => 'ההודעה מיידעת את הנמען על התראות שזוהו בשרת האחסון.',
    ],
    DnsZoneExists::class => [
        'name' => '',
        'description' => '',
    ],
    DnsZoneCreateFailed::class => [
        'name' => '',
        'description' => '',
    ],
    ServiceUpgraded::class => [
        'name' => '',
        'description' => '',
    ],
    CreateFailed::class => [
        'name' => '',
        'description' => '',
    ],
    CreateFinished::class => [
        'name' => '',
        'description' => '',
    ],
    DeleteFailed::class => [
        'name' => '',
        'description' => '',
    ],
    DeleteFinished::class => [
        'name' => '',
        'description' => '',
    ],
    RestoreFailed::class => [
        'name' => '',
        'description' => '',
    ],
    RestoreFinished::class => [
        'name' => '',
        'description' => '',
    ],
    AutomaticCreateFailed::class => [
        'name' => '',
        'description' => '',
    ],
    AutomaticCreateFinished::class => [
        'name' => '',
        'description' => '',
    ],
    InstallFailed::class => [
        'name' => '',
        'description' => '',
    ],
    InstallFinished::class => [
        'name' => '',
        'description' => '',
    ],
    UpdateFailed::class => [
        'name' => '',
        'description' => '',
    ],
    UpdateFinished::class => [
        'name' => '',
        'description' => '',
    ],
    \App\Notifications\User\Theme\InstallFailed::class => [
        'name' => '',
        'description' => '',
    ],
    \App\Notifications\User\Theme\InstallFinished::class => [
        'name' => '',
        'description' => '',
    ],
    \App\Notifications\User\Theme\UpdateFailed::class => [
        'name' => '',
        'description' => '',
    ],
    \App\Notifications\User\Theme\UpdateFinished::class => [
        'name' => '',
        'description' => '',
    ],
    CreateStagingFailed::class => [
        'name' => '',
        'description' => '',
    ],
    CreateStagingFinished::class => [
        'name' => '',
        'description' => '',
    ],
    InstanceInstallationFailed::class => [
        'name' => '',
        'description' => '',
    ],
    InstanceInstallationFinished::class => [
        'name' => '',
        'description' => '',
    ],
    ImportFailed::class => [
        'name' => '',
        'description' => '',
    ],
    ImportFinished::class => [
        'name' => '',
        'description' => '',
    ],
    InstanceInvitationReceived::class => [
        'name' => '',
        'description' => '',
    ],
    NewDeviceLogin::class => [
        'name' => '',
        'description' => '',
    ],
    PushToLiveFailed::class => [
        'name' => '',
        'description' => '',
    ],
    PushToLiveFinished::class => [
        'name' => '',
        'description' => '',
    ],
    UpdateWordpressFailed::class => [
        'name' => '',
        'description' => '',
    ],
    UpdateWordpressFinished::class => [
        'name' => '',
        'description' => '',
    ],
    \App\Notifications\User\System\ResetPassword::class => [
        'name' => '',
        'description' => '',
    ],
    \App\Notifications\User\Updates\PluginUpdateAvailable::class => [
        'name' => '',
        'description' => '',
    ],
    \App\Notifications\User\Updates\ThemeUpdateAvailable::class => [
        'name' => '',
        'description' => '',
    ],
    \App\Notifications\User\Updates\WordpressUpdateAvailable::class => [
        'name' => '',
        'description' => '',
    ],
    DnsPropagationExceeded::class => [
        'name' => '',
        'description' => '',
    ],
    CreateADnsRecordFailed::class => [
        'name' => '',
        'description' => '',
    ],
    InstanceTemplateCreateFailed::class => [
        'name' => '',
        'description' => '',
    ],
    InstanceTemplateCreateFinished::class => [
        'name' => '',
        'description' => '',
    ],
    EmailDomainCreateFailed::class => [
        'name' => '',
        'description' => '',
    ],
    EmailDomainExists::class => [
        'name' => '',
        'description' => '',
    ],
    SyncReportProvidersFailed::class => [
        'name' => '',
        'description' => '',
    ],
    SyncReportProvidersFinished::class => [
        'name' => '',
        'description' => '',
    ],
    DnsRecordsCreateFailed::class => [
        'name' => '',
        'description' => '',
    ],
    ImportByUserFailed::class => [
        'name' => '',
        'description' => '',
    ],
    ImportByUserFinished::class => [
        'name' => '',
        'description' => '',
    ],
    ManualImportInstanceFailed::class => [
        'name' => '',
        'description' => '',
    ],
    ManualImportInstanceFinished::class => [
        'name' => '',
        'description' => '',
    ],
    ServerAccountConnectionError::class => [
        'name' => '',
        'description' => '',
    ],
    RestoreInstanceFailed::class => [
        'name' => '',
        'description' => '',
    ],
    RestoreInstanceFinished::class => [
        'name' => '',
        'description' => '',
    ],
    PlanConfigurationError::class => [
        'name' => '',
        'description' => '',
    ],
    DiagnosticModeEnabled::class => [
        'name' => '',
        'description' => '',
    ],
    PushToStagingFailed::class => [
        'name' => '',
        'description' => '',
    ],
    PushToStagingFinished::class => [
        'name' => '',
        'description' => '',
    ],
    SslOrderFailed::class => [
        'name' => '',
        'description' => '',
    ],
    CreateFtpAccountForInstance::class => [
        'name' => '',
        'description' => '',
    ],
    CreateUser::class => [
        'name' => '',
        'description' => '',
    ],
    SyncHostingAccountFailed::class => [
        'name' => 'סנכרון חשבון האחסון של השירות נכשל',
        'description' => 'הודעה זו מיידעת את המשתמש כי חשבון האחסון בשירות זה לא הסתנכרן.',
    ],
    SyncHostingAccountFinished::class => [
        'name' => 'סנכרון חשבון האחסון של השירות הושלם',
        'description' => 'הודעה זו מיידעת את המשתמש כי חשבון האחסון בשירות זה סונכרן בהצלחה.',
    ],
    ControlPanelUpgrade::class => [
        'name' => 'דוא״ל ברוך הבא לשדרוג לוח הבקרה',
        'description' => 'הודעה זו מיידעת שחשבון האחסון שודרג בהצלחה בלוח הבקרה. היא כוללת את פרטי ההתחברות הדרושים כדי שהמשתמש יוכל לגשת לחשבון.',
    ],
];
