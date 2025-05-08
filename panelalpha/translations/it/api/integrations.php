<?php

return [
    'App\\Lib\\Integrations\\DbIp' => [
        'title' => 'DB IP',
        'subtitle' => 'Utilizzato per determinare la posizione quando si accede da un nuovo dispositivo.',
        'description' => 'DB-IP è un potente database di geolocalizzazione che mappa gli indirizzi IP in luoghi fisici. Consente alle aziende di personalizzare i contenuti e i servizi in base a regioni specifiche, di migliorare la pubblicità mirata e di migliorare l\'esperienza degli utenti.',
        'instruction' => 'PanelAlpha utilizza un database di geolocalizzazione gratuito preparato da DB-IP. La condizione per l\'utilizzo di questo database è quella di includere un backlink a DB-IP.com in tutte le pagine che visualizzano o utilizzano i risultati del database.<br>Quindi, questo link sarà incluso nell\'e-mail per il rilevamento di nuovi dispositivi.',
        'fields' => [
            'db-ip-accepted' => [
                'label' => 'Accetto i termini di licenza',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\GooglePageSpeedInsights' => [
        'title' => 'Google PageSpeed Insights',
        'subtitle' => 'Utilizzato per scattare screenshot delle istanze e per calcolare la velocità di caricamento delle pagine',
        'description' => 'Google PageSpeed Insights è uno strumento che analizza la velocità e le prestazioni del vostro sito web su dispositivi desktop e mobili. Fornisce suggerimenti praticabili per migliorare i tempi di caricamento e l\'esperienza dell\'utente.',
        'instruction' => 'Per utilizzare Google PageSpeed Insights, seguire i seguenti passaggi:<ol><li>Andare su <a href=\'https://developers.google.com/speed/docs/insights/v5/get-started#key\' target=\'_blank\'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Accedere al proprio account Google, se necessario.</li><li>Creare una nuova chiave API facendo clic sul pulsante "Get a Key".</li><li>Selezionare un progetto esistente o crearne uno nuovo e fare clic sul pulsante "Next".</li><li>Una volta creata la chiave API, questa verrà visualizzata sullo schermo. Copiare questa chiave e utilizzarla per integrare Google PageSpeed Insights.</li></ol>',
        'fields' => [
            'api-key' => [
                'label' => 'Chiave API',
                'placeholder' => 'Inserire la chiave API...',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\SslProviders\\LetsEncrypt' => [
        'title' => 'Let\'s Encrypt',
        'subtitle' => 'Utilizzato per emettere certificati SSL per le istanze',
        'description' => 'Let\'s Encrypt è un\'autorità di certificazione gratuita, automatica e aperta che fornisce la crittografia HTTPS per i siti web. È facile da installare e utilizzare e garantisce che il vostro sito web sia sicuro e accessibile a tutti.',
        'instruction' => 'Per utilizzare Let\'s Encrypt, è necessario seguire i seguenti passaggi:<ol><li>Inserire il proprio indirizzo e-mail nel campo Contact Email.</li><li>Leggere attentamente il "Let\'s Encrypt Subscriber Agreement" e accettare i termini di servizio.</li><li>Il vostro account sarà quindi creato e l\'integrazione del certificato SSL sarà automaticamente abilitata.</li><li>Andate su Configurazione > SSL automatico e impostate il Provider SSL automatico su "Let\'s Encrypt".</li><li>D\'ora in poi, Let\'s Encrypt emetterà automaticamente i certificati SSL per le istanze.</li></ol>',
        'fields' => [
            'account-id' => [
                'label' => 'Conto Let\'s Encrypt',
                'placeholder' => 'Il conto verrà generato dopo aver salvato le modifiche',
            ],
            'contact-email' => [
                'label' => 'Contatto e-mail',
                'placeholder' => 'Inserisci la tua email...',
            ],
            'tos-accepted' => [
                'label' => 'Accettare i termini di servizio',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\SslProviders\\SelfSigned' => [
        'title' => 'Autografato',
    ],
    'App\\Lib\\Integrations\\ReportProviders\\Matomo' => [
        'title' => 'Matomo',
        'subtitle' => 'Impiegato per la raccolta e l\'analisi dei dati sul traffico del sito web',
        'description' => 'Matomo Analytics è una piattaforma di analisi web incentrata sulla privacy che aiuta a tracciare il traffico del sito web e il comportamento degli utenti. È personalizzabile e fornisce informazioni dettagliate, mantenendo i dati degli utenti al sicuro.',
        'instruction' => 'Per utilizzare Matomo, seguire i seguenti passaggi:<ol><li>Andare all\'URL di Matomo: <a href="{{$url}}" target="_blank">{$url}}</a></li><li>Eseguire il processo di installazione di Matomo.</li><li>Eseguire il login in Matomo.</li><li>Viaggiare su Configurazione &gt; Personale &gt; Sicurezza.</li><li>In fondo alla pagina, cliccare su "Crea nuovo token" per generare un nuovo token.</li><li>Tornare a PanelAlpha e inserire il token API.</li></ol>',
        'fields' => [
            'url' => [
                'label' => 'URL',
                'placeholder' => 'Inserire l\'URL di Matomo',
            ],
            'api-token' => [
                'label' => 'Token API',
                'placeholder' => 'Inserire il token API',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Onboarding\\Extendify' => [
        'title' => 'Estendere',
        'subtitle' => 'Utilizzato per l\'onboarding super rapido delle istanze',
        'description' => 'Extendify offre ai vostri clienti finali un\'esperienza di onboarding simile a quella di un costruttore di siti web. Permette ai vostri clienti di hosting di creare siti web belli e professionali in pochi minuti, utilizzando le più recenti tecnologie AI nativamente in WordPress.',
        'instruction' => 'Per utilizzare <b>Extendify</b>, utilizzate il metodo "Super Quick Onboarding" nei vostri piani.<br>Non avete ancora un account? <a href="https://extendify.com/pricing/" target="_blank">Configura il tuo account</a>.',
        'fields' => [
            'partner_id' => [
                'label' => 'ID partner',
                'placeholder' => 'Inserire l\'ID del partner',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\ReportProviders\\GoogleAnalytics' => [
        'title' => 'Google Analytics',
        'subtitle' => 'Impiegato per la raccolta e l\'analisi dei dati sul traffico del sito web',
        'description' => 'Google Analytics offre strumenti gratuiti per consolidare e analizzare i dati aziendali, consentendo di orientare il processo decisionale ai dati.',
        'instruction' => 'Per utilizzare Google Analytics, seguire i seguenti passaggi:<ol><li>Andare al sito di Google Analytics: <a href="https://analytics.google.com" target="_blank">https://analytics.google.com/</a></li><li>Accedere al proprio account Google se non si è già effettuato l\'accesso.</li><li>Creare un account Google Analytics.</li><li>Viaggiare su Amministrazione > Impostazioni account > Dettagli account e trovare il proprio ID account.</li><li>Copiare e incollare l\'ID proprietà nel modulo sottostante.</li><li>Creare un file JSON di credenziali come <a href="https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file" target="_blank">descritto nella documentazione</a>.</li><li>Inserire il file JSON nel campo Credenziali dell\'account di servizio sottostante.</li></ol><br>Attenzione! Questa integrazione funziona sulla base di un codice javascript installato automaticamente sulle istanze del cliente. L\'utente può rimuovere questo codice e l\'integrazione smetterà di funzionare.',
        'fields' => [
            'account-id' => [
                'label' => 'ID conto',
                'placeholder' => 'Inserire l\'ID del conto',
            ],
            'service-account-credentials-json' => [
                'label' => 'Credenziali dell\'account di servizio',
                'placeholder' => 'Allegare il file JSON delle credenziali del servizio',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\PreviewSiteProvider\\WithoutDns' => [
        'title' => 'SenzaDNS',
        'subtitle' => 'Consente un\'anteprima rapida di WordPress',
        'description' => 'WithoutDNS fornisce un kit di strumenti completo che semplifica i processi di test e migrazione. Fornisce un URL temporaneo che indirizza il dominio a un indirizzo IP del server specificato attraverso uno dei nostri server proxy.',
        'instruction' => 'Per utilizzare WithoutDNS, seguire i seguenti passaggi:<ol><li>Andare su <a href="https://withoutdns.com/api-configuration" target="_blank">https://withoutdns.com/</a></li><li>Eseguire il login al proprio account, se necessario.</li><li>Creare un nuovo token API facendo clic sul pulsante "Generate Token".</li><li>Copiare e incollare il token API nel modulo sottostante.</li><li>Eseguire una connessione di prova.</li><li>Dopo aver eseguito la connessione di prova, appariranno le opzioni per Dominio temporaneo e Durata URL temporaneo. Una volta selezionate, l\'integrazione sarà pronta per l\'uso.</li></ol><br>Senza completare la configurazione, l\'integrazione consente di generare fino a tre link temporanei.',
        'fields' => [
            'api-token' => [
                'label' => 'Token API',
                'placeholder' => 'Inserite il vostro token API',
            ],
            'temporary-url-duration' => [
                'label' => 'Durata dell\'URL temporaneo',
                'tooltip' => 'Definire per quanto tempo l\'URL di anteprima generato per il sito rimarrà accessibile prima di scadere.',
                'options' => [
                    '15m' => '15 minuti',
                    '1h' => '1 ora',
                    '24h' => '24 ore',
                    '7d' => '7 giorni',
                    '30d' => '30 giorni',
                    'never' => 'Mai',
                ],
            ],
            'temporary_domain' => [
                'label' => 'Dominio temporaneo',
                'tooltip' => 'Selezionare il dominio da utilizzare per generare l\'URL temporaneo per i clienti che desiderano visualizzare l\'anteprima del sito.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Smtp' => [
        'title' => 'SMTP',
        'fields' => [
            'host' => [
                'label' => 'Ospite',
                'tooltip' => 'L\'host e-mail si riferisce al server o al provider di hosting.',
            ],
            'port' => [
                'label' => 'Port',
                'tooltip' => 'La porta e-mail si riferisce a una porta specifica dedicata alla gestione del traffico e-mail.',
            ],
            'encryption' => [
                'label' => 'Tipo SSL',
                'tooltip' => 'Il tipo di SSL si riferisce al metodo di crittografia (SSL o TLS) utilizzato per proteggere la connessione tra il client e-mail e il server.',
                'options' => [
                    'none' => 'Nessuno',
                    'ssl' => 'SSL',
                    'tls' => 'TLS',
                ],
            ],
            'username' => [
                'label' => 'Nome utente',
                'tooltip' => 'Il nome utente è un nome associato a un account e-mail.',
            ],
            'password' => [
                'label' => 'parola d\'ordine',
                'tooltip' => 'La password e-mail è una password per l\'autenticazione e l\'accesso a un account e-mail.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Postmark' => [
        'title' => 'Postmark',
        'fields' => [
            'token' => [
                'label' => 'Gettone',
                'tooltip' => 'Il token Postmark si riferisce al token API utilizzato per accedere al servizio di consegna delle e-mail Postmark.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\MailerSend' => [
        'title' => 'MailerSend',
        'fields' => [
            'api_token' => [
                'label' => 'Token API',
                'tooltip' => 'Il token API viene utilizzato per autenticare le richieste effettuate durante l\'invio di e-mail.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Mailgun' => [
        'title' => 'Mailgun',
        'fields' => [
            'domain' => [
                'label' => 'Dominio',
                'tooltip' => 'Inserire il nome di dominio Mailgun.',
            ],
            'secret' => [
                'label' => 'Chiave API',
                'tooltip' => 'Fornire la chiave API di Mailgun per l\'autenticazione.',
            ],
            'endpoint' => [
                'label' => 'Regione',
                'tooltip' => 'Selezionare la propria regione Mailgun.',
                'options' => [
                    'us' => 'Stati Uniti',
                    'eu' => 'Unione Europea',
                ],
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\SendGrid' => [
        'title' => 'InviaGrid',
        'fields' => [
            'api_key' => [
                'label' => 'Chiave API',
                'tooltip' => 'La chiave API viene utilizzata per autenticare le richieste effettuate durante l\'invio di e-mail.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailServers\\Mailcow' => [
        'title' => 'Mailcow',
        'description' => 'mailcow - dockerized è una suite groupware/email open source basata su docker',
        'fields' => [
            'api_url' => [
                'label' => 'URL API',
            ],
            'api_key' => [
                'label' => 'Chiave API',
            ],
        ],
        'config' => [
            'domain_template' => [
                'label' => 'Modello di dominio',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailServers\\Cpanel' => [
        'title' => 'cPanel',
        'description' => 'cPanel - Un software di collaborazione e una piattaforma e-mail ospitati nel cloud',
        'fields' => [
            'url' => [
                'label' => 'IP/nome host',
            ],
            'username' => [
                'label' => 'Nome utente',
            ],
            'api_token' => [
                'label' => 'Token API',
            ],
            'ssl_verification' => [
                'label' => 'Verifica SSL',
            ],
        ],
        'config' => [
            'whm_package' => [
                'label' => 'Pacchetto WHM',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Google' => [
        'title' => 'Google',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Seguite questi passaggi per abilitare l\'autenticazione con questo provider e per registrare una nuova applicazione:
                <ol>
                <li>Procedi a:: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> e accedere se necessario.</li>
                <li>Cliccare su <b>Seleziona progetto</b>, quindi premere <b>Crea progetto</b> e selezionarlo una volta creato. </li>
                <li>Passare alla schermata di consenso <b>API Manager → Credenziali → OAuth</b> e compilare il modulo. </li>
                <li>Proseguire con <b>Credenziali → Crea credenziali (tipo ID client OAuth)</b> e selezionare <b>Applicazione web</b>.</li>
                <li>Impostare <b>Autorizza URI di reindirizzamento</b> a <br /><b>{{$callback_url}}</b></li>
                <li>Una volta effettuata la registrazione, incollare le credenziali dell\'applicazione creata (Client ID per l\'ID dell\'applicazione e Client Secret per il Segreto dell\'applicazione) nel modulo sottostante.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID cliente',
            ],
            'client_secret' => [
                'label' => 'Segreto del cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Apple' => [
        'title' => 'Apple',
        'subtitle' => ' ',
        'description' => '',
        'instruction' => 'Seguite questi passaggi per abilitare l\'autenticazione con questo provider e per registrare una nuova applicazione:
            ',
        'fields' => [
            'client_id' => [
                'label' => 'ID cliente',
            ],
            'client_secret' => [
                'label' => 'Segreto del cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Microsoft' => [
        'title' => 'Microsoft',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Seguite questi passaggi per abilitare l\'autenticazione con questo provider e per registrare una nuova applicazione:
                <ol>
                <li>Procedere a: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> e accedere se necessario</li>.
                <li>Creare una nuova applicazione.</li>
                <li>Compilare tutti i campi obbligatori, come il nome dell\'applicazione e la sua descrizione.
                <li>Impostare <b>Redirect URL</b> a <br /><b>{$callback_url}}</b></li>
                <li>Una volta effettuata la registrazione, incollare le credenziali dell\'applicazione creata nel modulo sottostante. </li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID cliente',
            ],
            'client_secret' => [
                'label' => 'Segreto del cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Linkedin' => [
        'title' => 'LinkedIn',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Seguite questi passaggi per abilitare l\'autenticazione con questo provider e per registrare una nuova applicazione:
            <ol>
                <li>Procedi a: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> e accedere se necessario.</li>
                <li>Creare una nuova applicazione.</li>
                <li>Compilare tutti i campi obbligatori, come il nome dell\'applicazione e la sua descrizione</li>.
                <li>Scegliere <b>Live</b> sotto <b>Stato live</b>.</li>
                <li>Selezionare i permessi <b>r_liteprofile</b> e <b>r_emailaddress</b>.
                <li>Impostare <b>Redirect URL</b> a <br /><b>{$callback_url}}</b></li>
                <li>Una volta effettuata la registrazione, incollare le credenziali dell\'applicazione creata nel modulo sottostante.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID cliente',
            ],
            'client_secret' => [
                'label' => 'Segreto del cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Facebook' => [
        'title' => 'Facebook',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Seguite questi passaggi per abilitare l\'autenticazione con questo provider e per registrare una nuova applicazione:
            <ol>
                <li>Procedi a: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> e accedere se necessario.</li>
                <li>Creare una nuova applicazione.</li>
                <li>Compilare <b>Display Name</b>, <b>Contact Email</b>, scegliere una categoria e fare clic su <b>Create App ID</b>. </li>
                <li>Andare alla pagina <b>Impostazioni</b> e copiare <b>App ID</b> e <b>App Secret</b> in questo modulo.</li>
                <li>Tornare a <b>Aggiungi prodotto</b> e selezionare <b>Facebook Login</b></li>
                <li>Impostare <b>URI di reindirizzamento OAuth validi</b> a <br /><b>{{$callback_url}}</b></li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID cliente',
            ],
            'client_secret' => [
                'label' => 'Segreto del cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Github' => [
        'title' => 'GitHub',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Seguite questi passaggi per abilitare l\'autenticazione con questo provider e per registrare una nuova applicazione:
            <ol>
                <li>Procedi a: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> e accedere se necessario.</li>
                <li>Creare una nuova applicazione.</li>
                <li>Compilare <b>nome, descrizione, URL del sito web</b>.</li>
                <li>Impostare <b>Redirect URL</b> a <br /><b>{{$callback_url}}</b></li>
                <li>Inviare il modulo e aggiornare le impostazioni dell\'applicazione. </li>
                <li>Trovare nella pagina successiva e copiare Client ID e Client Secret da <b>OAuth Information</b> nei campi sottostanti.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID cliente',
            ],
            'client_secret' => [
                'label' => 'Segreto del cliente',
            ],
        ],
    ],
];
