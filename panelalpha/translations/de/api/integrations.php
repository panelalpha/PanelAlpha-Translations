<?php

return [
    'App\\Lib\\Integrations\\DbIp' => [
        'subtitle' => 'Wird verwendet, um den Standort beim Einloggen von einem neuen Gerät zu bestimmen',
        'description' => 'DB-IP ist eine leistungsstarke Geolokalisierungsdatenbank, die IP-Adressen physischen Standorten zuordnet. Sie ermöglicht es Unternehmen, Inhalte und Dienste basierend auf bestimmten Regionen anzupassen, gezielte Werbung zu verbessern und die Benutzererfahrung zu optimieren.',
        'instruction' => 'PanelAlpha nutzt eine kostenlose Geolokalisierungsdatenbank, die von DB-IP bereitgestellt wird. Die Bedingung für die Nutzung dieser Datenbank ist, einen Backlink zu DB-IP.com auf allen Seiten einzufügen, die Ergebnisse aus der Datenbank anzeigen oder verwenden.<br>Deshalb wird dieser Link in der E-Mail für die Erkennung neuer Geräte enthalten sein.',
        'fields' => [
            'db-ip-accepted' => [
                'label' => 'Ich stimme den Lizenzbedingungen zu',
            ],
        ],
        'title' => 'DB IP',
    ],
    'App\\Lib\\Integrations\\GooglePageSpeedInsights' => [
        'subtitle' => 'Wird verwendet, um Screenshots von Instanzen zu machen und die Ladegeschwindigkeit von Seiten zu berechnen',
        'description' => 'Google PageSpeed Insights ist ein Tool, das die Geschwindigkeit und Leistung Ihrer Website auf Desktop- und Mobilgeräten analysiert. Es bietet umsetzbare Vorschläge zur Verbesserung der Ladezeiten und der Benutzererfahrung.',
        'instruction' => 'Um Google PageSpeed Insights zu nutzen, folgen Sie diesen Schritten:<ol><li>Gehen Sie zu <a href=\'https://developers.google.com/speed/docs/insights/v5/get-started#key\' target=\'_blank\'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Melden Sie sich bei Ihrem Google-Konto an, falls erforderlich.</li><li>Erstellen Sie einen neuen API-Schlüssel, indem Sie auf die Schaltfläche "Get a Key" klicken.</li><li>Wählen Sie ein bestehendes Projekt aus oder erstellen Sie ein neues und klicken Sie auf die Schaltfläche "Next".</li><li>Sobald der API-Schlüssel erstellt wurde, wird er auf dem Bildschirm angezeigt. Kopieren Sie diesen Schlüssel und verwenden Sie ihn, um Google PageSpeed Insights zu integrieren.</li></ol>',
        'fields' => [
            'api-key' => [
                'label' => 'API-Schlüssel',
                'placeholder' => 'Geben Sie Ihren API-Schlüssel ein...',
            ],
        ],
        'title' => 'Google PageSpeed Insights',
    ],
    'App\\Lib\\Integrations\\SslProviders\\LetsEncrypt' => [
        'subtitle' => 'Wird verwendet, um SSL-Zertifikate für Instanzen auszustellen',
        'description' => 'Let\'s Encrypt ist eine kostenlose, automatisierte und offene Zertifizierungsstelle, die HTTPS-Verschlüsselung für Websites bereitstellt. Es ist einfach zu installieren und zu verwenden und stellt sicher, dass Ihre Website sicher und für alle zugänglich ist.',
        'instruction' => 'Um Let\'s Encrypt zu verwenden, sollten Sie diese Schritte befolgen:<ol><li>Geben Sie Ihre E-Mail-Adresse im Feld Kontakt-E-Mail ein.</li><li>Lesen Sie die "Let\'s Encrypt Subscriber Agreement" sorgfältig durch und akzeptieren Sie die Nutzungsbedingungen.</li><li>Ihr Konto wird dann erstellt und die SSL-Zertifikatsintegration wird automatisch aktiviert.</li><li>Gehen Sie zu Konfiguration > Automatisches SSL und setzen Sie den automatischen SSL-Anbieter auf "Let\'s Encrypt".</li><li>Von nun an wird Let\'s Encrypt automatisch SSL-Zertifikate für Instanzen ausstellen.</li></ol>',
        'fields' => [
            'account-id' => [
                'label' => 'Let\'s Encrypt Konto',
                'placeholder' => 'Konto wird nach dem Speichern der Änderungen generiert',
            ],
            'contact-email' => [
                'label' => 'Kontakt-E-Mail',
                'placeholder' => 'Geben Sie Ihre E-Mail ein...',
            ],
            'tos-accepted' => [
                'label' => 'Ich stimme den Lizenzbedingungen zu',
            ],
        ],
        'title' => 'Let\'s Encrypt',
    ],
    'App\\Lib\\Integrations\\ReportProviders\\Matomo' => [
        'subtitle' => 'Wird für die Sammlung und Analyse von Website-Traffic-Daten verwendet',
        'description' => 'Matomo Analytics ist eine datenschutzorientierte Webanalyseplattform, die hilft, den Website-Traffic und das Benutzerverhalten zu verfolgen. Es ist anpassbar und bietet detaillierte Einblicke, während die Benutzerdaten sicher bleiben.',
        'instruction' => 'Um Matomo zu verwenden, folgen Sie diesen Schritten:<ol><li>Gehen Sie zur Matomo-URL: <a href="{{$url}}" target="_blank">{{$url}}</a></li><li>Durchlaufen Sie den Matomo-Installationsprozess.</li><li>Melden Sie sich bei Matomo an.</li><li>Navigieren Sie zu Konfiguration &gt; Persönlich &gt; Sicherheit.</li><li>Klicken Sie am unteren Rand der Seite auf "Neues Token erstellen", um ein neues Token zu generieren.</li><li>Kehren Sie zu PanelAlpha zurück und geben Sie das API-Token ein.</li></ol>',
        'fields' => [
            'url' => [
                'label' => 'URL',
                'placeholder' => 'Geben Sie die Matomo-URL ein',
            ],
            'api-token' => [
                'label' => 'API-Token',
                'placeholder' => 'Geben Sie das API-Token ein',
            ],
        ],
        'title' => 'Matomo',
    ],
    'App\\Lib\\Integrations\\Onboarding\\Extendify' => [
        'subtitle' => 'Wird für das super schnelle Onboarding von Instanzen verwendet',
        'description' => 'Extendify bietet ein Website-Builder-ähnliches Onboarding-Erlebnis für Ihre Endkunden. Ermöglichen Sie Ihren Hosting-Kunden, in wenigen Minuten schöne, professionell aussehende Websites mit den neuesten KI-Technologien direkt in WordPress zu erstellen.',
        'instruction' => 'Um <b>Extendify</b> zu verwenden, verwenden Sie bitte die Methode "Super Quick Onboarding" in Ihren Plänen.<br>Haben Sie noch kein Konto? <a href="https://extendify.com/pricing/" target="_blank">Richten Sie Ihr Konto ein</a>.',
        'fields' => [
            'partner_id' => [
                'label' => 'Partner-ID',
                'placeholder' => 'Geben Sie die Partner-ID ein',
            ],
        ],
        'title' => 'Erweitern Sie',
    ],
    'App\\Lib\\Integrations\\ReportProviders\\GoogleAnalytics' => [
        'subtitle' => 'Wird für die Sammlung und Analyse von Website-Traffic-Daten verwendet',
        'description' => 'Google Analytics bietet kostenlose Tools zur Konsolidierung und Analyse der Daten Ihres Unternehmens, um den Entscheidungsprozess datenorientiert zu gestalten.',
        'instruction' => 'Um Google Analytics zu verwenden, folgen Sie diesen Schritten:<ol><li>Gehen Sie zur Google Analytics-Website: <a href="https://analytics.google.com" target="_blank">https://analytics.google.com/</a></li><li>Melden Sie sich bei Ihrem Google-Konto an, falls Sie noch nicht angemeldet sind.</li><li>Erstellen Sie ein Google Analytics-Konto.</li><li>Navigieren Sie zu Verwaltung > Kontoeinstellungen > Kontodetails und finden Sie Ihre Konto-ID.</li><li>Kopieren und fügen Sie die Property-ID in das untenstehende Formular ein.</li><li>Erstellen Sie eine Anmeldeinformationen-JSON-Datei, wie in der <a href="https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file" target="_blank">Dokumentation beschrieben</a>.</li><li>Fügen Sie die JSON-Datei im Feld Service Account Credentials unten an.</li></ol><br>Warnung! Diese Integration funktioniert basierend auf JavaScript-Code, der automatisch auf Kundeninstanzen installiert wird. Der Benutzer kann diesen Code entfernen und die Integration wird nicht mehr funktionieren.',
        'fields' => [
            'account-id' => [
                'label' => 'Konto-ID',
                'placeholder' => 'Geben Sie die Konto-ID ein',
            ],
            'service-account-credentials-json' => [
                'label' => 'Service Account Credentials',
                'placeholder' => 'Fügen Sie die Service-Credentials-JSON-Datei an',
            ],
        ],
        'title' => 'Google Analytics',
    ],
    'App\\Lib\\Integrations\\SslProviders\\SelfSigned' => [
        'title' => 'Selbst unterschrieben',
    ],
    'App\\Lib\\Integrations\\PreviewSiteProvider\\WithoutDns' => [
        'title' => 'OhneDNS',
        'subtitle' => 'Ermöglicht eine schnelle Vorschau von WordPress',
        'description' => 'WithoutDNS bietet ein umfassendes Toolkit, das die Test- und Migrationsprozesse vereinfacht. Es stellt eine temporäre URL bereit, die Ihre Domain über einen unserer Proxy-Server zu einer bestimmten Server-IP-Adresse leitet.',
        'instruction' => 'Um WithoutDNS zu verwenden, führen Sie folgende Schritte aus:<ol><li>Gehen Sie zu <a href="https://withoutdns.com/api-configuration" target="_blank">https://withoutdns.com/</a></li><li>Loggen Sie sich bei Bedarf in Ihr Konto ein.</li><li>Erstellen Sie ein neues API-Token, indem Sie auf die Schaltfläche "Token generieren" klicken.</li><li>Kopieren Sie das API-Token und fügen Sie es in das unten stehende Formular ein.</li><li>Führen Sie eine Testverbindung durch.</li><li>Nach der Durchführung der Testverbindung werden die Optionen für temporäre Domain und temporäre URL-Dauer angezeigt. Sobald Sie diese ausgewählt haben, ist die Integration einsatzbereit.</li></ol><br>Ohne die Konfiguration vollständig abgeschlossen zu haben, erlaubt die Integration die Erstellung von bis zu drei temporären Links.',
        'fields' => [
            'api-token' => [
                'label' => 'API-Token',
                'placeholder' => 'Geben Sie Ihr API-Token ein',
            ],
            'temporary-url-duration' => [
                'label' => 'Temporäre URL Dauer',
                'tooltip' => 'Legen Sie fest, wie lange die generierte Vorschau-URL für die Website zugänglich bleiben soll, bevor sie abläuft.',
                'options' => [
                    '15m' => '15 Minuten',
                    '1h' => '1 Stunde',
                    '24h' => '24 Stunden',
                    '7d' => '7 Tage',
                    '30d' => '30 Tage',
                    'never' => 'Niemals',
                ],
            ],
            'temporary_domain' => [
                'label' => 'Vorläufiger Bereich',
                'tooltip' => 'Wählen Sie die Domain aus, die für die Generierung der temporären URL für Kunden zur Vorschau der Website verwendet werden soll.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Smtp' => [
        'title' => 'SMTP',
        'fields' => [
            'host' => [
                'label' => 'Gastgeber',
                'tooltip' => 'E-Mail-Host bezieht sich auf den Server oder den Hosting-Anbieter.',
            ],
            'port' => [
                'label' => 'Hafen',
                'tooltip' => 'E-Mail-Port bezieht sich auf einen bestimmten Port, der für die Abwicklung des E-Mail-Verkehrs vorgesehen ist.',
            ],
            'encryption' => [
                'label' => 'SSL-Typ',
                'tooltip' => 'SSL-Typ bezieht sich auf die Verschlüsselungsmethode (SSL oder TLS), die zur Sicherung der Verbindung zwischen dem E-Mail-Client und dem Server verwendet wird.',
                'options' => [
                    'none' => 'Keine',
                    'ssl' => 'SSL',
                    'tls' => 'TLS',
                ],
            ],
            'username' => [
                'label' => 'Benutzername',
                'tooltip' => 'Der Benutzername ist ein Name, der mit einem E-Mail-Konto verbunden ist.',
            ],
            'password' => [
                'label' => 'Passwort',
                'tooltip' => 'Das E-Mail-Passwort ist ein Passwort für die Authentifizierung und den Zugriff auf ein E-Mail-Konto.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Postmark' => [
        'title' => 'Poststempel',
        'fields' => [
            'token' => [
                'label' => 'Token',
                'tooltip' => 'Postmark-Token bezieht sich auf das API-Token, das für den Zugriff auf den E-Mail-Zustelldienst Postmark verwendet wird.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\MailerSend' => [
        'title' => 'MailerSend',
        'fields' => [
            'api_token' => [
                'label' => 'API-Token',
                'tooltip' => 'Das API-Token wird zur Authentifizierung von Anfragen beim Versand von E-Mails verwendet.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Mailgun' => [
        'title' => 'Mailgun',
        'fields' => [
            'domain' => [
                'label' => 'Bereich',
                'tooltip' => 'Geben Sie Ihren Mailgun-Domainnamen ein.',
            ],
            'secret' => [
                'label' => 'API-Schlüssel',
                'tooltip' => 'Geben Sie Ihren Mailgun-API-Schlüssel zur Authentifizierung an.',
            ],
            'endpoint' => [
                'label' => 'Region',
                'tooltip' => 'Wählen Sie Ihre Mailgun-Region.',
                'options' => [
                    'us' => 'Vereinigte Staaten',
                    'eu' => 'Europäische Union',
                ],
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\SendGrid' => [
        'title' => 'SendGrid',
        'fields' => [
            'api_key' => [
                'label' => 'API-Schlüssel',
                'tooltip' => 'API Key is used to authenticate requests made when sending emails.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailServers\\Mailcow' => [
        'title' => 'Mailcow',
        'description' => 'mailcow - dockerized is an open source groupware/email suite based on docker',
        'fields' => [
            'api_url' => [
                'label' => 'API URL',
            ],
            'api_key' => [
                'label' => 'API-Schlüssel',
            ],
        ],
        'config' => [
            'domain_template' => [
                'label' => 'Domänen-Vorlage',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailServers\\Cpanel' => [
        'title' => 'cPanel',
        'description' => 'cPanel - Eine Cloud-gehostete Software für die Zusammenarbeit und eine E-Mail-Plattform',
        'fields' => [
            'url' => [
                'label' => 'IP/Hostname',
            ],
            'username' => [
                'label' => 'Benutzername',
            ],
            'api_token' => [
                'label' => 'API-Token',
            ],
            'ssl_verification' => [
                'label' => 'SSL-Überprüfung',
            ],
        ],
        'config' => [
            'whm_package' => [
                'label' => 'WHM-Paket',
            ],
        ],
    ],
];
