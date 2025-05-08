<?php

return [
    'App\\Lib\\Integrations\\DbIp' => [
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
    'App\\Lib\\Integrations\\GooglePageSpeedInsights' => [
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
    'App\\Lib\\Integrations\\SslProviders\\LetsEncrypt' => [
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
    'App\\Lib\\Integrations\\SslProviders\\SelfSigned' => [
        'title' => 'Signé par l\'intéressé',
    ],
    'App\\Lib\\Integrations\\ReportProviders\\Matomo' => [
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
    'App\\Lib\\Integrations\\Onboarding\\Extendify' => [
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
    'App\\Lib\\Integrations\\ReportProviders\\GoogleAnalytics' => [
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
    'App\\Lib\\Integrations\\PreviewSiteProvider\\WithoutDns' => [
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
    'App\\Lib\\Integrations\\EmailProvider\\Smtp' => [
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
    'App\\Lib\\Integrations\\EmailProvider\\Postmark' => [
        'title' => 'Postmark',
        'fields' => [
            'token' => [
                'label' => 'Jeton',
                'tooltip' => 'Le jeton Postmark fait référence au jeton API utilisé pour accéder au service de livraison de courrier électronique Postmark.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\MailerSend' => [
        'title' => 'MailerSend',
        'fields' => [
            'api_token' => [
                'label' => 'Jeton API',
                'tooltip' => 'Le jeton API est utilisé pour authentifier les demandes faites lors de l\'envoi de courriels.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Mailgun' => [
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
    'App\\Lib\\Integrations\\EmailProvider\\SendGrid' => [
        'title' => 'SendGrid',
        'fields' => [
            'api_key' => [
                'label' => 'Clé API',
                'tooltip' => 'La clé API est utilisée pour authentifier les demandes faites lors de l\'envoi de courriels.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailServers\\Mailcow' => [
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
    'App\\Lib\\Integrations\\EmailServers\\Cpanel' => [
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
    'App\\Lib\\Integrations\\Auth\\Google' => [
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
    'App\\Lib\\Integrations\\Auth\\Apple' => [
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
    'App\\Lib\\Integrations\\Auth\\Microsoft' => [
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
    'App\\Lib\\Integrations\\Auth\\Linkedin' => [
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
    'App\\Lib\\Integrations\\Auth\\Facebook' => [
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
    'App\\Lib\\Integrations\\Auth\\Github' => [
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
];
