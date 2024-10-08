<?php

use App\Lib\Integrations\DbIp;
use App\Lib\Integrations\GooglePageSpeedInsights;
use App\Lib\Integrations\Onboarding\Extendify;
use App\Lib\Integrations\ReportProviders\GoogleAnalytics;
use App\Lib\Integrations\ReportProviders\Matomo;
use App\Lib\Integrations\SslProviders\LetsEncrypt;

return [
    DbIp::class => [
        "subtitle" => "Wird verwendet, um den Standort beim Einloggen von einem neuen Gerät zu bestimmen",
        "description" => "DB-IP ist eine leistungsstarke Geolokalisierungsdatenbank, die IP-Adressen physischen Standorten zuordnet. Sie ermöglicht es Unternehmen, Inhalte und Dienste basierend auf bestimmten Regionen anzupassen, gezielte Werbung zu verbessern und die Benutzererfahrung zu optimieren.",
        "instruction" => "PanelAlpha nutzt eine kostenlose Geolokalisierungsdatenbank, die von DB-IP bereitgestellt wird. Die Bedingung für die Nutzung dieser Datenbank ist, einen Backlink zu DB-IP.com auf allen Seiten einzufügen, die Ergebnisse aus der Datenbank anzeigen oder verwenden.<br>Deshalb wird dieser Link in der E-Mail für die Erkennung neuer Geräte enthalten sein.",
        "fields" => [
            "db-ip-accepted" => [
                "label" => "Ich stimme den Lizenzbedingungen zu"
            ]
        ]
    ],
    GooglePageSpeedInsights::class => [
        "subtitle" => "Wird verwendet, um Screenshots von Instanzen zu machen und die Ladegeschwindigkeit von Seiten zu berechnen",
        "description" => "Google PageSpeed Insights ist ein Tool, das die Geschwindigkeit und Leistung Ihrer Website auf Desktop- und Mobilgeräten analysiert. Es bietet umsetzbare Vorschläge zur Verbesserung der Ladezeiten und der Benutzererfahrung.",
        "instruction" => "Um Google PageSpeed Insights zu nutzen, folgen Sie diesen Schritten:<ol><li>Gehen Sie zu <a href='https://developers.google.com/speed/docs/insights/v5/get-started#key' target='_blank'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Melden Sie sich bei Ihrem Google-Konto an, falls erforderlich.</li><li>Erstellen Sie einen neuen API-Schlüssel, indem Sie auf die Schaltfläche \"Get a Key\" klicken.</li><li>Wählen Sie ein bestehendes Projekt aus oder erstellen Sie ein neues und klicken Sie auf die Schaltfläche \"Next\".</li><li>Sobald der API-Schlüssel erstellt wurde, wird er auf dem Bildschirm angezeigt. Kopieren Sie diesen Schlüssel und verwenden Sie ihn, um Google PageSpeed Insights zu integrieren.</li></ol>",
        "fields" => [
            "api-key" => [
                "label" => "API-Schlüssel",
                "placeholder" => "Geben Sie Ihren API-Schlüssel ein..."
            ]
        ]
    ],
    LetsEncrypt::class => [
        "subtitle" => "Wird verwendet, um SSL-Zertifikate für Instanzen auszustellen",
        "description" => "Let's Encrypt ist eine kostenlose, automatisierte und offene Zertifizierungsstelle, die HTTPS-Verschlüsselung für Websites bereitstellt. Es ist einfach zu installieren und zu verwenden und stellt sicher, dass Ihre Website sicher und für alle zugänglich ist.",
        "instruction" => "Um Let's Encrypt zu verwenden, sollten Sie diese Schritte befolgen:<ol><li>Geben Sie Ihre E-Mail-Adresse im Feld Kontakt-E-Mail ein.</li><li>Lesen Sie die \"Let's Encrypt Subscriber Agreement\" sorgfältig durch und akzeptieren Sie die Nutzungsbedingungen.</li><li>Ihr Konto wird dann erstellt und die SSL-Zertifikatsintegration wird automatisch aktiviert.</li><li>Gehen Sie zu Konfiguration > Automatisches SSL und setzen Sie den automatischen SSL-Anbieter auf \"Let's Encrypt\".</li><li>Von nun an wird Let's Encrypt automatisch SSL-Zertifikate für Instanzen ausstellen.</li></ol>",
        "fields" => [
            "account-id" => [
                "label" => "Let's Encrypt Konto",
                "placeholder" => "Konto wird nach dem Speichern der Änderungen generiert"
            ],
            "contact-email" => [
                "label" => "Kontakt-E-Mail",
                "placeholder" => "Geben Sie Ihre E-Mail ein..."
            ],
            "tos-accepted" => [
                "label" => "Ich stimme den Lizenzbedingungen zu"
            ]
        ]
    ],
    Matomo::class => [
        "subtitle" => "Wird für die Sammlung und Analyse von Website-Traffic-Daten verwendet",
        "description" => "Matomo Analytics ist eine datenschutzorientierte Webanalyseplattform, die hilft, den Website-Traffic und das Benutzerverhalten zu verfolgen. Es ist anpassbar und bietet detaillierte Einblicke, während die Benutzerdaten sicher bleiben.",
        "instruction" => "Um Matomo zu verwenden, folgen Sie diesen Schritten:<ol><li>Gehen Sie zur Matomo-URL: <a href=\"{{\$url}}\" target=\"_blank\">{{\$url}}</a></li><li>Durchlaufen Sie den Matomo-Installationsprozess.</li><li>Melden Sie sich bei Matomo an.</li><li>Navigieren Sie zu Konfiguration &gt; Persönlich &gt; Sicherheit.</li><li>Klicken Sie am unteren Rand der Seite auf \"Neues Token erstellen\", um ein neues Token zu generieren.</li><li>Kehren Sie zu PanelAlpha zurück und geben Sie das API-Token ein.</li></ol>",
        "fields" => [
            "url" => [
                "label" => "URL",
                "placeholder" => "Geben Sie die Matomo-URL ein"
            ],
            "api-token" => [
                "label" => "API-Token",
                "placeholder" => "Geben Sie das API-Token ein"
            ]
        ]
    ],
    Extendify::class => [
        "subtitle" => "Wird für das super schnelle Onboarding von Instanzen verwendet",
        "description" => "Extendify bietet ein Website-Builder-ähnliches Onboarding-Erlebnis für Ihre Endkunden. Ermöglichen Sie Ihren Hosting-Kunden, in wenigen Minuten schöne, professionell aussehende Websites mit den neuesten KI-Technologien direkt in WordPress zu erstellen.",
        "instruction" => "Um <b>Extendify</b> zu verwenden, verwenden Sie bitte die Methode \"Super Quick Onboarding\" in Ihren Plänen.<br>Haben Sie noch kein Konto? <a href=\"https://extendify.com/pricing/\" target=\"_blank\">Richten Sie Ihr Konto ein</a>.",
        "fields" => [
            "partner_id" => [
                "label" => "Partner-ID",
                "placeholder" => "Geben Sie die Partner-ID ein"
            ]
        ]
    ],
    GoogleAnalytics::class => [
        "subtitle" => "Wird für die Sammlung und Analyse von Website-Traffic-Daten verwendet",
        "description" => "Google Analytics bietet kostenlose Tools zur Konsolidierung und Analyse der Daten Ihres Unternehmens, um den Entscheidungsprozess datenorientiert zu gestalten.",
        "instruction" => "Um Google Analytics zu verwenden, folgen Sie diesen Schritten:<ol><li>Gehen Sie zur Google Analytics-Website: <a href=\"https://analytics.google.com\" target=\"_blank\">https://analytics.google.com/</a></li><li>Melden Sie sich bei Ihrem Google-Konto an, falls Sie noch nicht angemeldet sind.</li><li>Erstellen Sie ein Google Analytics-Konto.</li><li>Navigieren Sie zu Verwaltung > Kontoeinstellungen > Kontodetails und finden Sie Ihre Konto-ID.</li><li>Kopieren und fügen Sie die Property-ID in das untenstehende Formular ein.</li><li>Erstellen Sie eine Anmeldeinformationen-JSON-Datei, wie in der <a href=\"https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file\" target=\"_blank\">Dokumentation beschrieben</a>.</li><li>Fügen Sie die JSON-Datei im Feld Service Account Credentials unten an.</li></ol><br>Warnung! Diese Integration funktioniert basierend auf JavaScript-Code, der automatisch auf Kundeninstanzen installiert wird. Der Benutzer kann diesen Code entfernen und die Integration wird nicht mehr funktionieren.",
        "fields" => [
            "account-id" => [
                "label" => "Konto-ID",
                "placeholder" => "Geben Sie die Konto-ID ein"
            ],
            "service-account-credentials-json" => [
                "label" => "Service Account Credentials",
                "placeholder" => "Fügen Sie die Service-Credentials-JSON-Datei an"
            ]
        ]
    ],
];