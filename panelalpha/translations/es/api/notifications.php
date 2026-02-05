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
        'name' => 'Fallo al forzar la actualización del plugin',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de forzar un plugin de actualización en la instancia. La notificación puede incluir detalles sobre el plugin y la instancia relacionada y cualquier otro paso que deba darse.',
    ],
    ForceUpdatePluginFinished::class => [
        'name' => 'Plugin de actualización forzada finalizado',
        'description' => 'La notificación informa al destinatario de que ha finalizado con éxito un intento de forzar un plugin de actualización en la instancia. La notificación puede incluir detalles sobre el plugin y la instancia relacionada, así como cualquier otro paso que deba darse.',
    ],
    ForceUpdateThemeFailed::class => [
        'name' => 'Error al forzar la actualización del tema',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de forzar una actualización del tema en la instancia. La notificación puede incluir detalles sobre el tema y la instancia relacionada y cualquier otro paso que deba darse.',
    ],
    ForceUpdateThemeFinished::class => [
        'name' => 'Finalizada la actualización de Force Theme',
        'description' => 'La notificación informa al destinatario de que el intento de forzar una actualización del tema en la instancia ha finalizado con éxito. La notificación puede incluir detalles sobre el tema y la instancia relacionada y cualquier otro paso que deba darse.',
    ],
    InstallPackageFailed::class => [
        'name' => 'Falló la instalación del paquete',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de instalar y activar plugins y temas de los paquetes asignados en la instancia. La notificación puede incluir detalles sobre la instancia relacionada y cualquier otro paso que deba darse.',
    ],
    InstallPackageFinished::class => [
        'name' => 'Paquete de instalación finalizado',
        'description' => 'La notificación informa al destinatario de que el intento de instalar y activar plugins y temas de paquetes en la instancia ha finalizado correctamente. La notificación puede incluir detalles sobre la instancia relacionada y cualquier otro paso que deba darse.',
    ],
    InstanceInstallationByUserFinished::class => [
        'name' => 'Instalación de instancias por usuario finalizada',
        'description' => 'La notificación informa al destinatario de que ha finalizado la instalación de una nueva instancia de WordPress por parte de un usuario. La notificación puede incluir detalles sobre quién creó la instancia, la ubicación de la instancia y cualquier otro paso que deba seguirse.',
    ],
    InstanceInstallationByUserFailed::class => [
        'name' => 'Fallo en la instalación de la instancia por el usuario',
        'description' => 'La notificación informa al destinatario de que la instalación de una nueva instancia de WordPress por parte de un usuario ha fallado. La notificación puede incluir detalles sobre quién creó la instancia, la ubicación de la instancia, información sobre errores y cualquier otro paso que deba darse.',
    ],
    InstanceDeletedByUser::class => [
        'name' => 'Instancia eliminada por el usuario',
        'description' => 'La notificación informa al destinatario de que un usuario ha eliminado una instancia de WordPress. La notificación puede incluir detalles sobre quién ha eliminado la instancia, el nombre de la instancia y cualquier otro paso que deba darse.',
    ],
    ResetPassword::class => [
        'name' => 'Restablecer contraseña',
        'description' => 'Un correo electrónico de restablecimiento de contraseña es un mensaje automático que se envía a la dirección de correo electrónico de un usuario cuando éste solicita restablecer la contraseña de una cuenta. El correo electrónico suele contener un enlace o instrucciones para restablecer la contraseña, así como un límite de tiempo para la validez del enlace.',
    ],
    VerifyEmailAddress::class => [
        'name' => 'Verificar la dirección de correo electrónico',
        'description' => 'Al registrarse, se envía un código de verificación a la dirección de correo electrónico del usuario.',
    ],
    BeforeTrialExpirationFirstReminder::class => [
        'name' => 'Primer recordatorio antes del vencimiento del plazo de prueba',
        'description' => 'Se envía un recordatorio a la dirección de correo electrónico del usuario antes de que expire su servicio de prueba.',
    ],
    BeforeTrialExpirationSecondReminder::class => [
        'name' => 'Segundo recordatorio antes de la expiración del plazo de prueba',
        'description' => 'Se envía un recordatorio a la dirección de correo electrónico del usuario antes de que expire su servicio de prueba.',
    ],
    BeforeTrialExpirationThirdReminder::class => [
        'name' => 'Tercer recordatorio antes de la expiración del plazo de prueba',
        'description' => 'Se envía un recordatorio a la dirección de correo electrónico del usuario antes de que expire su servicio de prueba.',
    ],
    TrialExpired::class => [
        'name' => 'Prueba caducada',
        'description' => 'Se envía una notificación a la dirección de correo electrónico del usuario cuando caduca su servicio de prueba.',
    ],
    AfterTrialExpirationFirstReminder::class => [
        'name' => 'Tras la expiración del periodo de prueba Primer recordatorio',
        'description' => 'Se envía un recordatorio a la dirección de correo electrónico del usuario después de que expire su servicio de prueba.',
    ],
    AfterTrialExpirationSecondReminder::class => [
        'name' => 'Segundo recordatorio tras la expiración del plazo de prueba',
        'description' => 'Se envía un recordatorio a la dirección de correo electrónico del usuario después de que expire su servicio de prueba.',
    ],
    AfterTrialExpirationThirdReminder::class => [
        'name' => 'Tercer recordatorio tras la expiración del plazo de prueba',
        'description' => 'Se envía un recordatorio a la dirección de correo electrónico del usuario después de que expire su servicio de prueba.',
    ],
    PluginUpdateAvailable::class => [
        'name' => 'Actualización de plugins disponible',
        'description' => 'La notificación informa al destinatario de que ya está disponible una nueva actualización de un plugin que está utilizando en su sitio web de WordPress. La actualización incluye correcciones de errores y nuevas funciones que mejorarán el rendimiento general y la funcionalidad del plugin.',
    ],
    ThemeUpdateAvailable::class => [
        'name' => 'Actualización de temas disponible',
        'description' => 'La notificación informa al destinatario de que ya está disponible una nueva actualización de un tema que está utilizando en su sitio web de WordPress. La actualización incluye correcciones de errores y nuevas funciones que mejorarán el rendimiento general y la funcionalidad del tema.',
    ],
    WordpressUpdateAvailable::class => [
        'name' => 'Actualización de WordPress disponible',
        'description' => 'La notificación informa al destinatario de que ya está disponible una nueva actualización para su sitio web de WordPress. La actualización incluye importantes correcciones de seguridad y nuevas funciones que mejorarán el rendimiento general y la funcionalidad del sitio web.',
    ],
    QueueTaskFailed::class => [
        'name' => 'Tarea de cola fallida',
        'description' => 'La notificación informa al destinatario de que la tarea en la cola ha fallado. La notificación puede incluir detalles de la tarea, la instancia relacionada y el error.',
    ],
    QueueTaskSucceeded::class => [
        'name' => 'Tarea en cola realizada',
        'description' => 'La notificación informa al destinatario de que la tarea en la cola ha tenido éxito. La notificación puede incluir detalles de la tarea y la instancia relacionada.',
    ],
    ServiceSuspended::class => [
        'name' => 'Servicio suspendido',
        'description' => 'La notificación informa al destinatario de que su servicio ha sido suspendido. La notificación puede incluir información sobre el dominio suspendido y un enlace para restablecer el servicio.',
    ],
    ServiceUnsuspended::class => [
        'name' => 'Servicio no suspendido',
        'description' => 'La notificación informa al destinatario de que su servicio ha sido suspendido. La notificación puede incluir información sobre el dominio no suspendido y cualquier otro paso que deba darse.',
    ],
    ServerAlert::class => [
        'name' => 'Alerta del servidor',
        'description' => 'La notificación informa al destinatario sobre alertas detectadas en el servidor de alojamiento.',
    ],
    DnsZoneExists::class => [
        'name' => 'Zona DNS existente',
        'description' => 'La notificación informa al destinatario de que el intento de creación de la zona DNS ha fallado porque la zona DNS ya existe. La notificación puede incluir detalles sobre la zona DNS existente, el servicio afectado y el servidor DNS implicado.',
    ],
    DnsZoneCreateFailed::class => [
        'name' => 'Error en la configuración DNS del dominio',
        'description' => 'La notificación informa al destinatario de que el intento de creación de zona DNS ha fallado. El mensaje puede proporcionar información sobre la zona DNS intentada, el servicio en uso y el servidor en el que falló la creación.',
    ],
    ServiceUpgraded::class => [
        'name' => 'Servicio mejorado',
        'description' => 'La notificación informa al destinatario de que su servicio ha sido actualizado. La notificación puede incluir información sobre el dominio actualizado y cualquier otro paso que deba darse.',
    ],
    CreateFailed::class => [
        'name' => 'Error al crear copia de seguridad',
        'description' => 'La notificación informa al destinatario de que no se ha podido crear una copia de seguridad de su sitio web o sistema. La notificación puede incluir detalles sobre por qué falló la copia de seguridad y qué medidas deben tomarse para resolver el problema.',
    ],
    CreateFinished::class => [
        'name' => 'Creación de copia de seguridad finalizada',
        'description' => 'La notificación informa al destinatario de que se ha creado correctamente una copia de seguridad de su sitio web o sistema. La notificación puede incluir detalles sobre dónde está guardada la copia de seguridad y cómo acceder a ella.',
    ],
    DeleteFailed::class => [
        'name' => 'Fallo en la eliminación de la copia de seguridad',
        'description' => 'La notificación informa al destinatario de que no se ha podido eliminar una copia de seguridad de su sitio web. La notificación puede incluir detalles sobre por qué falló la eliminación y qué medidas deben tomarse para resolver el problema.',
    ],
    DeleteFinished::class => [
        'name' => 'Copia de seguridad Borrado finalizado',
        'description' => 'La notificación informa al destinatario de que se ha eliminado correctamente una copia de seguridad de su sitio web. La notificación puede incluir detalles sobre qué copia de seguridad se ha eliminado y cualquier otro paso que deba darse.',
    ],
    RestoreFailed::class => [
        'name' => 'Fallo en la restauración de la copia de seguridad',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de restaurar una copia de seguridad de su sitio web. La notificación puede incluir detalles sobre por qué falló la restauración y qué pasos deben seguirse para resolver el problema.',
    ],
    RestoreFinished::class => [
        'name' => 'Copia de seguridad Restauración finalizada',
        'description' => 'La notificación informa al destinatario de que se ha restaurado correctamente una copia de seguridad de su sitio web. La notificación puede incluir detalles sobre qué copia de seguridad se ha restaurado y cualquier otro paso que deba darse.',
    ],
    AutomaticCreateFailed::class => [
        'name' => 'Fallo al crear copia de seguridad automática',
        'description' => 'La notificación informa al destinatario de que no se ha podido crear una copia de seguridad automática de su sitio web o sistema. La notificación puede incluir detalles sobre por qué falló la copia de seguridad y qué medidas deben tomarse para resolver el problema.',
    ],
    AutomaticCreateFinished::class => [
        'name' => 'Creación automática de copia de seguridad finalizada',
        'description' => 'La notificación informa al destinatario de que se ha creado correctamente una copia de seguridad automática de su sitio web o sistema. La notificación puede incluir detalles sobre dónde se guarda la copia de seguridad y cómo acceder a ella.',
    ],
    InstallFailed::class => [
        'name' => 'Fallo en la instalación del plugin',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de instalar un plugin para su sitio web de WordPress. La notificación puede incluir detalles sobre por qué falló la instalación y qué pasos deben seguirse para resolver el problema.',
    ],
    InstallFinished::class => [
        'name' => 'Instalación del plugin completada',
        'description' => 'La notificación informa al destinatario de que se ha instalado correctamente un plugin para su sitio web de WordPress. La notificación puede incluir detalles sobre qué plugin se ha instalado y cualquier otro paso que deba darse.',
    ],
    UpdateFailed::class => [
        'name' => 'Error en la actualización del plugin',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de actualizar un plugin para su sitio web de WordPress. La notificación puede incluir detalles sobre por qué falló la actualización y qué pasos deben seguirse para resolver el problema.',
    ],
    UpdateFinished::class => [
        'name' => 'Instalación del plugin completada',
        'description' => 'La notificación informa al destinatario de que un plugin de su sitio web WordPress se ha actualizado correctamente. La notificación puede incluir detalles sobre qué plugin se ha actualizado y cualquier otro paso que deba darse.',
    ],
    \App\Notifications\User\Theme\InstallFailed::class => [
        'name' => 'Error en la instalación del tema',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de instalar un tema para su sitio web de WordPress. La notificación puede incluir detalles sobre por qué falló la instalación y qué pasos deben seguirse para resolver el problema.',
    ],
    \App\Notifications\User\Theme\InstallFinished::class => [
        'name' => 'Instalación del tema finalizada',
        'description' => 'La notificación informa al destinatario de que se ha instalado correctamente un tema para su sitio web de WordPress. La notificación puede incluir detalles sobre qué tema se ha instalado y cualquier otro paso que deba darse.',
    ],
    \App\Notifications\User\Theme\UpdateFailed::class => [
        'name' => 'Error en la actualización del tema',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de actualizar un tema para su sitio web de WordPress. La notificación puede incluir detalles sobre por qué falló la actualización y qué pasos deben seguirse para resolver el problema.',
    ],
    \App\Notifications\User\Theme\UpdateFinished::class => [
        'name' => 'Actualización de temas finalizada',
        'description' => 'La notificación informa al destinatario de que un tema de su sitio web WordPress se ha actualizado correctamente. La notificación puede incluir detalles sobre qué tema se ha actualizado y cualquier otro paso que deba darse.',
    ],
    CreateStagingFailed::class => [
        'name' => 'Error al crear la puesta en escena',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de crear una instancia de ensayo de su sitio web. La notificación puede incluir detalles sobre por qué falló la creación y qué pasos deben seguirse para resolver el problema.',
    ],
    CreateStagingFinished::class => [
        'name' => 'Crear puesta en escena Terminada',
        'description' => 'La notificación informa al destinatario de que se ha creado correctamente una instancia de prueba de su sitio web. La notificación puede incluir detalles sobre dónde se puede acceder a la instancia de ensayo y cualquier otro paso que deba darse.',
    ],
    InstanceInstallationFailed::class => [
        'name' => 'Fallo en la instalación de la instancia',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de instalar una instancia de WordPress. La notificación puede incluir detalles sobre por qué falló la instalación y qué pasos deben seguirse para resolver el problema.',
    ],
    InstanceInstallationFinished::class => [
        'name' => 'Instalación de instancias finalizada',
        'description' => 'La notificación informa al destinatario de que se ha instalado correctamente una instancia de WordPress. La notificación puede incluir detalles sobre dónde se puede acceder a la instancia y cualquier otro paso que deba seguirse.',
    ],
    ImportFailed::class => [
        'name' => 'Fallo en la importación de instancias',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de importar una instancia de WordPress. La notificación puede incluir detalles sobre por qué falló la importación y qué pasos deben seguirse para resolver el problema.',
    ],
    ImportFinished::class => [
        'name' => 'Importación de instancias finalizada',
        'description' => 'La notificación informa al destinatario de que se ha importado correctamente una instancia de WordPress. La notificación puede incluir detalles sobre dónde se puede acceder a la instancia y cualquier otro paso que deba seguirse.',
    ],
    InstanceInvitationReceived::class => [
        'name' => 'Instancia Invitación recibida',
        'description' => 'La notificación informa al destinatario de que ha recibido una invitación para gestionar una instancia específica. La notificación puede incluir detalles sobre quién envió la invitación, la instancia que se está gestionando y las acciones que se pueden realizar en la instancia.',
    ],
    NewDeviceLogin::class => [
        'name' => 'Iniciar sesión desde un nuevo dispositivo',
        'description' => 'La notificación es una alerta que se genera cuando un nuevo dispositivo o un nuevo navegador o una nueva dirección ip, se conectan al sitio web. La notificación suele incluir información sobre el dispositivo, como su dirección IP, y la fecha y hora de la conexión.',
    ],
    PushToLiveFailed::class => [
        'name' => 'Push To Live fracasó',
        'description' => 'La notificación informa al destinatario de que ha fallado el intento de transferir los cambios realizados en la instancia de ensayo a la versión activa del sitio web. La notificación puede incluir detalles sobre por qué falló el push y qué pasos se deben seguir para resolver el problema.',
    ],
    PushToLiveFinished::class => [
        'name' => 'Push To Live Completado',
        'description' => 'La notificación informa al destinatario de que los cambios realizados en la instancia de ensayo se han transferido correctamente a la versión activa del sitio web o del sistema. La notificación puede incluir detalles sobre los cambios realizados y cualquier otro paso que deba darse.',
    ],
    UpdateWordpressFailed::class => [
        'name' => 'Error en la actualización de WordPress',
        'description' => 'The notification is informing the recipient that an attempt to update the WordPress instance has failed. The notification may include details on why the update failed and what steps should be taken to resolve the issue.',
    ],
    UpdateWordpressFinished::class => [
        'name' => 'Actualización de WordPress finalizada',
        'description' => 'La notificación informa al destinatario de que la instancia de WordPress se ha actualizado correctamente. La notificación puede incluir detalles sobre qué cambios se han realizado en la instancia y cualquier otro paso que deba darse.',
    ],
    \App\Notifications\User\System\ResetPassword::class => [
        'name' => 'Restablecer contraseña',
        'description' => 'A reset password email is an automated message sent to a user\'s email address when they request to reset their password for an account. The email typically contains a link or instructions for resetting the password, as well as a time limit for the link\'s validity.',
    ],
    \App\Notifications\User\Updates\PluginUpdateAvailable::class => [
        'name' => 'Actualización de plugins disponible',
        'description' => 'La notificación informa al destinatario de que ya está disponible una nueva actualización de un plugin que está utilizando en su sitio web de WordPress. La actualización incluye correcciones de errores y nuevas funciones que mejorarán el rendimiento general y la funcionalidad del plugin.',
    ],
    \App\Notifications\User\Updates\ThemeUpdateAvailable::class => [
        'name' => 'Actualización de temas disponible',
        'description' => 'La notificación informa al destinatario de que ya está disponible una nueva actualización de un tema que está utilizando en su sitio web de WordPress. La actualización incluye correcciones de errores y nuevas funciones que mejorarán el rendimiento general y la funcionalidad del tema.',
    ],
    \App\Notifications\User\Updates\WordpressUpdateAvailable::class => [
        'name' => 'Actualización de WordPress disponible',
        'description' => 'Notification is informing the recipient that a new update for their WordPress website is now available. The update includes important security fixes and new features that will improve the overall performance and functionality of the website.',
    ],
    DnsPropagationExceeded::class => [
        'name' => 'Propagación DNS excedida para pedido SSL',
        'description' => 'La notificación informa al destinatario de que se ha superado el tiempo asignado para la propagación DNS en relación con su pedido de certificado SSL.',
    ],
    CreateADnsRecordFailed::class => [
        'name' => 'Error en la configuración DNS del subdominio',
        'description' => 'Notification is informing the recipient that the creation of DNS record A has failed.',
    ],
    InstanceTemplateCreateFailed::class => [
        'name' => 'Fallo en la creación de la plantilla de instancia',
        'description' => 'La notificación informa al destinatario de que la plantilla de instancia no se ha creado.',
    ],
    InstanceTemplateCreateFinished::class => [
        'name' => 'Plantilla de instancia Crear Finalizado',
        'description' => 'La notificación informa al destinatario de que la plantilla de instancia se ha creado correctamente.',
    ],
    EmailDomainCreateFailed::class => [
        'name' => 'Fallo en la creación del dominio de correo electrónico',
        'description' => 'La notificación informa al destinatario de que la creación del dominio de correo electrónico ha fallado.',
    ],
    EmailDomainExists::class => [
        'name' => 'El dominio de correo electrónico existe',
        'description' => 'La notificación informa al destinatario de que el dominio de correo electrónico ya existe en el servidor de correo electrónico.',
    ],
    SyncReportProvidersFailed::class => [
        'name' => 'Fallo en la sincronización de proveedores de informes',
        'description' => 'Una notificación informa al destinatario de que la sincronización de los proveedores de informes ha fallado. La notificación puede contener información sobre la instancia y el mensaje de error.',
    ],
    SyncReportProvidersFinished::class => [
        'name' => 'Sincronización de proveedores de informes completada',
        'description' => 'La notificación informa al destinatario de que se ha completado la sincronización de los proveedores de informes La notificación puede contener información de instancia.',
    ],
    DnsRecordsCreateFailed::class => [
        'name' => 'Fallo en la creación de registros DNS',
        'description' => 'La notificación informa al destinatario de que los registros dns listados no han sido creados para la zona. La notificación puede contener información sobre los registros dns o la zona dns.',
    ],
    ImportByUserFailed::class => [
        'name' => 'Fallo en la importación de instancias por el usuario',
        'description' => 'La notificación informa al destinatario de que la importación de la instancia por parte del usuario ha fallado.',
    ],
    ImportByUserFinished::class => [
        'name' => 'Importación de instancias por usuario finalizada',
        'description' => 'La notificación informa al destinatario de que la importación de la instancia por parte del usuario se ha realizado correctamente.',
    ],
    ManualImportInstanceFailed::class => [
        'name' => 'Instancia de importación manual fallida',
        'description' => 'La notificación informa al destinatario de que la importación manual de la instancia por parte del administrador ha fallado.',
    ],
    ManualImportInstanceFinished::class => [
        'name' => 'Instancia de importación manual finalizada',
        'description' => 'La notificación informa al destinatario de que la importación manual de la instancia por parte del administrador se ha realizado correctamente.',
    ],
    ServerAccountConnectionError::class => [
        'name' => 'Error de conexión de la cuenta de alojamiento',
        'description' => 'La notificación informa al destinatario de que la conexión a la cuenta de alojamiento ha fallado.',
    ],
    RestoreInstanceFailed::class => [
        'name' => 'Fallo en la restauración de la instancia',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de restaurar la instancia a partir de una copia de seguridad. La notificación puede incluir detalles sobre por qué ha fallado la restauración y qué pasos deben seguirse para resolver el problema.',
    ],
    RestoreInstanceFinished::class => [
        'name' => 'Restauración de instancia finalizada',
        'description' => 'La notificación informa al destinatario de que la instancia se ha restaurado correctamente a partir de la copia de seguridad. La notificación puede incluir detalles sobre qué copia de seguridad se ha restaurado y cualquier otro paso que deba darse.',
    ],
    PlanConfigurationError::class => [
        'name' => 'Error de configuración del plan',
        'description' => 'La notificación informa al destinatario de que la configuración del plan está mal configurada.',
    ],
    DiagnosticModeEnabled::class => [
        'name' => 'Modo de diagnóstico activado',
        'description' => 'La notificación informa al destinatario de que se ha activado el modo de diagnóstico. Este modo permite mejorar el registro y la supervisión, lo que puede ayudar a solucionar e identificar problemas en el sistema.',
    ],
    PushToStagingFailed::class => [
        'name' => 'Empuje fallido a la puesta en escena',
        'description' => 'La notificación informa al destinatario de que ha fallado el intento de transferir los cambios realizados en la instancia activa a la versión de prueba del sitio web. La notificación puede incluir detalles sobre por qué falló el push y qué pasos deben seguirse para resolver el problema.',
    ],
    PushToStagingFinished::class => [
        'name' => 'Empuje finalizado a la puesta en escena',
        'description' => 'La notificación informa al destinatario de que los cambios realizados en la instancia activa se han transferido correctamente a la versión de prueba del sitio web o sistema. La notificación puede incluir detalles sobre los cambios realizados y cualquier otro paso que deba darse.',
    ],
    SslOrderFailed::class => [
        'name' => 'Fallo de pedido SSL',
        'description' => 'La notificación informa al administrador de que un Pedido SSL ha fallado para el dominio especificado. Incluye detalles relevantes como el nombre de dominio, tipo, proveedor SSL e información del cliente. Es posible que se requiera atención inmediata para resolver el problema.',
    ],
    CreateFtpAccountForInstance::class => [
        'name' => 'Cuenta FTP creada para la instancia',
        'description' => 'Esta notificación informa al usuario de que se ha creado correctamente una nueva cuenta FTP. Incluye detalles esenciales como el nombre de usuario FTP, la contraseña y la dirección del servidor, lo que permite al usuario acceder a sus archivos.',
    ],
    CreateUser::class => [
        'name' => 'Bienvenido Usuario',
        'description' => 'Esta notificación informa al usuario de que su cuenta se ha creado correctamente. Incluye los datos de acceso necesarios, como el nombre de usuario y la contraseña, que permiten al usuario acceder a su cuenta.',
    ],
    SyncHostingAccountFailed::class => [
        'name' => 'Fallo en la sincronización de la cuenta de hosting del servicio',
        'description' => 'Esta notificación informa al usuario de que su cuenta de hosting en este servicio no se ha sincronizado.',
    ],
    SyncHostingAccountFinished::class => [
        'name' => 'Sincronización de la cuenta de hosting del servicio finalizada',
        'description' => 'Esta notificación informa al usuario de que su cuenta de hosting en este servicio se ha sincronizado correctamente.',
    ],
    ControlPanelUpgrade::class => [
        'name' => 'Correo de bienvenida de actualización del panel de control',
        'description' => 'Esta notificación informa que la cuenta de hosting se ha actualizado correctamente desde el panel de control. Incluye los datos de inicio de sesión necesarios para acceder a la cuenta.',
    ],
];
