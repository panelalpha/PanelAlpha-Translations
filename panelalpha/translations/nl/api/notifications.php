<?php

use App\Notifications\Admin\Connection\ServerAccountConnectionError;
use App\Notifications\Admin\DiagnosticMode\DiagnosticModeEnabled;
use App\Notifications\Admin\DnsZone\CreateADnsRecordFailed;
use App\Notifications\Admin\DnsZone\DnsRecordsCreateFailed;
use App\Notifications\Admin\Instance\ImportByUserFailed;
use App\Notifications\Admin\Instance\ImportByUserFinished;
use App\Notifications\Admin\Instance\ManualImportInstanceFailed;
use App\Notifications\Admin\Instance\ManualImportInstanceFinished;
use App\Notifications\Admin\Instance\RestoreInstanceFailed;
use App\Notifications\Admin\Instance\RestoreInstanceFinished;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFailed;
use App\Notifications\Admin\InstanceTemplate\InstanceTemplateCreateFinished;
use App\Notifications\Admin\EmailDomain\EmailDomainCreateFailed;
use App\Notifications\Admin\EmailDomain\EmailDomainExists;
use App\Notifications\Admin\Plan\PlanConfigurationError;
use App\Notifications\Admin\ReportProvider\SyncReportProvidersFailed;
use App\Notifications\Admin\ReportProvider\SyncReportProvidersFinished;
use App\Notifications\Admin\SslOrder\DnsPropagationExceeded;
use App\Notifications\Admin\SslOrder\SslOrderFailed;
use App\Notifications\User\Instance\CreateFtpAccountForInstance;
use App\Notifications\User\Instance\PushToStagingFailed;
use App\Notifications\User\Instance\PushToStagingFinished;
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
use App\Notifications\Admin\Server\ServerAlert;
use App\Notifications\User\Instance\ImportFailed;
use App\Notifications\User\Instance\ImportFinished;
use App\Notifications\User\Service\SyncHostingAccountFailed;
use App\Notifications\User\Service\SyncHostingAccountFinished;
use App\Notifications\User\System\ControlPanelUpgrade;
use App\Notifications\User\System\CreateUser;
use App\Notifications\User\Service\AfterTrialExpirationFirstReminder;
use App\Notifications\User\Service\AfterTrialExpirationSecondReminder;
use App\Notifications\User\Service\AfterTrialExpirationThirdReminder;
use App\Notifications\User\Service\BeforeTrialExpirationFirstReminder;
use App\Notifications\User\Service\BeforeTrialExpirationSecondReminder;
use App\Notifications\User\Service\BeforeTrialExpirationThirdReminder;
use App\Notifications\User\Service\TrialExpired;
use App\Notifications\User\System\NewDeviceLogin;
use App\Notifications\User\System\VerifyEmailAddress;

return [
    ForceUpdatePluginFailed::class => [
        'name' => 'Forceer update-plugin mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een update-plugin in de instantie te forceren is mislukt. De melding kan details bevatten over de plugin en de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    ForceUpdatePluginFinished::class => [
        'name' => 'Forceer update plugin voltooid',
        'description' => 'De melding informeert de ontvanger dat een poging om een update-plugin in de instantie te forceren met succes is voltooid. De notificatie kan details bevatten over de plugin en de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    ForceUpdateThemeFailed::class => [
        'name' => 'Thema geforceerd bijwerken mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een update van het thema in de instantie te forceren is mislukt. De melding kan details bevatten over het thema en de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    ForceUpdateThemeFinished::class => [
        'name' => 'Kracht Update Thema Afgewerkt',
        'description' => 'De melding informeert de ontvanger dat een poging om een update van het thema in de instantie te forceren met succes is voltooid. De melding kan details bevatten over het thema en de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    InstallPackageFailed::class => [
        'name' => 'Installatie pakket mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om plugins en thema\'s te installeren en te activeren van pakketten die zijn toegewezen aan een instantie, is mislukt. De melding kan details bevatten over de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    InstallPackageFinished::class => [
        'name' => 'Installatiepakket voltooid',
        'description' => 'De melding informeert de ontvanger dat een poging om plugins en thema\'s van pakketten in een instantie te installeren en te activeren met succes is voltooid. De melding kan details bevatten over de gerelateerde instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    InstanceInstallationByUserFinished::class => [
        'name' => 'Installatie van instantie door gebruiker voltooid',
        'description' => 'De melding informeert de ontvanger dat de installatie van een nieuwe WordPress instantie door een gebruiker is voltooid. De melding kan details bevatten over wie de instantie heeft aangemaakt, de locatie van de instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    InstanceInstallationByUserFailed::class => [
        'name' => 'Instance installatie door gebruiker mislukt',
        'description' => 'De melding informeert de ontvanger dat de installatie van een nieuwe WordPress instantie door een gebruiker is mislukt. De melding kan details bevatten over wie de instantie heeft aangemaakt, de locatie van de instantie, informatie over fouten en eventuele verdere stappen die moeten worden genomen.',
    ],
    InstanceDeletedByUser::class => [
        'name' => 'Instance verwijderd door gebruiker',
        'description' => 'De notificatie informeert de ontvanger dat een WordPress instantie is verwijderd door een gebruiker. De notificatie kan details bevatten over wie de instantie heeft verwijderd, de naam van de instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    ResetPassword::class => [
        'name' => 'Wachtwoord opnieuw instellen',
        'description' => 'Een e-mail om het wachtwoord te resetten is een geautomatiseerd bericht dat naar het e-mailadres van een gebruiker wordt gestuurd wanneer deze een verzoek indient om zijn wachtwoord voor een account te resetten. De e-mail bevat meestal een koppeling of instructies om het wachtwoord opnieuw in te stellen, evenals een tijdslimiet voor de geldigheid van de koppeling.',
    ],
    VerifyEmailAddress::class => [
        'name' => 'E-mailadres controleren',
        'description' => 'Er wordt een verificatiecode naar het e-mailadres van de gebruiker gestuurd wanneer deze zich registreert.',
    ],
    BeforeTrialExpirationFirstReminder::class => [
        'name' => 'Voor afloop proefperiode Eerste herinnering',
        'description' => 'Er wordt een herinnering verstuurd naar het e-mailadres van de gebruiker voordat de testservice verloopt.',
    ],
    BeforeTrialExpirationSecondReminder::class => [
        'name' => 'Voor afloop proef Tweede herinnering',
        'description' => 'Er wordt een herinnering verstuurd naar het e-mailadres van de gebruiker voordat de testservice verloopt.',
    ],
    BeforeTrialExpirationThirdReminder::class => [
        'name' => 'Voor afloop proef Derde herinnering',
        'description' => 'Er wordt een herinnering verstuurd naar het e-mailadres van de gebruiker voordat de testservice verloopt.',
    ],
    TrialExpired::class => [
        'name' => 'Proef Verlopen',
        'description' => 'Er wordt een melding naar het e-mailadres van de gebruiker gestuurd wanneer hun testservice verloopt.',
    ],
    AfterTrialExpirationFirstReminder::class => [
        'name' => 'Na afloop proefperiode Eerste herinnering',
        'description' => 'Er wordt een herinnering verstuurd naar het e-mailadres van de gebruiker nadat de testservice is verlopen.',
    ],
    AfterTrialExpirationSecondReminder::class => [
        'name' => 'Na afloop proefperiode Tweede herinnering',
        'description' => 'Er wordt een herinnering verstuurd naar het e-mailadres van de gebruiker nadat de testservice is verlopen.',
    ],
    AfterTrialExpirationThirdReminder::class => [
        'name' => 'Na afloop proef Derde herinnering',
        'description' => 'Er wordt een herinnering verstuurd naar het e-mailadres van de gebruiker nadat de testservice is verlopen.',
    ],
    PluginUpdateAvailable::class => [
        'name' => 'Plugin-update beschikbaar',
        'description' => 'Een melding informeert de ontvanger dat er nu een nieuwe update beschikbaar is voor een plugin die ze gebruiken op hun WordPress website. De update bevat bugfixes en nieuwe functies die de algehele prestaties en functionaliteit van de plugin verbeteren.',
    ],
    ThemeUpdateAvailable::class => [
        'name' => 'Thema-update beschikbaar',
        'description' => 'Met deze melding wordt de ontvanger geïnformeerd dat er nu een nieuwe update beschikbaar is voor een thema dat ze gebruiken op hun WordPress-website. De update bevat bugfixes en nieuwe functies die de algehele prestaties en functionaliteit van het thema verbeteren.',
    ],
    WordpressUpdateAvailable::class => [
        'name' => 'WordPress Update beschikbaar',
        'description' => 'Met deze melding wordt de ontvanger geïnformeerd dat er nu een nieuwe update voor hun WordPress website beschikbaar is. De update bevat belangrijke beveiligingsoplossingen en nieuwe functies die de algehele prestaties en functionaliteit van de website verbeteren.',
    ],
    QueueTaskFailed::class => [
        'name' => 'Taak in wachtrij mislukt',
        'description' => 'De notificatie informeert de ontvanger dat de taak in de wachtrij is mislukt. De notificatie kan details bevatten over de taak, de gerelateerde instantie en de fout.',
    ],
    QueueTaskSucceeded::class => [
        'name' => 'Taak in wachtrij geslaagd',
        'description' => 'De kennisgeving informeert de ontvanger dat de taak in de wachtrij geslaagd is. De notificatie kan details van de taak en de gerelateerde instantie bevatten.',
    ],
    ServiceSuspended::class => [
        'name' => 'Service opgeschort',
        'description' => 'De melding informeert de ontvanger dat zijn service is opgeschort. De melding kan informatie bevatten over het opgeschorte domein en een koppeling om de service te herstellen.',
    ],
    ServiceUnsuspended::class => [
        'name' => 'Service Unsuspended',
        'description' => 'De kennisgeving informeert de ontvanger dat zijn service is opgeschort. De kennisgeving kan informatie bevatten over het niet-opgeschorte domein en eventuele verdere stappen die moeten worden ondernomen.',
    ],
    ServerAlert::class => [
        'name' => 'Serverwaarschuwing',
        'description' => 'Deze melding informeert de ontvanger over waarschuwingen die op de hostingserver zijn gedetecteerd.',
    ],
    DnsZoneExists::class => [
        'name' => 'DNS-zone bestaat',
        'description' => 'De melding informeert de ontvanger dat de poging om een DNS-zone aan te maken is mislukt omdat de DNS-zone al bestaat. De melding kan details bevatten over de bestaande DNS-zone, de betrokken service en de betrokken DNS-server.',
    ],
    DnsZoneCreateFailed::class => [
        'name' => 'DNS Zone Create Failed',
        'description' => 'De melding informeert de ontvanger dat de poging om een DNS-zone aan te maken is mislukt. Het bericht kan informatie bevatten over de gepoogde DNS-zone, de gebruikte dienst en de server waarop het aanmaken is mislukt.',
    ],
    ServiceUpgraded::class => [
        'name' => 'Service verbeterd',
        'description' => 'De melding informeert de ontvanger dat zijn service is geüpgraded. De melding kan informatie bevatten over het geüpgradede domein en eventuele verdere stappen die genomen moeten worden.',
    ],
    CreateFailed::class => [
        'name' => 'Back-up maken mislukt',
        'description' => 'De melding informeert de ontvanger dat het maken van een back-up van hun website of systeem is mislukt. De melding kan details bevatten over waarom de back-up is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    CreateFinished::class => [
        'name' => 'Back-up maken voltooid',
        'description' => 'De melding informeert de ontvanger dat er met succes een back-up van zijn website of systeem is gemaakt. De melding kan details bevatten over waar de back-up is opgeslagen en hoe deze kan worden geopend.',
    ],
    DeleteFailed::class => [
        'name' => 'Back-up verwijderen mislukt',
        'description' => 'De melding informeert de ontvanger dat het verwijderen van een back-up van hun website is mislukt. De melding kan details bevatten over waarom het verwijderen is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    DeleteFinished::class => [
        'name' => 'Back-up verwijderen voltooid',
        'description' => 'De melding informeert de ontvanger dat een back-up van hun website met succes is verwijderd. De kennisgeving kan details bevatten over welke back-up is verwijderd en eventuele verdere stappen die moeten worden ondernomen.',
    ],
    RestoreFailed::class => [
        'name' => 'Back-up herstellen mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een back-up van hun website te herstellen is mislukt. De melding kan details bevatten over waarom het herstellen is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    RestoreFinished::class => [
        'name' => 'Back-up herstellen voltooid',
        'description' => 'De melding informeert de ontvanger dat een back-up van hun website met succes is hersteld. De melding kan details bevatten over welke back-up is teruggezet en eventuele verdere stappen die moeten worden genomen.',
    ],
    AutomaticCreateFailed::class => [
        'name' => 'Automatisch back-up maken mislukt',
        'description' => 'De melding informeert de ontvanger dat het maken van een automatische back-up van hun website of systeem is mislukt. De melding kan details bevatten over waarom de back-up is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    AutomaticCreateFinished::class => [
        'name' => 'Automatisch back-up maken voltooid',
        'description' => 'De melding informeert de ontvanger dat er met succes een automatische back-up van hun website of systeem is gemaakt. De melding kan details bevatten over waar de back-up is opgeslagen en hoe deze kan worden geopend.',
    ],
    InstallFailed::class => [
        'name' => 'Installatie plugin mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een plugin te installeren voor hun WordPress website is mislukt. De melding kan details bevatten over waarom de installatie is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    InstallFinished::class => [
        'name' => 'Installatie van plugin voltooid',
        'description' => 'De melding informeert de ontvanger dat een plugin voor zijn WordPress website met succes is geïnstalleerd. De melding kan details bevatten over welke plugin is geïnstalleerd en eventuele verdere stappen die moeten worden genomen.',
    ],
    UpdateFailed::class => [
        'name' => 'Plugin update mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een plugin voor hun WordPress website bij te werken is mislukt. De melding kan details bevatten over waarom de update is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    UpdateFinished::class => [
        'name' => 'Installatie van plugin voltooid',
        'description' => 'De melding informeert de ontvanger dat een plugin voor zijn WordPress website met succes is bijgewerkt. De melding kan details bevatten over welke plugin is bijgewerkt en eventuele verdere stappen die moeten worden genomen.',
    ],
    \App\Notifications\User\Theme\InstallFailed::class => [
        'name' => 'Thema-installatie mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een thema voor hun WordPress website te installeren is mislukt. De melding kan details bevatten over waarom de installatie is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    \App\Notifications\User\Theme\InstallFinished::class => [
        'name' => 'Thema-installatie voltooid',
        'description' => 'De melding informeert de ontvanger dat een thema voor zijn WordPress website met succes is geïnstalleerd. De melding kan details bevatten over welk thema is geïnstalleerd en eventuele verdere stappen die moeten worden genomen.',
    ],
    \App\Notifications\User\Theme\UpdateFailed::class => [
        'name' => 'Thema-update mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een thema voor hun WordPress website bij te werken is mislukt. De melding kan details bevatten over waarom de update is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    \App\Notifications\User\Theme\UpdateFinished::class => [
        'name' => 'Thema-update voltooid',
        'description' => 'De melding informeert de ontvanger dat een thema voor zijn WordPress-website met succes is bijgewerkt. De melding kan details bevatten over welk thema is bijgewerkt en eventuele verdere stappen die moeten worden genomen.',
    ],
    CreateStagingFailed::class => [
        'name' => 'Staging maken mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een staging instantie van hun website aan te maken is mislukt. De melding kan details bevatten over waarom het aanmaken is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    CreateStagingFinished::class => [
        'name' => 'Afgeronde enscenering maken',
        'description' => 'De notificatie informeert de ontvanger dat een staging instance van hun website met succes is aangemaakt. De notificatie kan details bevatten over waar de staging instance kan worden benaderd en eventuele verdere stappen die moeten worden genomen.',
    ],
    InstanceInstallationFailed::class => [
        'name' => 'Instance installatie mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een WordPress-instantie te installeren is mislukt. De melding kan details bevatten over waarom de installatie is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    InstanceInstallationFinished::class => [
        'name' => 'Instance installatie voltooid',
        'description' => 'De melding informeert de ontvanger dat een WordPress instantie met succes is geïnstalleerd. De melding kan details bevatten over waar de instantie kan worden benaderd en eventuele verdere stappen die moeten worden genomen.',
    ],
    ImportFailed::class => [
        'name' => 'Instance import mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om een WordPress instantie te importeren is mislukt. De melding kan details bevatten over waarom het importeren is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    ImportFinished::class => [
        'name' => 'Instance import voltooid',
        'description' => 'De melding informeert de ontvanger dat een WordPress instantie met succes is geïmporteerd. De notificatie kan details bevatten over waar de instantie kan worden benaderd en eventuele verdere stappen die moeten worden genomen.',
    ],
    InstanceInvitationReceived::class => [
        'name' => 'Uitnodiging ontvangen',
        'description' => 'De notificatie informeert de ontvanger dat hij een uitnodiging heeft ontvangen om een specifieke instantie te beheren. De notificatie kan details bevatten over wie de uitnodiging heeft verstuurd, de instantie die wordt beheerd en de acties die op de instantie kunnen worden uitgevoerd.',
    ],
    NewDeviceLogin::class => [
        'name' => 'Inloggen vanaf nieuw apparaat',
        'description' => 'Een notificatie is een waarschuwing die wordt gegenereerd wanneer een nieuw apparaat, een nieuwe browser of een nieuw ip-adres zich aanmeldt op de website. De melding bevat meestal informatie over het apparaat, zoals het IP-adres en de datum en tijd van de verbinding.',
    ],
    PushToLiveFailed::class => [
        'name' => 'Push To Live mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om de wijzigingen die zijn gemaakt op de staging instance te pushen naar de live versie van de website is mislukt. De melding kan details bevatten over waarom de push is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    PushToLiveFinished::class => [
        'name' => 'Push To Live Voltooid',
        'description' => 'De notificatie informeert de ontvanger dat de wijzigingen die zijn gemaakt op de staging instance met succes naar de live versie van de website of het systeem zijn gepushed. De notificatie kan details bevatten over welke wijzigingen er zijn gemaakt en welke verdere stappen er moeten worden genomen.',
    ],
    UpdateWordpressFailed::class => [
        'name' => 'WordPress update mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om de WordPress-instantie bij te werken is mislukt. De melding kan details bevatten over waarom de update is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    UpdateWordpressFinished::class => [
        'name' => 'WordPress Update Voltooid',
        'description' => 'De notificatie informeert de ontvanger dat de WordPress instantie met succes is bijgewerkt. De melding kan details bevatten over de wijzigingen die zijn aangebracht in de instantie en eventuele verdere stappen die moeten worden genomen.',
    ],
    \App\Notifications\User\System\ResetPassword::class => [
        'name' => 'Wachtwoord opnieuw instellen',
        'description' => 'Een e-mail om het wachtwoord te resetten is een geautomatiseerd bericht dat naar het e-mailadres van een gebruiker wordt gestuurd wanneer deze een verzoek indient om zijn wachtwoord voor een account te resetten. De e-mail bevat meestal een koppeling of instructies om het wachtwoord opnieuw in te stellen, evenals een tijdslimiet voor de geldigheid van de koppeling.',
    ],
    \App\Notifications\User\Updates\PluginUpdateAvailable::class => [
        'name' => 'Plugin-update beschikbaar',
        'description' => 'Een melding informeert de ontvanger dat er nu een nieuwe update beschikbaar is voor een plugin die ze gebruiken op hun WordPress website. De update bevat bugfixes en nieuwe functies die de algehele prestaties en functionaliteit van de plugin verbeteren.',
    ],
    \App\Notifications\User\Updates\ThemeUpdateAvailable::class => [
        'name' => 'Thema-update beschikbaar',
        'description' => 'Met deze melding wordt de ontvanger geïnformeerd dat er nu een nieuwe update beschikbaar is voor een thema dat ze gebruiken op hun WordPress-website. De update bevat bugfixes en nieuwe functies die de algehele prestaties en functionaliteit van het thema verbeteren.',
    ],
    \App\Notifications\User\Updates\WordpressUpdateAvailable::class => [
        'name' => 'WordPress Update beschikbaar',
        'description' => 'Met deze melding wordt de ontvanger geïnformeerd dat er nu een nieuwe update voor hun WordPress website beschikbaar is. De update bevat belangrijke beveiligingsoplossingen en nieuwe functies die de algehele prestaties en functionaliteit van de website verbeteren.',
    ],
    DnsPropagationExceeded::class => [
        'name' => 'DNS Propagatie overschreden voor SSL-opdracht',
        'description' => 'De melding informeert de ontvanger dat de toegewezen tijd voor DNS-propagatie is overschreden met betrekking tot hun SSL-certificaatbestelling.',
    ],
    CreateADnsRecordFailed::class => [
        'name' => 'Aanmaak A DNS-bestand mislukt',
        'description' => 'De melding informeert de ontvanger dat het aanmaken van DNS-record A is mislukt.',
    ],
    InstanceTemplateCreateFailed::class => [
        'name' => 'Instance sjabloon aanmaken mislukt',
        'description' => 'Melding informeert de ontvanger dat de instantie sjabloon niet is aangemaakt.',
    ],
    InstanceTemplateCreateFinished::class => [
        'name' => 'Instance sjabloon maken voltooid',
        'description' => 'Melding informeert de ontvanger dat de instantie sjabloon met succes is aangemaakt.',
    ],
    EmailDomainCreateFailed::class => [
        'name' => 'Aanmaak e-maildomein mislukt',
        'description' => 'De ontvanger wordt geïnformeerd dat het aanmaken van het e-maildomein is mislukt.',
    ],
    EmailDomainExists::class => [
        'name' => 'Email Domain Exists',
        'description' => 'Kennisgeving informeert de ontvanger dat het e-maildomein al bestaat op de e-mailserver.',
    ],
    SyncReportProvidersFailed::class => [
        'name' => 'Sync Report Providers mislukt',
        'description' => 'Een melding informeert de ontvanger dat de synchronisatie van rapportaanbieders is mislukt. De melding kan informatie over de instantie en het foutbericht bevatten.',
    ],
    SyncReportProvidersFinished::class => [
        'name' => 'Synchroniseer rapportaanbieders Voltooid',
        'description' => 'De melding informeert de ontvanger dat de synchronisatie van rapportaanbieders is voltooid De melding kan instance-informatie bevatten.',
    ],
    DnsRecordsCreateFailed::class => [
        'name' => 'Aanmaak DNS-records mislukt',
        'description' => 'De melding informeert de ontvanger dat de vermelde dns-records niet voor de zone zijn aangemaakt. De melding kan informatie bevatten over dns-records of dns-zone.',
    ],
    ImportByUserFailed::class => [
        'name' => 'Instance import door gebruiker mislukt',
        'description' => 'De melding informeert de ontvanger dat het importeren van de instantie door de gebruiker is mislukt.',
    ],
    ImportByUserFinished::class => [
        'name' => 'Instance importeren door gebruiker voltooid',
        'description' => 'De melding informeert de ontvanger dat het importeren van de instantie door de gebruiker is gelukt.',
    ],
    ManualImportInstanceFailed::class => [
        'name' => 'Handmatige import mislukt',
        'description' => 'De melding informeert de ontvanger dat de handmatige import van de instantie door de beheerder is mislukt.',
    ],
    ManualImportInstanceFinished::class => [
        'name' => 'Handmatig importeren Instance voltooid',
        'description' => 'De melding informeert de ontvanger dat de handmatige import van de instantie door de beheerder is geslaagd.',
    ],
    ServerAccountConnectionError::class => [
        'name' => 'Fout bij verbinding hostingaccount',
        'description' => 'De melding informeert de ontvanger dat de verbinding met de hostingaccount is mislukt.',
    ],
    RestoreInstanceFailed::class => [
        'name' => 'Instance herstel mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om de instantie vanuit een back-up te herstellen is mislukt. De melding kan details bevatten over waarom de restore is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    RestoreInstanceFinished::class => [
        'name' => 'Instance herstel voltooid',
        'description' => 'De melding informeert de ontvanger dat de instantie met succes vanuit een back-up is hersteld. De notificatie kan details bevatten over welke back-up is hersteld en eventuele verdere stappen die moeten worden genomen.',
    ],
    PlanConfigurationError::class => [
        'name' => 'Fout bij planconfiguratie',
        'description' => 'De melding informeert de ontvanger dat de configuratie van het plan verkeerd is geconfigureerd.',
    ],
    DiagnosticModeEnabled::class => [
        'name' => 'Diagnostische modus ingeschakeld',
        'description' => 'De melding informeert de ontvanger dat de diagnosemodus is geactiveerd. Deze modus maakt verbeterde logging en monitoring mogelijk, wat kan helpen bij het oplossen van problemen en het identificeren van problemen binnen het systeem.',
    ],
    PushToStagingFailed::class => [
        'name' => 'Push naar Staging mislukt',
        'description' => 'De melding informeert de ontvanger dat een poging om de wijzigingen die zijn gemaakt op de live versie naar de staging versie van de website te pushen is mislukt. De melding kan details bevatten over waarom de push is mislukt en welke stappen moeten worden ondernomen om het probleem op te lossen.',
    ],
    PushToStagingFinished::class => [
        'name' => 'Push naar Staging Voltooid',
        'description' => 'Een notificatie informeert de ontvanger dat de wijzigingen die zijn gemaakt op de live versie succesvol zijn doorgevoerd naar de staging versie van de website of het systeem. De notificatie kan details bevatten over welke wijzigingen er zijn gemaakt en eventuele verdere stappen die moeten worden genomen.',
    ],
    SslOrderFailed::class => [
        'name' => 'SSL Bestelling mislukt',
        'description' => 'De melding informeert de beheerder dat een SSL-bevel is mislukt voor het opgegeven domein. Het bevat relevante details zoals de domeinnaam, het type, de SSL provider en klantinformatie. Er kan onmiddellijke aandacht nodig zijn om het probleem op te lossen.',
    ],
    CreateFtpAccountForInstance::class => [
        'name' => 'FTP-account aangemaakt voor instantie',
        'description' => 'Deze melding informeert de gebruiker dat een nieuw FTP account succesvol is aangemaakt. Het bevat essentiële details zoals de FTP gebruikersnaam, het wachtwoord en het serveradres, zodat de gebruiker toegang heeft tot zijn bestanden.',
    ],
    CreateUser::class => [
        'name' => 'Welkom gebruiker',
        'description' => 'Deze melding informeert de gebruiker dat zijn account met succes is aangemaakt. De melding bevat de benodigde aanmeldgegevens zoals gebruikersnaam en wachtwoord, zodat de gebruiker toegang krijgt tot zijn account.',
    ],
    SyncHostingAccountFailed::class => [
        'name' => 'Synchronisatie van hostingaccount van de service mislukt',
        'description' => 'Deze melding informeert de gebruiker dat het hostingaccount op deze service niet kon worden gesynchroniseerd.',
    ],
    SyncHostingAccountFinished::class => [
        'name' => 'Synchronisatie van hostingaccount van de service voltooid',
        'description' => 'Deze melding informeert de gebruiker dat het hostingaccount op deze service succesvol is gesynchroniseerd.',
    ],
    ControlPanelUpgrade::class => [
        'name' => 'Welkomst-e-mail voor upgrade van het controlepaneel',
        'description' => 'Deze melding informeert dat het hostingaccount succesvol is geüpgraded via het controlepaneel. Het bevat de benodigde inloggegevens zodat de gebruiker toegang heeft tot het account.',
    ],
];
