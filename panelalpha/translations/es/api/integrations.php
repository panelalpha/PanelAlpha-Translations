<?php

return [
    'App\\Lib\\Integrations\\DbIp' => [
        'title' => 'DB IP',
        'description' => 'DB-IP es una potente base de datos de geolocalización que asigna direcciones IP a ubicaciones físicas. Permite a las empresas personalizar contenidos y servicios en función de regiones concretas, mejorar la publicidad dirigida y mejorar la experiencia del usuario.',
        'subtitle' => 'Se utiliza para determinar la ubicación al iniciar sesión desde un nuevo dispositivo',
        'instruction' => 'PanelAlpha utiliza una base de datos de geolocalización gratuita preparada por DB-IP. La condición para utilizar esta base de datos es incluir un enlace a DB-IP.com en cualquier página que muestre o utilice resultados de la base de datos.<br>Por lo tanto, este enlace se incluirá en el correo electrónico para la detección de nuevos dispositivos.',
        'fields' => [
            'db-ip-accepted' => [
                'label' => 'Acepto las condiciones de la licencia',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\GooglePageSpeedInsights' => [
        'title' => 'Google PageSpeed Insights',
        'subtitle' => 'Se utiliza para realizar capturas de pantalla de las instancias y calcular la velocidad de carga de las páginas',
        'fields' => [
            'api-key' => [
                'placeholder' => 'Introduzca su clave API...',
                'label' => 'Clave API',
            ],
        ],
        'description' => 'Google PageSpeed Insights es una herramienta que analiza la velocidad y el rendimiento de su sitio web en dispositivos móviles y de escritorio. Proporciona sugerencias prácticas para mejorar los tiempos de carga y la experiencia del usuario.',
        'instruction' => 'Para utilizar Google PageSpeed Insights, siga estos pasos:<ol><li>Vaya a <a href=\'https://developers.google.com/speed/docs/insights/v5/get-started#key\' target=\'_blank\'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Inicie sesión en su cuenta de Google si es necesario.</li><li>Cree una nueva clave de API haciendo clic en el botón "Obtener una clave".</li><li>Seleccione un proyecto existente o cree uno nuevo y haga clic en el botón "Siguiente".</li><li>Una vez creada la clave de API, se mostrará en la pantalla. Copie esta clave y utilícela para integrar Google PageSpeed Insights.</li></ol>.',
    ],
    'App\\Lib\\Integrations\\SslProviders\\LetsEncrypt' => [
        'title' => 'Encriptemos',
        'subtitle' => 'Se utiliza para emitir certificados SSL para instancias',
        'description' => 'Let\'s Encrypt es una Autoridad de Certificación gratuita, automatizada y abierta que proporciona cifrado HTTPS para sitios web. Es fácil de instalar y utilizar, y garantiza que tu sitio web sea seguro y accesible para todo el mundo.',
        'instruction' => 'Para utilizar Let\'s Encrypt, debe seguir estos pasos:<ol><li>Introduzca su dirección de correo electrónico en el campo Correo electrónico de contacto.</li><li>Lea atentamente el "Acuerdo de suscripción a Let\'s Encrypt" y acepte las condiciones del servicio.</li><li>A continuación, se creará su cuenta y se habilitará automáticamente la integración del certificado SSL.</li><li>Vaya a Configuración > SSL automático y establezca el Proveedor SSL automático en "Let\'s Encrypt".</li><li>A partir de ahora, Let\'s Encrypt emitirá automáticamente certificados SSL para las instancias.</li></ol>',
        'fields' => [
            'account-id' => [
                'label' => 'Cuenta Let\\\'s Encrypt',
                'placeholder' => 'La cuenta se generará después de guardar los cambios',
            ],
            'contact-email' => [
                'label' => 'Correo electrónico de contacto',
                'placeholder' => 'Introduce tu correo electrónico...',
            ],
            'tos-accepted' => [
                'label' => 'Aceptar las condiciones del servicio',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\SslProviders\\SelfSigned' => [
        'title' => 'Self Signed',
    ],
    'App\\Lib\\Integrations\\ReportProviders\\Matomo' => [
        'title' => 'Matomo',
        'subtitle' => 'Empleado para la recopilación y el análisis de datos de tráfico del sitio web',
        'description' => 'Matomo Analytics es una plataforma de análisis web centrada en la privacidad que ayuda a rastrear el tráfico del sitio web y el comportamiento del usuario. Es personalizable y proporciona información detallada, al tiempo que mantiene los datos del usuario seguros.',
        'instruction' => 'Para utilizar Matomo, siga estos pasos:<ol><li>Vaya a la URL de Matomo: <a href="{{$url}}" target="_blank">{{$url}}</a></li><li>Vaya al proceso de instalación de Matomo.</li><li>Entre en Matomo.</li><li>Vaya a Configuración &gt; Personal &gt; Seguridad.</li><li>En la parte inferior de la página, haga clic en "Crear nuevo token" para generar un nuevo token.</li><li>Vuelva a PanelAlpha e introduzca el token de API.</li></ol>.',
        'fields' => [
            'url' => [
                'label' => 'URL',
                'placeholder' => 'Introduzca la URL de Matomo',
            ],
            'api-token' => [
                'label' => 'Token API',
                'placeholder' => 'Introducir token de API',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Onboarding\\Extendify' => [
        'title' => 'Extendify',
        'subtitle' => 'Utilizado para el Onboarding Super Rápido de instancias',
        'description' => 'Extendify ofrece a sus clientes finales una experiencia similar a la de un constructor de sitios web. Permita a sus clientes de hosting crear sitios web atractivos y de aspecto profesional en cuestión de minutos utilizando las últimas tecnologías de IA de forma nativa en WordPress.',
        'instruction' => 'Para utilizar <b>Extendify</b>, utiliza el método "Super Quick Onboarding" en tus planes.<br>¿Aún no tienes una cuenta? <a href="https://extendify.com/pricing/" target="_blank">Crea tu cuenta</a>.',
        'fields' => [
            'partner_id' => [
                'label' => 'ID de socio',
                'placeholder' => 'Introduzca el ID de socio',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\ReportProviders\\GoogleAnalytics' => [
        'title' => 'Google Analytics',
        'description' => 'Google Analytics ofrece herramientas gratuitas para consolidar y analizar los datos de su empresa, lo que permite que el proceso de toma de decisiones esté orientado a los datos',
        'instruction' => 'Para utilizar Google Analytics, siga estos pasos:<ol><li>Vaya al sitio de Google Analytics: <a href="https://analytics.google.com" target="_blank">https://analytics.google.com/</a></li><li>Ingrese en su cuenta de Google si aún no lo ha hecho.</li><li>Cree una cuenta de Google Analytics.</li><li>Vaya a Administración > Configuración de la cuenta > Detalles de la cuenta y busque su ID de cuenta.</li><li>Copie y pegue el ID de propiedad en el siguiente formulario.</li><li>Cree un archivo JSON de credenciales como <a href="https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file" target="_blank">se describe en la documentación</a>.</li><li>Adjunte el archivo JSON en el campo Credenciales de cuenta de servicio que aparece a continuación.</li></ol><br>¡Atención! Esta integración funciona en base a código javascript instalado automáticamente en las instancias del cliente. El usuario puede eliminar este código y la integración dejará de funcionar.',
        'fields' => [
            'account-id' => [
                'label' => 'ID de cuenta',
                'placeholder' => 'Introducir ID de cuenta',
            ],
            'service-account-credentials-json' => [
                'label' => 'Credenciales de la cuenta de servicio',
                'placeholder' => 'Adjuntar archivo JSON de credenciales de servicio',
            ],
        ],
        'subtitle' => 'Empleado para recopilar y analizar datos sobre el tráfico del sitio web',
    ],
    'App\\Lib\\Integrations\\PreviewSiteProvider\\WithoutDns' => [
        'title' => 'WithoutDNS',
        'instruction' => 'Para utilizar WithoutDNS, siga estos pasos:<ol><li>Vaya a <a href="https://withoutdns.com/api-configuration" target="_blank">https://withoutdns.com/</a></li><li>Ingrese en su cuenta si es necesario.</li><li>Cree un nuevo token de API haciendo clic en el botón "Generar token".</li><li>Copie y pegue el token de API en el siguiente formulario.</li><li>Realice una conexión de prueba.</li><li>Después de realizar la conexión de prueba, aparecerán las opciones de Dominio temporal y Duración de URL temporal. Una vez que las seleccione, la integración estará lista para su uso.</li></ol><br>Sin completar totalmente la configuración, la integración permite la generación de hasta tres enlaces temporales.',
        'fields' => [
            'api-token' => [
                'placeholder' => 'Introduzca su token de API',
                'label' => 'Token API',
            ],
            'temporary-url-duration' => [
                'label' => 'URL temporal Duración',
                'tooltip' => 'Defina cuánto tiempo permanecerá accesible la URL de vista previa generada para el sitio antes de que caduque.',
                'options' => [
                    '15m' => '15 minutos',
                    '1h' => '1 Hour',
                    '24h' => '24 horas',
                    '7d' => '7 days',
                    '30d' => '30 días',
                    'never' => 'Nunca',
                ],
            ],
            'temporary_domain' => [
                'label' => 'Dominio temporal',
                'tooltip' => 'Seleccione el dominio que se utilizará para generar la URL temporal para que los clientes puedan previsualizar el sitio.',
            ],
        ],
        'subtitle' => 'Permite previsualizar rápidamente WordPress',
        'description' => 'WithoutDNS proporciona un completo conjunto de herramientas que simplifica los procesos de prueba y migración. Proporciona una URL temporal que dirige su dominio a una dirección IP de servidor especificada a través de uno de nuestros servidores proxy.',
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Smtp' => [
        'title' => 'SMTP',
        'fields' => [
            'port' => [
                'label' => 'Port',
                'tooltip' => 'El puerto de correo electrónico se refiere a un puerto específico dedicado a gestionar el tráfico de correo electrónico.',
            ],
            'encryption' => [
                'tooltip' => 'El tipo de SSL se refiere al método de cifrado (SSL o TLS) utilizado para proteger la conexión entre el cliente de correo electrónico y el servidor.',
                'options' => [
                    'none' => 'Ninguno',
                    'ssl' => 'SSL',
                    'tls' => 'TLS',
                ],
                'label' => 'Tipo SSL',
            ],
            'password' => [
                'label' => 'Contraseña',
                'tooltip' => 'Email password is a password for authentication and accessing an email account.',
            ],
            'host' => [
                'label' => 'Anfitrión',
                'tooltip' => 'El host de correo electrónico se refiere al servidor o proveedor de alojamiento.',
            ],
            'username' => [
                'label' => 'Nombre de usuario',
                'tooltip' => 'El nombre de usuario es un nombre asociado a una cuenta de correo electrónico.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Postmark' => [
        'title' => 'Postmark',
        'fields' => [
            'token' => [
                'label' => 'Ficha',
                'tooltip' => 'El token de Postmark hace referencia al token de API utilizado para acceder al servicio de entrega de correo electrónico de Postmark.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\MailerSend' => [
        'title' => 'MailerSend',
        'fields' => [
            'api_token' => [
                'tooltip' => 'El token de la API se utiliza para autenticar las solicitudes realizadas al enviar correos electrónicos.',
                'label' => 'Token API',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Mailgun' => [
        'title' => 'Mailgun',
        'fields' => [
            'domain' => [
                'label' => 'Dominio',
                'tooltip' => 'Introduzca su nombre de dominio Mailgun.',
            ],
            'secret' => [
                'label' => 'Clave API',
                'tooltip' => 'Proporcione su clave API Mailgun para la autenticación.',
            ],
            'endpoint' => [
                'label' => 'Región',
                'tooltip' => 'Seleccione su región Mailgun.',
                'options' => [
                    'us' => 'Estados Unidos',
                    'eu' => 'Unión Europea',
                ],
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\SendGrid' => [
        'title' => 'SendGrid',
        'fields' => [
            'api_key' => [
                'label' => 'Clave API',
                'tooltip' => 'La clave API se utiliza para autenticar las solicitudes realizadas al enviar correos electrónicos.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailServers\\Mailcow' => [
        'title' => 'Mailcow',
        'description' => 'mailcow - dockerized es una suite de groupware/email de código abierto basada en docker',
        'fields' => [
            'api_url' => [
                'label' => 'URL API',
            ],
            'api_key' => [
                'label' => 'Clave API',
            ],
        ],
        'config' => [
            'domain_template' => [
                'label' => 'Plantilla de dominio',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailServers\\Cpanel' => [
        'title' => 'cPanel',
        'description' => 'cPanel: una plataforma de correo electrónico y software de colaboración alojada en la nube',
        'fields' => [
            'url' => [
                'label' => 'IP/Nombre de host',
            ],
            'username' => [
                'label' => 'Nombre de usuario',
            ],
            'api_token' => [
                'label' => 'Token API',
            ],
            'ssl_verification' => [
                'label' => 'Verificación SSL',
            ],
        ],
        'config' => [
            'whm_package' => [
                'label' => 'Paquete WHM',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Google' => [
        'title' => 'Google',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Sigue estos pasos para habilitar la autenticación con este proveedor y registrar una nueva aplicación:
                <ol>
                <li>Proceda a:: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> e inicie sesión si es necesario.</li>.
                <li>Haga clic en <b>Seleccionar proyecto</b>, luego pulse <b>Crear proyecto</b> y selecciónelo cuando se haya creado. </li>
                <li>Desplácese a <b>Administrador de API → Credenciales → OAuth</b> pantalla de consentimiento y rellene el formulario allí. </li>
                <li>Siguiente, vaya a <b>Credenciales → Crear credenciales (tipo de ID de cliente OAuth)</b> y seleccione <b>Aplicación web</b>.</li> <li>Seleccione <b>Aplicación web</b>.
                <li>Configura <b>Autorizar URI de redirección</b> en <br /><b>{{$callback_url}}</b></li>.
                <li>Una vez que se haya registrado pegue las credenciales de la aplicación creadas (Client ID para ID de la aplicación y Client Secret para Secreto de la aplicación) en el formulario que aparece a continuación.</li> <li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID de cliente',
            ],
            'client_secret' => [
                'label' => 'Secreto de cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Apple' => [
        'title' => 'Apple',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Siga estos pasos para activar la autenticación con este proveedor y registrar una nueva aplicación:
            ',
        'fields' => [
            'client_id' => [
                'label' => 'ID de cliente',
            ],
            'client_secret' => [
                'label' => 'Secreto de cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Microsoft' => [
        'title' => 'Microsoft',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Sigue estos pasos para habilitar la autenticación con este proveedor y registrar una nueva aplicación:
                <ol>
                <li>Vaya a: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> e inicie sesión si es necesario</li>.
                <li>Cree una nueva solicitud</li>.
                <li>Rellene los campos obligatorios, como el nombre de la aplicación y su descripción.</li> <li>Cree una nueva aplicación.
                <li>Configure <b>Redirect URL</b> a <br /><b>{{$callback_url}}</b></li>.
                <li>Una vez registrado, pega las credenciales de la aplicación creada en el siguiente formulario. </li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID de cliente',
            ],
            'client_secret' => [
                'label' => 'Secreto de cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Linkedin' => [
        'title' => 'LinkedIn',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Sigue estos pasos para habilitar la autenticación con este proveedor y registrar una nueva aplicación:
            <ol>
                <li>Vaya a: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> e inicie sesión si es necesario.</li>.
                <li>Cree una nueva solicitud.</li>
                <li>Rellene los campos obligatorios, como el nombre de la aplicación y su descripción</li>.
                <li>Elija <b>Live</b> en <b>Live Status</b>.</li> <li>Seleccione <b>Live Status</b>.
                <li>Seleccione los permisos <b>r_liteprofile</b> y <b>r_emailaddress</b>.</li>.
                <li>Establezca <b>Redirect URL</b> como <br /><b>{{$callback_url}}</b></li>.
                <li>Una vez que te hayas registrado, pega las credenciales de la aplicación creada en el formulario que aparece a continuación.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID de cliente',
            ],
            'client_secret' => [
                'label' => 'Secreto de cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Facebook' => [
        'title' => 'Facebook',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Sigue estos pasos para habilitar la autenticación con este proveedor y registrar una nueva aplicación:
            <ol>
                <li>Vaya a: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> e inicie sesión si es necesario.</li>.
                <li>Cree una nueva solicitud.</li>
                <li>Rellene <b>Nombre para mostrar</b>, <b>Correo electrónico de contacto</b>, elija una categoría y haga clic en <b>Crear ID de aplicación</b>. </li> <li>
                <li>Vaya a la página <b>Configuración</b> y copie <b>Identificación de la aplicación</b> y <b>Secreto de la aplicación</b> en este formulario.</li>.
                <li>Vuelve a <b>+Añadir producto</b> y selecciona <b>Inicio de sesión en Facebook</b></li>.
                <li>Configura <b>Valid OAuth redirect URIs</b> como <br /><b>{{$callback_url}}</b></li>.
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID de cliente',
            ],
            'client_secret' => [
                'label' => 'Secreto de cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Github' => [
        'title' => 'GitHub',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Sigue estos pasos para habilitar la autenticación con este proveedor y registrar una nueva aplicación:
            <ol>
                <li>Vaya a: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> e inicie sesión si es necesario.</li>.
                <li>Cree una nueva solicitud.</li>
                <li>Rellene <b>Nombre, Descripción, URL del sitio web</b>.</li> <li>Cree una nueva aplicación.
                <li>Establezca <b>Redirect URL</b> como <br /><b>{{$callback_url}}</b></li>.
                <li>Envía el formulario y actualiza la configuración de la aplicación. </li>
                <li>Encuentre en la página siguiente y copie Client ID y Client Secret de <b>OAuth Information</b> a los campos de abajo.</li> <li>Envíe el formulario y actualice la configuración de la aplicación.
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID de cliente',
            ],
            'client_secret' => [
                'label' => 'Secreto de cliente',
            ],
        ],
    ],
];
