<?php

return [
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFailed' => [
        'description' => 'De melding informeert de ontvanger dat een poging om een update-plugin in de instantie te forceren is mislukt. De melding kan details bevatten over de plugin en de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
        'name' => 'Forceer update-plugin mislukt',
    ],
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFinished' => [
        'name' => 'Forceer update plugin voltooid',
        'description' => 'De melding informeert de ontvanger dat een poging om een update-plugin in de instantie te forceren met succes is voltooid. De notificatie kan details bevatten over de plugin en de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFailed' => [
        'name' => 'Thema geforceerd bijwerken mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een update van het thema in de instantie te forceren is mislukt. De melding kan details bevatten over het thema en de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFailed' => [
        'name' => 'Installatie pakket mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om plugins en thema\'s te installeren en te activeren van pakketten die zijn toegewezen aan een instantie, is mislukt. De melding kan details bevatten over de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFinished' => [
        'description' => 'De melding informeert de ontvanger dat een poging om plugins en thema\'s van pakketten in een instantie te installeren en te activeren met succes is voltooid. De melding kan details bevatten over de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
        'name' => 'Installatiepakket voltooid',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFinished' => [
        'name' => 'Installatie van instantie door gebruiker voltooid',
        'description' => 'De melding informeert de ontvanger dat de installatie van een nieuwe WordPress instantie door een gebruiker is voltooid. De melding kan details bevatten over wie de instantie heeft aangemaakt, de locatie van de instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\Admin\\System\\ResetPassword' => [
        'name' => 'Wachtwoord opnieuw instellen',
        'description' => 'Een e-mail om het wachtwoord te resetten is een geautomatiseerd bericht dat naar het e-mailadres van een gebruiker wordt gestuurd wanneer deze een verzoek indient om zijn wachtwoord voor een account te resetten. De e-mail bevat meestal een koppeling of instructies om het wachtwoord opnieuw in te stellen, evenals een tijdslimiet voor de geldigheid van de koppeling.',
    ],
    'App\\Notifications\\Admin\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Plugin-update beschikbaar',
        'description' => 'Een melding informeert de ontvanger dat er nu een nieuwe update beschikbaar is voor een plugin die ze gebruiken op hun WordPress website. De update bevat bugfixes en nieuwe functies die de algehele prestaties en functionaliteit van de plugin verbeteren.',
    ],
    'App\\Notifications\\Admin\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Thema-update beschikbaar',
        'description' => 'Met deze melding wordt de ontvanger geïnformeerd dat er nu een nieuwe update beschikbaar is voor een thema dat ze gebruiken op hun WordPress-website. De update bevat bugfixes en nieuwe functies die de algehele prestaties en functionaliteit van het thema verbeteren.',
    ],
    'App\\Notifications\\Admin\\Updates\\WordpressUpdateAvailable' => [
        'name' => 'WordPress Update beschikbaar',
        'description' => 'Met deze melding wordt de ontvanger geïnformeerd dat er nu een nieuwe update voor hun WordPress website beschikbaar is. De update bevat belangrijke beveiligingsoplossingen en nieuwe functies die de algehele prestaties en functionaliteit van de website verbeteren.',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskFailed' => [
        'name' => 'Taak in wachtrij mislukt',
        'description' => 'De notificatie informeert de ontvanger dat de taak in de wachtrij is mislukt. De notificatie kan details bevatten over de taak, de gerelateerde instantie en de fout.',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskSucceeded' => [
        'name' => 'Taak in wachtrij geslaagd',
        'description' => 'De kennisgeving informeert de ontvanger dat de taak in de wachtrij geslaagd is. De notificatie kan details van de taak en de gerelateerde instantie bevatten.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceSuspended' => [
        'name' => 'Service opgeschort',
        'description' => 'De melding informeert de ontvanger dat zijn service is opgeschort. De melding kan informatie bevatten over het opgeschorte domein en een koppeling om de service te herstellen.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUnsuspended' => [
        'name' => 'Service Unsuspended',
        'description' => 'De kennisgeving informeert de ontvanger dat zijn service is opgeschort. De kennisgeving kan informatie bevatten over het niet-opgeschorte domein en eventuele verdere stappen die moeten worden ondernomen.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneExists' => [
        'name' => 'DNS-zone bestaat',
        'description' => 'De melding informeert de ontvanger dat de poging om een DNS-zone aan te maken is mislukt omdat de DNS-zone al bestaat. De melding kan details bevatten over de bestaande DNS-zone, de betrokken service en de betrokken DNS-server.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneCreateFailed' => [
        'name' => 'DNS Zone Create Failed',
        'description' => 'De melding informeert de ontvanger dat de poging om een DNS-zone aan te maken is mislukt. Het bericht kan informatie bevatten over de gepoogde DNS-zone, de gebruikte dienst en de server waarop het aanmaken is mislukt.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUpgraded' => [
        'name' => 'Service verbeterd',
        'description' => 'De melding informeert de ontvanger dat zijn service is geüpgraded. De melding kan informatie bevatten over het geüpgradede domein en eventuele verdere stappen die genomen moeten worden.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFailed' => [
        'name' => 'Back-up maken mislukt',
        'description' => 'De melding informeert de ontvanger dat het maken van een back-up van hun website of systeem is mislukt. De melding kan details bevatten over waarom de back-up is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFailed' => [
        'name' => 'Back-up verwijderen mislukt',
        'description' => 'De melding informeert de ontvanger dat het verwijderen van een back-up van hun website is mislukt. De melding kan details bevatten over waarom het verwijderen is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFinished' => [
        'name' => 'Back-up verwijderen voltooid',
        'description' => 'De melding informeert de ontvanger dat een back-up van hun website met succes is verwijderd. De kennisgeving kan details bevatten over welke back-up is verwijderd en eventuele verdere stappen die moeten worden ondernomen.',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFailed' => [
        'description' => 'De melding informeert de ontvanger dat een poging om een back-up van hun website te herstellen is mislukt. De melding kan details bevatten over waarom het herstellen is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
        'name' => 'Back-up herstellen mislukt',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFinished' => [
        'name' => 'Back-up herstellen voltooid',
        'description' => 'De melding informeert de ontvanger dat een back-up van hun website met succes is hersteld. De melding kan details bevatten over welke back-up is teruggezet en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFailed' => [
        'name' => 'Automatisch back-up maken mislukt',
        'description' => 'De melding informeert de ontvanger dat het maken van een automatische back-up van hun website of systeem is mislukt. De melding kan details bevatten over waarom de back-up is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFinished' => [
        'name' => 'Automatisch back-up maken voltooid',
        'description' => 'De melding informeert de ontvanger dat er met succes een automatische back-up van hun website of systeem is gemaakt. De melding kan details bevatten over waar de back-up is opgeslagen en hoe deze kan worden geopend.',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFailed' => [
        'name' => 'Installatie plugin mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een plugin te installeren voor hun WordPress website is mislukt. De melding kan details bevatten over waarom de installatie is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFinished' => [
        'name' => 'Installatie van plugin voltooid',
        'description' => 'De melding informeert de ontvanger dat een plugin voor zijn WordPress website met succes is geïnstalleerd. De melding kan details bevatten over welke plugin is geïnstalleerd en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFailed' => [
        'description' => 'De melding informeert de ontvanger dat een poging om een plugin voor hun WordPress website bij te werken is mislukt. De melding kan details bevatten over waarom de update is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
        'name' => 'Plugin update mislukt',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFinished' => [
        'name' => 'Installatie van plugin voltooid',
        'description' => 'De melding informeert de ontvanger dat een plugin voor zijn WordPress website met succes is bijgewerkt. De melding kan details bevatten over welke plugin is bijgewerkt en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFailed' => [
        'name' => 'Thema-installatie mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een thema voor hun WordPress website te installeren is mislukt. De melding kan details bevatten over waarom de installatie is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFinished' => [
        'name' => 'Thema-installatie voltooid',
        'description' => 'De melding informeert de ontvanger dat een thema voor zijn WordPress website met succes is geïnstalleerd. De melding kan details bevatten over welk thema is geïnstalleerd en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFailed' => [
        'description' => 'De melding informeert de ontvanger dat een poging om een thema voor hun WordPress website bij te werken is mislukt. De melding kan details bevatten over waarom de update is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
        'name' => 'Thema-update mislukt',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFinished' => [
        'description' => 'De melding informeert de ontvanger dat een thema voor zijn WordPress-website met succes is bijgewerkt. De melding kan details bevatten over welk thema is bijgewerkt en eventuele verdere stappen die moeten worden genomen.',
        'name' => 'Thema-update voltooid',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFailed' => [
        'name' => 'Staging maken mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een staging instantie van hun website aan te maken is mislukt. De melding kan details bevatten over waarom het aanmaken is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFinished' => [
        'name' => 'Afgeronde enscenering maken',
        'description' => 'De notificatie informeert de ontvanger dat een staging instance van hun website met succes is aangemaakt. De notificatie kan details bevatten over waar de staging instance kan worden benaderd en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFailed' => [
        'description' => 'De melding informeert de ontvanger dat een poging om een WordPress-instantie te installeren is mislukt. De melding kan details bevatten over waarom de installatie is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
        'name' => 'Instance installatie mislukt',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFinished' => [
        'name' => 'Instance installatie voltooid',
        'description' => 'De melding informeert de ontvanger dat een WordPress instantie met succes is geïnstalleerd. De melding kan details bevatten over waar de instantie kan worden benaderd en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\User\\Instance\\ImportFailed' => [
        'name' => 'Instance import mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een WordPress instantie te importeren is mislukt. De melding kan details bevatten over waarom het importeren is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInvitationReceived' => [
        'name' => 'Uitnodiging ontvangen',
        'description' => 'De notificatie informeert de ontvanger dat hij een uitnodiging heeft ontvangen om een specifieke instantie te beheren. De notificatie kan details bevatten over wie de uitnodiging heeft verstuurd, de instantie die wordt beheerd en de acties die op de instantie kunnen worden uitgevoerd.',
    ],
    'App\\Notifications\\User\\System\\NewDeviceLogin' => [
        'description' => 'Een notificatie is een waarschuwing die wordt gegenereerd wanneer een nieuw apparaat, een nieuwe browser of een nieuw ip-adres zich aanmeldt op de website. De melding bevat meestal informatie over het apparaat, zoals het IP-adres en de datum en tijd van de verbinding.',
        'name' => 'Inloggen vanaf nieuw apparaat',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFailed' => [
        'name' => 'Push To Live mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om de wijzigingen die zijn gemaakt op de staging instance te pushen naar de live versie van de website is mislukt. De melding kan details bevatten over waarom de push is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFinished' => [
        'name' => 'Push To Live Voltooid',
        'description' => 'De notificatie informeert de ontvanger dat de wijzigingen die zijn gemaakt op de staging instance met succes naar de live versie van de website of het systeem zijn gepushed. De notificatie kan details bevatten over welke wijzigingen er zijn gemaakt en welke verdere stappen er moeten worden genomen.',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFailed' => [
        'description' => 'De melding informeert de ontvanger dat een poging om de WordPress-instantie bij te werken is mislukt. De melding kan details bevatten over waarom de update is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
        'name' => 'WordPress update mislukt',
    ],
    'App\\Notifications\\User\\System\\ResetPassword' => [
        'name' => 'Wachtwoord opnieuw instellen',
        'description' => 'Een e-mail om het wachtwoord te resetten is een geautomatiseerd bericht dat naar het e-mailadres van een gebruiker wordt gestuurd wanneer deze een verzoek indient om zijn wachtwoord voor een account te resetten. De e-mail bevat meestal een koppeling of instructies om het wachtwoord opnieuw in te stellen, evenals een tijdslimiet voor de geldigheid van de koppeling.',
    ],
    'App\\Notifications\\User\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Thema-update beschikbaar',
        'description' => 'Met deze melding wordt de ontvanger geïnformeerd dat er nu een nieuwe update beschikbaar is voor een thema dat ze gebruiken op hun WordPress-website. De update bevat bugfixes en nieuwe functies die de algehele prestaties en functionaliteit van het thema verbeteren.',
    ],
    'App\\Notifications\\User\\Updates\\WordpressUpdateAvailable' => [
        'name' => 'WordPress Update beschikbaar',
        'description' => 'Met deze melding wordt de ontvanger geïnformeerd dat er nu een nieuwe update voor hun WordPress website beschikbaar is. De update bevat belangrijke beveiligingsoplossingen en nieuwe functies die de algehele prestaties en functionaliteit van de website verbeteren.',
    ],
    'App\\Notifications\\Admin\\SslOrder\\DnsPropagationExceeded' => [
        'name' => 'DNS Propagatie overschreden voor SSL-opdracht',
        'description' => 'De melding informeert de ontvanger dat de toegewezen tijd voor DNS-propagatie is overschreden met betrekking tot hun SSL-certificaatbestelling.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\CreateADnsRecordFailed' => [
        'name' => 'Aanmaak A DNS-bestand mislukt',
        'description' => 'De melding informeert de ontvanger dat het aanmaken van DNS-record A is mislukt.',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFailed' => [
        'name' => 'Instance sjabloon aanmaken mislukt',
        'description' => 'Melding informeert de ontvanger dat de instantie sjabloon niet is aangemaakt.',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFinished' => [
        'description' => 'Melding informeert de ontvanger dat de instantie sjabloon met succes is aangemaakt.',
        'name' => 'Instance sjabloon maken voltooid',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainCreateFailed' => [
        'description' => 'De ontvanger wordt geïnformeerd dat het aanmaken van het e-maildomein is mislukt.',
        'name' => 'Aanmaak e-maildomein mislukt',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainExists' => [
        'name' => 'Email Domain Exists',
        'description' => 'Kennisgeving informeert de ontvanger dat het e-maildomein al bestaat op de e-mailserver.',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFailed' => [
        'description' => 'Een melding informeert de ontvanger dat de synchronisatie van rapportaanbieders is mislukt. De melding kan informatie over de instantie en het foutbericht bevatten.',
        'name' => 'Sync Report Providers mislukt',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFinished' => [
        'name' => 'Synchroniseer rapportaanbieders Voltooid',
        'description' => 'De melding informeert de ontvanger dat de synchronisatie van rapportaanbieders is voltooid De melding kan instance-informatie bevatten.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsRecordsCreateFailed' => [
        'name' => 'Aanmaak DNS-records mislukt',
        'description' => 'De melding informeert de ontvanger dat de vermelde dns-records niet voor de zone zijn aangemaakt. De melding kan informatie bevatten over dns-records of dns-zone.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFailed' => [
        'name' => 'Handmatige import mislukt',
        'description' => 'De melding informeert de ontvanger dat de handmatige import van de instantie door de beheerder is mislukt.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFinished' => [
        'name' => 'Handmatig importeren Instance voltooid',
        'description' => 'De melding informeert de ontvanger dat de handmatige import van de instantie door de beheerder is geslaagd.',
    ],
    'App\\Notifications\\Admin\\Connection\\ServerAccountConnectionError' => [
        'name' => 'Fout bij verbinding hostingaccount',
        'description' => 'De melding informeert de ontvanger dat de verbinding met de hostingaccount is mislukt.',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFailed' => [
        'name' => 'Instance herstel mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om de instantie vanuit een back-up te herstellen is mislukt. De melding kan details bevatten over waarom de restore is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFinished' => [
        'name' => 'Instance herstel voltooid',
        'description' => 'De melding informeert de ontvanger dat de instantie met succes vanuit een back-up is hersteld. De notificatie kan details bevatten over welke back-up is hersteld en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\Admin\\Plan\\PlanConfigurationError' => [
        'name' => 'Fout bij planconfiguratie',
        'description' => 'De melding informeert de ontvanger dat de configuratie van het plan verkeerd is geconfigureerd.',
    ],
    'App\\Notifications\\Admin\\DiagnosticMode\\DiagnosticModeEnabled' => [
        'name' => 'Diagnostische modus ingeschakeld',
        'description' => 'De melding informeert de ontvanger dat de diagnosemodus is geactiveerd. Deze modus maakt verbeterde logging en monitoring mogelijk, wat kan helpen bij het oplossen van problemen en het identificeren van problemen binnen het systeem.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFailed' => [
        'name' => 'Push naar Staging mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om de wijzigingen die zijn gemaakt op de live versie naar de staging versie van de website te pushen is mislukt. De melding kan details bevatten over waarom de push is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFinished' => [
        'name' => 'Push naar Staging Voltooid',
        'description' => 'Een notificatie informeert de ontvanger dat de wijzigingen die zijn gemaakt op de live versie succesvol zijn doorgevoerd naar de staging versie van de website of het systeem. De notificatie kan details bevatten over welke wijzigingen er zijn gemaakt en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFinished' => [
        'name' => 'Kracht Update Thema Afgewerkt',
        'description' => 'De melding informeert de ontvanger dat een poging om een update van het thema in de instantie te forceren met succes is voltooid. De melding kan details bevatten over het thema en de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFailed' => [
        'name' => 'Instance installatie door gebruiker mislukt',
        'description' => 'De melding informeert de ontvanger dat de installatie van een nieuwe WordPress instantie door een gebruiker is mislukt. De melding kan details bevatten over wie de instantie heeft aangemaakt, de locatie van de instantie, informatie over fouten en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceDeletedByUser' => [
        'name' => 'Instance verwijderd door gebruiker',
        'description' => 'De notificatie informeert de ontvanger dat een WordPress instantie is verwijderd door een gebruiker. De notificatie kan details bevatten over wie de instantie heeft verwijderd, de naam van de instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFinished' => [
        'name' => 'Back-up maken voltooid',
        'description' => 'De melding informeert de ontvanger dat er met succes een back-up van zijn website of systeem is gemaakt. De melding kan details bevatten over waar de back-up is opgeslagen en hoe deze kan worden geopend.',
    ],
    'App\\Notifications\\User\\Instance\\ImportFinished' => [
        'name' => 'Instance import voltooid',
        'description' => 'De melding informeert de ontvanger dat een WordPress instantie met succes is geïmporteerd. De notificatie kan details bevatten over waar de instantie kan worden benaderd en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFinished' => [
        'name' => 'WordPress Update Voltooid',
        'description' => 'De notificatie informeert de ontvanger dat de WordPress instantie met succes is bijgewerkt. De melding kan details bevatten over de wijzigingen die zijn aangebracht in de instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    'App\\Notifications\\User\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Plugin-update beschikbaar',
        'description' => 'Een melding informeert de ontvanger dat er nu een nieuwe update beschikbaar is voor een plugin die ze gebruiken op hun WordPress website. De update bevat bugfixes en nieuwe functies die de algehele prestaties en functionaliteit van de plugin verbeteren.',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFailed' => [
        'name' => 'Instance import door gebruiker mislukt',
        'description' => 'De melding informeert de ontvanger dat het importeren van de instantie door de gebruiker is mislukt.',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFinished' => [
        'name' => 'Instance importeren door gebruiker voltooid',
        'description' => 'De melding informeert de ontvanger dat het importeren van de instantie door de gebruiker is gelukt.',
    ],
];
