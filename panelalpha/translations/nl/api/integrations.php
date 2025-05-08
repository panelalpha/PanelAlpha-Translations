<?php

return [
    'App\\Lib\\Integrations\\DbIp' => [
        'title' => 'DB IP',
        'subtitle' => 'Wordt gebruikt om de locatie te bepalen bij het inloggen vanaf een nieuw apparaat',
        'description' => 'DB-IP is een krachtige geolocatiedatabase die IP-adressen koppelt aan fysieke locaties. Het stelt bedrijven in staat om inhoud en services aan te passen op basis van specifieke regio\'s, gerichte reclame te verbeteren en de gebruikerservaring te verbeteren.',
        'instruction' => 'PanelAlpha maakt gebruik van een gratis geolocatie database die is samengesteld door DB-IP. De voorwaarde voor het gebruik van deze database is het opnemen van een backlink naar DB-IP.com op alle pagina\'s die resultaten uit de database weergeven of gebruiken.<br>Daarom wordt deze link opgenomen in de e-mail voor nieuwe apparaatdetectie.',
        'fields' => [
            'db-ip-accepted' => [
                'label' => 'Ik ga akkoord met de licentievoorwaarden',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\GooglePageSpeedInsights' => [
        'title' => 'Google PageSpeed-inzichten',
        'subtitle' => 'Gebruikt om screenshots van instanties te maken en de laadsnelheid van pagina\'s te berekenen',
        'description' => 'Google PageSpeed Insights is een tool die de snelheid en prestaties van uw website op desktop- en mobiele apparaten analyseert. Het biedt bruikbare suggesties om laadtijden en gebruikerservaring te verbeteren.',
        'instruction' => 'Voer de volgende stappen uit om Google PageSpeed Insights te gebruiken:<ol><li>Ga naar <a href=\'https://developers.google.com/speed/docs/insights/v5/get-started#key\' target=\'_blank\'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Log in op uw Google-account als dat nodig is.</li><li>Maak een nieuwe API-sleutel door te klikken op de knop "Get a Key".</li><li>Selecteer een bestaand project of maak een nieuw project en klik op de knop "Next".</li><li>Wanneer de API-sleutel is gemaakt, wordt deze weergegeven op het scherm. Kopieer deze sleutel en gebruik hem om Google PageSpeed Insights te integreren.</li></ol>',
        'fields' => [
            'api-key' => [
                'label' => 'API-sleutel',
                'placeholder' => 'Voer uw API-sleutel in...',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\SslProviders\\LetsEncrypt' => [
        'title' => 'Laten we versleutelen',
        'subtitle' => 'Gebruikt om SSL-certificaten uit te geven voor instanties',
        'description' => 'Let\'s Encrypt is een gratis, geautomatiseerde en open Certificate Authority die HTTPS-encryptie biedt voor websites. Het is eenvoudig te installeren en te gebruiken, en het zorgt ervoor dat je website veilig en toegankelijk is voor iedereen.',
        'instruction' => 'Als u Let\'s Encrypt wilt gebruiken, moet u de volgende stappen volgen:<ol><li>Voer uw e-mailadres in het veld E-mail contact in.</li><li>Lees de "Let\'s Encrypt-abonneeovereenkomst" zorgvuldig door en accepteer de servicevoorwaarden.</li><li>Uw account wordt vervolgens aangemaakt en de integratie van SSL-certificaten wordt automatisch ingeschakeld.</li><li>Ga naar Configuratie > Automatische SSL en stel de Automatische SSL-provider in op "Let\'s Encrypt".</li><li>Vanaf nu geeft Let\'s Encrypt automatisch SSL-certificaten uit voor instanties.</li></ol>',
        'fields' => [
            'account-id' => [
                'label' => 'Let\'s Encrypt-account',
                'placeholder' => 'Account wordt gegenereerd na het opslaan van wijzigingen',
            ],
            'contact-email' => [
                'label' => 'Contact e-mail',
                'placeholder' => 'Voer uw e-mailadres in...',
            ],
            'tos-accepted' => [
                'label' => 'Servicevoorwaarden accepteren',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\SslProviders\\SelfSigned' => [
        'title' => 'Zelf ondertekend',
    ],
    'App\\Lib\\Integrations\\ReportProviders\\Matomo' => [
        'title' => 'Matomo',
        'subtitle' => 'Ingezet voor gegevensverzameling en analyse van websiteverkeer',
        'description' => 'Matomo Analytics is een privacygericht webanalyseplatform dat helpt bij het volgen van websiteverkeer en gebruikersgedrag. Het is aanpasbaar en biedt gedetailleerde inzichten terwijl de gebruikersgegevens veilig blijven.',
        'instruction' => 'Volg deze stappen om Matomo te gebruiken:<ol><li>Ga naar de Matomo URL: <a href="{{$url}}" target="_blank">{$url}}</a></li><li>Ga door het installatieproces van Matomo.</li><li>Log in bij Matomo.</li><li>Navigeer naar Configuratie &gt; Persoonlijk &gt; Beveiliging.</li><li>Klik onderaan de pagina op "Nieuw token aanmaken" om een nieuw token te genereren.</li><li>Keer terug naar PanelAlpha en voer het API Token in.</li></ol>',
        'fields' => [
            'url' => [
                'label' => 'URL',
                'placeholder' => 'Voer Matomo URL in',
            ],
            'api-token' => [
                'label' => 'API-token',
                'placeholder' => 'API-token invoeren',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Onboarding\\Extendify' => [
        'title' => 'Uitbreiden',
        'subtitle' => 'Gebruikt voor supersnelle onboarding van instanties',
        'description' => 'Extendify biedt een website-bouwer-achtige onboarding-ervaring voor je eindklanten. Stel je hostingklanten in staat om binnen enkele minuten prachtige, professioneel ogende websites te maken met behulp van de nieuwste AI-technologieën die standaard in WordPress zijn ingebouwd.',
        'instruction' => 'Om <b>Extendify</b> te gebruiken, gebruikt u de "Super Quick Onboarding" methode in uw plannen.<br>Heeft u nog geen account? <a href="https://extendify.com/pricing/" target="_blank">Set up your account</a>.',
        'fields' => [
            'partner_id' => [
                'label' => 'Partner-ID',
                'placeholder' => 'Partner-ID invoeren',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\ReportProviders\\GoogleAnalytics' => [
        'title' => 'Google Analytics',
        'subtitle' => 'Ingezet voor het verzamelen en analyseren van websiteverkeersgegevens',
        'description' => 'Google Analytics biedt gratis tools voor het consolideren en analyseren van de gegevens van je bedrijf, zodat het besluitvormingsproces gegevensgericht kan zijn',
        'instruction' => 'Voer de volgende stappen uit om Google Analytics te gebruiken:<ol><li>Ga naar de Google Analytics-site: <a href="https://analytics.google.com" target="_blank">https://analytics.google.com/</a></li><li>Log in bij uw Google-account als u nog niet bent ingelogd.</li><li>Maak een Google Analytics-account.</li><li>Navigeer naar Beheer > Accountinstellingen > Accountgegevens en zoek uw account-ID.</li><li>Kopieer en plak de Property ID in het onderstaande formulier.</li><li>Maak een JSON-bestand met referenties zoals <a href="https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file" target="_blank">beschreven in de documentatie</a>.</li><li>Voeg het JSON-bestand toe in het veld Service Account Credentials hieronder.</li></ol><br>Waarschuwing! Deze integratie werkt op basis van javascriptcode die automatisch wordt geïnstalleerd op instanties van klanten. Als de gebruiker deze code verwijdert, werkt de integratie niet meer.',
        'fields' => [
            'account-id' => [
                'label' => 'Account-ID',
                'placeholder' => 'Account-ID invoeren',
            ],
            'service-account-credentials-json' => [
                'label' => 'Credentials serviceaccount',
                'placeholder' => 'Service Credentials JSON-bestand toevoegen',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\PreviewSiteProvider\\WithoutDns' => [
        'title' => 'ZonderDNS',
        'subtitle' => 'Maakt een snelle preview van WordPress mogelijk',
        'description' => 'WithoutDNS biedt een uitgebreide toolkit die test- en migratieprocessen vereenvoudigt. Het biedt een tijdelijke URL die je domein doorverwijst naar een gespecificeerd server IP-adres via een van onze proxyservers.',
        'instruction' => 'Voer de volgende stappen uit om WithoutDNS te gebruiken:<ol><li>Ga naar <a href="https://withoutdns.com/api-configuration" target="_blank">https://withoutdns.com/</a></li><li>Log in bij uw account als dat nodig is.</li><li>Maak een nieuw API Token door op de knop "Token genereren" te klikken.</li><li>Kopieer en plak het API-kenmerk in het onderstaande formulier.</li><li>Voer een testverbinding uit.</li><li>Na het uitvoeren van de testverbinding worden de opties voor Tijdelijk domein en Tijdelijke URL-duur weergegeven. Als u deze selecteert, is de integratie gereed voor gebruik.</li></ol><br>De integratie maakt het mogelijk om maximaal drie tijdelijke koppelingen te genereren zonder dat de configuratie volledig is voltooid.',
        'fields' => [
            'api-token' => [
                'label' => 'API-token',
                'placeholder' => 'Voer uw API-token in',
            ],
            'temporary-url-duration' => [
                'label' => 'Tijdelijke URL-duur',
                'tooltip' => 'Definieer hoe lang de gegenereerde preview URL voor de site toegankelijk blijft voordat deze verloopt.',
                'options' => [
                    '15m' => '15 minuten',
                    '1h' => '1 uur',
                    '24h' => '24 uur',
                    '7d' => '7 dagen',
                    '30d' => '30 dagen',
                    'never' => 'Nooit',
                ],
            ],
            'temporary_domain' => [
                'label' => 'Tijdelijk domein',
                'tooltip' => 'Selecteer het domein dat moet worden gebruikt voor het genereren van de tijdelijke URL voor klanten om de site te bekijken.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Smtp' => [
        'title' => 'SMTP',
        'fields' => [
            'host' => [
                'label' => 'Gastheer',
                'tooltip' => 'E-mail host verwijst naar de server of hostingprovider.',
            ],
            'port' => [
                'label' => 'Haven',
                'tooltip' => 'E-mailpoort verwijst naar een specifieke poort voor het afhandelen van e-mailverkeer.',
            ],
            'encryption' => [
                'label' => 'SSL Type',
                'tooltip' => 'SSL Type verwijst naar de coderingsmethode (SSL of TLS) die wordt gebruikt om de verbinding tussen de e-mailclient en de server te beveiligen.',
                'options' => [
                    'none' => 'Geen',
                    'ssl' => 'SSL',
                    'tls' => 'TLS',
                ],
            ],
            'username' => [
                'label' => 'Gebruikersnaam',
                'tooltip' => 'Gebruikersnaam is een naam die gekoppeld is aan een e-mailaccount.',
            ],
            'password' => [
                'label' => 'Wachtwoord',
                'tooltip' => 'E-mailwachtwoord is een wachtwoord voor verificatie en toegang tot een e-mailaccount.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Postmark' => [
        'title' => 'Poststempel',
        'fields' => [
            'token' => [
                'label' => 'Penning',
                'tooltip' => 'Postmark token verwijst naar API token dat wordt gebruikt voor toegang tot de Postmark e-mailbezorgservice.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\MailerSend' => [
        'title' => 'MailerSend',
        'fields' => [
            'api_token' => [
                'label' => 'API-token',
                'tooltip' => 'API-token wordt gebruikt om verzoeken te verifiëren die worden gedaan bij het verzenden van e-mails.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Mailgun' => [
        'title' => 'Mailgun',
        'fields' => [
            'domain' => [
                'label' => 'Domein',
                'tooltip' => 'Voer je Mailgun domeinnaam in.',
            ],
            'secret' => [
                'label' => 'API-sleutel',
                'tooltip' => 'Geef je Mailgun API-sleutel op voor verificatie.',
            ],
            'endpoint' => [
                'label' => 'Regio',
                'tooltip' => 'Selecteer je Mailgun-regio.',
                'options' => [
                    'us' => 'Verenigde Staten',
                    'eu' => 'Europese Unie',
                ],
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\SendGrid' => [
        'title' => 'SendGrid',
        'fields' => [
            'api_key' => [
                'label' => 'API-sleutel',
                'tooltip' => 'API Key wordt gebruikt om verzoeken te verifiëren die worden gedaan bij het verzenden van e-mails.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailServers\\Mailcow' => [
        'title' => 'Mailcow',
        'description' => 'mailcow - dockerized is een open source groupware/email suite gebaseerd op docker',
        'fields' => [
            'api_url' => [
                'label' => 'API URL',
            ],
            'api_key' => [
                'label' => 'API-sleutel',
            ],
        ],
        'config' => [
            'domain_template' => [
                'label' => 'Domeinsjabloon',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailServers\\Cpanel' => [
        'title' => 'cPanel',
        'description' => 'cPanel - een cloud-hosted samenwerkingssoftware en e-mailplatform',
        'fields' => [
            'url' => [
                'label' => 'IP/Hostnaam',
            ],
            'username' => [
                'label' => 'Gebruikersnaam',
            ],
            'api_token' => [
                'label' => 'API Token',
            ],
            'ssl_verification' => [
                'label' => 'SSL-verificatie',
            ],
        ],
        'config' => [
            'whm_package' => [
                'label' => 'WHM Package',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Google' => [
        'title' => 'Google',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Volg deze stappen om de authenticatie met deze provider in te schakelen en een nieuwe applicatie te registreren:
                <ol>
                <li>Ga naar:: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> en log in indien nodig.</li>
                <li>Klik op <b>Selecteer project</b>, druk vervolgens op <b>Creëer project</b> en selecteer het als het is aangemaakt. </li>
                <li>Ga naar <b>API Manager → Credentials → OAuth</b> toestemmingsscherm en vul daar het formulier in. </li>
                <li>Next, ga naar <b>Credentials → Creëer credentials (OAuth client ID type)</b> en selecteer <b>Webapplicatie</b>.</li>
                <li>Stel <b>Authorize redirect URIs</b> in op <br /><b>{$callback_url}}</b></li>.
                <li>Plak na registratie de aangemaakte applicatiegegevens (Client ID voor applicatie-ID en Client Secret voor applicatiegeheim) in het onderstaande formulier.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Klant-ID',
            ],
            'client_secret' => [
                'label' => 'Geheim van de klant',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Apple' => [
        'title' => 'Apple',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Volg deze stappen om de verificatie met deze provider in te schakelen en een nieuwe applicatie te registreren:
            ',
        'fields' => [
            'client_id' => [
                'label' => 'Klant-ID',
            ],
            'client_secret' => [
                'label' => 'Geheim van de klant',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Microsoft' => [
        'title' => 'Microsoft',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Volg deze stappen om de authenticatie met deze provider in te schakelen en een nieuwe applicatie te registreren:
                <ol>
                <li>Ga naar: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> en log in indien nodig</li>
                <li>Maak een nieuwe toepassing aan.</li>
                <li>Vul de verplichte velden in, zoals de naam van de applicatie en de beschrijving.</li>
                <li>Stel <b>Redirect URL</b> in op <br /><b>{{$callback_url}}</b></li>
                <li>Als u zich hebt geregistreerd, plakt u de aangemaakte applicatiegegevens in het onderstaande formulier. </li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Klant-ID',
            ],
            'client_secret' => [
                'label' => 'Geheim van de klant',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Linkedin' => [
        'title' => 'LinkedIn',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Volg deze stappen om de authenticatie met deze provider in te schakelen en een nieuwe applicatie te registreren:
            <ol>
                <li>Ga naar: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> en log in indien nodig.</li>
                <li>Maak een nieuwe toepassing aan.</li>
                <li>Vul de verplichte velden in, zoals de applicatienaam en de beschrijving</li>
                <li>Kies <b>Live</b> onder <b>Live Status</b>.</li>
                <li>Selecteer <b>r_liteprofile</b> en <b>r_emailaddress</b>.</li>
                <li>Stel <b>Redirect URL</b> in op <br /><b>{{$callback_url}}</b></li>.
                <li>Als je je hebt geregistreerd, plak je de aangemaakte aanmeldingsgegevens in het onderstaande formulier.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Klant-ID',
            ],
            'client_secret' => [
                'label' => 'Geheim van de klant',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Facebook' => [
        'title' => 'Facebook',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Volg deze stappen om de authenticatie met deze provider in te schakelen en een nieuwe applicatie te registreren:
            <ol>
                <li>Ga naar: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> en log in indien nodig.</li>
                <li>Maak een nieuwe toepassing aan.</li>
                <li>Vul <b>Display Name</b>, <b>Contact Email</b> in, kies een categorie en klik op <b>Create App ID</b>. </li>
                <li>Ga naar de <b>Instellingen</b> pagina en kopieer <b>App ID</b> en <b>App Geheim</b> naar dit formulier.</li>
                <li>Keer terug naar <b>+Product toevoegen</b> en selecteer <b>Facebook login</b></li>.
                <li>Stel <b>Valide OAuth redirect URIs</b> in op <br /><b>{{$callback_url}}</b></li>.
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Klant-ID',
            ],
            'client_secret' => [
                'label' => 'Geheim van de klant',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Github' => [
        'title' => 'GitHub',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Volg deze stappen om de authenticatie met deze provider in te schakelen en een nieuwe applicatie te registreren:
            <ol>
                <li>Ga naar: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> en log in indien nodig.</li>
                <li>Maak een nieuwe toepassing aan.</li>
                <li>Vul <b>Naam, Beschrijving, Website URL</b> in.</li>
                <li>Stel <b>Redirect URL</b> in op <br /><b>{$callback_url}}</b></li>.
                <li>Zend het formulier in en werk de applicatie-instellingen bij. </li>
                <li>Vind op de volgende pagina en kopieer Client ID en Client Secret van <b>OAuth Information</b> naar de onderstaande velden.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Klant-ID',
            ],
            'client_secret' => [
                'label' => 'Geheim van de klant',
            ],
        ],
    ],
];
