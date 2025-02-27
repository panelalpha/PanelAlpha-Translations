<?php

return [
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFailed' => [
        'name' => 'Fallo al forzar la actualización del plugin',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de forzar un plugin de actualización en la instancia. La notificación puede incluir detalles sobre el plugin y la instancia relacionada y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFinished' => [
        'name' => 'Plugin de actualización forzada finalizado',
        'description' => 'La notificación informa al destinatario de que ha finalizado con éxito un intento de forzar un plugin de actualización en la instancia. La notificación puede incluir detalles sobre el plugin y la instancia relacionada, así como cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFailed' => [
        'name' => 'Error al forzar la actualización del tema',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de forzar una actualización del tema en la instancia. La notificación puede incluir detalles sobre el tema y la instancia relacionada y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFinished' => [
        'name' => 'Finalizada la actualización de Force Theme',
        'description' => 'La notificación informa al destinatario de que el intento de forzar una actualización del tema en la instancia ha finalizado con éxito. La notificación puede incluir detalles sobre el tema y la instancia relacionada y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFailed' => [
        'name' => 'Falló la instalación del paquete',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de instalar y activar plugins y temas de los paquetes asignados en la instancia. La notificación puede incluir detalles sobre la instancia relacionada y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFinished' => [
        'name' => 'Paquete de instalación finalizado',
        'description' => 'La notificación informa al destinatario de que el intento de instalar y activar plugins y temas de paquetes en la instancia ha finalizado correctamente. La notificación puede incluir detalles sobre la instancia relacionada y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFinished' => [
        'name' => 'Instalación de instancias por usuario finalizada',
        'description' => 'La notificación informa al destinatario de que ha finalizado la instalación de una nueva instancia de WordPress por parte de un usuario. La notificación puede incluir detalles sobre quién creó la instancia, la ubicación de la instancia y cualquier otro paso que deba seguirse.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFailed' => [
        'name' => 'Fallo en la instalación de la instancia por el usuario',
        'description' => 'La notificación informa al destinatario de que la instalación de una nueva instancia de WordPress por parte de un usuario ha fallado. La notificación puede incluir detalles sobre quién creó la instancia, la ubicación de la instancia, información sobre errores y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceDeletedByUser' => [
        'name' => 'Instancia eliminada por el usuario',
        'description' => 'La notificación informa al destinatario de que un usuario ha eliminado una instancia de WordPress. La notificación puede incluir detalles sobre quién ha eliminado la instancia, el nombre de la instancia y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\Admin\\System\\ResetPassword' => [
        'name' => 'Restablecer contraseña',
        'description' => 'Un correo electrónico de restablecimiento de contraseña es un mensaje automático que se envía a la dirección de correo electrónico de un usuario cuando éste solicita restablecer la contraseña de una cuenta. El correo electrónico suele contener un enlace o instrucciones para restablecer la contraseña, así como un límite de tiempo para la validez del enlace.',
    ],
    'App\\Notifications\\Admin\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Actualización de plugins disponible',
        'description' => 'La notificación informa al destinatario de que ya está disponible una nueva actualización de un plugin que está utilizando en su sitio web de WordPress. La actualización incluye correcciones de errores y nuevas funciones que mejorarán el rendimiento general y la funcionalidad del plugin.',
    ],
    'App\\Notifications\\Admin\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Actualización de temas disponible',
        'description' => 'La notificación informa al destinatario de que ya está disponible una nueva actualización de un tema que está utilizando en su sitio web de WordPress. La actualización incluye correcciones de errores y nuevas funciones que mejorarán el rendimiento general y la funcionalidad del tema.',
    ],
    'App\\Notifications\\Admin\\Updates\\WordpressUpdateAvailable' => [
        'name' => 'Actualización de WordPress disponible',
        'description' => 'La notificación informa al destinatario de que ya está disponible una nueva actualización para su sitio web de WordPress. La actualización incluye importantes correcciones de seguridad y nuevas funciones que mejorarán el rendimiento general y la funcionalidad del sitio web.',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskFailed' => [
        'name' => 'Tarea de cola fallida',
        'description' => 'La notificación informa al destinatario de que la tarea en la cola ha fallado. La notificación puede incluir detalles de la tarea, la instancia relacionada y el error.',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskSucceeded' => [
        'name' => 'Tarea en cola realizada',
        'description' => 'La notificación informa al destinatario de que la tarea en la cola ha tenido éxito. La notificación puede incluir detalles de la tarea y la instancia relacionada.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceSuspended' => [
        'name' => 'Servicio suspendido',
        'description' => 'La notificación informa al destinatario de que su servicio ha sido suspendido. La notificación puede incluir información sobre el dominio suspendido y un enlace para restablecer el servicio.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUnsuspended' => [
        'name' => 'Servicio no suspendido',
        'description' => 'La notificación informa al destinatario de que su servicio ha sido suspendido. La notificación puede incluir información sobre el dominio no suspendido y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneExists' => [
        'name' => 'Zona DNS existente',
        'description' => 'La notificación informa al destinatario de que el intento de creación de la zona DNS ha fallado porque la zona DNS ya existe. La notificación puede incluir detalles sobre la zona DNS existente, el servicio afectado y el servidor DNS implicado.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneCreateFailed' => [
        'name' => 'Error en la configuración DNS del dominio',
        'description' => 'La notificación informa al destinatario de que el intento de creación de zona DNS ha fallado. El mensaje puede proporcionar información sobre la zona DNS intentada, el servicio en uso y el servidor en el que falló la creación.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUpgraded' => [
        'name' => 'Servicio mejorado',
        'description' => 'La notificación informa al destinatario de que su servicio ha sido actualizado. La notificación puede incluir información sobre el dominio actualizado y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFailed' => [
        'name' => 'Error al crear copia de seguridad',
        'description' => 'La notificación informa al destinatario de que no se ha podido crear una copia de seguridad de su sitio web o sistema. La notificación puede incluir detalles sobre por qué falló la copia de seguridad y qué medidas deben tomarse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFinished' => [
        'name' => 'Creación de copia de seguridad finalizada',
        'description' => 'La notificación informa al destinatario de que se ha creado correctamente una copia de seguridad de su sitio web o sistema. La notificación puede incluir detalles sobre dónde está guardada la copia de seguridad y cómo acceder a ella.',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFailed' => [
        'name' => 'Fallo en la eliminación de la copia de seguridad',
        'description' => 'La notificación informa al destinatario de que no se ha podido eliminar una copia de seguridad de su sitio web. La notificación puede incluir detalles sobre por qué falló la eliminación y qué medidas deben tomarse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFinished' => [
        'name' => 'Copia de seguridad Borrado finalizado',
        'description' => 'La notificación informa al destinatario de que se ha eliminado correctamente una copia de seguridad de su sitio web. La notificación puede incluir detalles sobre qué copia de seguridad se ha eliminado y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFailed' => [
        'name' => 'Fallo en la restauración de la copia de seguridad',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de restaurar una copia de seguridad de su sitio web. La notificación puede incluir detalles sobre por qué falló la restauración y qué pasos deben seguirse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFinished' => [
        'name' => 'Copia de seguridad Restauración finalizada',
        'description' => 'La notificación informa al destinatario de que se ha restaurado correctamente una copia de seguridad de su sitio web. La notificación puede incluir detalles sobre qué copia de seguridad se ha restaurado y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFailed' => [
        'name' => 'Fallo al crear copia de seguridad automática',
        'description' => 'La notificación informa al destinatario de que no se ha podido crear una copia de seguridad automática de su sitio web o sistema. La notificación puede incluir detalles sobre por qué falló la copia de seguridad y qué medidas deben tomarse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFinished' => [
        'name' => 'Creación automática de copia de seguridad finalizada',
        'description' => 'La notificación informa al destinatario de que se ha creado correctamente una copia de seguridad automática de su sitio web o sistema. La notificación puede incluir detalles sobre dónde se guarda la copia de seguridad y cómo acceder a ella.',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFailed' => [
        'name' => 'Fallo en la instalación del plugin',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de instalar un plugin para su sitio web de WordPress. La notificación puede incluir detalles sobre por qué falló la instalación y qué pasos deben seguirse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFinished' => [
        'name' => 'Instalación del plugin completada',
        'description' => 'La notificación informa al destinatario de que se ha instalado correctamente un plugin para su sitio web de WordPress. La notificación puede incluir detalles sobre qué plugin se ha instalado y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFailed' => [
        'name' => 'Error en la actualización del plugin',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de actualizar un plugin para su sitio web de WordPress. La notificación puede incluir detalles sobre por qué falló la actualización y qué pasos deben seguirse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFinished' => [
        'name' => 'Instalación del plugin completada',
        'description' => 'La notificación informa al destinatario de que un plugin de su sitio web WordPress se ha actualizado correctamente. La notificación puede incluir detalles sobre qué plugin se ha actualizado y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFailed' => [
        'name' => 'Error en la instalación del tema',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de instalar un tema para su sitio web de WordPress. La notificación puede incluir detalles sobre por qué falló la instalación y qué pasos deben seguirse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFinished' => [
        'name' => 'Instalación del tema finalizada',
        'description' => 'La notificación informa al destinatario de que se ha instalado correctamente un tema para su sitio web de WordPress. La notificación puede incluir detalles sobre qué tema se ha instalado y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFailed' => [
        'name' => 'Error en la actualización del tema',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de actualizar un tema para su sitio web de WordPress. La notificación puede incluir detalles sobre por qué falló la actualización y qué pasos deben seguirse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFinished' => [
        'name' => 'Actualización de temas finalizada',
        'description' => 'La notificación informa al destinatario de que un tema de su sitio web WordPress se ha actualizado correctamente. La notificación puede incluir detalles sobre qué tema se ha actualizado y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFailed' => [
        'name' => 'Error al crear la puesta en escena',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de crear una instancia de ensayo de su sitio web. La notificación puede incluir detalles sobre por qué falló la creación y qué pasos deben seguirse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFinished' => [
        'name' => 'Crear puesta en escena Terminada',
        'description' => 'La notificación informa al destinatario de que se ha creado correctamente una instancia de prueba de su sitio web. La notificación puede incluir detalles sobre dónde se puede acceder a la instancia de ensayo y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFailed' => [
        'name' => 'Fallo en la instalación de la instancia',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de instalar una instancia de WordPress. La notificación puede incluir detalles sobre por qué falló la instalación y qué pasos deben seguirse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFinished' => [
        'name' => 'Instalación de instancias finalizada',
        'description' => 'La notificación informa al destinatario de que se ha instalado correctamente una instancia de WordPress. La notificación puede incluir detalles sobre dónde se puede acceder a la instancia y cualquier otro paso que deba seguirse.',
    ],
    'App\\Notifications\\User\\Instance\\ImportFailed' => [
        'name' => 'Fallo en la importación de instancias',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de importar una instancia de WordPress. La notificación puede incluir detalles sobre por qué falló la importación y qué pasos deben seguirse para resolver el problema.',
    ],
    'App\\Notifications\\User\\Instance\\ImportFinished' => [
        'name' => 'Importación de instancias finalizada',
        'description' => 'La notificación informa al destinatario de que se ha importado correctamente una instancia de WordPress. La notificación puede incluir detalles sobre dónde se puede acceder a la instancia y cualquier otro paso que deba seguirse.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInvitationReceived' => [
        'name' => 'Instancia Invitación recibida',
        'description' => 'La notificación informa al destinatario de que ha recibido una invitación para gestionar una instancia específica. La notificación puede incluir detalles sobre quién envió la invitación, la instancia que se está gestionando y las acciones que se pueden realizar en la instancia.',
    ],
    'App\\Notifications\\User\\System\\NewDeviceLogin' => [
        'name' => 'Iniciar sesión desde un nuevo dispositivo',
        'description' => 'La notificación es una alerta que se genera cuando un nuevo dispositivo o un nuevo navegador o una nueva dirección ip, se conectan al sitio web. La notificación suele incluir información sobre el dispositivo, como su dirección IP, y la fecha y hora de la conexión.',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFailed' => [
        'name' => 'Push To Live fracasó',
        'description' => 'La notificación informa al destinatario de que ha fallado el intento de transferir los cambios realizados en la instancia de ensayo a la versión activa del sitio web. La notificación puede incluir detalles sobre por qué falló el push y qué pasos se deben seguir para resolver el problema.',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFinished' => [
        'name' => 'Push To Live Completado',
        'description' => 'La notificación informa al destinatario de que los cambios realizados en la instancia de ensayo se han transferido correctamente a la versión activa del sitio web o del sistema. La notificación puede incluir detalles sobre los cambios realizados y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFailed' => [
        'name' => 'Error en la actualización de WordPress',
        'description' => 'The notification is informing the recipient that an attempt to update the WordPress instance has failed. The notification may include details on why the update failed and what steps should be taken to resolve the issue.',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFinished' => [
        'name' => 'Actualización de WordPress finalizada',
        'description' => 'La notificación informa al destinatario de que la instancia de WordPress se ha actualizado correctamente. La notificación puede incluir detalles sobre qué cambios se han realizado en la instancia y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\User\\System\\ResetPassword' => [
        'name' => 'Restablecer contraseña',
        'description' => 'A reset password email is an automated message sent to a user\'s email address when they request to reset their password for an account. The email typically contains a link or instructions for resetting the password, as well as a time limit for the link\'s validity.',
    ],
    'App\\Notifications\\User\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Actualización de plugins disponible',
        'description' => 'La notificación informa al destinatario de que ya está disponible una nueva actualización de un plugin que está utilizando en su sitio web de WordPress. La actualización incluye correcciones de errores y nuevas funciones que mejorarán el rendimiento general y la funcionalidad del plugin.',
    ],
    'App\\Notifications\\User\\Updates\\ThemeUpdateAvailable' => [
        'description' => 'La notificación informa al destinatario de que ya está disponible una nueva actualización de un tema que está utilizando en su sitio web de WordPress. La actualización incluye correcciones de errores y nuevas funciones que mejorarán el rendimiento general y la funcionalidad del tema.',
        'name' => 'Actualización de temas disponible',
    ],
    'App\\Notifications\\User\\Updates\\WordpressUpdateAvailable' => [
        'description' => 'Notification is informing the recipient that a new update for their WordPress website is now available. The update includes important security fixes and new features that will improve the overall performance and functionality of the website.',
        'name' => 'Actualización de WordPress disponible',
    ],
    'App\\Notifications\\Admin\\SslOrder\\DnsPropagationExceeded' => [
        'name' => 'Propagación DNS excedida para pedido SSL',
        'description' => 'La notificación informa al destinatario de que se ha superado el tiempo asignado para la propagación DNS en relación con su pedido de certificado SSL.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\CreateADnsRecordFailed' => [
        'name' => 'Error en la configuración DNS del subdominio',
        'description' => 'Notification is informing the recipient that the creation of DNS record A has failed.',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFailed' => [
        'description' => 'La notificación informa al destinatario de que la plantilla de instancia no se ha creado.',
        'name' => 'Fallo en la creación de la plantilla de instancia',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFinished' => [
        'name' => 'Plantilla de instancia Crear Finalizado',
        'description' => 'La notificación informa al destinatario de que la plantilla de instancia se ha creado correctamente.',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainCreateFailed' => [
        'name' => 'Fallo en la creación del dominio de correo electrónico',
        'description' => 'La notificación informa al destinatario de que la creación del dominio de correo electrónico ha fallado.',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainExists' => [
        'name' => 'El dominio de correo electrónico existe',
        'description' => 'La notificación informa al destinatario de que el dominio de correo electrónico ya existe en el servidor de correo electrónico.',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFailed' => [
        'name' => 'Fallo en la sincronización de proveedores de informes',
        'description' => 'Una notificación informa al destinatario de que la sincronización de los proveedores de informes ha fallado. La notificación puede contener información sobre la instancia y el mensaje de error.',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFinished' => [
        'name' => 'Sincronización de proveedores de informes completada',
        'description' => 'La notificación informa al destinatario de que se ha completado la sincronización de los proveedores de informes La notificación puede contener información de instancia.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsRecordsCreateFailed' => [
        'name' => 'Fallo en la creación de registros DNS',
        'description' => 'La notificación informa al destinatario de que los registros dns listados no han sido creados para la zona. La notificación puede contener información sobre los registros dns o la zona dns.',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFinished' => [
        'name' => 'Importación de instancias por usuario finalizada',
        'description' => 'La notificación informa al destinatario de que la importación de la instancia por parte del usuario se ha realizado correctamente.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFailed' => [
        'description' => 'La notificación informa al destinatario de que la importación manual de la instancia por parte del administrador ha fallado.',
        'name' => 'Instancia de importación manual fallida',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFinished' => [
        'name' => 'Restauración de instancia finalizada',
        'description' => 'La notificación informa al destinatario de que la instancia se ha restaurado correctamente a partir de la copia de seguridad. La notificación puede incluir detalles sobre qué copia de seguridad se ha restaurado y cualquier otro paso que deba darse.',
    ],
    'App\\Notifications\\Admin\\DiagnosticMode\\DiagnosticModeEnabled' => [
        'name' => 'Modo de diagnóstico activado',
        'description' => 'La notificación informa al destinatario de que se ha activado el modo de diagnóstico. Este modo permite mejorar el registro y la supervisión, lo que puede ayudar a solucionar e identificar problemas en el sistema.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFailed' => [
        'description' => 'La notificación informa al destinatario de que ha fallado el intento de transferir los cambios realizados en la instancia activa a la versión de prueba del sitio web. La notificación puede incluir detalles sobre por qué falló el push y qué pasos deben seguirse para resolver el problema.',
        'name' => 'Empuje fallido a la puesta en escena',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFinished' => [
        'description' => 'La notificación informa al destinatario de que los cambios realizados en la instancia activa se han transferido correctamente a la versión de prueba del sitio web o sistema. La notificación puede incluir detalles sobre los cambios realizados y cualquier otro paso que deba darse.',
        'name' => 'Empuje finalizado a la puesta en escena',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFailed' => [
        'name' => 'Fallo en la importación de instancias por el usuario',
        'description' => 'La notificación informa al destinatario de que la importación de la instancia por parte del usuario ha fallado.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFinished' => [
        'name' => 'Instancia de importación manual finalizada',
        'description' => 'La notificación informa al destinatario de que la importación manual de la instancia por parte del administrador se ha realizado correctamente.',
    ],
    'App\\Notifications\\Admin\\Connection\\ServerAccountConnectionError' => [
        'name' => 'Error de conexión de la cuenta de alojamiento',
        'description' => 'La notificación informa al destinatario de que la conexión a la cuenta de alojamiento ha fallado.',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFailed' => [
        'name' => 'Fallo en la restauración de la instancia',
        'description' => 'La notificación informa al destinatario de que ha fallado un intento de restaurar la instancia a partir de una copia de seguridad. La notificación puede incluir detalles sobre por qué ha fallado la restauración y qué pasos deben seguirse para resolver el problema.',
    ],
    'App\\Notifications\\Admin\\Plan\\PlanConfigurationError' => [
        'name' => 'Error de configuración del plan',
        'description' => 'La notificación informa al destinatario de que la configuración del plan está mal configurada.',
    ],
];
