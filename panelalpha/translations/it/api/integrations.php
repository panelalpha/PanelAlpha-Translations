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
        "subtitle" => "Utilizzato per determinare la posizione durante l'accesso da un nuovo dispositivo",
        "description" => "DB-IP è un potente database di geolocalizzazione che mappa gli indirizzi IP su posizioni fisiche. Consente alle aziende di personalizzare contenuti e servizi in base a regioni specifiche, migliorare la pubblicità mirata e migliorare l'esperienza utente.",
        "instruction" => "PanelAlpha utilizza un database di geolocalizzazione gratuito preparato da DB-IP. La condizione per l'utilizzo di questo database è includere un backlink a DB-IP.com su qualsiasi pagina che visualizza o utilizza risultati dal database.<br>Pertanto, questo link sarà incluso nell'email per il rilevamento di nuovi dispositivi.",
        "fields" => [
            "db-ip-accepted" => [
                "label" => "Accetto i termini di licenza"
            ]
        ]
    ],
    GooglePageSpeedInsights::class => [
        "title" => "Google PageSpeed Insights ",
        "subtitle" => "Utilizzato per scattare screenshot delle istanze e calcolare la velocità di caricamento delle pagine",
        "description" => "Google PageSpeed Insights è uno strumento che analizza la velocità e le prestazioni del tuo sito web su dispositivi desktop e mobili. Fornisce suggerimenti attuabili per migliorare i tempi di caricamento e l'esperienza utente.",
        "instruction" => "Per utilizzare Google PageSpeed Insights, segui questi passaggi:<ol><li>Vai a <a href='https://developers.google.com/speed/docs/insights/v5/get-started#key' target='_blank'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Accedi al tuo account Google se necessario.</li><li>Crea una nuova chiave API facendo clic sul pulsante \"Get a Key\".</li><li>Seleziona un progetto esistente o creane uno nuovo e fai clic sul pulsante \"Next\".</li><li>Una volta creata la chiave API, verrà visualizzata sullo schermo. Copia questa chiave e utilizzala per integrare Google PageSpeed Insights.</li></ol>",
        "fields" => [
            "api-key" => [
                "label" => "Chiave API",
                "placeholder" => "Inserisci la tua chiave API..."
            ]
        ]
    ],
    LetsEncrypt::class => [
        "title" => "Let's Encrypt",
        "subtitle" => "Utilizzato per emettere certificati SSL per le istanze",
        "description" => "Let's Encrypt è un'autorità di certificazione gratuita, automatizzata e aperta che fornisce crittografia HTTPS per i siti web. È facile da installare e utilizzare, e garantisce che il tuo sito web sia sicuro e accessibile a tutti.",
        "instruction" => "Per utilizzare Let's Encrypt, dovresti seguire questi passaggi:<ol><li>Inserisci il tuo indirizzo email nel campo Contact Email.</li><li>Leggi attentamente la \"Let's Encrypt Subscriber Agreement\" e accetta i termini di servizio.</li><li>Il tuo account verrà quindi creato e l'integrazione del certificato SSL verrà abilitata automaticamente.</li><li>Vai a Configuration > Automatic SSL e imposta il Automatic SSL Provider su \"Let's Encrypt\".</li><li>D'ora in poi, Let's Encrypt emetterà automaticamente certificati SSL per le istanze.</li></ol>",
        "fields" => [
            "account-id" => [
                "label" => "Account Let's Encrypt",
                "placeholder" => "L'account verrà generato dopo aver salvato le modifiche"
            ],
            "contact-email" => [
                "label" => "Email di contatto",
                "placeholder" => "Inserisci la tua email..."
            ],
            "tos-accepted" => [
                "label" => "Accetta i termini di servizio"
            ]
        ]
    ],
    SelfSigned::class => [
        "title" => "Self Signed",
    ],
    Matomo::class => [
        "title" => "Matomo (deprecato)",
        "subtitle" => "Utilizzato per la raccolta e l'analisi dei dati sul traffico del sito web",
        "description" => "Dalla versione 1.4.1, PanelAlpha non ha più bisogno di Matomo per ottenere statistiche del sito e ora si basa su uno strumento interno. L'integrazione con Matomo verrà completamente rimossa da PanelAlpha nella versione 1.5 (prevista per luglio/agosto). La disabilitazione di questo plugin non causerà problemi con le statistiche del sito.",
        "instruction" => "Per utilizzare Matomo, segui questi passaggi:<ol><li>Vai all'URL di Matomo: <a href=\"{{\$url}}\" target=\"_blank\">{{\$url}}</a></li><li>Attraversa il processo di installazione di Matomo.</li><li>Accedi a Matomo.</li><li>Naviga su Configuration &gt; Personal &gt; Security.</li><li>In fondo alla pagina, fai clic su \"Create new token\" per generare un nuovo token.</li><li>Torna a PanelAlpha e inserisci il Token API.</li></ol>",
        "fields" => [
            "url" => [
                "label" => "URL",
                "placeholder" => "Inserisci URL Matomo"
            ],
            "api-token" => [
                "label" => "Token API",
                "placeholder" => "Inserisci Token API"
            ]
        ]
    ],
    Extendify::class => [
        "title" => "Extendify",
        "subtitle" => "Utilizzato per l'onboarding super veloce delle istanze",
        "description" => "Extendify fornisce un'esperienza di onboarding simile a un costruttore di siti web per i tuoi clienti finali. Potenzia i tuoi clienti di hosting per creare siti web belli e dall'aspetto professionale in pochi minuti utilizzando le ultime tecnologie AI in modo nativo in WordPress.",
        "instruction" => "Per utilizzare <b>Extendify</b>, utilizza il metodo \"Super Quick Onboarding\" nei tuoi piani.<br>Non hai ancora un account? <a href=\"https://extendify.com/pricing/\" target=\"_blank\">Configura il tuo account</a>.",
        "fields" => [
            "partner_id" => [
                "label" => "ID Partner",
                "placeholder" => "Inserisci ID Partner"
            ]
        ]
    ],
    GoogleAnalytics::class => [
        "title" => "Google Analytics",
        "subtitle" => "Utilizzato per raccogliere e analizzare i dati sul traffico del sito web",
        "description" => "Google Analytics offre strumenti gratuiti per consolidare e analizzare i dati della tua azienda, consentendo al processo decisionale di essere orientato ai dati",
        "instruction" => "Per utilizzare Google Analytics, segui questi passaggi:<ol><li>Vai al sito Google Analytics: <a href=\"https://analytics.google.com\" target=\"_blank\">https://analytics.google.com/</a></li><li>Accedi al tuo account Google se non sei già connesso.</li><li>Crea un account Google Analytics.</li><li>Naviga su Administration > Account Settings > Account Details e trova il tuo Account ID.</li><li>Copia e incolla il Property ID nel modulo sottostante.</li><li>Crea un file JSON delle credenziali come <a href=\"https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file\" target=\"_blank\">descritto nella documentazione</a>.</li><li>Allega il file JSON nel campo Service Account Credentials sottostante.</li></ol><br>Avvertimento! Questa integrazione funziona basata su codice javascript installato automaticamente sulle istanze del cliente. L'utente può rimuovere questo codice e l'integrazione smetterà di funzionare.",
        "fields" => [
            "account-id" => [
                "label" => "ID Account",
                "placeholder" => "Inserisci ID Account"
            ],
            "service-account-credentials-json" => [
                "label" => "Credenziali Account di Servizio",
                "placeholder" => "Allega file JSON delle credenziali di servizio"
            ]
        ]
    ],
    WithoutDns::class => [
        "title" => "WithoutDNS",
        "subtitle" => "Abilita l'anteprima rapida di WordPress",
        "description" => "WithoutDNS fornisce un toolkit completo che semplifica i processi di test e migrazione. Fornisce un URL temporaneo che dirige il tuo dominio a un indirizzo IP del server specificato attraverso uno dei nostri server proxy.",
        "instruction" => "Per utilizzare WithoutDNS, segui questi passaggi:<ol><li>Vai a <a href=\"https://withoutdns.com/api-configuration\" target=\"_blank\">https://withoutdns.com/</a></li><li>Accedi al tuo account se necessario.</li><li>Crea un nuovo Token API facendo clic sul pulsante \"Generate Token\".</li><li>Copia e incolla il Token API nel modulo sottostante.</li><li>Esegui una connessione di test.</li><li>Dopo aver eseguito la connessione di test, appariranno le opzioni per Temporary Domain e Temporary URL Duration. Una volta selezionate, l'integrazione sarà pronta per l'uso.</li></ol><br>Senza completare completamente la configurazione, l'integrazione consente la generazione di fino a tre link temporanei.",
        "fields" => [
            "api-token" => [
                "label" => "Token API",
                "placeholder" => "Inserisci il tuo Token API"
            ],
            'temporary-url-duration' => [
                "label" => 'Durata URL Temporaneo',
                "tooltip" => "Definisci per quanto tempo l'URL di anteprima generato per il sito rimarrà accessibile prima di scadere.",
                "options" => [
                    "15m" => "15 Minuti",
                    "1h" => "1 Ora",
                    "24h" => '24 ore',
                    "7d" => '7 giorni',
                    "30d" => '30 giorni',
                    "never" => 'Mai'
                ]
            ],
            'temporary_domain' => [
                'label' => "Dominio Temporaneo",
                "tooltip" => "Seleziona il dominio da utilizzare per generare l'URL temporaneo per i clienti per visualizzare in anteprima il sito.",
            ]
        ]
    ],

    //Email Providers
    Smtp::class => [
        "title" => "SMTP",
        "fields" => [
            "host" => [
                "label" => "Host",
                "tooltip" => "L'host email si riferisce al server o al provider di hosting."
            ],
            "port" => [
                "label" => "Porta",
                "tooltip" => "La porta email si riferisce a una porta specifica dedicata alla gestione del traffico email."
            ],
            "encryption" => [
                "label" => "Tipo SSL",
                "tooltip" => "Il Tipo SSL si riferisce al metodo di crittografia (SSL o TLS) utilizzato per proteggere la connessione tra il client email e il server.",
                "options" => [
                    "none" => "Nessuno",
                    "ssl" => "SSL",
                    "tls" => "TLS",
                ]
            ],
            "username" => [
                "label" => "Nome utente",
                "tooltip" => "Il nome utente è un nome associato a un account email."
            ],
            "password" => [
                "label" => "Password",
                "tooltip" => "La password email è una password per l'autenticazione e l'accesso a un account email."
            ]
        ]
    ],
    Postmark::class => [
        "title" => "Postmark",
        "fields" => [
            "token" => [
                "label" => "Token",
                "tooltip" => "Il token Postmark si riferisce al token API utilizzato per accedere al servizio di consegna email Postmark."
            ],
        ]
    ],
    MailerSend::class => [
        "title" => "MailerSend",
        "fields" => [
            "api_token" => [
                "label" => "Token API",
                "tooltip" => "Il token API viene utilizzato per autenticare le richieste effettuate durante l'invio di email."
            ],
        ]
    ],
    Mailgun::class => [
        "title" => "Mailgun",
        "fields" => [
            "domain" => [
                "label" => "Dominio",
                "tooltip" => "Inserisci il nome del dominio Mailgun."
            ],
            "secret" => [
                "label" => "Chiave API",
                "tooltip" => "Fornisci la tua chiave API Mailgun per l'autenticazione."
            ],
            "endpoint" => [
                "label" => "Regione",
                "tooltip" => "Seleziona la tua regione Mailgun.",
                "options" => [
                    "us" => "Stati Uniti",
                    "eu" => "Unione Europea",
                ]
            ],
        ]
    ],
    SendGrid::class => [
        "title" => "SendGrid",
        "fields" => [
            "api_key" => [
                "label" => "Chiave API",
                "tooltip" => "La chiave API viene utilizzata per autenticare le richieste effettuate durante l'invio di email."
            ],
        ]
    ],
    // Hosting Servers
    App\Lib\Integrations\HostingServers\Cpanel::class => [
        "title" => "cPanel",
        "description" => "cPanel - un software di collaborazione ospitato nel cloud e una piattaforma email",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Nome utente',
            ],
            'api_token' => [
                'label' => 'Token API',
                'link_label' => 'Come creare un token API',
            ],
            'ssl_verification' => [
                'label' => 'Verifica SSL',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'Pacchetto WHM',
            ]
        ]
    ],
    App\Lib\Integrations\HostingServers\DirectAdmin::class => [
        "title" => "Direct Admin",
        "description" => "DirectAdmin - un software di collaborazione ospitato nel cloud e una piattaforma email",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Nome utente',
            ],
            'password' => [
                'label' => 'Password',
            ],
            'ssl_verification' => [
                'label' => 'Verifica SSL',
            ],
        ],
        "config" => [
            'package' => [
                'label' => 'Pacchetto',
            ],
            'ip_address' => [
                'label' => 'Indirizzo IP',
            ]
        ]
    ],
    App\Lib\Integrations\HostingServers\Plesk::class => [
        "title" => "Plesk",
        "description" => "Plesk - un software di collaborazione ospitato nel cloud e una piattaforma email",
        "fields" => [
            'url' => [
                'label' => 'IP/Nome host',
            ],
            'username' => [
                'label' => 'Nome utente',
            ],
            'password' => [
                'label' => 'Password',
            ],
            'ssl_verification' => [
                'label' => 'Verifica SSL',
            ],
        ],
        "config" => [
            'ip_address' => [
                'label' => 'Indirizzo IP',
                'tooltip' => "Seleziona un indirizzo IP disponibile",
            ],
            'hosting_plan' => [
                'label' => 'Piano di hosting',
                'tooltip' => "Seleziona un piano di hosting per l’abbonamento. Importante: questa opzione è disponibile solo quando 'Account rivenditore' è disabilitato.",
            ],
            'reseller_account' => [
                'label' => 'Account rivenditore',
                'tooltip' => "Abilita questa opzione per consentire la creazione di account cliente sotto il rivenditore. Richiede la selezione di un 'piano rivenditore'. Nota: questa opzione potrebbe non essere disponibile se il server non supporta account rivenditore.",
            ],
            'reseller_plan' => [
                'label' => 'Piano rivenditore',
                'tooltip' => "Seleziona un piano rivenditore. Importante: questa opzione è disponibile solo quando 'Account rivenditore' è abilitato. Nota: questa opzione potrebbe non essere disponibile se il server non supporta account rivenditore.",
            ],
        ]
    ],
    App\Lib\Integrations\HostingServers\PanelAlpha::class => [
        "title" => "PanelAlpha Engine",
        "description" => "PanelAlpha - una soluzione di webhosting basata su Docker",
        "fields" => [
            'api_url' => [
                'label' => 'URL API',
            ],
            'api_token' => [
                'label' => 'Token API',
            ],
        ],
        "config" => [
            'disk_space_limit' => [
                'label' => 'Limite spazio su disco (MB)',
            ],
            'memory_limit' => [
                'label' => 'Limite memoria (MB)',
            ],
            'cpu_limit' => [
                'label' => 'Limite CPU',
            ],
            'device_read_bps' => [
                'label' => 'Limite velocità lettura (byte al secondo)',
            ],
            'device_write_bps' => [
                'label' => 'Limite velocità scrittura (byte al secondo)',
            ],
            'bandwidth_limit' => [
                'label' => 'Limite banda (MB al mese)',
            ],
            'mysql_databases_limit' => [
                'label' => 'Limite database MySQL'
            ],
            'ftp_accounts_limit' => [
                'label' => 'Limite account FTP',
            ],
            'sftp_accounts_limit' => [
                'label' => 'Limite account SFTP',
            ],
            'addon_domains_limit' => [
                'label' => 'Limite domini addon',
            ],
            'subdomains_limit' => [
                'label' => 'Limite sottodomini',
            ],
            'inodes_limit' => [
                'label' => 'Limite inodes',
            ],
            'enable_redis_cache' => [
                'label' => 'Abilita cache Redis',
            ],
            'enable_litespeed_cache' => [
                'label' => 'Abilita cache LiteSpeed',
            ],
            'php_fpm_pool_settings' => [
                'label' => 'Impostazioni pool PHP-FPM',
            ],
            'lsphp_settings' => [
                'label' => 'Impostazioni LSPHP',
            ],
            'dedicated_ipv4' => [
                'label' => 'IPv4 dedicato',
            ],
            'dedicated_ipv6' => [
                'label' => 'IPv6 dedicato',
            ],
        ]
    ],
    App\Lib\Integrations\HostingServers\WpCloud::class => [
        "title" => "WP Cloud",
        "description" => "WP Cloud - hosting cloud orientato a WordPress",
        "fields" => [
            'client_identifier' => [
                'label' => 'Identificatore client',
            ],
            'api_key' => [
                'label' => 'Chiave API',
            ]
        ],
        "config" => [
            'space_quota' => [
                'label' => 'Quota disco',
                'tooltip' => 'Spazio disco per i siti. Il valore predefinito è in megabyte, ma per specificarlo in gigabyte è necessario aggiungere il suffisso \'GB\'. Il valore massimo è 200 GB.',
            ],
            'php_workers' => [
                'label' => 'PHP Workers',
                'tooltip' => 'Imposta il numero di CPU e PHP Workers. Per impostazione predefinita, puoi scegliere un valore tra 2 e 10. Per altre opzioni, contatta WP Cloud.',
            ],
            'php_memory_limit' => [
                'label' => 'Limite memoria PHP',
                'tooltip' => 'Imposta il limite di memoria PHP per richiesta.',
            ],
            'burst_up_php_workers' => [
                'label' => 'Burst di PHP Workers',
                'tooltip' => 'Consente di aumentare dinamicamente fino a 110 PHP Workers.',
            ],
            'allow_user_choose_location' => [
                'label' => 'Consenti all’utente di scegliere la posizione',
                'tooltip' => 'Consente agli utenti di scegliere la posizione per le nuove istanze.',
            ],
            'geo_affinity' => [
                'label' => 'Datacenter predefinito',
                'tooltip' => 'Seleziona il datacenter a cui verranno assegnate le pagine.',
            ],
            'default_ssh_access_enabled' => [
                'label' => 'Accesso SSH predefinito abilitato',
                'tooltip' => 'Imposta l’accesso SSH abilitato per impostazione predefinita su tutte le nuove istanze WP Cloud.',
            ],
            'allow_user_enable_ssh_access' => [
                'label' => 'Consenti all’utente di abilitare l’accesso SSH',
                'tooltip' => 'Consente agli utenti di gestire l’accesso SSH/SFTP alla propria istanza WP Cloud.',
            ],
        ]
    ],
    // Email Servers
    Mailcow::class => [
        "title" => "Mailcow",
        "description" => "mailcow - dockerized is an open source groupware/email suite based on docker",
        "fields" => [
            'api_url' => [
                'label' => 'API URL',
            ],
            'api_key' => [
                'label' => 'API Key',
            ],
        ],
        "config" => [
            'domain_template' => [
                'label' => 'Domain Template',
            ]
        ]
    ],
    CpanelEmailServer::class => [
        "title" => "cPanel",
        "description" => 'cPanel - A Cloud-Hosted Collaboration Software and Email Platform',
        "fields" => [
            'url' => [
                'label' => 'IP/Hostname',
            ],
            'username' => [
                'label' => 'Username',
            ],
            'api_token' => [
                'label' => 'API Token',
            ],
            'ssl_verification' => [
                'label' => 'SSL Verification',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'WHM Package',
            ]
        ]
    ],

    // DNS Servers
    Cloudflare::class => [
        "title" => "Cloudflare",
        "description" => 'Cloudflare - The Web Performance & Security Company',
        "fields" => [
            'api_token' => [
                'label' => 'API Token',
            ],
            'account_id' => [
                'label' => 'Account ID',
            ],
        ],
    ],
    App\Lib\Integrations\DnsServers\CpanelDnsOnly::class => [
        "title" => "cPanel DNSOnly",
        "description" => 'cPanel DNSOnly - consente di eseguire un nameserver dedicato',
        "fields" => [
            'url' => [
                'label' => 'IP/Nome host',
            ],
            'username' => [
                'label' => 'Nome utente',
            ],
            'api_token' => [
                'label' => 'Token API',
                'link_label' => 'Come creare un token API',
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
        "description" => 'DNS Manager For WHMCS - modulo di gestione delle zone DNS',
        "fields" => [
            'whmcs_url' => [
                'label' => 'URL WHMCS',
            ],
            'whmcs_api_token' => [
                'label' => 'Token API WHMCS',
            ],
        ]
    ],
    PowerDns::class => [
        "title" => "PowerDNS",
        "description" => 'PowerDNS - leading provider of secure open-source and commercial DNS software',
        "fields" => [
            'api_url' => [
                'label' => 'API URL',
            ],
            'api_token' => [
                'label' => 'API Token',
            ],
            'server' => [
                'label' => 'Server',
            ],
            'zones_kind' => [
                'label' => 'Zones Kind',
            ],
            'nameservers' => [
                'label' => 'Nameservers (comma separated)',
            ],
        ]
    ],

    // Auth
    Google::class => [
        "title" => "Google",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Segui questi passaggi per abilitare l\'autenticazione con questo provider e registrare una nuova applicazione:
                <ol>
                <li>Vai a: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> e accedi se necessario.</li>
                <li>Fai clic su <b>Select Project</b>, quindi premi <b>Create Project</b> e selezionalo quando creato. </li>
                <li>Vai a <b>API Manager → Credentials → OAuth</b> consent screen e compila il modulo lì. </li>
                <li>Successivamente, vai a <b>Credentials → Create credentials (OAuth client ID type)</b> e seleziona <b>Web application</b>.</li>
                <li>Imposta <b>Authorize redirect URIs</b> a  <br /><b>{{$callback_url}}</b></li>
                <li>Una volta registrato, incolla le credenziali dell\'applicazione creata (Client ID per application ID e Client Secret per Application secret) nel modulo sottostante.</li>
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
    Apple::class => [
        "title" => "Apple",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Segui questi passaggi per abilitare l\'autenticazione con questo provider e registrare una nuova applicazione:
            ',
        "fields" => [
            'client_id' => [
                'label' => 'Client ID',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
            ],
        ]
    ],
    Microsoft::class => [
        "title" => "Microsoft",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Segui questi passaggi per abilitare l\'autenticazione con questo provider e registrare una nuova applicazione:
                <ol>
                <li>Vai a: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> e accedi se necessario</li>
                <li>Crea una nuova applicazione.</li>
                <li>Compila tutti i campi richiesti come il nome dell\'applicazione e la sua descrizione.</li>
                <li>Imposta <b>Redirect URL</b> a <br /><b>{{$callback_url}}</b></li>
                <li>Una volta registrato, incolla le credenziali dell\'applicazione creata nel modulo sottostante. </li>
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
    Linkedin::class => [
        "title" => "LinkedIn",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Segui questi passaggi per abilitare l\'autenticazione con questo provider e registrare una nuova applicazione:
            <ol>
                <li>Vai a: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> e accedi se necessario.</li>
                <li>Crea una nuova applicazione.</li>
                <li>Compila tutti i campi richiesti, come il nome dell\'applicazione e la sua descrizione</li>
                <li>Scegli <b>Live</b> sotto <b>Live Status</b>.</li>
                <li>Seleziona i permessi <b>r_liteprofile</b> e <b>r_emailaddress</b>.</li>
                <li>Imposta <b>Redirect URL</b> a <br /><b>{{$callback_url}}</b></li>
                <li>Una volta registrato, incolla le credenziali dell\'applicazione creata nel modulo sottostante.</li>
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
        "instruction" => 'Segui questi passaggi per abilitare l\'autenticazione con questo provider e registrare una nuova applicazione:
            <ol>
                <li>Vai a: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> e accedi se necessario.</li>
                <li>Crea una nuova applicazione.</li>
                <li>Compila <b>Display Name</b>, <b>Contact Email</b>, scegli una categoria e fai clic su <b>Create App ID</b>. </li>
                <li>Vai alla pagina <b>Settings</b> e copia <b>App ID</b> e <b>App Secret</b> in questo modulo.</li>
                <li>Torna a <b>+Add Product</b> e seleziona <b>Facebook Login</b></li>
                <li>Imposta <b>Valid OAuth redirect URIs</b> a <br /><b>{{$callback_url}}</b></li>
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
        "instruction" => 'Segui questi passaggi per abilitare l\'autenticazione con questo provider e registrare una nuova applicazione:
            <ol>
                <li>Vai a: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> e accedi se necessario.</li>
                <li>Crea una nuova applicazione.</li>
                <li>Compila <b>Name, Description, Website URL</b>.</li>
                <li>Imposta <b>Redirect URL</b> a <br /><b>{{$callback_url}}</b></li>
                <li>Invia il modulo e aggiorna le impostazioni dell\'applicazione. </li>
                <li>Trova nella pagina successiva e copia Client ID e Client Secret da <b>OAuth Information</b> nei campi sottostanti.</li>
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
        "subtitle" => "Utilizzato per collaborazione visiva e feedback sui siti web",
        "description" => "Atarim semplifica la collaborazione sui siti web consentendo a team e clienti di lasciare feedback visivo direttamente sui siti live, trasformando i commenti in attività operative per accelerare la consegna del progetto.",
        "instruction" => "Per usare Atarim, segui questi passaggi:
            <ol>
                <li>Vai alla <a href=\"https://atarim.firstpromoter.com/signup/32353\" target=\"_blank\">pagina di registrazione di Atarim</a></li>
                <li>Crea un account oppure accedi a un account esistente.</li>
                <li>Copia il <strong>link di referral</strong> e incollalo nel campo sottostante.</li>
            </ol>",
        "fields" => [
            'link' => [
                'label' => 'Link',
            ],
        ]
    ],
];
