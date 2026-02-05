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
        'subtitle' => 'Utilisé pour déterminer la localisation lors de la connexion à partir d\'un nouvel appareil.',
        'description' => 'DB-IP est une puissante base de données de géolocalisation qui associe les adresses IP à des emplacements physiques. Elle permet aux entreprises de personnaliser le contenu et les services en fonction de régions spécifiques, d\'améliorer la publicité ciblée et l\'expérience des utilisateurs.',
        'instruction' => 'PanelAlpha utilise une base de données de géolocalisation gratuite préparée par DB-IP. La condition pour utiliser cette base de données est d\'inclure un lien vers DB-IP.com sur toutes les pages qui affichent ou utilisent les résultats de la base de données.<br>Par conséquent, ce lien sera inclus dans l\'e-mail pour la détection de nouveaux appareils.',
        'fields' => [
            'db-ip-accepted' => [
                'label' => 'J\'accepte les conditions de licence',
            ],
        ],
    ],
    GooglePageSpeedInsights::class => [
        'title' => 'Google PageSpeed Insights',
        'subtitle' => 'Utilisé pour faire des captures d\'écran des instances et pour calculer la vitesse de chargement des pages.',
        'fields' => [
            'api-key' => [
                'label' => 'Clé API',
                'placeholder' => 'Entrez votre clé API...',
            ],
        ],
        'description' => 'Google PageSpeed Insights est un outil qui analyse la vitesse et les performances de votre site web sur les ordinateurs de bureau et les appareils mobiles. Il fournit des suggestions concrètes pour améliorer les temps de chargement et l\'expérience utilisateur.',
        'instruction' => 'Pour utiliser Google PageSpeed Insights, procédez comme suit :<ol><li>Allez sur <a href=\'https://developers.google.com/speed/docs/insights/v5/get-started#key\' target=\'_blank\'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Connectez-vous à votre compte Google si nécessaire.</li><li>Créez une nouvelle clé API en cliquant sur le bouton "Obtenir une clé".</li><li>Sélectionnez un projet existant ou créez-en un nouveau et cliquez sur le bouton "Suivant".</li><li>Une fois la clé API créée, elle s\'affichera à l\'écran. Copiez cette clé et utilisez-la pour intégrer Google PageSpeed Insights.</li></ol>',
    ],
    LetsEncrypt::class => [
        'title' => 'Let\'s Encrypt',
        'instruction' => 'Pour utiliser Let\'s Encrypt, vous devez suivre les étapes suivantes:<ol><li>Entrez votre adresse électronique dans le champ Email de contact.</li><li>Lisez attentivement le "Let\'s Encrypt Subscriber Agreement" et acceptez les conditions de service.</li><li>Votre compte sera ensuite créé et l\'intégration du certificat SSL sera automatiquement activée.</li><li>Aller à Configuration > SSL automatique et régler le fournisseur SSL automatique sur "Let\'s Encrypt".</li><li>À partir de maintenant, Let\'s Encrypt émettra automatiquement des certificats SSL pour les instances.</li></ol>',
        'fields' => [
            'account-id' => [
                'label' => 'Compte Let\\\'s Encrypt',
                'placeholder' => 'Le compte sera généré après l\'enregistrement des modifications',
            ],
            'contact-email' => [
                'label' => 'Courriel de contact',
                'placeholder' => 'Saisissez votre email...',
            ],
            'tos-accepted' => [
                'label' => 'Accepter les conditions d\'utilisation',
            ],
        ],
        'subtitle' => 'Utilisé pour émettre des certificats SSL pour les instances',
        'description' => 'Let\'s Encrypt est une autorité de certification gratuite, automatisée et ouverte qui fournit un cryptage HTTPS pour les sites web. Facile à installer et à utiliser, elle garantit que votre site web est sûr et accessible à tous.',
    ],
    SelfSigned::class => [
        'title' => 'Signé par l\'intéressé',
    ],
    Matomo::class => [
        'title' => 'Matomo',
        'instruction' => 'Pour utiliser Matomo, suivez les étapes suivantes:<ol><li>Aller à l\'URL de Matomo : <a href="{{$url}}" target="_blank">{{$url}}</a><li>Interrompez le processus d\'installation de Matomo.</li><li>Connectez-vous à Matomo.</li><li>Naviguez vers Configuration &gt ; Personal &gt ; Security.</li><li>Au bas de la page, cliquez sur "Créer un nouveau jeton" pour générer un nouveau jeton.</li><li>Retournez à PanelAlpha et entrez le jeton API.</li></ol>',
        'subtitle' => 'Employé pour la collecte et l\'analyse des données sur le trafic du site web',
        'description' => 'Matomo Analytics est une plateforme d\'analyse web axée sur la confidentialité qui permet de suivre le trafic des sites web et le comportement des utilisateurs. Elle est personnalisable et fournit des informations détaillées tout en sécurisant les données des utilisateurs.',
        'fields' => [
            'url' => [
                'label' => 'URL',
                'placeholder' => 'Entrez l\'URL de Matomo',
            ],
            'api-token' => [
                'label' => 'Jeton API',
                'placeholder' => 'Saisir le jeton API',
            ],
        ],
    ],
    Extendify::class => [
        'title' => 'Extendify',
        'subtitle' => 'Utilisé pour une mise en service très rapide des instances',
        'instruction' => 'Pour utiliser <b>Extendify</b>, veuillez utiliser la méthode "Super Quick Onboarding" dans vos plans.<br>Vous n\'avez pas encore de compte ? <a href="https://extendify.com/pricing/" target="_blank">Créer un compte</a>.',
        'fields' => [
            'partner_id' => [
                'label' => 'Partner ID',
                'placeholder' => 'Saisir l\'identifiant du partenaire',
            ],
        ],
        'description' => 'Extendify offre à vos clients finaux une expérience d\'accueil semblable à celle d\'un constructeur de site web. Donnez à vos clients d\'hébergement les moyens de créer en quelques minutes de magnifiques sites web d\'aspect professionnel en utilisant les dernières technologies d\'intelligence artificielle intégrées à WordPress.',
    ],
    GoogleAnalytics::class => [
        'title' => 'Google Analytics',
        'subtitle' => 'Employé pour la collecte et l\'analyse des données sur le trafic des sites web',
        'instruction' => 'Pour utiliser Google Analytics, suivez les étapes suivantes:<ol><li>Venez sur le site de Google Analytics : <a href="https://analytics.google.com" target="_blank">https://analytics.google.com/</a></li><li>Connectez-vous à votre compte Google si ce n\'est pas déjà fait.</li><li>Créez un compte Google Analytics.</li><li>Naviguez vers Administration > Paramètres du compte > Détails du compte et trouvez votre ID de compte.</li><li>Copiez et collez l\'ID de propriété dans le formulaire ci-dessous.</li><li>Créez un fichier JSON d\'informations d\'identification comme <a href="https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file" target="_blank">décrit dans la documentation</a>.</li><li>Attachez le fichier JSON dans le champ Informations d\'identification du compte de service ci-dessous.</li></ol><br>Attention ! Cette intégration fonctionne sur la base d\'un code javascript automatiquement installé sur les instances des clients. L\'utilisateur peut supprimer ce code et l\'intégration cessera de fonctionner.',
        'description' => 'Google Analytics offre des outils gratuits pour consolider et analyser les données de votre entreprise, permettant au processus de décision d\'être orienté vers les données.',
        'fields' => [
            'account-id' => [
                'label' => 'ID du compte',
                'placeholder' => 'Saisir l\'identifiant du compte',
            ],
            'service-account-credentials-json' => [
                'label' => 'Références du compte de service',
                'placeholder' => 'Joindre le fichier JSON des informations d\'identification du service',
            ],
        ],
    ],
    WithoutDns::class => [
        'title' => 'WithoutDNS',
        'subtitle' => 'Permet un aperçu rapide de WordPress',
        'fields' => [
            'api-token' => [
                'label' => 'Saisissez votre jeton API',
                'placeholder' => 'Saisissez votre jeton API',
            ],
            'temporary-url-duration' => [
                'label' => 'Durée de l\'URL temporaire',
                'tooltip' => 'Définir la durée pendant laquelle l\'URL de prévisualisation générée pour le site restera accessible avant d\'expirer.',
                'options' => [
                    '15m' => '15 minutes',
                    '1h' => '1 heure',
                    '24h' => '24 heures',
                    '7d' => '7 jours',
                    '30d' => '30 jours',
                    'never' => 'Jamais',
                ],
            ],
            'temporary_domain' => [
                'label' => 'Domaine temporaire',
                'tooltip' => 'Sélectionnez le domaine à utiliser pour générer l\'URL temporaire permettant aux clients de prévisualiser le site.',
            ],
        ],
        'description' => 'WithoutDNS fournit une boîte à outils complète qui simplifie les processus de test et de migration. Il fournit une URL temporaire qui dirige votre domaine vers l\'adresse IP d\'un serveur spécifié via l\'un de nos serveurs proxy.',
        'instruction' => 'Pour utiliser WithoutDNS, suivez les étapes suivantes :<ol><li>Venez sur <a href="https://withoutdns.com/api-configuration" target="_blank">https://withoutdns.com/</a></li><li>Connectez-vous à votre compte si nécessaire.</li><li>Créez un nouveau jeton API en cliquant sur le bouton "Générer un jeton".</Copiez et collez le jeton API dans le formulaire ci-dessous.</li><li>Exécutez un test de connexion.</li><li>Après avoir exécuté le test de connexion, les options Domaine temporaire et Durée de l\'URL temporaire s\'affichent. Une fois que vous les aurez sélectionnées, l\'intégration sera prête à être utilisée.</li></ol><br>Sans avoir entièrement terminé la configuration, l\'intégration permet de générer jusqu\'à trois liens temporaires.',
    ],
    Smtp::class => [
        'title' => 'SMTP',
        'fields' => [
            'host' => [
                'label' => 'Hôte',
                'tooltip' => 'L\'hébergeur de courrier électronique fait référence au serveur ou au fournisseur d\'hébergement.',
            ],
            'port' => [
                'label' => 'Port',
                'tooltip' => 'Le port de messagerie fait référence à un port spécifique dédié au traitement du trafic de messagerie.',
            ],
            'encryption' => [
                'label' => 'Type de SSL',
                'tooltip' => 'Le type de SSL fait référence à la méthode de cryptage (SSL ou TLS) utilisée pour sécuriser la connexion entre le client de messagerie et le serveur.',
                'options' => [
                    'none' => 'Aucun',
                    'ssl' => 'SSL',
                    'tls' => 'TLS',
                ],
            ],
            'username' => [
                'label' => 'Nom d\'utilisateur',
                'tooltip' => 'Le nom d\'utilisateur est un nom associé à un compte de messagerie.',
            ],
            'password' => [
                'label' => 'Mot de passe',
                'tooltip' => 'Le mot de passe e-mail est un mot de passe permettant de s\'authentifier et d\'accéder à un compte e-mail.',
            ],
        ],
    ],
    Postmark::class => [
        'title' => 'Postmark',
        'fields' => [
            'token' => [
                'label' => 'Jeton',
                'tooltip' => 'Le jeton Postmark fait référence au jeton API utilisé pour accéder au service de livraison de courrier électronique Postmark.',
            ],
        ],
    ],
    MailerSend::class => [
        'title' => 'MailerSend',
        'fields' => [
            'api_token' => [
                'label' => 'Jeton API',
                'tooltip' => 'Le jeton API est utilisé pour authentifier les demandes faites lors de l\'envoi de courriels.',
            ],
        ],
    ],
    Mailgun::class => [
        'title' => 'Arme à feu',
        'fields' => [
            'domain' => [
                'label' => 'Domaine',
                'tooltip' => 'Entrez votre nom de domaine Mailgun.',
            ],
            'secret' => [
                'label' => 'Secrète',
                'tooltip' => 'Indiquez votre clé API Mailgun pour l\'authentification.',
            ],
            'endpoint' => [
                'label' => 'Région',
                'tooltip' => 'Sélectionnez votre région Mailgun.',
                'options' => [
                    'us' => 'États-Unis',
                    'eu' => 'Union européenne',
                ],
            ],
        ],
    ],
    SendGrid::class => [
        'title' => 'SendGrid',
        'fields' => [
            'api_key' => [
                'label' => 'Clé API',
                'tooltip' => 'La clé API est utilisée pour authentifier les demandes faites lors de l\'envoi de courriels.',
            ],
        ],
    ],
    Mailcow::class => [
        'title' => 'Mailcow',
        'description' => 'mailcow - dockerized est une suite groupware/email open source basée sur docker',
        'fields' => [
            'api_url' => [
                'label' => 'URL DE L\'API',
            ],
            'api_key' => [
                'label' => 'Clé API',
            ],
        ],
        'config' => [
            'domain_template' => [
                'label' => 'Modèle de domaine',
            ],
        ],
    ],
    CpanelEmailServer::class => [
        'title' => 'cPanel',
        'description' => 'cPanel - Un logiciel de collaboration et une plateforme de messagerie hébergés en nuage',
        'fields' => [
            'url' => [
                'label' => 'IP/Nom d\'hôte',
            ],
            'username' => [
                'label' => 'Nom d\'utilisateur',
            ],
            'api_token' => [
                'label' => 'Jeton API',
            ],
            'ssl_verification' => [
                'label' => 'Vérification SSL',
            ],
        ],
        'config' => [
            'whm_package' => [
                'label' => 'Paquet WHM',
            ],
        ],
    ],
    Google::class => [
        'title' => 'Google',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Suivez ces étapes pour activer l\'authentification avec ce fournisseur et pour enregistrer une nouvelle application :
                <ol>
                <li>Procédez jusqu\'à: : <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> et connectez-vous si nécessaire.</li>
                <li>Cliquez sur <b>Sélectionner un projet</b>, puis appuyez sur <b>Créer un projet</b> et sélectionnez-le une fois créé. </li>
                <li>Passez à l\'écran de consentement <b>API Manager → Credentials → OAuth</b> et remplissez le formulaire qui s\'y trouve. </li>
                <li>Par la suite, allez dans <b>Credentials → Create credentials (OAuth client ID type)</b> et sélectionnez <b>Web application</b>.</li>
                <li>Configurez <b>Autoriser les URI de redirection</b> à <br /><b>{{$callback_url}}</b></li>.
                <li>Une fois inscrit, collez les informations d\'identification de l\'application créée (Client ID pour l\'ID de l\'application et Client Secret pour le secret de l\'application) dans le formulaire ci-dessous.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Identifiant du client',
            ],
            'client_secret' => [
                'label' => 'Secret du client',
            ],
        ],
    ],
    Apple::class => [
        'title' => 'Apple',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Suivez ces étapes pour activer l\'authentification avec ce fournisseur et pour enregistrer une nouvelle application :
            ',
        'fields' => [
            'client_id' => [
                'label' => 'Identifiant du client',
            ],
            'client_secret' => [
                'label' => 'Secret du client',
            ],
        ],
    ],
    Microsoft::class => [
        'title' => 'Microsoft',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Suivez ces étapes pour activer l\'authentification avec ce fournisseur et pour enregistrer une nouvelle application :
                <ol>
                <li>Procédez à : <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> et connectez-vous si nécessaire</li>.
                <li>Créer une nouvelle demande.</li>
                <li>Remplir les champs obligatoires tels que le nom de l\'application et sa description.</li>
                <li>Configurer <b>l\'URL de redirection</b> à <br /><b>{{$callback_url}}</b></li>.
                <li>Une fois que vous vous êtes inscrit, collez les informations d\'identification de l\'application créée dans le formulaire ci-dessous. </li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Identifiant du client',
            ],
            'client_secret' => [
                'label' => 'Secret du client',
            ],
        ],
    ],
    Linkedin::class => [
        'title' => ' LinkedIn',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Suivez ces étapes pour activer l\'authentification avec ce fournisseur et pour enregistrer une nouvelle application :
            <ol>
                <li>Procédez à : <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> et connectez-vous si nécessaire.</li>
                <li>Créer une nouvelle application.</li>
                <li>Remplir les champs obligatoires, tels que le nom de l\'application et sa description</li>.
                <li>Choisissez <b>Live</b> sous <b>Live Status</b>.</li>
                <li>Sélectionnez les autorisations <b>r_liteprofile</b> et <b>r_emailaddress</b>.</li>
                <li>Set <b>Redirect URL</b> to <br /><b>{{$callback_url}}</b></li>
                <li>Une fois que vous vous êtes inscrit, collez les informations d\'identification de l\'application créée dans le formulaire ci-dessous.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Identifiant du client',
            ],
            'client_secret' => [
                'label' => 'Secret du client',
            ],
        ],
    ],
    Facebook::class => [
        'title' => 'Facebook',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Suivez ces étapes pour activer l\'authentification avec ce fournisseur et pour enregistrer une nouvelle application :
            <ol>
                <li>Procédez à : <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> et connectez-vous si nécessaire.</li>
                <li>Créer une nouvelle application.</li>
                <li>Remplir le <b>Nom d\'affichage</b>, l\'<b>E-mail de contact</b>, choisir une catégorie et cliquer sur <b>Créer l\'identifiant de l\'application</b>. </li>
                <li>Allez à la page <b>Paramètres</b> et copiez <b>Identifiant de l\'application</b> et <b>Secret de l\'application</b> dans ce formulaire.</li>
                <li>Revenez sur <b>+Ajouter un produit</b> et sélectionnez <b>Connexion Facebook</b></li>.
                <li>Configurez <b>URIs de redirection OAuth valides</b> à <br /><b>{{$callback_url}}</b></li>.
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Identifiant du client',
            ],
            'client_secret' => [
                'label' => 'Secret du client',
            ],
        ],
    ],
    Github::class => [
        'title' => 'GitHub',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Suivez ces étapes pour activer l\'authentification avec ce fournisseur et pour enregistrer une nouvelle application :
            <ol>
                <li>Procédez à : <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> et connectez-vous si nécessaire.</li>
                <li>Créer une nouvelle application.</li>
                <li>Remplir les champs <b>Nom, Description, URL du site web</b>.</li>
                <li>Set <b>Redirect URL</b> to <br /><b>{{$callback_url}}</b></li>
                <li>Soumettez le formulaire et mettez à jour les paramètres de l\'application. </li>
                <li>Retrouvez la page suivante et copiez l\'ID du client et le Secret du client de <b>OAuth Information</b> dans les champs ci-dessous.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Identifiant du client',
            ],
            'client_secret' => [
                'label' => 'Secret du client',
            ],
        ],
    ],
    Cpanel::class => [
        'title' => 'cPanel',
        'description' => 'cPanel - une plateforme de collaboration et de messagerie hébergée dans le cloud',
        'fields' => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Nom d\'utilisateur',
            ],
            'api_token' => [
                'label' => 'Jeton API',
                'link_label' => 'Comment créer un jeton API',
            ],
            'ssl_verification' => [
                'label' => 'Vérification SSL',
            ],
        ],
        'config' => [
            'whm_package' => [
                'label' => 'Paquet WHM',
            ],
        ],
    ],
    DirectAdmin::class => [
        'title' => 'Direct Admin',
        'description' => 'DirectAdmin - un logiciel de collaboration et une plateforme de messagerie hébergés dans le cloud',
        'fields' => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Nom d\'utilisateur',
            ],
            'password' => [
                'label' => 'Mot de passe',
            ],
            'ssl_verification' => [
                'label' => 'Vérification SSL',
            ],
        ],
        'config' => [
            'package' => [
                'label' => 'Paquet',
            ],
            'ip_address' => [
                'label' => 'Adresse IP',
            ],
        ],
    ],
    Plesk::class => [
        'title' => 'Plesk',
        'description' => 'Plesk - un logiciel de collaboration et une plateforme de messagerie hébergés dans le cloud',
        'fields' => [
            'url' => [
                'label' => 'IP/Nom d\'hôte',
            ],
            'username' => [
                'label' => 'Nom d\'utilisateur',
            ],
            'password' => [
                'label' => 'Mot de passe',
            ],
            'ssl_verification' => [
                'label' => 'Vérification SSL',
            ],
        ],
        'config' => [
            'ip_address' => [
                'label' => 'Adresse IP',
                'tooltip' => 'Sélectionnez une adresse IP disponible',
            ],
            'hosting_plan' => [
                'label' => 'Plan d\'hébergement',
                'tooltip' => "Sélectionnez un plan d'hébergement pour l'abonnement. Important : cette option n'est disponible que lorsque le 'Compte revendeur' est désactivé.",
            ],
            'reseller_account' => [
                'label' => 'Compte revendeur',
                'tooltip' => "Activez cette option pour permettre la création de comptes clients sous revendeur. Nécessite de sélectionner un 'plan revendeur'. Remarque : cette option peut ne pas être disponible si le serveur ne prend pas en charge les comptes revendeur.",
            ],
            'reseller_plan' => [
                'label' => 'Plan revendeur',
                'tooltip' => "Sélectionnez un plan revendeur. Important : cette option n'est disponible que lorsque le 'Compte revendeur' est activé. Remarque : cette option peut ne pas être disponible si le serveur ne prend pas en charge les comptes revendeur.",
            ],
        ],
    ],
    PanelAlpha::class => [
        'title' => 'PanelAlpha Engine',
        'description' => 'PanelAlpha - une solution d\'hébergement web basée sur Docker',
        'fields' => [
            'api_url' => [
                'label' => 'URL API',
            ],
            'api_token' => [
                'label' => 'Jeton API',
            ],
        ],
        'config' => [
            'disk_space_limit' => [
                'label' => 'Limite d\'espace disque (Mo)',
            ],
            'memory_limit' => [
                'label' => 'Limite de mémoire (Mo)',
            ],
            'cpu_limit' => [
                'label' => 'Limite CPU',
            ],
            'device_read_bps' => [
                'label' => 'Limite de lecture (octets par seconde)',
            ],
            'device_write_bps' => [
                'label' => 'Limite d\'écriture (octets par seconde)',
            ],
            'bandwidth_limit' => [
                'label' => 'Limite de bande passante (Mo par mois)',
            ],
            'mysql_databases_limit' => [
                'label' => 'Limite de bases de données MySQL',
            ],
            'ftp_accounts_limit' => [
                'label' => 'Limite de comptes FTP',
            ],
            'sftp_accounts_limit' => [
                'label' => 'Limite de comptes SFTP',
            ],
            'addon_domains_limit' => [
                'label' => 'Limite de domaines addon',
            ],
            'subdomains_limit' => [
                'label' => 'Limite de sous-domaines',
            ],
            'inodes_limit' => [
                'label' => 'Limite d\'inodes',
            ],
            'enable_redis_cache' => [
                'label' => 'Activer le cache Redis',
            ],
            'enable_litespeed_cache' => [
                'label' => 'Activer le cache LiteSpeed',
            ],
            'php_fpm_pool_settings' => [
                'label' => 'Paramètres du pool PHP-FPM',
            ],
            'lsphp_settings' => [
                'label' => 'Paramètres LSPHP',
            ],
            'dedicated_ipv4' => [
                'label' => 'IPv4 dédié',
            ],
            'dedicated_ipv6' => [
                'label' => 'IPv6 dédié',
            ],
        ],
    ],
    WpCloud::class => [
        'title' => 'WP Cloud',
        'description' => 'WP Cloud - hébergement cloud axé sur WordPress',
        'fields' => [
            'client_identifier' => [
                'label' => 'Identifiant client',
            ],
            'api_key' => [
                'label' => 'Clé API',
            ],
        ],
        'config' => [
            'space_quota' => [
                'label' => 'Quota disque',
                'tooltip' => "Espace disque pour les sites. La valeur par défaut est mesurée en mégaoctets, mais pour la spécifier en gigaoctets, le suffixe 'GB' doit être ajouté. La valeur maximale est de 200 GB.",
            ],
            'php_workers' => [
                'label' => 'PHP Workers',
                'tooltip' => 'Définissez le nombre de CPU et de PHP Workers. Par défaut, vous pouvez définir une valeur entre 2 et 10. Pour d\'autres options, contactez WP Cloud.',
            ],
            'php_memory_limit' => [
                'label' => 'Limite de mémoire PHP',
                'tooltip' => 'Définissez la limite de mémoire PHP par requête.',
            ],
            'burst_up_php_workers' => [
                'label' => 'Burst Up PHP Workers',
                'tooltip' => 'Autorise un burst dynamique jusqu\'à 110 PHP Workers.',
            ],
            'allow_user_choose_location' => [
                'label' => 'Autoriser l\'utilisateur à choisir l\'emplacement',
                'tooltip' => 'Permettre aux utilisateurs de choisir l\'emplacement pour les nouvelles instances.',
            ],
            'geo_affinity' => [
                'label' => 'Centre de données par défaut',
                'tooltip' => 'Sélectionnez le centre de données auquel les pages seront attribuées.',
            ],
            'default_ssh_access_enabled' => [
                'label' => 'Accès SSH par défaut activé',
                'tooltip' => 'Définir l\'accès SSH comme activé par défaut sur toutes les nouvelles instances WP Cloud.',
            ],
            'allow_user_enable_ssh_access' => [
                'label' => 'Autoriser l\'utilisateur à activer l\'accès SSH',
                'tooltip' => 'Permettre aux utilisateurs de gérer l\'accès SSH/SFTP à leur instance WP Cloud.',
            ],
        ],
    ],
    Cloudflare::class => [
        'title' => 'Cloudflare',
        'description' => 'Cloudflare - l\'entreprise de performance et de sécurité Web',
        'fields' => [
            'api_token' => [
                'label' => 'Jeton API',
            ],
            'account_id' => [
                'label' => 'ID de compte',
            ],
        ],
    ],
    CpanelDnsOnly::class => [
        'title' => 'cPanel DNSOnly',
        'description' => 'cPanel DNSOnly - permet d\'exécuter un serveur de noms physique dédié',
        'fields' => [
            'url' => [
                'label' => 'IP/Nom d\'hôte',
            ],
            'username' => [
                'label' => 'Nom d\'utilisateur',
            ],
            'api_token' => [
                'label' => 'Jeton API',
                'link_label' => 'Comment créer un jeton API',
            ],
            'nameserver_1' => [
                'label' => 'Serveur de noms 1',
            ],
            'nameserver_2' => [
                'label' => 'Serveur de noms 2',
            ],
            'nameserver_3' => [
                'label' => 'Serveur de noms 3',
            ],
            'nameserver_4' => [
                'label' => 'Serveur de noms 4',
            ],
        ],
    ],
    DnsManagerForWhmcs::class => [
        'title' => 'DNS Manager For WHMCS',
        'description' => 'DNS Manager For WHMCS - module de gestion des zones DNS',
        'fields' => [
            'whmcs_url' => [
                'label' => 'URL WHMCS',
            ],
            'whmcs_api_token' => [
                'label' => 'Jeton API WHMCS',
            ],
        ],
    ],
    PowerDns::class => [
        'title' => 'PowerDNS',
        'description' => 'PowerDNS - fournisseur leader de logiciels DNS sécurisés open source et commerciaux',
        'fields' => [
            'api_url' => [
                'label' => 'URL API',
            ],
            'api_token' => [
                'label' => 'Jeton API',
            ],
            'server' => [
                'label' => 'Serveur',
            ],
            'zones_kind' => [
                'label' => 'Type de zone',
            ],
            'nameservers' => [
                'label' => 'Serveurs de noms (séparés par des virgules)',
            ],
        ],
    ],
    Atarim::class => [
        'title' => 'Atarim',
        'subtitle' => 'Utilisé pour la collaboration visuelle et les retours sur les sites web',
        'description' => 'Atarim facilite la collaboration sur les sites web en permettant aux équipes et aux clients de laisser des retours visuels directement sur les sites en ligne, transformant les commentaires en tâches exploitables pour accélérer la livraison des projets.',
        'instruction' => 'Pour utiliser Atarim, suivez ces étapes :
            <ol>
                <li>Rendez-vous sur la <a href="https://atarim.firstpromoter.com/signup/32353" target="_blank">page d\'inscription Atarim</a></li>
                <li>Créez un compte ou connectez-vous à un compte existant.</li>
                <li>Copiez le <strong>lien de parrainage</strong> et collez-le dans le champ du formulaire ci-dessous.</li>
            </ol>',
        'fields' => [
            'link' => [
                'label' => 'Lien',
            ],
        ],
    ],
];
