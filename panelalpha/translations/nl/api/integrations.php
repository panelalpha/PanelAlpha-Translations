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
use App\Lib\Integrations\DnsServers\PowerDns;
use App\Lib\Integrations\EmailProvider\MailerSend;
use App\Lib\Integrations\EmailProvider\Mailgun;
use App\Lib\Integrations\EmailProvider\Postmark;
use App\Lib\Integrations\EmailProvider\Smtp;
use App\Lib\Integrations\EmailProvider\SendGrid;
use App\Lib\Integrations\EmailServers\Cpanel as CpanelEmailServer;
use App\Lib\Integrations\EmailServers\Mailcow;
use App\Lib\Integrations\GooglePageSpeedInsights;
use App\Lib\Integrations\Onboarding\Extendify;
use App\Lib\Integrations\PreviewSiteProvider\WithoutDns;
use App\Lib\Integrations\ReportProviders\GoogleAnalytics;
use App\Lib\Integrations\ReportProviders\Matomo;
use App\Lib\Integrations\SslProviders\LetsEncrypt;
use App\Lib\Integrations\SslProviders\SelfSigned;

return [
    DbIp::class => [
        "title" => "DB IP",
        "subtitle" => "Gebruikt om de locatie te bepalen bij het inloggen vanaf een nieuw apparaat",
        "description" => "DB-IP is een krachtige geolocatie-database die IP-adressen toewijst aan fysieke locaties. Het stelt bedrijven in staat inhoud en diensten aan te passen op basis van specifieke regio's, gerichte reclame te verbeteren en de gebruikerservaring te verbeteren.",
        "instruction" => "PanelAlpha maakt gebruik van een gratis geolocatie-database die is voorbereid door DB-IP. De voorwaarde voor het gebruik van deze database is om een backlink naar DB-IP.com op te nemen op pagina's die resultaten van de database weergeven of gebruiken.<br>Daarom wordt deze link opgenomen in de e-mail voor nieuwe apparaatdetectie.",
        "fields" => [
            "db-ip-accepted" => [
                "label" => "Ik ga akkoord met de licentievoorwaarden"
            ]
        ]
    ],
    GooglePageSpeedInsights::class => [
        "title" => "Google PageSpeed Insights ",
        "subtitle" => "Gebruikt om screenshots van instanties te maken en de laadsnelheid van pagina's te berekenen",
        "description" => "Google PageSpeed Insights is een tool die de snelheid en prestaties van uw website op desktop- en mobiele apparaten analyseert. Het biedt bruikbare suggesties om laadtijden en gebruikerservaring te verbeteren.",
        "instruction" => "Om Google PageSpeed Insights te gebruiken, volg deze stappen:<ol><li>Ga naar <a href='https://developers.google.com/speed/docs/insights/v5/get-started#key' target='_blank'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Log in op uw Google-account indien nodig.</li><li>Maak een nieuwe API-sleutel aan door op de knop \"Get a Key\" te klikken.</li><li>Selecteer een bestaand project of maak een nieuw project aan en klik op de knop \"Next\".</li><li>Zodra de API-sleutel is aangemaakt, wordt deze op het scherm weergegeven. Kopieer deze sleutel en gebruik deze om Google PageSpeed Insights te integreren.</li></ol>",
        "fields" => [
            "api-key" => [
                "label" => "API-sleutel",
                "placeholder" => "Voer uw API-sleutel in..."
            ]
        ]
    ],
    LetsEncrypt::class => [
        "title" => "Let's Encrypt",
        "subtitle" => "Gebruikt om SSL-certificaten voor instanties uit te geven",
        "description" => "Let's Encrypt is een gratis, geautomatiseerde en open Certificate Authority die HTTPS-encryptie voor websites biedt. Het is eenvoudig te installeren en gebruiken, en het zorgt ervoor dat uw website veilig en toegankelijk is voor iedereen.",
        "instruction" => "Om Let's Encrypt te gebruiken, volg je deze stappen:<ol><li>Voer uw e-mailadres in het veld Contact Email in.</li><li>Lees de \"Let's Encrypt Subscriber Agreement\" zorgvuldig door en accepteer de servicevoorwaarden.</li><li>Uw account wordt dan aangemaakt en de SSL-certificaatintegratie wordt automatisch ingeschakeld.</li><li>Ga naar Configuratie > Automatische SSL en stel de Automatische SSL-provider in op \"Let's Encrypt\".</li><li>Vanaf nu zal Let's Encrypt automatisch SSL-certificaten uitgeven voor instanties.</li></ol>",
        "fields" => [
            "account-id" => [
                "label" => "Let's Encrypt Account",
                "placeholder" => "Account zal worden gegenereerd na het opslaan van wijzigingen"
            ],
            "contact-email" => [
                "label" => "Contact Email",
                "placeholder" => "Voer uw e-mail in..."
            ],
            "tos-accepted" => [
                "label" => "Accepteer Servicevoorwaarden"
            ]
        ]
    ],
    SelfSigned::class => [
        "title" => "Self Signed",
    ],
    Matomo::class => [
        "title" => "Matomo (deprecated)",
        "subtitle" => "Gebruikt voor het verzamelen en analyseren van websiteverkeergegevens",
        "description" => "Sinds versie 1.4.1 heeft PanelAlpha Matomo niet meer nodig om sitestatistieken te krijgen en is nu gebaseerd op een intern hulpmiddel. De integratie met Matomo zal volledig worden verwijderd uit PanelAlpha in versie 1.5 (gepland voor juli/augustus). Het uitschakelen van deze plugin veroorzaakt geen problemen met sitestatistieken.",
        "instruction" => "Om Matomo te gebruiken, volg deze stappen:<ol><li>Ga naar de Matomo-URL: <a href=\"{{\$url}}\" target=\"_blank\">{{\$url}}</a></li><li>Ga door het Matomo-installatieproces.</li><li>Log in op Matomo.</li><li>Navigeer naar Configuratie &gt; Persoonlijk &gt; Beveiliging.</li><li>Onder aan de pagina klikt u op \"Nieuwe token aanmaken\" om een nieuwe token te genereren.</li><li>Keer terug naar PanelAlpha en voer de API-token in.</li></ol>",
        "fields" => [
            "url" => [
                "label" => "URL",
                "placeholder" => "Voer Matomo-URL in"
            ],
            "api-token" => [
                "label" => "API-token",
                "placeholder" => "Voer API-token in"
            ]
        ]
    ],
    Extendify::class => [
        "title" => "Extendify",
        "subtitle" => "Gebruikt voor Super Snelle Onboarding van instanties",
        "description" => "Extendify biedt een website-builder-achtige onboarding-ervaring voor uw eindklanten. Stel uw hostingklanten in staat om in minuten mooie, professioneel uitziende websites te maken met behulp van de nieuwste AI-technologieën native in WordPress.",
        "instruction" => "Om <b>Extendify</b> te gebruiken, gebruik de \"Super Quick Onboarding\" methode in uw plannen.<br>Heeft u nog geen account? <a href=\"https://extendify.com/pricing/\" target=\"_blank\">Stel uw account in</a>.",
        "fields" => [
            "partner_id" => [
                "label" => "Partner-ID",
                "placeholder" => "Voer Partner-ID in"
            ]
        ]
    ],
    GoogleAnalytics::class => [
        "title" => "Google Analytics",
        "subtitle" => "Gebruikt voor het verzamelen en analyseren van websiteverkeergegevens",
        "description" => "Google Analytics biedt gratis hulpmiddelen voor het consolideren en analyseren van uw bedrijfsgegevens, waardoor het besluitvormingsproces gegevensgericht wordt",
        "instruction" => "Om Google Analytics te gebruiken, volg deze stappen:<ol><li>Ga naar de Google Analytics-site: <a href=\"https://analytics.google.com\" target=\"_blank\">https://analytics.google.com/</a></li><li>Log in op uw Google-account indien nog niet ingelogd.</li><li>Maak een Google Analytics-account aan.</li><li>Navigeer naar Beheer > Accountinstellingen > Accountdetails en vind uw Account-ID.</li><li>Kopieer en plak de Property-ID in het onderstaande formulier.</li><li>Maak een credentials JSON-bestand aan zoals <a href=\"https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file\" target=\"_blank\">beschreven in de documentatie</a>.</li><li>Voeg het JSON-bestand bij in het veld Service Account Credentials hieronder.</li></ol><br>Waarschuwing! Deze integratie werkt op basis van javascript-code die automatisch wordt geïnstalleerd op klantinstanties. De gebruiker kan deze code verwijderen en de integratie stopt met werken.",
        "fields" => [
            "account-id" => [
                "label" => "Account-ID",
                "placeholder" => "Voer Account-ID in"
            ],
            "service-account-credentials-json" => [
                "label" => "Service Account Credentials",
                "placeholder" => "Voeg Service Credentials JSON-bestand bij"
            ]
        ]
    ],
    WithoutDns::class => [
        "title" => "WithoutDNS",
        "subtitle" => "Maakt snelle preview van WordPress mogelijk",
        "description" => "WithoutDNS biedt een uitgebreide toolkit die test- en migratieprocessen vereenvoudigt. Het biedt een tijdelijke URL die uw domein naar een opgegeven server-IP-adres leidt via een van onze proxy-servers.",
        "instruction" => "Om WithoutDNS te gebruiken, volg deze stappen:<ol><li>Ga naar <a href=\"https://withoutdns.com/api-configuration\" target=\"_blank\">https://withoutdns.com/</a></li><li>Log in op uw account indien nodig.</li><li>Maak een nieuwe API-token aan door op de knop \"Generate Token\" te klikken.</li><li>Kopieer en plak de API-token in het onderstaande formulier.</li><li>Voer een testverbinding uit.</li><li>Na het uitvoeren van de testverbinding verschijnen de opties voor Tijdelijke Domein en Tijdelijke URL-duur. Zodra u ze selecteert, is de integratie klaar voor gebruik.</li></ol><br>Zonder volledige configuratie voltooid, staat de integratie toe tot drie tijdelijke links te genereren.",
        "fields" => [
            "api-token" => [
                "label" => "API-token",
                "placeholder" => "Voer uw API-token in"
            ],
            'temporary-url-duration' => [
                "label" => 'Tijdelijke URL-duur',
                "tooltip" => "Definieer hoe lang de gegenereerde preview-URL voor de site toegankelijk blijft voordat deze verloopt.",
                "options" => [
                    "15m" => "15 Minuten",
                    "1h" => "1 Uur",
                    "24h" => '24 uur',
                    "7d" => '7 dagen',
                    "30d" => '30 dagen',
                    "never" => 'Nooit'
                ]
            ],
            'temporary_domain' => [
                'label' => "Tijdelijk Domein",
                "tooltip" => "Selecteer het domein dat moet worden gebruikt voor het genereren van de tijdelijke URL voor clients om de site te previewen.",
            ]
        ]
    ],

    //Email Providers
    Smtp::class => [
        "title" => "SMTP",
        "fields" => [
            "host" => [
                "label" => "Host",
                "tooltip" => "E-mailhost verwijst naar de server of hostingprovider."
            ],
            "port" => [
                "label" => "Poort",
                "tooltip" => "E-mailpoort verwijst naar een specifieke poort gewijd aan het verwerken van e-mailverkeer."
            ],
            "encryption" => [
                "label" => "SSL-type",
                "tooltip" => "SSL-type verwijst naar de encryptiemethode (SSL of TLS) gebruikt om de verbinding tussen de e-mailclient en server te beveiligen.",
                "options" => [
                    "none" => "Geen",
                    "ssl" => "SSL",
                    "tls" => "TLS",
                ]
            ],
            "username" => [
                "label" => "Gebruikersnaam",
                "tooltip" => "Gebruikersnaam is een naam gekoppeld aan een e-mailaccount."
            ],
            "password" => [
                "label" => "Wachtwoord",
                "tooltip" => "E-mailwachtwoord is een wachtwoord voor authenticatie en toegang tot een e-mailaccount."
            ]
        ]
    ],
    Postmark::class => [
        "title" => "Postmark",
        "fields" => [
            "token" => [
                "label" => "Token",
                "tooltip" => "Postmark-token verwijst naar API-token gebruikt voor toegang met de Postmark e-mailbezorgservice."
            ],
        ]
    ],
    MailerSend::class => [
        "title" => "MailerSend",
        "fields" => [
            "api_token" => [
                "label" => "API-token",
                "tooltip" => "API-token wordt gebruikt om verzoeken te authenticeren bij het verzenden van e-mails."
            ],
        ]
    ],
    Mailgun::class => [
        "title" => "Mailgun",
        "fields" => [
            "domain" => [
                "label" => "Domein",
                "tooltip" => "Voer uw Mailgun-domeinnaam in."
            ],
            "secret" => [
                "label" => "API-sleutel",
                "tooltip" => "Geef uw Mailgun API-sleutel voor authenticatie."
            ],
            "endpoint" => [
                "label" => "Regio",
                "tooltip" => "Selecteer uw Mailgun-regio.",
                "options" => [
                    "us" => "Verenigde Staten",
                    "eu" => "Europese Unie",
                ]
            ],
        ]
    ],
    SendGrid::class => [
        "title" => "SendGrid",
        "fields" => [
            "api_key" => [
                "label" => "API-sleutel",
                "tooltip" => "API-sleutel wordt gebruikt om verzoeken te authenticeren bij het verzenden van e-mails."
            ],
        ]
    ],
    // Hosting Servers
    App\Lib\Integrations\HostingServers\Cpanel::class => [
        "title" => "cPanel",
        "description" => "cPanel - cloudgehoste collaboratiesoftware en e-mailplatform",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Gebruikersnaam',
            ],
            'api_token' => [
                'label' => 'API-token',
                'link_label' => 'Hoe een API-token aan te maken',
            ],
            'ssl_verification' => [
                'label' => 'SSL-verificatie',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'WHM-pakket',
            ]
        ]
    ],
    App\Lib\Integrations\HostingServers\DirectAdmin::class => [
        "title" => "Direct Admin",
        "description" => "DirectAdmin - cloudgehoste collaboratiesoftware en e-mailplatform",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Gebruikersnaam',
            ],
            'password' => [
                'label' => 'Wachtwoord',
            ],
            'ssl_verification' => [
                'label' => 'SSL-verificatie',
            ],
        ],
        "config" => [
            'package' => [
                'label' => 'Pakket',
            ],
            'ip_address' => [
                'label' => 'IP-adres',
            ]
        ]
    ],
    App\Lib\Integrations\HostingServers\Plesk::class => [
        "title" => "Plesk",
        "description" => "Plesk - cloudgehoste collaboratiesoftware en e-mailplatform",
        "fields" => [
            'url' => [
                'label' => 'IP/Hostnaam',
            ],
            'username' => [
                'label' => 'Gebruikersnaam',
            ],
            'password' => [
                'label' => 'Wachtwoord',
            ],
            'ssl_verification' => [
                'label' => 'SSL-verificatie',
            ],
        ],
        "config" => [
            'ip_address' => [
                'label' => 'IP-adres',
                'tooltip' => "Selecteer een beschikbaar IP-adres",
            ],
            'hosting_plan' => [
                'label' => 'Hostingplan',
                'tooltip' => "Selecteer een hostingplan voor het abonnement. Belangrijk: deze optie is alleen beschikbaar wanneer 'Reseller-account' is uitgeschakeld.",
            ],
            'reseller_account' => [
                'label' => 'Reseller-account',
                'tooltip' => "Schakel deze optie in om klantaccounts onder de reseller aan te maken. Vereist dat een 'resellerplan' wordt geselecteerd. Let op: deze optie is mogelijk niet beschikbaar als de server geen reseller-accounts ondersteunt.",
            ],
            'reseller_plan' => [
                'label' => 'Resellerplan',
                'tooltip' => "Selecteer een resellerplan. Belangrijk: deze optie is alleen beschikbaar wanneer 'Reseller-account' is ingeschakeld. Let op: deze optie is mogelijk niet beschikbaar als de server geen reseller-accounts ondersteunt.",
            ],
        ]
    ],
    App\Lib\Integrations\HostingServers\PanelAlpha::class => [
        "title" => "PanelAlpha Engine",
        "description" => "PanelAlpha - een op Docker gebaseerde webhostingoplossing",
        "fields" => [
            'api_url' => [
                'label' => 'API-URL',
            ],
            'api_token' => [
                'label' => 'API-token',
            ],
        ],
        "config" => [
            'disk_space_limit' => [
                'label' => 'Schijfruimtelimiet (MB)',
            ],
            'memory_limit' => [
                'label' => 'Geheugenlimiet (MB)',
            ],
            'cpu_limit' => [
                'label' => 'CPU-limiet',
            ],
            'device_read_bps' => [
                'label' => 'Leeslimiet (bytes per seconde)',
            ],
            'device_write_bps' => [
                'label' => 'Schrijflimiet (bytes per seconde)',
            ],
            'bandwidth_limit' => [
                'label' => 'Bandbreedtelimiet (MB per maand)',
            ],
            'mysql_databases_limit' => [
                'label' => 'Limiet MySQL-databases'
            ],
            'ftp_accounts_limit' => [
                'label' => 'Limiet FTP-accounts',
            ],
            'sftp_accounts_limit' => [
                'label' => 'Limiet SFTP-accounts',
            ],
            'addon_domains_limit' => [
                'label' => 'Limiet addon-domeinen',
            ],
            'subdomains_limit' => [
                'label' => 'Limiet subdomeinen',
            ],
            'inodes_limit' => [
                'label' => 'Limiet inodes',
            ],
            'enable_redis_cache' => [
                'label' => 'Redis-cache inschakelen',
            ],
            'enable_litespeed_cache' => [
                'label' => 'LiteSpeed-cache inschakelen',
            ],
            'php_fpm_pool_settings' => [
                'label' => 'PHP-FPM pool-instellingen',
            ],
            'lsphp_settings' => [
                'label' => 'LSPHP-instellingen',
            ],
            'dedicated_ipv4' => [
                'label' => 'Toegewijd IPv4',
            ],
            'dedicated_ipv6' => [
                'label' => 'Toegewijd IPv6',
            ],
        ]
    ],
    App\Lib\Integrations\HostingServers\WpCloud::class => [
        "title" => "WP Cloud",
        "description" => "WP Cloud - cloudhosting gericht op WordPress",
        "fields" => [
            'client_identifier' => [
                'label' => 'Clientidentifier',
            ],
            'api_key' => [
                'label' => 'API-sleutel',
            ]
        ],
        "config" => [
            'space_quota' => [
                'label' => 'Schijfquota',
                'tooltip' => 'Schijfruimte voor sites. De standaardwaarde is in megabytes, maar om deze in gigabytes op te geven moet het achtervoegsel \'GB\' worden toegevoegd. De maximale waarde is 200 GB.',
            ],
            'php_workers' => [
                'label' => 'PHP Workers',
                'tooltip' => 'Stel het aantal CPU- en PHP-workers in. Standaard kun je een waarde tussen 2 en 10 instellen. Neem voor andere opties contact op met WP Cloud.',
            ],
            'php_memory_limit' => [
                'label' => 'PHP-geheugenlimiet',
                'tooltip' => 'Stel de PHP-geheugenlimiet per verzoek in.',
            ],
            'burst_up_php_workers' => [
                'label' => 'Burst-up PHP Workers',
                'tooltip' => 'Sta dynamische burst toe tot 110 PHP-workers.',
            ],
            'allow_user_choose_location' => [
                'label' => 'Gebruiker locatie laten kiezen',
                'tooltip' => 'Sta gebruikers toe een locatie te kiezen voor nieuwe instanties.',
            ],
            'geo_affinity' => [
                'label' => 'Standaard datacenter',
                'tooltip' => 'Selecteer het datacenter waaraan de pagina’s worden toegewezen.',
            ],
            'default_ssh_access_enabled' => [
                'label' => 'Standaard SSH-toegang ingeschakeld',
                'tooltip' => 'Stel SSH-toegang standaard in voor alle nieuwe WP Cloud-instanties.',
            ],
            'allow_user_enable_ssh_access' => [
                'label' => 'Gebruiker SSH-toegang laten inschakelen',
                'tooltip' => 'Sta gebruikers toe SSH/SFTP-toegang tot hun WP Cloud-instantie te beheren.',
            ],
        ]
    ],
    // Email Servers
    Mailcow::class => [
        "title" => "Mailcow",
        "description" => "mailcow - dockerized is een open source groupware/e-mailsuite gebaseerd op docker",
        "fields" => [
            'api_url' => [
                'label' => 'API-URL',
            ],
            'api_key' => [
                'label' => 'API-sleutel',
            ],
        ],
        "config" => [
            'domain_template' => [
                'label' => 'Domeinsjabloon',
            ]
        ]
    ],
    CpanelEmailServer::class => [
        "title" => "cPanel",
        "description" => 'cPanel - Een Cloud-Gehoste Samenwerkingssoftware en E-mailplatform',
        "fields" => [
            'url' => [
                'label' => 'IP/Hostnaam',
            ],
            'username' => [
                'label' => 'Gebruikersnaam',
            ],
            'api_token' => [
                'label' => 'API-token',
            ],
            'ssl_verification' => [
                'label' => 'SSL-verificatie',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'WHM-pakket',
            ]
        ]
    ],

    // DNS Servers
    Cloudflare::class => [
        "title" => "Cloudflare",
        "description" => 'Cloudflare - Het Web Prestatie & Beveiligingsbedrijf',
        "fields" => [
            'api_token' => [
                'label' => 'API-token',
            ],
            'account_id' => [
                'label' => 'Account-ID',
            ],
        ],
    ],
    App\Lib\Integrations\DnsServers\CpanelDnsOnly::class => [
        "title" => "cPanel DNSOnly",
        "description" => 'cPanel DNSOnly - maakt het mogelijk een dedicated nameserver te draaien',
        "fields" => [
            'url' => [
                'label' => 'IP/Hostnaam',
            ],
            'username' => [
                'label' => 'Gebruikersnaam',
            ],
            'api_token' => [
                'label' => 'API-token',
                'link_label' => 'Hoe een API-token aan te maken',
            ],
            'nameserver_1' => [
                'label' => 'Nameserver 1',
            ],
            'nameserver_2' => [
                'label' => 'Nameserver 2',
            ],
            'nameserver_3' => [
                'label' => 'Nameserver 3',
            ],
            'nameserver_4' => [
                'label' => 'Nameserver 4',
            ]
        ],
    ],
    App\Lib\Integrations\DnsServers\DnsManagerForWhmcs::class => [
        "title" => "DNS Manager For WHMCS",
        "description" => 'DNS Manager For WHMCS - module voor DNS-zonebeheer',
        "fields" => [
            'whmcs_url' => [
                'label' => 'WHMCS-URL',
            ],
            'whmcs_api_token' => [
                'label' => 'WHMCS API-token',
            ],
        ]
    ],
    PowerDns::class => [
        "title" => "PowerDNS",
        "description" => 'PowerDNS - toonaangevende aanbieder van veilige open-source en commerciële DNS-software',
        "fields" => [
            'api_url' => [
                'label' => 'API-URL',
            ],
            'api_token' => [
                'label' => 'API-token',
            ],
            'server' => [
                'label' => 'Server',
            ],
            'zones_kind' => [
                'label' => 'Zones Soort',
            ],
            'nameservers' => [
                'label' => 'Nameservers (kommagescheiden)',
            ],
        ]
    ],

    // Auth
    Google::class => [
        "title" => "Google",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Volg deze stappen om de authenticatie met deze provider in te schakelen en een nieuwe applicatie te registreren:
                <ol>
                <li>Ga naar: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> en log in indien nodig.</li>
                <li>Klik op <b>Selecteer Project</b>, druk dan op <b>Maak Project aan</b> en selecteer het wanneer aangemaakt. </li>
                <li>Ga naar <b>API Manager → Credentials → OAuth</b> toestemmingsscherm en vul het formulier daar in. </li>
                <li>Ga vervolgens naar <b>Credentials → Maak credentials aan (OAuth client ID type)</b> en selecteer <b>Webapplicatie</b>.</li>
                <li>Stel <b>Authorize redirect URIs</b> in op  <br /><b>{{$callback_url}}</b></li>
                <li>Zodra u heeft geregistreerd plak de aangemaakte applicatiecredentials (Client ID voor applicatie-ID en Client Secret voor Applicatiegeheim) in het formulier hieronder.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'Client-ID',
            ],
            'client_secret' => [
                'label' => 'Clientgeheim',
            ],
        ]
    ],
    Apple::class => [
        "title" => "Apple",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Volg deze stappen om de authenticatie met deze provider in te schakelen en een nieuwe applicatie te registreren:
            ',
        "fields" => [
            'client_id' => [
                'label' => 'Client-ID',
            ],
            'client_secret' => [
                'label' => 'Clientgeheim',
            ],
        ]
    ],
    Microsoft::class => [
        "title" => "Microsoft",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Volg deze stappen om de authenticatie met deze provider in te schakelen en een nieuwe applicatie te registreren:
                <ol>
                <li>Ga naar: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> en log in indien nodig</li>
                <li>Maak een nieuwe applicatie aan.</li>
                <li>Vul alle vereiste velden in zoals de applicatienaam en de beschrijving.</li>
                <li>Stel <b>Redirect URL</b> in op <br /><b>{{$callback_url}}</b></li>
                <li>Zodra u heeft geregistreerd, plak de aangemaakte applicatiecredentials in het formulier hieronder. </li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'Client-ID',
            ],
            'client_secret' => [
                'label' => 'Clientgeheim',
            ],
        ]
    ],
    Linkedin::class => [
        "title" => "LinkedIn",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Follow these steps to enable the authentication with this provider and to register a new application:
            <ol>
                <li>Proceed to: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> and log in if necessary.</li>
                <li>Create a new application.</li>
                <li>Fill out any required fields, such as the application name and its description</li>
                <li>Choose <b>Live</b> under <b>Live Status</b>.</li>
                <li>Select <b>r_liteprofile</b> and <b>r_emailaddress</b> permissions.</li>
                <li>Set <b>Redirect URL</b> to <br /><b>{{$callback_url}}</b></li>
                <li>Once you have registered, paste the created application credentials into the form below.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'Client ID',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
            ],
        ]
    ],
    Facebook::class => [
        "title" => "Facebook",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Follow these steps to enable the authentication with this provider and to register a new application:
            <ol>
                <li>Proceed to: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> and log in if necessary.</li>
                <li>Create a new application.</li>
                <li>Fill out <b>Display Name</b>, <b>Contact Email</b>, choose a category and click <b>Create App ID</b>. </li>
                <li>Go to <b>Settings</b> page and copy <b>App ID</b> and <b>App Secret</b> to this form.</li>
                <li>Come back to <b>+Add Product</b> and select <b>Facebook Login</b></li>
                <li>Set <b>Valid OAuth redirect URIs</b> to <br /><b>{{$callback_url}}</b></li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'Client ID',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
            ],
        ]
    ],
    Github::class => [
        "title" => "GitHub",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Follow these steps to enable the authentication with this provider and to register a new application:
            <ol>
                <li>Proceed to: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> and log in if necessary.</li>
                <li>Create a new application.</li>
                <li>Fill out <b>Name, Description, Website URL</b>.</li>
                <li>Set <b>Redirect URL</b> to <br /><b>{{$callback_url}}</b></li>
                <li>Submit the form and update the application settings. </li>
                <li>Find on the next page and copy Client ID and Client Secret from <b>OAuth Information</b> to the fields below.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'Client ID',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
            ],
        ]
    ],
    Atarim::class => [
        "title" => "Atarim",
        "subtitle" => "Gebruikt voor visuele samenwerking en feedback op websites",
        "description" => "Atarim stroomlijnt website‑samenwerking doordat teams en klanten visuele feedback direct op live sites kunnen achterlaten, waardoor opmerkingen worden omgezet in uitvoerbare taken om projecten sneller op te leveren.",
        "instruction" => "Om Atarim te gebruiken, volg je deze stappen:
            <ol>
                <li>Ga naar de <a href=\"https://atarim.firstpromoter.com/signup/32353\" target=\"_blank\">Atarim‑aanmeldpagina</a></li>
                <li>Maak een account aan of log in op een bestaand account.</li>
                <li>Kopieer de <strong>referrallink</strong> en plak deze in het onderstaande veld.</li>
            </ol>",
        "fields" => [
            'link' => [
                'label' => 'Koppeling',
            ],
        ]
    ],
];
