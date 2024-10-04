<?php

use App\Notifications\Admin\DnsZone\CreateADnsRecordFailed;
use App\Notifications\Admin\DnsZone\DnsRecordsCreateFailed;
use App\Notifications\Admin\Instance\ImportByUserFailed;
use App\Notifications\Admin\Instance\ImportByUserFinished;
use App\Notifications\Admin\Instance\ManualImportInstanceFailed;
use App\Notifications\Admin\Instance\ManualImportInstanceFinished;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFailed;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFinished;
use App\Notifications\Admin\EmailDomain\EmailDomainCreateFailed;
use App\Notifications\Admin\EmailDomain\EmailDomainExists;
use App\Notifications\Admin\ReportProvider\SyncReportProvidersFailed;
use App\Notifications\Admin\ReportProvider\SyncReportProvidersFinished;
use App\Notifications\Admin\SslOrder\DnsPropagationExceeded;
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
use App\Notifications\User\Instance\ImportFailed;
use App\Notifications\User\Instance\ImportFinished;
use App\Notifications\User\System\NewDeviceLogin;

return [
    ForceUpdatePluginFailed::class => [
        "name" => "Force Update Plugin Failed",
        "description" => "The notification is informing the recipient that an attempt to force an update plugin in the instance has failed. The notification may include details on the plugin and the related instance and any further steps that should be taken."
    ],
    ForceUpdatePluginFinished::class => [
        "name" => "Force Update Plugin Finished",
        "description" => "The notification is informing the recipient that an attempt to force an update plugin in the instance has been successfully finished. The notification may include details on the plugin and the related instance and any further steps that should be taken."
    ],
    ForceUpdateThemeFailed::class => [
        "name" => "Force Update Theme Failed",
        "description" => "The notification is informing the recipient that an attempt to force an update theme in the instance has failed. The notification may include details on the theme and the related instance and any further steps that should be taken."
    ],
    ForceUpdateThemeFinished::class => [
        "name" => "Force Update Theme Finished",
        "description" => "The notification is informing the recipient that an attempt to force an update theme in the instance has been successfully finished. The notification may include details on the theme and the related instance and any further steps that should be taken."
    ],
    InstallPackageFailed::class => [
        "name" => "Install Package Failed",
        "description" => "The notification is informing the recipient that an attempt to install and activate plugins and themes from packages assigned in instance has failed. The notification may include details on the related instance and any further steps that should be taken."
    ],
    InstallPackageFinished::class => [
        "name" => "Install Package Finished",
        "description" => "The notification is informing the recipient that an attempt to install and activate plugins and themes from packages in instance has been successfully finished. The notification may include details on the related instance and any further steps that should be taken."
    ],
    InstanceInstallationByUserFinished::class => [
        "name" => "Instance Installation By User Finished",
        "description" => "The notification is informing the recipient that a new WordPress instance installation by user finished. The notification may include details on who created the instance, the location of the instance and any further steps that should be taken."
    ],
    InstanceInstallationByUserFailed::class => [
        "name" => "Instance Installation By User Failed",
        "description" => "The notification is informing the recipient that a new WordPress instance installation by user failed. The notification may include details on who created the instance, the location of the instance, information about errors and any further steps that should be taken."
    ],
    InstanceDeletedByUser::class => [
        "name" => "Instance Deleted By User",
        "description" => "The notification is informing the recipient that a WordPress instance has been deleted by a user. The notification may include details on who deleted the instance, the instance name, and any further steps that should be taken."
    ],
    ResetPassword::class => [
        "name" => "Reset Password",
        "description" => "A reset password email is an automated message sent to a user's email address when they request to reset their password for an account. The email typically contains a link or instructions for resetting the password, as well as a time limit for the link's validity."
    ],
    PluginUpdateAvailable::class => [
        "name" => "Plugin Update Available",
        "description" => "Notification is informing the recipient that a new update for a plugin they are using on their WordPress website is now available. The update includes bug fixes and new features that will improve the overall performance and functionality of the plugin."
    ],
    ThemeUpdateAvailable::class => [
        "name" => "Theme Update Available",
        "description" => "Notification is informing the recipient that a new update for a theme they are using on their WordPress website is now available. The update includes bug fixes and new features that will improve the overall performance and functionality of the theme."
    ],
    WordpressUpdateAvailable::class => [
        "name" => "WordPress Update Available",
        "description" => "Notification is informing the recipient that a new update for their WordPress website is now available. The update includes important security fixes and new features that will improve the overall performance and functionality of the website."
    ],
    QueueTaskFailed::class => [
        "name" => "Queue Task Failed",
        "description" => "The notification is informing the recipient that the task in the queue has failed. The notification may include details of the task, related instance and the error."
    ],
    QueueTaskSucceeded::class => [
        "name" => "Queue Task Succeeded",
        "description" => "The notification is informing the recipient that the task in the queue has succeeded. The notification may include details of the task and related instance."
    ],
    ServiceSuspended::class => [
        "name" => "Service Suspended",
        "description" => "The notification is informing the recipient that their service has been suspended. The notification may include information about the suspended domain and a link to restore the service."
    ],
    ServiceUnsuspended::class => [
        "name" => "Service Unsuspended",
        "description" => "The notification is informing the recipient that their service has been unsuspended. The notification may include information about the unsuspended domain and any further steps that should be taken."
    ],
    DnsZoneExists::class => [
        "name" => "DNS Zone Exists",
        "description" => "The notification is informing the recipient that the DNS zone creation attempt has failed because the DNS zone already exists. The notification may include details about the existing DNS zone, the affected service, and the DNS server involved."
    ],
    DnsZoneCreateFailed::class => [
        "name" => "DNS Zone Create Failed",
        "description" => "The notification is informing the recipient that the DNS zone creation attempt has failed. The message may provide information on the attempted DNS zone, the service in use, and the server on which the creation failed."
    ],
    ServiceUpgraded::class => [
        "name" => "Service Upgraded",
        "description" => "The notification is informing the recipient that their service has been upgraded. The notification may include information about the upgraded domain and any further steps that should be taken."
    ],
    CreateFailed::class => [
        "name" => "Backup Create Failed",
        "description" => "The notification is informing the recipient that a backup of their website or system failed to be created. The notification may include details on why the backup failed and what steps should be taken to resolve the issue."
    ],
    CreateFinished::class => [
        "name" => "Backup Create Finished",
        "description" => "The notification is informing the recipient that a backup of their website or system has been successfully created. The notification may include details on where the backup is saved and how to access it."
    ],
    DeleteFailed::class => [
        "name" => "Backup Delete Failed",
        "description" => "The notification is informing the recipient that a backup of their website failed to be deleted. The notification may include details on why the deletion failed and what steps should be taken to resolve the issue."
    ],
    DeleteFinished::class => [
        "name" => "Backup Delete Finished",
        "description" => "The notification is informing the recipient that a backup of their website has been successfully deleted. The notification may include details on which backup was deleted and any further steps that should be taken."
    ],
    RestoreFailed::class => [
        "name" => "Backup Restore Failed",
        "description" => "The notification is informing the recipient that an attempt to restore a backup of their website has failed. The notification may include details on why the restore failed and what steps should be taken to resolve the issue."
    ],
    RestoreFinished::class => [
        "name" => "Backup Restore Finished",
        "description" => "The notification is informing the recipient that a backup of their website has been successfully restored. The notification may include details on which backup was restored and any further steps that should be taken."
    ],
    AutomaticCreateFailed::class => [
        "name" => "Automatic Create Backup Failed",
        "description" => "The notification is informing the recipient that an automatic backup of their website or system failed to be created. The notification may include details on why the backup failed and what steps should be taken to resolve the issue."
    ],
    AutomaticCreateFinished::class => [
        "name" => "Automatic Create Backup Finished",
        "description" => "The notification is informing the recipient that an automatic backup of their website or system has been successfully created. The notification may include details on where the backup is saved and how to access it."
    ],
    InstallFailed::class => [
        "name" => "Plugin Installation Failed",
        "description" => "The notification is informing the recipient that an attempt to install a plugin for their WordPress website has failed. The notification may include details on why the installation failed and what steps should be taken to resolve the issue."
    ],
    InstallFinished::class => [
        "name" => "Plugin Installation Completed",
        "description" => "The notification is informing the recipient that a plugin for their WordPress website has been successfully installed. The notification may include details on which plugin was installed and any further steps that should be taken."
    ],
    UpdateFailed::class => [
        "name" => "Plugin Update Failed",
        "description" => "The notification is informing the recipient that an attempt to update a plugin for their WordPress website has failed. The notification may include details on why the update failed and what steps should be taken to resolve the issue."
    ],
    UpdateFinished::class => [
        "name" => "Plugin Installation Completed",
        "description" => "The notification is informing the recipient that a plugin for their WordPress website has been successfully updated. The notification may include details on which plugin was updated and any further steps that should be taken."
    ],
    \App\Notifications\User\Theme\InstallFailed::class => [
        "name" => "Theme Installation Failed",
        "description" => "The notification is informing the recipient that an attempt to install a theme for their WordPress website has failed. The notification may include details on why the installation failed and what steps should be taken to resolve the issue."
    ],
    \App\Notifications\User\Theme\InstallFinished::class => [
        "name" => "Theme Installation Completed",
        "description" => "The notification is informing the recipient that a theme for their WordPress website has been successfully installed. The notification may include details on which theme was installed and any further steps that should be taken."
    ],
    \App\Notifications\User\Theme\UpdateFailed::class => [
        "name" => "Theme Update Failed",
        "description" => "The notification is informing the recipient that an attempt to update a theme for their WordPress website has failed. The notification may include details on why the update failed and what steps should be taken to resolve the issue."
    ],
    \App\Notifications\User\Theme\UpdateFinished::class => [
        "name" => "Theme Update Completed",
        "description" => "The notification is informing the recipient that a theme for their WordPress website has been successfully updated. The notification may include details on which theme was updated and any further steps that should be taken."
    ],
    CreateStagingFailed::class => [
        "name" => "Create Staging Failed",
        "description" => "The notification is informing the recipient that an attempt to create a staging instance of their website has failed. The notification may include details on why the creation failed and what steps should be taken to resolve the issue."
    ],
    CreateStagingFinished::class => [
        "name" => "Create Staging Finished",
        "description" => "The notification is informing the recipient that a staging instance of their website has been successfully created. The notification may include details on where the staging instance can be accessed and any further steps that should be taken."
    ],
    InstanceInstallationFailed::class => [
        "name" => "Instance Installation Failed",
        "description" => "The notification is informing the recipient that an attempt to install a WordPress instance has failed. The notification may include details on why the installation failed and what steps should be taken to resolve the issue."
    ],
    InstanceInstallationFinished::class => [
        "name" => "Instance Installation Finished",
        "description" => "The notification is informing the recipient that a WordPress instance has been successfully installed. The notification may include details on where the instance can be accessed and any further steps that should be taken."
    ],
    ImportFailed::class => [
        "name" => "Instance Import Failed",
        "description" => "The notification is informing the recipient that an attempt to import a WordPress instance has failed. The notification may include details on why the import failed and what steps should be taken to resolve the issue."
    ],
    ImportFinished::class => [
        "name" => "Instance Import Finished",
        "description" => "The notification is informing the recipient that a WordPress instance has been successfully imported. The notification may include details on where the instance can be accessed and any further steps that should be taken."
    ],
    InstanceInvitationReceived::class => [
        "name" => "Instance Invitation Received",
        "description" => "The notification is informing the recipient that they have received an invitation to manage a specific instance. The notification may include details on who sent the invitation, the instance being managed and the actions that can be performed on the instance."
    ],
    NewDeviceLogin::class => [
        "name" => "Login from New Device",
        "description" => "Notification is an alert that is generated when a new device or new browser or new ip address, sign in to the website. The notification typically includes information about the device, such as its IP address, and the date and time of the connection."
    ],
    PushToLiveFailed::class => [
        "name" => "Push To Live Failed",
        "description" => "The notification is informing the recipient that an attempt to push the changes made on the staging instance to the live version of the website has failed. The notification may include details on why the push failed and what steps should be taken to resolve the issue."
    ],
    PushToLiveFinished::class => [
        "name" => "Push To Live Completed",
        "description" => "The notification is informing the recipient that the changes made on the staging instance have been successfully pushed to the live version of the website or system. The notification may include details on what changes were made and any further steps that should be taken."
    ],
    UpdateWordpressFailed::class => [
        "name" => "WordPress Update Failed",
        "description" => "The notification is informing the recipient that an attempt to update the WordPress instance has failed. The notification may include details on why the update failed and what steps should be taken to resolve the issue."
    ],
    UpdateWordpressFinished::class => [
        "name" => "WordPress Update Completed",
        "description" => "The notification is informing the recipient that the WordPress instance has been successfully updated. The notification may include details on what changes were made to the instance and any further steps that should be taken."
    ],
    \App\Notifications\User\System\ResetPassword::class => [
        "name" => "Reset Password",
        "description" => "A reset password email is an automated message sent to a user's email address when they request to reset their password for an account. The email typically contains a link or instructions for resetting the password, as well as a time limit for the link's validity."
    ],
    \App\Notifications\User\Updates\PluginUpdateAvailable::class => [
        "name" => "Plugin Update Available",
        "description" => "Notification is informing the recipient that a new update for a plugin they are using on their WordPress website is now available. The update includes bug fixes and new features that will improve the overall performance and functionality of the plugin."
    ],
    \App\Notifications\User\Updates\ThemeUpdateAvailable::class => [
        "name" => "Theme Update Available",
        "description" => "Notification is informing the recipient that a new update for a theme they are using on their WordPress website is now available. The update includes bug fixes and new features that will improve the overall performance and functionality of the theme."
    ],
    \App\Notifications\User\Updates\WordpressUpdateAvailable::class => [
        "name" => "WordPress Update Available",
        "description" => "Notification is informing the recipient that a new update for their WordPress website is now available. The update includes important security fixes and new features that will improve the overall performance and functionality of the website."
    ],
    DnsPropagationExceeded::class => [
        "name" => "DNS Propagation Exceeded For SSL Order",
        "description" => "Notification is informing the recipient that the allotted time for DNS propagation has been exceeded in relation to their SSL certificate order."
    ],
    CreateADnsRecordFailed::class => [
        "name" => "Creation A DNS Record Failed",
        "description" => 'Notification is informing the recipient that the creation of DNS record A has failed.'
    ],
    InstanceTemplateCreateFailed::class => [
        "name" => "Instance Template Create Failed",
        "description" => 'Notification is informing the recipient that the instance template is not created.'
    ],
    InstanceTemplateCreateFinished::class => [
        "name" => "Instance Template Create Finished",
        "description" => 'Notification is informing the recipient that the instance template has been successfully created.'
    ],
    EmailDomainCreateFailed::class => [
        "name" => "Creation Email Domain Failed",
        "description" => 'Notification is informing the recipient that the creation of email domain has failed.'
    ],
    EmailDomainExists::class => [
        "name" => "Email Domain Exists",
        "description" => 'Notification is informing the recipient that email domain already exists on the email server.'
    ],
    SyncReportProvidersFailed::class => [
        "name" => "Sync Report Providers Failed",
        "description" => 'A notification informs the recipient that the synchronisation of report providers has failed. The notification may contain information about the instance and the error message.'
    ],
    SyncReportProvidersFinished::class => [
        "name" => "Sync Report Providers Completed",
        "description" => 'The notification informs the recipient that the synchronisation of report providers has been completed The notification may contain instance information.'
    ],
    DnsRecordsCreateFailed::class => [
        "name" => "Creation DNS Records Failed",
        "description" => 'The notification informs the recipient that the listed dns records have not been created for the zone. The notification may contain information about dns records or dns zone.'
    ],
    ImportByUserFailed::class => [
        "name" => "Instance Import By User Failed",
        "description" => 'Notification is informing the recipient that the instance import by user has failed.'
    ],
    ImportByUserFinished::class => [
        "name" => "Instance Import By User Finished",
        "description" => 'Notification is informing the recipient that the instance import by user has been successful.'
    ],
    ManualImportInstanceFailed::class => [
        "name" => "Manual Import Instance Failed",
        "description" => 'Notification is informing the recipient that the instance manual import by admin has failed.'
    ],
    ManualImportInstanceFinished::class => [
        "name" => "Manual Import Instance Finished",
        "description" => 'Notification is informing the recipient that the instance manual import by admin has successful.'
    ]
];

