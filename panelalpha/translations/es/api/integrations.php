<?php

use App\Lib\Integrations\Atarim;
use App\Lib\Integrations\Auth\Apple;
use App\Lib\Integrations\Auth\Facebook;
use App\Lib\Integrations\Auth\Github;
use App\Lib\Integrations\Auth\Google;
use App\Lib\Integrations\Auth\Linkedin;
use App\Lib\Integrations\Auth\Microsoft;
use App\Lib\Integrations\DbIp;
use App\Lib\Integrations\DnsServers\Cloudflare;
use App\Lib\Integrations\DnsServers\CpanelDnsOnly;
use App\Lib\Integrations\DnsServers\DnsManagerForWhmcs;
use App\Lib\Integrations\DnsServers\PowerDns;
use App\Lib\Integrations\EmailProvider\MailerSend;
use App\Lib\Integrations\EmailProvider\Mailgun;
use App\Lib\Integrations\EmailProvider\Postmark;
use App\Lib\Integrations\EmailProvider\Smtp;
use App\Lib\Integrations\EmailProvider\SendGrid;
use App\Lib\Integrations\EmailServers\Cpanel as CpanelEmailServer;
use App\Lib\Integrations\EmailServers\Mailcow;
use App\Lib\Integrations\GooglePageSpeedInsights;
use App\Lib\Integrations\HostingServers\Cpanel;
use App\Lib\Integrations\HostingServers\DirectAdmin;
use App\Lib\Integrations\HostingServers\PanelAlpha;
use App\Lib\Integrations\HostingServers\Plesk;
use App\Lib\Integrations\HostingServers\WpCloud;
use App\Lib\Integrations\Onboarding\Extendify;
use App\Lib\Integrations\PreviewSiteProvider\WithoutDns;
use App\Lib\Integrations\ReportProviders\GoogleAnalytics;
use App\Lib\Integrations\ReportProviders\Matomo;
use App\Lib\Integrations\SslProviders\LetsEncrypt;
use App\Lib\Integrations\SslProviders\SelfSigned;

return [
    DbIp::class => [
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
    GooglePageSpeedInsights::class => [
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
    LetsEncrypt::class => [
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
    SelfSigned::class => [
        'title' => 'Self Signed',
    ],
    Matomo::class => [
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
    Extendify::class => [
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
    GoogleAnalytics::class => [
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
    WithoutDns::class => [
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
    Smtp::class => [
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
    Postmark::class => [
        'title' => 'Postmark',
        'fields' => [
            'token' => [
                'label' => 'Ficha',
                'tooltip' => 'El token de Postmark hace referencia al token de API utilizado para acceder al servicio de entrega de correo electrónico de Postmark.',
            ],
        ],
    ],
    MailerSend::class => [
        'title' => 'MailerSend',
        'fields' => [
            'api_token' => [
                'tooltip' => 'El token de la API se utiliza para autenticar las solicitudes realizadas al enviar correos electrónicos.',
                'label' => 'Token API',
            ],
        ],
    ],
    Mailgun::class => [
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
    SendGrid::class => [
        'title' => 'SendGrid',
        'fields' => [
            'api_key' => [
                'label' => 'Clave API',
                'tooltip' => 'La clave API se utiliza para autenticar las solicitudes realizadas al enviar correos electrónicos.',
            ],
        ],
    ],
    Mailcow::class => [
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
    CpanelEmailServer::class => [
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
    Google::class => [
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
    Apple::class => [
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
    Microsoft::class => [
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
    Linkedin::class => [
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
    Facebook::class => [
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
    Github::class => [
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
    Cpanel::class => [
        'title' => 'cPanel',
        'description' => 'cPanel - una plataforma de correo electrónico y software de colaboración alojada en la nube',
        'fields' => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Nombre de usuario',
            ],
            'api_token' => [
                'label' => 'Token API',
                'link_label' => 'Cómo crear un token API',
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
    DirectAdmin::class => [
        'title' => 'Direct Admin',
        'description' => 'DirectAdmin - un software de colaboración y plataforma de correo electrónico alojada en la nube',
        'fields' => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Nombre de usuario',
            ],
            'password' => [
                'label' => 'Contraseña',
            ],
            'ssl_verification' => [
                'label' => 'Verificación SSL',
            ],
        ],
        'config' => [
            'package' => [
                'label' => 'Paquete',
            ],
            'ip_address' => [
                'label' => 'Dirección IP',
            ],
        ],
    ],
    Plesk::class => [
        'title' => 'Plesk',
        'description' => 'Plesk - un software de colaboración y plataforma de correo electrónico alojada en la nube',
        'fields' => [
            'url' => [
                'label' => 'IP/Nombre de host',
            ],
            'username' => [
                'label' => 'Nombre de usuario',
            ],
            'password' => [
                'label' => 'Contraseña',
            ],
            'ssl_verification' => [
                'label' => 'Verificación SSL',
            ],
        ],
        'config' => [
            'ip_address' => [
                'label' => 'Dirección IP',
                'tooltip' => 'Seleccione una dirección IP disponible',
            ],
            'hosting_plan' => [
                'label' => 'Plan de hosting',
                'tooltip' => "Seleccione un plan de hosting para la suscripción. Importante: Esta opción solo está disponible cuando la 'Cuenta de revendedor' está desactivada.",
            ],
            'reseller_account' => [
                'label' => 'Cuenta de revendedor',
                'tooltip' => "Habilite esta opción para permitir crear cuentas de clientes bajo revendedor. Requiere seleccionar un 'plan de revendedor'. Nota: esta opción puede no estar disponible si el servidor no admite cuentas de revendedor.",
            ],
            'reseller_plan' => [
                'label' => 'Plan de revendedor',
                'tooltip' => "Seleccione un plan de revendedor. Importante: Esta opción solo está disponible cuando la 'Cuenta de revendedor' está habilitada. Nota: esta opción puede no estar disponible si el servidor no admite cuentas de revendedor.",
            ],
        ],
    ],
    PanelAlpha::class => [
        'title' => 'PanelAlpha Engine',
        'description' => 'PanelAlpha - una solución de alojamiento web basada en Docker',
        'fields' => [
            'api_url' => [
                'label' => 'URL API',
            ],
            'api_token' => [
                'label' => 'Token API',
            ],
        ],
        'config' => [
            'disk_space_limit' => [
                'label' => 'Límite de espacio en disco (MB)',
            ],
            'memory_limit' => [
                'label' => 'Límite de memoria (MB)',
            ],
            'cpu_limit' => [
                'label' => 'Límite de CPU',
            ],
            'device_read_bps' => [
                'label' => 'Límite de lectura (Bytes por segundo)',
            ],
            'device_write_bps' => [
                'label' => 'Límite de escritura (Bytes por segundo)',
            ],
            'bandwidth_limit' => [
                'label' => 'Límite de ancho de banda (MB por mes)',
            ],
            'mysql_databases_limit' => [
                'label' => 'Límite de bases de datos MySQL',
            ],
            'ftp_accounts_limit' => [
                'label' => 'Límite de cuentas FTP',
            ],
            'sftp_accounts_limit' => [
                'label' => 'Límite de cuentas SFTP',
            ],
            'addon_domains_limit' => [
                'label' => 'Límite de dominios addon',
            ],
            'subdomains_limit' => [
                'label' => 'Límite de subdominios',
            ],
            'inodes_limit' => [
                'label' => 'Límite de inodos',
            ],
            'enable_redis_cache' => [
                'label' => 'Habilitar caché Redis',
            ],
            'enable_litespeed_cache' => [
                'label' => 'Habilitar caché LiteSpeed',
            ],
            'php_fpm_pool_settings' => [
                'label' => 'Ajustes del pool PHP-FPM',
            ],
            'lsphp_settings' => [
                'label' => 'Ajustes de LSPHP',
            ],
            'dedicated_ipv4' => [
                'label' => 'IPv4 dedicado',
            ],
            'dedicated_ipv6' => [
                'label' => 'IPv6 dedicado',
            ],
        ],
    ],
    WpCloud::class => [
        'title' => 'WP Cloud',
        'description' => 'WP Cloud - hosting en la nube centrado en WordPress',
        'fields' => [
            'client_identifier' => [
                'label' => 'Identificador de cliente',
            ],
            'api_key' => [
                'label' => 'Clave API',
            ],
        ],
        'config' => [
            'space_quota' => [
                'label' => 'Cuota de disco',
                'tooltip' => "Espacio en disco para sitios. El valor predeterminado se mide en megabytes, pero para especificarlo en gigabytes debe añadirse el sufijo 'GB'. El valor máximo es 200 GB.",
            ],
            'php_workers' => [
                'label' => 'PHP Workers',
                'tooltip' => 'Establezca el número de CPU y PHP Workers. Por defecto, puede establecer un valor entre 2 y 10. Para otras opciones, póngase en contacto con WP Cloud.',
            ],
            'php_memory_limit' => [
                'label' => 'Límite de memoria de PHP',
                'tooltip' => 'Establezca el límite de memoria de PHP por solicitud.',
            ],
            'burst_up_php_workers' => [
                'label' => 'Aumento temporal de PHP Workers',
                'tooltip' => 'Permite un aumento dinámico de hasta 110 PHP Workers.',
            ],
            'allow_user_choose_location' => [
                'label' => 'Permitir que el usuario elija la ubicación',
                'tooltip' => 'Permitir a los usuarios elegir la ubicación para nuevas instancias.',
            ],
            'geo_affinity' => [
                'label' => 'Centro de datos predeterminado',
                'tooltip' => 'Seleccione el centro de datos al que se asignarán las páginas.',
            ],
            'default_ssh_access_enabled' => [
                'label' => 'Acceso SSH predeterminado habilitado',
                'tooltip' => 'Establecer el acceso SSH habilitado por defecto en todas las nuevas instancias de WP Cloud.',
            ],
            'allow_user_enable_ssh_access' => [
                'label' => 'Permitir al usuario habilitar acceso SSH',
                'tooltip' => 'Permitir a los usuarios administrar el acceso SSH/SFTP a su instancia de WP Cloud.',
            ],
        ],
    ],
    Cloudflare::class => [
        'title' => 'Cloudflare',
        'description' => 'Cloudflare - la empresa de rendimiento y seguridad web',
        'fields' => [
            'api_token' => [
                'label' => 'Token API',
            ],
            'account_id' => [
                'label' => 'ID de cuenta',
            ],
        ],
    ],
    CpanelDnsOnly::class => [
        'title' => 'cPanel DNSOnly',
        'description' => 'cPanel DNSOnly - permite ejecutar un servidor de nombres físico dedicado',
        'fields' => [
            'url' => [
                'label' => 'IP/Nombre de host',
            ],
            'username' => [
                'label' => 'Nombre de usuario',
            ],
            'api_token' => [
                'label' => 'Token API',
                'link_label' => 'Cómo crear un token API',
            ],
            'nameserver_1' => [
                'label' => 'Servidor de nombres 1',
            ],
            'nameserver_2' => [
                'label' => 'Servidor de nombres 2',
            ],
            'nameserver_3' => [
                'label' => 'Servidor de nombres 3',
            ],
            'nameserver_4' => [
                'label' => 'Servidor de nombres 4',
            ],
        ],
    ],
    DnsManagerForWhmcs::class => [
        'title' => 'DNS Manager For WHMCS',
        'description' => 'DNS Manager For WHMCS - módulo de gestión de zonas DNS',
        'fields' => [
            'whmcs_url' => [
                'label' => 'URL de WHMCS',
            ],
            'whmcs_api_token' => [
                'label' => 'Token API de WHMCS',
            ],
        ],
    ],
    PowerDns::class => [
        'title' => 'PowerDNS',
        'description' => 'PowerDNS - proveedor líder de software DNS seguro de código abierto y comercial',
        'fields' => [
            'api_url' => [
                'label' => 'URL API',
            ],
            'api_token' => [
                'label' => 'Token API',
            ],
            'server' => [
                'label' => 'Servidor',
            ],
            'zones_kind' => [
                'label' => 'Tipo de zona',
            ],
            'nameservers' => [
                'label' => 'Servidores de nombres (separados por comas)',
            ],
        ],
    ],
    Atarim::class => [
        'title' => 'Atarim',
        'subtitle' => 'Utilizado para colaboración visual y comentarios en sitios web',
        'description' => 'Atarim agiliza la colaboración en sitios web al permitir que equipos y clientes dejen comentarios visuales directamente en sitios en vivo, convirtiendo los comentarios en tareas accionables para acelerar la entrega de proyectos.',
        'instruction' => 'Para usar Atarim, siga estos pasos:
            <ol>
                <li>Vaya a la <a href="https://atarim.firstpromoter.com/signup/32353" target="_blank">página de registro de Atarim</a></li>
                <li>Cree una cuenta o inicie sesión en una cuenta existente.</li>
                <li>Copie el <strong>enlace de referencia</strong> y péguelo en el campo del formulario de abajo.</li>
            </ol>',
        'fields' => [
            'link' => [
                'label' => 'Enlace',
            ],
        ],
    ],
];
