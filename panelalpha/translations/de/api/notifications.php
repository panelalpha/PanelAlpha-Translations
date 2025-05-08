<?php

return [
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFailed' => [
        'name' => 'Erzwingen des Plugin-Updates fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Plugin-Update in der Instanz zu erzwingen, fehlgeschlagen ist. Die Benachrichtigung kann Details zum Plugin und zur zugehörigen Instanz sowie weitere Schritte enthalten, die unternommen werden sollten.',
    ],
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFinished' => [
        'name' => 'Erzwingen des Plugin-Updates abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Plugin-Update in der Instanz zu erzwingen, erfolgreich abgeschlossen wurde. Die Benachrichtigung kann Details zum Plugin und zur zugehörigen Instanz sowie weitere Schritte enthalten, die unternommen werden sollten.',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFailed' => [
        'name' => 'Erzwingen des Theme-Updates fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Theme-Update in der Instanz zu erzwingen, fehlgeschlagen ist. Die Benachrichtigung kann Details zum Theme und zur zugehörigen Instanz sowie weitere Schritte enthalten, die unternommen werden sollten.',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFinished' => [
        'name' => 'Erzwingen des Theme-Updates abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Theme-Update in der Instanz zu erzwingen, erfolgreich abgeschlossen wurde. Die Benachrichtigung kann Details zum Theme und zur zugehörigen Instanz sowie weitere Schritte enthalten, die unternommen werden sollten.',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFailed' => [
        'name' => 'Installation des Pakets fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, Plugins und Themes aus Paketen in der Instanz zu installieren und zu aktivieren, fehlgeschlagen ist. Die Benachrichtigung kann Details zur zugehörigen Instanz und weitere Schritte enthalten, die unternommen werden sollten.',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFinished' => [
        'name' => 'Installation des Pakets abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, Plugins und Themes aus Paketen in der Instanz zu installieren und zu aktivieren, erfolgreich abgeschlossen wurde. Die Benachrichtigung kann Details zur zugehörigen Instanz und weitere Schritte enthalten, die unternommen werden sollten.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFinished' => [
        'name' => 'Installation der Instanz durch Benutzer abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Installation einer neuen WordPress-Instanz durch den Benutzer abgeschlossen wurde. Die Benachrichtigung kann Details darüber enthalten, wer die Instanz erstellt hat, den Standort der Instanz und weitere Schritte, die unternommen werden sollten.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFailed' => [
        'name' => 'Installation der Instanz durch Benutzer fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Installation einer neuen WordPress-Instanz durch den Benutzer fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, wer die Instanz erstellt hat, den Standort der Instanz, Informationen zu Fehlern und weitere Schritte, die unternommen werden sollten.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceDeletedByUser' => [
        'name' => 'Instanz durch Benutzer gelöscht',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass eine WordPress-Instanz von einem Benutzer gelöscht wurde. Die Benachrichtigung kann Details darüber enthalten, wer die Instanz gelöscht hat, den Instanznamen und weitere Schritte, die unternommen werden sollten.',
    ],
    'App\\Notifications\\Admin\\System\\ResetPassword' => [
        'name' => 'Passwort zurücksetzen',
        'description' => 'Eine E-Mail zum Zurücksetzen des Passworts ist eine automatisierte Nachricht, die an die E-Mail-Adresse eines Benutzers gesendet wird, wenn dieser sein Passwort für ein Konto zurücksetzen möchte. Die E-Mail enthält in der Regel einen Link oder Anweisungen zum Zurücksetzen des Passworts sowie eine zeitliche Begrenzung für die Gültigkeit des Links.',
    ],
    'App\\Notifications\\Admin\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Plugin-Update verfügbar',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Plugin, das er auf seiner WordPress-Website verwendet, jetzt verfügbar ist. Das Update enthält Fehlerbehebungen und neue Funktionen, die die Gesamtleistung und Funktionalität des Plugins verbessern.',
    ],
    'App\\Notifications\\Admin\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Theme-Update verfügbar',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Theme, das er auf seiner WordPress-Website verwendet, jetzt verfügbar ist. Das Update enthält Fehlerbehebungen und neue Funktionen, die die Gesamtleistung und Funktionalität des Themes verbessern.',
    ],
    'App\\Notifications\\Admin\\Updates\\WordpressUpdateAvailable' => [
        'name' => 'WordPress-Update verfügbar',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein neues Update für seine WordPress-Website jetzt verfügbar ist. Das Update enthält wichtige Sicherheitskorrekturen und neue Funktionen, die die Gesamtleistung und Funktionalität der Website verbessern.',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskFailed' => [
        'name' => 'Warteschlangenaufgabe fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Aufgabe in der Warteschlange fehlgeschlagen ist. Die Benachrichtigung kann Details zur Aufgabe, zur zugehörigen Instanz und zum Fehler enthalten.',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskSucceeded' => [
        'name' => 'Warteschlangenaufgabe erfolgreich',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Aufgabe in der Warteschlange erfolgreich war. Die Benachrichtigung kann Details zur Aufgabe und zur zugehörigen Instanz enthalten.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceSuspended' => [
        'name' => 'Dienst ausgesetzt',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass sein Dienst ausgesetzt wurde. Die Benachrichtigung kann Informationen über die ausgesetzte Domain und einen Link zur Wiederherstellung des Dienstes enthalten.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUnsuspended' => [
        'name' => 'Dienst wiederhergestellt',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass sein Dienst wiederhergestellt wurde. Die Benachrichtigung kann Informationen über die wiederhergestellte Domain und weitere Schritte enthalten, die unternommen werden sollten.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneExists' => [
        'name' => 'DNS-Zone existiert',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, eine DNS-Zone zu erstellen, fehlgeschlagen ist, weil die DNS-Zone bereits existiert. Die Benachrichtigung kann Details zur bestehenden DNS-Zone, zum betroffenen Dienst und zum beteiligten DNS-Server enthalten.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneCreateFailed' => [
        'name' => 'Erstellung der DNS-Zone fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, eine DNS-Zone zu erstellen, fehlgeschlagen ist. Die Nachricht kann Informationen zur versuchten DNS-Zone, zum verwendeten Dienst und zum Server enthalten, auf dem die Erstellung fehlgeschlagen ist.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUpgraded' => [
        'name' => 'Dienst aktualisiert',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass sein Dienst aktualisiert wurde. Die Benachrichtigung kann Informationen über die aktualisierte Domain und weitere Schritte enthalten, die unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFailed' => [
        'name' => 'Backup-Erstellung fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website oder seines Systems nicht erstellt werden konnte. Die Benachrichtigung kann Details darüber enthalten, warum das Backup fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFinished' => [
        'name' => 'Backup-Erstellung abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website oder seines Systems erfolgreich erstellt wurde. Die Benachrichtigung kann Details darüber enthalten, wo das Backup gespeichert ist und wie darauf zugegriffen werden kann.',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFailed' => [
        'name' => 'Backup-Löschung fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website nicht gelöscht werden konnte. Die Benachrichtigung kann Details darüber enthalten, warum die Löschung fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFinished' => [
        'name' => 'Backup-Löschung abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website erfolgreich gelöscht wurde. Die Benachrichtigung kann Details darüber enthalten, welches Backup gelöscht wurde und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFailed' => [
        'name' => 'Backup-Wiederherstellung fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Backup seiner Website wiederherzustellen, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum die Wiederherstellung fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFinished' => [
        'name' => 'Backup-Wiederherstellung abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein Backup seiner Website erfolgreich wiederhergestellt wurde. Die Benachrichtigung kann Details darüber enthalten, welches Backup wiederhergestellt wurde und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFailed' => [
        'name' => 'Automatische Backup-Erstellung fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein automatisches Backup seiner Website oder seines Systems nicht erstellt werden konnte. Die Benachrichtigung kann Details darüber enthalten, warum das Backup fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFinished' => [
        'name' => 'Automatische Backup-Erstellung abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein automatisches Backup seiner Website oder seines Systems erfolgreich erstellt wurde. Die Benachrichtigung kann Details darüber enthalten, wo das Backup gespeichert ist und wie darauf zugegriffen werden kann.',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFailed' => [
        'name' => 'Plugin-Installation fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Plugin für seine WordPress-Website zu installieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum die Installation fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFinished' => [
        'name' => 'Plugin-Installation abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein Plugin für seine WordPress-Website erfolgreich installiert wurde. Die Benachrichtigung kann Details darüber enthalten, welches Plugin installiert wurde und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFailed' => [
        'name' => 'Plugin-Update fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Plugin für seine WordPress-Website zu aktualisieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum das Update fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFinished' => [
        'name' => 'Plugin-Update abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein Plugin für seine WordPress-Website erfolgreich aktualisiert wurde. Die Benachrichtigung kann Details darüber enthalten, welches Plugin aktualisiert wurde und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFailed' => [
        'name' => 'Theme-Installation fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Theme für seine WordPress-Website zu installieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum die Installation fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFinished' => [
        'name' => 'Theme-Installation abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein Theme für seine WordPress-Website erfolgreich installiert wurde. Die Benachrichtigung kann Details darüber enthalten, welches Theme installiert wurde und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFailed' => [
        'name' => 'Theme-Update fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, ein Theme für seine WordPress-Website zu aktualisieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum das Update fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFinished' => [
        'name' => 'Theme-Update abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein Theme für seine WordPress-Website erfolgreich aktualisiert wurde. Die Benachrichtigung kann Details darüber enthalten, welches Theme aktualisiert wurde und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFailed' => [
        'name' => 'Erstellung der Staging-Instanz fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, eine Staging-Instanz seiner Website zu erstellen, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum die Erstellung fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFinished' => [
        'name' => 'Erstellung der Staging-Instanz abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass eine Staging-Instanz seiner Website erfolgreich erstellt wurde. Die Benachrichtigung kann Details darüber enthalten, wo die Staging-Instanz aufgerufen werden kann und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFailed' => [
        'name' => 'Installation der Instanz fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, eine WordPress-Instanz zu installieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum die Installation fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFinished' => [
        'name' => 'Installation der Instanz abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass eine WordPress-Instanz erfolgreich installiert wurde. Die Benachrichtigung kann Details darüber enthalten, wo die Instanz aufgerufen werden kann und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Instance\\ImportFailed' => [
        'name' => 'Import der Instanz fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, eine WordPress-Instanz zu importieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum der Import fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Instance\\ImportFinished' => [
        'name' => 'Import der Instanz abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass eine WordPress-Instanz erfolgreich importiert wurde. Die Benachrichtigung kann Details darüber enthalten, wo die Instanz aufgerufen werden kann und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInvitationReceived' => [
        'name' => 'Einladung zur Instanz erhalten',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass er eine Einladung zur Verwaltung einer bestimmten Instanz erhalten hat. Die Benachrichtigung kann Details darüber enthalten, wer die Einladung gesendet hat, welche Instanz verwaltet wird und welche Aktionen auf der Instanz durchgeführt werden können.',
    ],
    'App\\Notifications\\User\\System\\NewDeviceLogin' => [
        'name' => 'Anmeldung von neuem Gerät',
        'description' => 'Die Benachrichtigung ist ein Alarm, der generiert wird, wenn sich ein neues Gerät oder ein neuer Browser oder eine neue IP-Adresse auf der Website anmeldet. Die Benachrichtigung enthält in der Regel Informationen über das Gerät, wie z.B. die IP-Adresse, sowie das Datum und die Uhrzeit der Verbindung.',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFailed' => [
        'name' => 'Push auf Live fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, die auf der Staging-Instanz vorgenommenen Änderungen auf die Live-Version der Website zu übertragen, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum der Push fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFinished' => [
        'name' => 'Push auf Live abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die auf der Staging-Instanz vorgenommenen Änderungen erfolgreich auf die Live-Version der Website oder des Systems übertragen wurden. Die Benachrichtigung kann Details darüber enthalten, welche Änderungen vorgenommen wurden und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFailed' => [
        'name' => 'WordPress-Update fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Versuch, die WordPress-Instanz zu aktualisieren, fehlgeschlagen ist. Die Benachrichtigung kann Details darüber enthalten, warum das Update fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFinished' => [
        'name' => 'WordPress-Update abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die WordPress-Instanz erfolgreich aktualisiert wurde. Die Benachrichtigung kann Details darüber enthalten, welche Änderungen an der Instanz vorgenommen wurden und welche weiteren Schritte unternommen werden sollten.',
    ],
    'App\\Notifications\\User\\System\\ResetPassword' => [
        'name' => 'Passwort zurücksetzen',
        'description' => 'Eine E-Mail zum Zurücksetzen des Passworts ist eine automatisierte Nachricht, die an die E-Mail-Adresse eines Benutzers gesendet wird, wenn dieser sein Passwort für ein Konto zurücksetzen möchte. Die E-Mail enthält in der Regel einen Link oder Anweisungen zum Zurücksetzen des Passworts sowie eine zeitliche Begrenzung für die Gültigkeit des Links.',
    ],
    'App\\Notifications\\User\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Plugin-Update verfügbar',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Plugin, das er auf seiner WordPress-Website verwendet, jetzt verfügbar ist. Das Update enthält Fehlerbehebungen und neue Funktionen, die die Gesamtleistung und Funktionalität des Plugins verbessern.',
    ],
    'App\\Notifications\\User\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Theme-Update verfügbar',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein neues Update für ein Theme, das er auf seiner WordPress-Website verwendet, jetzt verfügbar ist. Das Update enthält Fehlerbehebungen und neue Funktionen, die die Gesamtleistung und Funktionalität des Themes verbessern.',
    ],
    'App\\Notifications\\User\\Updates\\WordpressUpdateAvailable' => [
        'name' => 'WordPress-Update verfügbar',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass ein neues Update für seine WordPress-Website jetzt verfügbar ist. Das Update enthält wichtige Sicherheitskorrekturen und neue Funktionen, die die Gesamtleistung und Funktionalität der Website verbessern.',
    ],
    'App\\Notifications\\Admin\\SslOrder\\DnsPropagationExceeded' => [
        'name' => 'DNS-Propagation für SSL-Bestellung überschritten',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die zugewiesene Zeit für die DNS-Propagation in Bezug auf seine SSL-Zertifikatsbestellung überschritten wurde.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\CreateADnsRecordFailed' => [
        'name' => 'Erstellung eines DNS-A-Eintrags fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Erstellung eines DNS-A-Eintrags fehlgeschlagen ist.',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFailed' => [
        'name' => 'Erstellung der Instanzvorlage fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Instanzvorlage nicht erstellt wurde.',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFinished' => [
        'name' => 'Erstellung der Instanzvorlage abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Instanzvorlage erfolgreich erstellt wurde.',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainCreateFailed' => [
        'name' => 'Erstellung der E-Mail-Domain fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Erstellung der E-Mail-Domain fehlgeschlagen ist.',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainExists' => [
        'name' => 'E-Mail-Domain existiert',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die E-Mail-Domain bereits auf dem E-Mail-Server existiert.',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFailed' => [
        'name' => 'Synchronisation der Berichtsanbieter fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Synchronisation der Berichtsanbieter fehlgeschlagen ist. Die Benachrichtigung kann Informationen über die Instanz und die Fehlermeldung enthalten.',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFinished' => [
        'name' => 'Synchronisation der Berichtsanbieter abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Synchronisation der Berichtsanbieter abgeschlossen ist. Die Benachrichtigung kann Informationen über die Instanz enthalten.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsRecordsCreateFailed' => [
        'name' => 'Erstellung der DNS-Einträge fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die aufgelisteten DNS-Einträge für die Zone nicht erstellt wurden. Die Benachrichtigung kann Informationen über die DNS-Einträge oder die DNS-Zone enthalten.',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFailed' => [
        'name' => 'Import der Instanz durch Benutzer fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Import der Instanz durch den Benutzer fehlgeschlagen ist.',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFinished' => [
        'name' => 'Import der Instanz durch Benutzer abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der Import der Instanz durch den Benutzer erfolgreich war.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFailed' => [
        'name' => 'Manueller Import der Instanz fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der manuelle Import der Instanz durch den Administrator fehlgeschlagen ist.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFinished' => [
        'name' => 'Manueller Import der Instanz abgeschlossen',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass der manuelle Import der Instanz durch den Administrator erfolgreich war.',
    ],
    'App\\Notifications\\Admin\\Connection\\ServerAccountConnectionError' => [
        'name' => 'Hosting-Konto Verbindungsfehler',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Verbindung zum Hosting-Konto fehlgeschlagen ist.',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFailed' => [
        'description' => 'Die Benachrichtigung informiert den Empfänger darüber, dass ein Versuch, die Instanz aus der Sicherung wiederherzustellen, fehlgeschlagen ist. Die Benachrichtigung kann Einzelheiten darüber enthalten, warum die Wiederherstellung fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
        'name' => 'Wiederherstellung der Instanz fehlgeschlagen',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFinished' => [
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Instanz erfolgreich aus der Sicherung wiederhergestellt wurde. Die Benachrichtigung kann Einzelheiten darüber enthalten, welche Sicherung wiederhergestellt wurde und welche weiteren Schritte unternommen werden sollten.',
        'name' => 'Wiederherstellung der Instanz abgeschlossen',
    ],
    'App\\Notifications\\Admin\\Plan\\PlanConfigurationError' => [
        'name' => 'Fehler in der Plankonfiguration',
        'description' => 'Die Benachrichtigung informiert den Empfänger, dass die Plankonfiguration falsch konfiguriert ist.',
    ],
    'App\\Notifications\\Admin\\DiagnosticMode\\DiagnosticModeEnabled' => [
        'name' => 'Diagnosemodus Aktiviert',
        'description' => 'Die Benachrichtigung teilt dem Empfänger mit, dass der Diagnosemodus aktiviert wurde. Dieser Modus ermöglicht eine erweiterte Protokollierung und Überwachung, die bei der Fehlersuche und Identifizierung von Problemen im System helfen kann.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFailed' => [
        'name' => 'Push to Staging fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Empfänger darüber, dass der Versuch, die auf der Live-Instanz vorgenommenen Änderungen auf die Staging-Version der Website zu übertragen, fehlgeschlagen ist. Die Benachrichtigung kann Einzelheiten darüber enthalten, warum die Übertragung fehlgeschlagen ist und welche Schritte unternommen werden sollten, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFinished' => [
        'name' => 'Zum Staging schieben Beendet',
        'description' => 'Die Benachrichtigung informiert den Empfänger darüber, dass die auf der Live-Instanz vorgenommenen Änderungen erfolgreich auf die Staging-Version der Website oder des Systems übertragen wurden. Die Benachrichtigung kann Einzelheiten zu den vorgenommenen Änderungen und zu weiteren Schritten enthalten.',
    ],
    'App\\Notifications\\User\\System\\VerifyEmailAddress' => [
        'name' => 'E-Mail Adresse überprüfen',
        'description' => 'Bei der Registrierung wird ein Verifizierungscode an die E-Mail-Adresse des Nutzers gesendet.',
    ],
    'App\\Notifications\\User\\Service\\BeforeTrialExpirationFirstReminder' => [
        'name' => 'Vor Ablauf der Probezeit Erste Erinnerung',
        'description' => 'Vor Ablauf des Testzeitraums wird eine Erinnerung an die E-Mail-Adresse des Benutzers gesendet.',
    ],
    'App\\Notifications\\User\\Service\\BeforeTrialExpirationSecondReminder' => [
        'name' => 'Vor Ablauf der Probezeit Zweite Erinnerung',
        'description' => 'Vor Ablauf des Testzeitraums wird eine Erinnerung an die E-Mail-Adresse des Benutzers gesendet.',
    ],
    'App\\Notifications\\User\\Service\\BeforeTrialExpirationThirdReminder' => [
        'name' => 'Vor Ablauf der Probezeit Dritte Mahnung',
        'description' => 'Vor Ablauf des Testzeitraums wird eine Erinnerung an die E-Mail-Adresse des Benutzers gesendet.',
    ],
    'App\\Notifications\\User\\Service\\TrialExpired' => [
        'name' => 'Probezeit abgelaufen',
        'description' => 'Eine Benachrichtigung wird an die E-Mail-Adresse des Benutzers gesendet, wenn der Testdienst abläuft.',
    ],
    'App\\Notifications\\User\\Service\\AfterTrialExpirationFirstReminder' => [
        'name' => 'Nach Ablauf der Probezeit erste Erinnerung',
        'description' => 'Nach Ablauf des Testzeitraums wird eine Erinnerung an die E-Mail-Adresse des Benutzers gesendet.',
    ],
    'App\\Notifications\\User\\Service\\AfterTrialExpirationSecondReminder' => [
        'name' => 'Nach Ablauf der Probezeit zweite Erinnerung',
        'description' => 'Nach Ablauf des Testzeitraums wird eine Erinnerung an die E-Mail-Adresse des Benutzers gesendet.',
    ],
    'App\\Notifications\\User\\Service\\AfterTrialExpirationThirdReminder' => [
        'name' => 'Nach Ablauf der Probezeit Dritte Erinnerung',
        'description' => 'Nach Ablauf des Testzeitraums wird eine Erinnerung an die E-Mail-Adresse des Benutzers gesendet.',
    ],
    'App\\Notifications\\Admin\\SslOrder\\SslOrderFailed' => [
        'name' => 'SSL-Bestellung fehlgeschlagen',
        'description' => 'Die Benachrichtigung informiert den Administrator, dass ein SSL-Auftrag für die angegebene Domain fehlgeschlagen ist. Sie enthält relevante Details wie den Domainnamen, den Typ, den SSL-Anbieter und die Kundeninformationen. Möglicherweise ist sofortige Aufmerksamkeit erforderlich, um das Problem zu beheben.',
    ],
    'App\\Notifications\\User\\Instance\\CreateFtpAccountForInstance' => [
        'name' => 'FTP-Konto für Instanz erstellt',
        'description' => 'Diese Benachrichtigung informiert den Benutzer, dass ein neues FTP-Konto erfolgreich erstellt wurde. Sie enthält wichtige Details wie den FTP-Benutzernamen, das Kennwort und die Serveradresse, damit der Benutzer auf seine Dateien zugreifen kann.',
    ],
    'App\\Notifications\\User\\System\\CreateUser' => [
        'name' => 'Willkommen Benutzer',
        'description' => 'Diese Benachrichtigung informiert den Nutzer, dass sein Konto erfolgreich erstellt wurde. Sie enthält die erforderlichen Anmeldedaten wie Benutzername und Passwort, damit der Nutzer auf sein Konto zugreifen kann.',
    ],
];
