<?php

use App\Notifications\Admin\DnsZone\CreateADnsRecordFailed;
use App\Notifications\Admin\DnsZone\DnsRecordsCreateFailed;
use App\Notifications\Admin\Instance\ImportByUserFailed;
use App\Notifications\Admin\Instance\ImportByUserFinished;
use App\Notifications\Admin\Instance\ManualImportInstanceFailed;
use App\Notifications\Admin\Instance\ManualImportInstanceFinished;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFailed;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFinished;
use App\Notifications\Admin\EmailDomain\EmailDomainCreateFailed;
use App\Notifications\Admin\EmailDomain\EmailDomainExists;
use App\Notifications\Admin\ReportProvider\SyncReportProvidersFailed;
use App\Notifications\Admin\ReportProvider\SyncReportProvidersFinished;
use App\Notifications\Admin\SslOrder\DnsPropagationExceeded;
use App\Notifications\User\Instance\UpdateWordpressFinished;
use App\Notifications\User\Instance\UpdateWordpressFailed;
use App\Notifications\User\Instance\PushToLiveFinished;
use App\Notifications\User\Instance\PushToLiveFailed;
use App\Notifications\User\Instance\InstanceInvitationReceived;
use App\Notifications\User\Instance\InstanceInstallationFinished;
use App\Notifications\User\Instance\InstanceInstallationFailed;
use App\Notifications\User\Instance\CreateStagingFinished;
use App\Notifications\User\Instance\CreateStagingFailed;
use App\Notifications\User\Plugin\UpdateFinished;
use App\Notifications\User\Plugin\UpdateFailed;
use App\Notifications\User\Plugin\InstallFinished;
use App\Notifications\User\Plugin\InstallFailed;
use App\Notifications\User\Backup\AutomaticCreateFinished;
use App\Notifications\User\Backup\AutomaticCreateFailed;
use App\Notifications\User\Backup\RestoreFinished;
use App\Notifications\User\Backup\RestoreFailed;
use App\Notifications\User\Backup\DeleteFinished;
use App\Notifications\User\Backup\DeleteFailed;
use App\Notifications\User\Backup\CreateFinished;
use App\Notifications\User\Backup\CreateFailed;
use App\Notifications\Admin\Service\ServiceUpgraded;
use App\Notifications\Admin\DnsZone\DnsZoneCreateFailed;
use App\Notifications\Admin\DnsZone\DnsZoneExists;
use App\Notifications\Admin\Service\ServiceUnsuspended;
use App\Notifications\Admin\Service\ServiceSuspended;
use App\Notifications\Admin\Queue\QueueTaskSucceeded;
use App\Notifications\Admin\Queue\QueueTaskFailed;
use App\Notifications\Admin\Updates\WordpressUpdateAvailable;
use App\Notifications\Admin\Updates\ThemeUpdateAvailable;
use App\Notifications\Admin\Updates\PluginUpdateAvailable;
use App\Notifications\Admin\System\ResetPassword;
use App\Notifications\Admin\Instance\InstanceDeletedByUser;
use App\Notifications\Admin\Instance\InstanceInstallationByUserFailed;
use App\Notifications\Admin\Instance\InstanceInstallationByUserFinished;
use App\Notifications\Admin\Package\InstallPackageFinished;
use App\Notifications\Admin\Package\InstallPackageFailed;
use App\Notifications\Admin\Theme\ForceUpdateThemeFinished;
use App\Notifications\Admin\Theme\ForceUpdateThemeFailed;
use App\Notifications\Admin\Plugin\ForceUpdatePluginFinished;
use App\Notifications\Admin\Plugin\ForceUpdatePluginFailed;
use App\Notifications\User\Instance\ImportFailed;
use App\Notifications\User\Instance\ImportFinished;
use App\Notifications\User\System\NewDeviceLogin;

return [
    ForceUpdatePluginFailed::class => [
        "name" => "Erzwingen des Plugin-Updates fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Plugin-Update in der Instanz zu erzwingen, fehlgeschlagen ist. Die Benachrichtigung kann Details zum Plugin und zur zugehörigen Instanz sowie weitere Schritte enthalten, die unternommen werden sollten."
    ],
    ForceUpdatePluginFinished::class => [
        "name" => "Erzwingen des Plugin-Updates abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Plugin-Update in der Instanz zu erzwingen, erfolgreich abgeschlossen wurde. Die Benachrichtigung kann Details zum Plugin und zur zugehörigen Instanz sowie weitere Schritte enthalten, die unternommen werden sollten."
    ],
    ForceUpdateThemeFailed::class => [
        "name" => "Erzwingen des Theme-Updates fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Theme-Update in der Instanz zu erzwingen, fehlgeschlagen ist. Die Benachrichtigung kann Details zum Theme und zur zugehörigen Instanz sowie weitere Schritte enthalten, die unternommen werden sollten."
    ],
    ForceUpdateThemeFinished::class => [
        "name" => "Erzwingen des Theme-Updates abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Theme-Update in der Instanz zu erzwingen, erfolgreich abgeschlossen wurde. Die Benachrichtigung kann Details zum Theme und zur zugehörigen Instanz sowie weitere Schritte enthalten, die unternommen werden sollten."
    ],
    InstallPackageFailed::class => [
        "name" => "Installation des Pakets fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, Plugins und Themes aus Paketen in der Instanz zu installieren und zu aktivieren, fehlgeschlagen ist. Die Benachrichtigung kann Details zur zugehörigen Instanz und weitere Schritte enthalten, die unternommen werden sollten."
    ],
    InstallPackageFinished::class => [
        "name" => "Installation des Pakets abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, Plugins und Themes aus Paketen in der Instanz zu installieren und zu aktivieren, erfolgreich abgeschlossen wurde. Die Benachrichtigung kann Details zur zugehörigen Instanz und weitere Schritte enthalten, die unternommen werden sollten."
    ],
    InstanceInstallationByUserFinished::class => [
        "name" => "Installation der Instanz durch Benutzer abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die Installation einer neuen WordPress-Instanz durch den Benutzer abgeschlossen wurde. Die Benachrichtigung kann Details darüber enthalten, wer die Instanz erstellt hat, den Standort der Instanz und weitere Schritte, die unternommen werden sollten."
    ],
    InstanceInstallationByUserFailed::class => [
        "name" => "Installation der Instanz durch Benutzer fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die Installation einer neuen WordPress-Instanz durch den Benutzer fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, wer die Instanz erstellt hat, den Standort der Instanz, Informationen zu Fehlern und weitere Schritte, die unternommen werden sollten."
    ],
    InstanceDeletedByUser::class => [
        "name" => "Instanz durch Benutzer gelöscht",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass eine WordPress-Instanz von einem Benutzer gelöscht wurde. Die Benachrichtigung kann Details darüber enthalten, wer die Instanz gelöscht hat, den Instanznamen und weitere Schritte, die unternommen werden sollten."
    ],
    ResetPassword::class => [
        "name" => "Passwort zurücksetzen",
        "description" => "Eine E-Mail zum Zurücksetzen des Passworts ist eine automatisierte Nachricht, die an die E-Mail-Adresse eines Benutzers gesendet wird, wenn dieser sein Passwort für ein Konto zurücksetzen möchte. Die E-Mail enthält in der Regel einen Link oder Anweisungen zum Zurücksetzen des Passworts sowie eine zeitliche Begrenzung für die Gültigkeit des Links."
    ],
    PluginUpdateAvailable::class => [
        "name" => "Plugin-Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Plugin, das er auf seiner WordPress-Website verwendet, jetzt verfügbar ist. Das Update enthält Fehlerbehebungen und neue Funktionen, die die Gesamtleistung und Funktionalität des Plugins verbessern."
    ],
    ThemeUpdateAvailable::class => [
        "name" => "Theme-Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Theme, das er auf seiner WordPress-Website verwendet, jetzt verfügbar ist. Das Update enthält Fehlerbehebungen und neue Funktionen, die die Gesamtleistung und Funktionalität des Themes verbessern."
    ],
    WordpressUpdateAvailable::class => [
        "name" => "WordPress-Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für seine WordPress-Website jetzt verfügbar ist. Das Update enthält wichtige Sicherheitskorrekturen und neue Funktionen, die die Gesamtleistung und Funktionalität der Website verbessern."
    ],
    QueueTaskFailed::class => [
        "name" => "Warteschlangenaufgabe fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die Aufgabe in der Warteschlange fehlgeschlagen ist. Die Benachrichtigung kann Details zur Aufgabe, zur zugehörigen Instanz und zum Fehler enthalten."
    ],
    QueueTaskSucceeded::class => [
        "name" => "Warteschlangenaufgabe erfolgreich",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die Aufgabe in der Warteschlange erfolgreich war. Die Benachrichtigung kann Details zur Aufgabe und zur zugehörigen Instanz enthalten."
    ],
    ServiceSuspended::class => [
        "name" => "Dienst ausgesetzt",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass sein Dienst ausgesetzt wurde. Die Benachrichtigung kann Informationen über die ausgesetzte Domain und einen Link zur Wiederherstellung des Dienstes enthalten."
    ],
    ServiceUnsuspended::class => [
        "name" => "Dienst wiederhergestellt",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass sein Dienst wiederhergestellt wurde. Die Benachrichtigung kann Informationen über die wiederhergestellte Domain und weitere Schritte enthalten, die unternommen werden sollten."
    ],
    DnsZoneExists::class => [
        "name" => "DNS-Zone existiert",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, eine DNS-Zone zu erstellen, fehlgeschlagen ist, weil die DNS-Zone bereits existiert. Die Benachrichtigung kann Details zur bestehenden DNS-Zone, zum betroffenen Dienst und zum beteiligten DNS-Server enthalten."
    ],
    DnsZoneCreateFailed::class => [
        "name" => "Erstellung der DNS-Zone fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, eine DNS-Zone zu erstellen, fehlgeschlagen ist. Die Nachricht kann Informationen zur versuchten DNS-Zone, zum verwendeten Dienst und zum Server enthalten, auf dem die Erstellung fehlgeschlagen ist."
    ],
    ServiceUpgraded::class => [
        "name" => "Dienst aktualisiert",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass sein Dienst aktualisiert wurde. Die Benachrichtigung kann Informationen über die aktualisierte Domain und weitere Schritte enthalten, die unternommen werden sollten."
    ],
    CreateFailed::class => [
        "name" => "Backup-Erstellung fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website oder seines Systems nicht erstellt werden konnte. Die Benachrichtigung kann Details darüber enthalten, warum das Backup fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    CreateFinished::class => [
        "name" => "Backup-Erstellung abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website oder seines Systems erfolgreich erstellt wurde. Die Benachrichtigung kann Details darüber enthalten, wo das Backup gespeichert ist und wie darauf zugegriffen werden kann."
    ],
    DeleteFailed::class => [
        "name" => "Backup-Löschung fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website nicht gelöscht werden konnte. Die Benachrichtigung kann Details darüber enthalten, warum die Löschung fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    DeleteFinished::class => [
        "name" => "Backup-Löschung abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website erfolgreich gelöscht wurde. Die Benachrichtigung kann Details darüber enthalten, welches Backup gelöscht wurde und welche weiteren Schritte unternommen werden sollten."
    ],
    RestoreFailed::class => [
        "name" => "Backup-Wiederherstellung fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Backup seiner Website wiederherzustellen, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum die Wiederherstellung fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    RestoreFinished::class => [
        "name" => "Backup-Wiederherstellung abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website erfolgreich wiederhergestellt wurde. Die Benachrichtigung kann Details darüber enthalten, welches Backup wiederhergestellt wurde und welche weiteren Schritte unternommen werden sollten."
    ],
    AutomaticCreateFailed::class => [
        "name" => "Automatische Backup-Erstellung fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein automatisches Backup seiner Website oder seines Systems nicht erstellt werden konnte. Die Benachrichtigung kann Details darüber enthalten, warum das Backup fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    AutomaticCreateFinished::class => [
        "name" => "Automatische Backup-Erstellung abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein automatisches Backup seiner Website oder seines Systems erfolgreich erstellt wurde. Die Benachrichtigung kann Details darüber enthalten, wo das Backup gespeichert ist und wie darauf zugegriffen werden kann."
    ],
    InstallFailed::class => [
        "name" => "Plugin-Installation fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Plugin für seine WordPress-Website zu installieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum die Installation fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    InstallFinished::class => [
        "name" => "Plugin-Installation abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Plugin für seine WordPress-Website erfolgreich installiert wurde. Die Benachrichtigung kann Details darüber enthalten, welches Plugin installiert wurde und welche weiteren Schritte unternommen werden sollten."
    ],
    UpdateFailed::class => [
        "name" => "Plugin-Update fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Plugin für seine WordPress-Website zu aktualisieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum das Update fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    UpdateFinished::class => [
        "name" => "Plugin-Update abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Plugin für seine WordPress-Website erfolgreich aktualisiert wurde. Die Benachrichtigung kann Details darüber enthalten, welches Plugin aktualisiert wurde und welche weiteren Schritte unternommen werden sollten."
    ],
    \App\Notifications\User\Theme\InstallFailed::class => [
        "name" => "Theme-Installation fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Theme für seine WordPress-Website zu installieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum die Installation fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    \App\Notifications\User\Theme\InstallFinished::class => [
        "name" => "Theme-Installation abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Theme für seine WordPress-Website erfolgreich installiert wurde. Die Benachrichtigung kann Details darüber enthalten, welches Theme installiert wurde und welche weiteren Schritte unternommen werden sollten."
    ],
    \App\Notifications\User\Theme\UpdateFailed::class => [
        "name" => "Theme-Update fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Theme für seine WordPress-Website zu aktualisieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum das Update fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    \App\Notifications\User\Theme\UpdateFinished::class => [
        "name" => "Theme-Update abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein Theme für seine WordPress-Website erfolgreich aktualisiert wurde. Die Benachrichtigung kann Details darüber enthalten, welches Theme aktualisiert wurde und welche weiteren Schritte unternommen werden sollten."
    ],
    CreateStagingFailed::class => [
        "name" => "Erstellung der Staging-Instanz fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, eine Staging-Instanz seiner Website zu erstellen, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum die Erstellung fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    CreateStagingFinished::class => [
        "name" => "Erstellung der Staging-Instanz abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass eine Staging-Instanz seiner Website erfolgreich erstellt wurde. Die Benachrichtigung kann Details darüber enthalten, wo die Staging-Instanz aufgerufen werden kann und welche weiteren Schritte unternommen werden sollten."
    ],
    InstanceInstallationFailed::class => [
        "name" => "Installation der Instanz fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, eine WordPress-Instanz zu installieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum die Installation fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    InstanceInstallationFinished::class => [
        "name" => "Installation der Instanz abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass eine WordPress-Instanz erfolgreich installiert wurde. Die Benachrichtigung kann Details darüber enthalten, wo die Instanz aufgerufen werden kann und welche weiteren Schritte unternommen werden sollten."
    ],
    ImportFailed::class => [
        "name" => "Import der Instanz fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, eine WordPress-Instanz zu importieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum der Import fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    ImportFinished::class => [
        "name" => "Import der Instanz abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass eine WordPress-Instanz erfolgreich importiert wurde. Die Benachrichtigung kann Details darüber enthalten, wo die Instanz aufgerufen werden kann und welche weiteren Schritte unternommen werden sollten."
    ],
    InstanceInvitationReceived::class => [
        "name" => "Einladung zur Instanz erhalten",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass er eine Einladung zur Verwaltung einer bestimmten Instanz erhalten hat. Die Benachrichtigung kann Details darüber enthalten, wer die Einladung gesendet hat, welche Instanz verwaltet wird und welche Aktionen auf der Instanz durchgeführt werden können."
    ],
    NewDeviceLogin::class => [
        "name" => "Anmeldung von neuem Gerät",
        "description" => "Die Benachrichtigung ist ein Alarm, der generiert wird, wenn sich ein neues Gerät oder ein neuer Browser oder eine neue IP-Adresse auf der Website anmeldet. Die Benachrichtigung enthält in der Regel Informationen über das Gerät, wie z.B. die IP-Adresse, sowie das Datum und die Uhrzeit der Verbindung."
    ],
    PushToLiveFailed::class => [
        "name" => "Push auf Live fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, die auf der Staging-Instanz vorgenommenen Änderungen auf die Live-Version der Website zu übertragen, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum der Push fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    PushToLiveFinished::class => [
        "name" => "Push auf Live abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die auf der Staging-Instanz vorgenommenen Änderungen erfolgreich auf die Live-Version der Website oder des Systems übertragen wurden. Die Benachrichtigung kann Details darüber enthalten, welche Änderungen vorgenommen wurden und welche weiteren Schritte unternommen werden sollten."
    ],
    UpdateWordpressFailed::class => [
        "name" => "WordPress-Update fehlgeschlagen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass der Versuch, die WordPress-Instanz zu aktualisieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum das Update fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben."
    ],
    UpdateWordpressFinished::class => [
        "name" => "WordPress-Update abgeschlossen",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die WordPress-Instanz erfolgreich aktualisiert wurde. Die Benachrichtigung kann Details darüber enthalten, welche Änderungen an der Instanz vorgenommen wurden und welche weiteren Schritte unternommen werden sollten."
    ],
    \App\Notifications\User\System\ResetPassword::class => [
        "name" => "Passwort zurücksetzen",
        "description" => "Eine E-Mail zum Zurücksetzen des Passworts ist eine automatisierte Nachricht, die an die E-Mail-Adresse eines Benutzers gesendet wird, wenn dieser sein Passwort für ein Konto zurücksetzen möchte. Die E-Mail enthält in der Regel einen Link oder Anweisungen zum Zurücksetzen des Passworts sowie eine zeitliche Begrenzung für die Gültigkeit des Links."
    ],
    \App\Notifications\User\Updates\PluginUpdateAvailable::class => [
        "name" => "Plugin-Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Plugin, das er auf seiner WordPress-Website verwendet, jetzt verfügbar ist. Das Update enthält Fehlerbehebungen und neue Funktionen, die die Gesamtleistung und Funktionalität des Plugins verbessern."
    ],
    \App\Notifications\User\Updates\ThemeUpdateAvailable::class => [
        "name" => "Theme-Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Theme, das er auf seiner WordPress-Website verwendet, jetzt verfügbar ist. Das Update enthält Fehlerbehebungen und neue Funktionen, die die Gesamtleistung und Funktionalität des Themes verbessern."
    ],
    \App\Notifications\User\Updates\WordpressUpdateAvailable::class => [
        "name" => "WordPress-Update verfügbar",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass ein neues Update für seine WordPress-Website jetzt verfügbar ist. Das Update enthält wichtige Sicherheitskorrekturen und neue Funktionen, die die Gesamtleistung und Funktionalität der Website verbessern."
    ],
    DnsPropagationExceeded::class => [
        "name" => "DNS-Propagation für SSL-Bestellung überschritten",
        "description" => "Die Benachrichtigung informiert den Empfänger, dass die zugewiesene Zeit für die DNS-Propagation in Bezug auf seine SSL-Zertifikatsbestellung überschritten wurde."
    ],
    CreateADnsRecordFailed::class => [
        "name" => "Erstellung eines DNS-A-Eintrags fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die Erstellung eines DNS-A-Eintrags fehlgeschlagen ist.'
    ],
    InstanceTemplateCreateFailed::class => [
        "name" => "Erstellung der Instanzvorlage fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die Instanzvorlage nicht erstellt wurde.'
    ],
    InstanceTemplateCreateFinished::class => [
        "name" => "Erstellung der Instanzvorlage abgeschlossen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die Instanzvorlage erfolgreich erstellt wurde.'
    ],
    EmailDomainCreateFailed::class => [
        "name" => "Erstellung der E-Mail-Domain fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die Erstellung der E-Mail-Domain fehlgeschlagen ist.'
    ],
    EmailDomainExists::class => [
        "name" => "E-Mail-Domain existiert",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die E-Mail-Domain bereits auf dem E-Mail-Server existiert.'
    ],
    SyncReportProvidersFailed::class => [
        "name" => "Synchronisation der Berichtsanbieter fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die Synchronisation der Berichtsanbieter fehlgeschlagen ist. Die Benachrichtigung kann Informationen über die Instanz und die Fehlermeldung enthalten.'
    ],
    SyncReportProvidersFinished::class => [
        "name" => "Synchronisation der Berichtsanbieter abgeschlossen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die Synchronisation der Berichtsanbieter abgeschlossen ist. Die Benachrichtigung kann Informationen über die Instanz enthalten.'
    ],
    DnsRecordsCreateFailed::class => [
        "name" => "Erstellung der DNS-Einträge fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass die aufgelisteten DNS-Einträge für die Zone nicht erstellt wurden. Die Benachrichtigung kann Informationen über die DNS-Einträge oder die DNS-Zone enthalten.'
    ],
    ImportByUserFailed::class => [
        "name" => "Import der Instanz durch Benutzer fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass der Import der Instanz durch den Benutzer fehlgeschlagen ist.'
    ],
    ImportByUserFinished::class => [
        "name" => "Import der Instanz durch Benutzer abgeschlossen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass der Import der Instanz durch den Benutzer erfolgreich war.'
    ],
    ManualImportInstanceFailed::class => [
        "name" => "Manueller Import der Instanz fehlgeschlagen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass der manuelle Import der Instanz durch den Administrator fehlgeschlagen ist.'
    ],
    ManualImportInstanceFinished::class => [
        "name" => "Manueller Import der Instanz abgeschlossen",
        "description" => 'Die Benachrichtigung informiert den Empfänger, dass der manuelle Import der Instanz durch den Administrator erfolgreich war.'
    ]
];