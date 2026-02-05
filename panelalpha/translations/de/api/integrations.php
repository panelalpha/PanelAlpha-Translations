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
    GooglePageSpeedInsights::class => [
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
    LetsEncrypt::class => [
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
    Matomo::class => [
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
    Extendify::class => [
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
    GoogleAnalytics::class => [
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
    SelfSigned::class => [
        'title' => 'Selbst unterschrieben',
    ],
    WithoutDns::class => [
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
    Smtp::class => [
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
    Postmark::class => [
        'title' => 'Poststempel',
        'fields' => [
            'token' => [
                'label' => 'Token',
                'tooltip' => 'Postmark-Token bezieht sich auf das API-Token, das für den Zugriff auf den E-Mail-Zustelldienst Postmark verwendet wird.',
            ],
        ],
    ],
    MailerSend::class => [
        'title' => 'MailerSend',
        'fields' => [
            'api_token' => [
                'label' => 'API-Token',
                'tooltip' => 'Das API-Token wird zur Authentifizierung von Anfragen beim Versand von E-Mails verwendet.',
            ],
        ],
    ],
    Mailgun::class => [
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
    SendGrid::class => [
        'title' => 'SendGrid',
        'fields' => [
            'api_key' => [
                'label' => 'API-Schlüssel',
                'tooltip' => 'Der API-Schlüssel wird zur Authentifizierung von Anfragen beim Versand von E-Mails verwendet.',
            ],
        ],
    ],
    Mailcow::class => [
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
    CpanelEmailServer::class => [
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
    Google::class => [
        'title' => 'Google',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Befolgen Sie diese Schritte, um die Authentifizierung mit diesem Anbieter zu aktivieren und eine neue Anwendung zu registrieren:
                <ol>
                <li>Weiter zu:: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> und melden Sie sich ggf. an.</li>
                <li>Klicken Sie auf <b>Projekt auswählen</b>, dann auf <b>Projekt erstellen</b> und wählen Sie es nach der Erstellung aus. </li>
                <li>Gehen Sie zum <b>API Manager → Credentials → OAuth</b> Zustimmungsbildschirm und füllen Sie dort das Formular aus. </li>
                <li>Nachfolgend gehen Sie zu <b>Credentials → Create credentials (OAuth client ID type)</b> und wählen <b>Web application</b>.</li>
                <li>Setzen Sie <b>Authorize redirect URIs</b> auf <br /><b>{{$callback_url}}</b></li>
                <li>Nach der Registrierung fügen Sie die erstellten Anmeldedaten (Client ID für die Anwendungs-ID und Client Secret für das Anwendungsgeheimnis) in das untenstehende Formular ein.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Kunden-ID',
            ],
            'client_secret' => [
                'label' => 'Geheimnis des Kunden',
            ],
        ],
    ],
    Apple::class => [
        'title' => 'Apple',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Gehen Sie folgendermaßen vor, um die Authentifizierung mit diesem Anbieter zu aktivieren und eine neue Anwendung zu registrieren:
            ',
        'fields' => [
            'client_id' => [
                'label' => 'Kunden-ID',
            ],
            'client_secret' => [
                'label' => 'Geheimnis des Kunden',
            ],
        ],
    ],
    Microsoft::class => [
        'title' => 'Microsoft',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Befolgen Sie diese Schritte, um die Authentifizierung mit diesem Anbieter zu aktivieren und eine neue Anwendung zu registrieren:
                <ol>
                <li>Weiter zu: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> und melden Sie sich ggf. an</li>
                <li>Erstellen Sie einen neuen Antrag.</li>
                <li>Füllen Sie alle erforderlichen Felder aus, z. B. den Namen der Anwendung und ihre Beschreibung.</li>
                <li>Setzen Sie <b>Redirect URL</b> auf <br /><b>{{$callback_url}}</b></li>
                <li>Nachdem Sie sich registriert haben, fügen Sie die erstellten Anmeldedaten in das folgende Formular ein. </li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Kunden-ID',
            ],
            'client_secret' => [
                'label' => 'Geheimnis des Kunden',
            ],
        ],
    ],
    Linkedin::class => [
        'title' => 'LinkedIn',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Befolgen Sie diese Schritte, um die Authentifizierung mit diesem Anbieter zu aktivieren und eine neue Anwendung zu registrieren:
            <ol>
                <li>Weiter zu: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> und melden Sie sich ggf. an.</li>
                <li>Erstellen Sie einen neuen Antrag.</li>
                <li>Füllen Sie alle erforderlichen Felder aus, z. B. den Namen der Anwendung und ihre Beschreibung</li>
                <li>Wählen Sie <b>Live</b> unter <b>Live Status</b>.</li>
                <li>Wählen Sie die Berechtigungen <b>r_liteprofile</b> und <b>r_emailaddress</b> aus.</li>
                <li>Setzen Sie <b>Redirect URL</b> auf <br /><b>{{$callback_url}}</b></li>
                <li>Nachdem Sie sich registriert haben, fügen Sie die erstellten Anmeldedaten in das unten stehende Formular ein.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Kunden-ID',
            ],
            'client_secret' => [
                'label' => 'Geheimnis des Kunden',
            ],
        ],
    ],
    Facebook::class => [
        'title' => 'Facebook',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Befolgen Sie diese Schritte, um die Authentifizierung mit diesem Anbieter zu aktivieren und eine neue Anwendung zu registrieren:
            <ol>
                <li>Weiter zu: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> und melden Sie sich ggf. an.</li>
                <li>Erstellen Sie eine neue Anwendung.</li>
                <li>Füllen Sie <b>Name anzeigen</b>, <b>Kontakt-E-Mail</b> aus, wählen Sie eine Kategorie und klicken Sie auf <b>App-ID erstellen</b>. </li>
                <li>Gehen Sie zur Seite <b>Einstellungen</b> und kopieren Sie <b>App ID</b> und <b>App Secret</b> in dieses Formular.</li>
                <li>Zurück zu <b>+Produkt hinzufügen</b> und wähle <b>Facebook Login</b></li>
                <li>Setzen Sie <b>Gültige OAuth Redirect URIs</b> auf <br /><b>{{$callback_url}}</b></li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Kunden-ID',
            ],
            'client_secret' => [
                'label' => 'Geheimnis des Kunden',
            ],
        ],
    ],
    Github::class => [
        'title' => 'GitHub',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Befolgen Sie diese Schritte, um die Authentifizierung mit diesem Anbieter zu aktivieren und eine neue Anwendung zu registrieren:
            <ol>
                <li>Weiter zu: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> und melden Sie sich ggf. an.</li>
                <li>Erstellen Sie eine neue Anwendung.</li>
                <li>Füllen Sie <b>Name, Beschreibung, Website URL</b> aus.</li>
                <li>Setzen Sie <b>Redirect URL</b> auf <br /><b>{{$callback_url}}</b></li>
                <li>Senden Sie das Formular ab und aktualisieren Sie die Anwendungseinstellungen. </li>
                <li>Suchen Sie auf der nächsten Seite und kopieren Sie die Client-ID und das Client-Geheimnis aus <b>Authentifizierungsinformationen</b> in die Felder darunter.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'Kunden-ID',
            ],
            'client_secret' => [
                'label' => 'Geheimnis des Kunden',
            ],
        ],
    ],
    Cpanel::class => [
        "title" => "cPanel",
        "description" => "cPanel - Eine cloud-gehostete Kollaborationssoftware und E-Mail-Plattform",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Benutzername',
            ],
            'api_token' => [
                'label' => 'API-Token',
                'link_label' => 'Wie man API-Token erstellt',
            ],
            'ssl_verification' => [
                'label' => 'SSL-Verifizierung',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'WHM-Paket',
            ]
        ]
    ],
    DirectAdmin::class => [
        'title' => 'Direct Admin',
        'description' => 'DirectAdmin - Eine cloud-gehostete Kollaborationssoftware und E-Mail-Plattform',
        'fields' => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Benutzername',
            ],
            'password' => [
                'label' => 'Passwort',
            ],
            'ssl_verification' => [
                'label' => 'SSL-Verifizierung',
            ],
        ],
        'config' => [
            'package' => [
                'label' => 'Paket',
            ],
            'ip_address' => [
                'label' => 'IP-Adresse',
            ],
        ],
    ],
    Plesk::class => [
        'title' => 'Plesk',
        'description' => 'Plesk - Eine cloud-gehostete Kollaborationssoftware und E-Mail-Plattform',
        'fields' => [
            'url' => [
                'label' => 'IP/Hostname',
            ],
            'username' => [
                'label' => 'Benutzername',
            ],
            'password' => [
                'label' => 'Passwort',
            ],
            'ssl_verification' => [
                'label' => 'SSL-Verifizierung',
            ],
        ],
        'config' => [
            'ip_address' => [
                'label' => 'IP-Adresse',
                'tooltip' => 'Wählen Sie eine verfügbare IP-Adresse aus',
            ],
            'hosting_plan' => [
                'label' => 'Hosting-Plan',
                'tooltip' => "Wählen Sie einen Hosting-Plan für das Abonnement. Wichtig: Diese Option ist nur verfügbar, wenn 'Reseller-Konto' deaktiviert ist.",
            ],
            'reseller_account' => [
                'label' => 'Reseller-Konto',
                'tooltip' => "Aktivieren Sie diese Option, um Kundenkonten als Reseller anzulegen. Erfordert die Auswahl eines 'Reseller-Plans'. Hinweis: Diese Option ist möglicherweise nicht verfügbar, wenn der Server keine Reseller-Konten unterstützt.",
            ],
            'reseller_plan' => [
                'label' => 'Reseller-Plan',
                'tooltip' => "Wählen Sie einen Reseller-Plan. Wichtig: Diese Option ist nur verfügbar, wenn 'Reseller-Konto' aktiviert ist. Hinweis: Diese Option ist möglicherweise nicht verfügbar, wenn der Server keine Reseller-Konten unterstützt.",
            ],
        ],
    ],
    PanelAlpha::class => [
        'title' => 'PanelAlpha Engine',
        'description' => 'PanelAlpha - Eine Docker-basierte Webhosting-Lösung',
        'fields' => [
            'api_url' => [
                'label' => 'API-URL',
            ],
            'api_token' => [
                'label' => 'API-Token',
            ],
        ],
        'config' => [
            'disk_space_limit' => [
                'label' => 'Speicherplatzlimit (MB)',
            ],
            'memory_limit' => [
                'label' => 'Speicherlimit (MB)',
            ],
            'cpu_limit' => [
                'label' => 'CPU-Limit',
            ],
            'device_read_bps' => [
                'label' => 'Leseratenlimit (Bytes pro Sekunde)',
            ],
            'device_write_bps' => [
                'label' => 'Schreibratenlimit (Bytes pro Sekunde)',
            ],
            'bandwidth_limit' => [
                'label' => 'Bandbreitenlimit (MB pro Monat)',
            ],
            'mysql_databases_limit' => [
                'label' => 'MySQL-Datenbanklimit',
            ],
            'ftp_accounts_limit' => [
                'label' => 'FTP-Kontenlimit',
            ],
            'sftp_accounts_limit' => [
                'label' => 'SFTP-Kontenlimit',
            ],
            'addon_domains_limit' => [
                'label' => 'Addon-Domains-Limit',
            ],
            'subdomains_limit' => [
                'label' => 'Subdomain-Limit',
            ],
            'inodes_limit' => [
                'label' => 'Inodes-Limit',
            ],
            'enable_redis_cache' => [
                'label' => 'Redis-Cache aktivieren',
            ],
            'enable_litespeed_cache' => [
                'label' => 'LiteSpeed-Cache aktivieren',
            ],
            'php_fpm_pool_settings' => [
                'label' => 'PHP-FPM-Pool-Einstellungen',
            ],
            'lsphp_settings' => [
                'label' => 'LSPHP-Einstellungen',
            ],
            'dedicated_ipv4' => [
                'label' => 'Dediziertes IPv4',
            ],
            'dedicated_ipv6' => [
                'label' => 'Dediziertes IPv6',
            ],
        ],
    ],
    WpCloud::class => [
        'title' => 'WP Cloud',
        'description' => 'WP Cloud - WordPress-first Cloud-Hosting',
        'fields' => [
            'client_identifier' => [
                'label' => 'Client-Identifier',
            ],
            'api_key' => [
                'label' => 'API-Schlüssel',
            ],
        ],
        'config' => [
            'space_quota' => [
                'label' => 'Speicherplatzkontingent',
                'tooltip' => "Speicherplatz für Websites. Der Standardwert wird in Megabytes gemessen, aber um ihn in Gigabytes anzugeben, muss das Suffix 'GB' hinzugefügt werden. Der maximale Wert beträgt 200 GB.",
            ],
            'php_workers' => [
                'label' => 'PHP-Worker',
                'tooltip' => 'Legen Sie die Anzahl der CPU- und PHP-Worker fest. Standardmäßig können Sie einen Wert zwischen 2 und 10 setzen. Für andere Optionen kontaktieren Sie bitte WP Cloud.',
            ],
            'php_memory_limit' => [
                'label' => 'PHP-Speicherlimit',
                'tooltip' => 'Legen Sie das PHP-Speicherlimit pro Anfrage fest.',
            ],
            'burst_up_php_workers' => [
                'label' => 'Burst-Up-PHP-Worker',
                'tooltip' => 'Erlaubt einen dynamischen Burst bis zu 110 PHP-Workern.',
            ],
            'allow_user_choose_location' => [
                'label' => 'Benutzern Standort wählen lassen',
                'tooltip' => 'Benutzern erlauben, den Standort für neue Instanzen zu wählen.',
            ],
            'geo_affinity' => [
                'label' => 'Standard-Rechenzentrum',
                'tooltip' => 'Wählen Sie das Rechenzentrum, dem die Seiten zugeordnet werden.',
            ],
            'default_ssh_access_enabled' => [
                'label' => 'Standard-SSH-Zugriff aktiviert',
                'tooltip' => 'SSH-Zugriff standardmäßig für alle neuen WP Cloud-Instanzen aktivieren.',
            ],
            'allow_user_enable_ssh_access' => [
                'label' => 'Benutzern erlauben, SSH-Zugriff zu aktivieren',
                'tooltip' => 'Benutzern erlauben, SSH/SFTP-Zugriff auf ihre WP Cloud-Instanz zu verwalten.',
            ],
        ],
    ],
    Cloudflare::class => [
        'title' => 'Cloudflare',
        'description' => 'Cloudflare - Das Unternehmen für Web-Performance und Sicherheit',
        'fields' => [
            'api_token' => [
                'label' => 'API-Token',
            ],
            'account_id' => [
                'label' => 'Konto-ID',
            ],
        ],
    ],
    CpanelDnsOnly::class => [
        'title' => 'cPanel DNSOnly',
        'description' => 'cPanel DNSOnly - ermöglicht den Betrieb eines dedizierten physischen Nameservers',
        'fields' => [
            'url' => [
                'label' => 'IP/Hostname',
            ],
            'username' => [
                'label' => 'Benutzername',
            ],
            'api_token' => [
                'label' => 'API-Token',
                'link_label' => 'Wie man API-Token erstellt',
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
            ],
        ],
    ],
    DnsManagerForWhmcs::class => [
        'title' => 'DNS Manager For WHMCS',
        'description' => 'DNS Manager For WHMCS - Modul zur Verwaltung von DNS-Zonen',
        'fields' => [
            'whmcs_url' => [
                'label' => 'WHMCS-URL',
            ],
            'whmcs_api_token' => [
                'label' => 'WHMCS-API-Token',
            ],
        ],
    ],
    PowerDns::class => [
        'title' => 'PowerDNS',
        'description' => 'PowerDNS - führender Anbieter sicherer Open-Source- und kommerzieller DNS-Software',
        'fields' => [
            'api_url' => [
                'label' => 'API-URL',
            ],
            'api_token' => [
                'label' => 'API-Token',
            ],
            'server' => [
                'label' => 'Server',
            ],
            'zones_kind' => [
                'label' => 'Zonentyp',
            ],
            'nameservers' => [
                'label' => 'Nameserver (durch Kommas getrennt)',
            ],
        ],
    ],
    Atarim::class => [
        'title' => 'Atarim',
        'subtitle' => 'Verwendet für visuelle Zusammenarbeit und Feedback auf Websites',
        'description' => 'Atarim vereinfacht die Zusammenarbeit an Websites, indem Teams und Kunden direkt auf Live-Seiten visuelles Feedback hinterlassen können. Kommentare werden in umsetzbare Aufgaben verwandelt und beschleunigen so die Projektabwicklung.',
        'instruction' => 'Um Atarim zu verwenden, folgen Sie diesen Schritten:
            <ol>
                <li>Gehen Sie zur <a href="https://atarim.firstpromoter.com/signup/32353" target="_blank">Atarim-Registrierungsseite</a></li>
                <li>Erstellen Sie ein Konto oder melden Sie sich bei einem bestehenden Konto an.</li>
                <li>Kopieren Sie den <strong>Referral-Link</strong> und fügen Sie ihn in das untenstehende Formularfeld ein.</li>
            </ol>',
        'fields' => [
            'link' => [
                'label' => 'Link',
            ],
        ],
    ],
];
