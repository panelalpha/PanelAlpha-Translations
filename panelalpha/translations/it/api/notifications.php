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
        'name' => 'Aggiornamento forzato del plugin non riuscito',
        'description' => 'La notifica informa il destinatario che il tentativo di forzare un plugin di aggiornamento nell\'istanza è fallito. La notifica può includere dettagli sul plugin e sull\'istanza correlata ed eventuali ulteriori passi da compiere.',
    ],
    ForceUpdatePluginFinished::class => [
        'name' => 'Aggiornamento forzato del plugin terminato',
        'description' => 'La notifica informa il destinatario che il tentativo di forzare un plugin di aggiornamento nell\'istanza è stato portato a termine con successo. La notifica può includere dettagli sul plugin e sull\'istanza correlata ed eventuali ulteriori passi da compiere.',
    ],
    ForceUpdateThemeFailed::class => [
        'name' => 'Aggiornamento forzato del tema non riuscito',
        'description' => 'La notifica informa il destinatario che il tentativo di forzare un tema di aggiornamento nell\'istanza è fallito. La notifica può includere dettagli sul tema e sull\'istanza correlata ed eventuali ulteriori passi da compiere.',
    ],
    ForceUpdateThemeFinished::class => [
        'name' => 'Aggiornamento del tema della forza terminato',
        'description' => 'La notifica informa il destinatario che il tentativo di forzare un tema di aggiornamento nell\'istanza è stato portato a termine con successo. La notifica può includere dettagli sul tema e sull\'istanza correlata ed eventuali ulteriori passi da compiere.',
    ],
    InstallPackageFailed::class => [
        'name' => 'Installazione del pacchetto fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di installare e attivare plugin e temi dai pacchetti assegnati all\'istanza è fallito. La notifica può includere dettagli sull\'istanza in questione ed eventuali ulteriori passi da compiere.',
    ],
    InstallPackageFinished::class => [
        'name' => 'Pacchetto di installazione terminato',
        'description' => 'La notifica informa il destinatario che il tentativo di installare e attivare plugin e temi dai pacchetti dell\'istanza è stato portato a termine con successo. La notifica può includere dettagli sull\'istanza correlata ed eventuali ulteriori passi da compiere.',
    ],
    InstanceInstallationByUserFinished::class => [
        'name' => 'Installazione dell\'istanza per utente terminata',
        'description' => 'La notifica informa il destinatario che l\'installazione di una nuova istanza di WordPress da parte dell\'utente è terminata. La notifica può includere dettagli su chi ha creato l\'istanza, sulla posizione dell\'istanza e su eventuali ulteriori passi da compiere.',
    ],
    InstanceInstallationByUserFailed::class => [
        'name' => 'Installazione dell\'istanza da parte dell\'utente non riuscita',
        'description' => 'La notifica informa il destinatario che l\'installazione di una nuova istanza di WordPress da parte dell\'utente non è riuscita. La notifica può includere dettagli su chi ha creato l\'istanza, la posizione dell\'istanza, informazioni sugli errori ed eventuali ulteriori passi da compiere.',
    ],
    InstanceDeletedByUser::class => [
        'name' => 'Istanza eliminata dall\'utente',
        'description' => 'La notifica informa il destinatario che un\'istanza di WordPress è stata eliminata da un utente. La notifica può includere dettagli su chi ha eliminato l\'istanza, sul nome dell\'istanza e su eventuali ulteriori passi da compiere.',
    ],
    ResetPassword::class => [
        'name' => 'Reimpostare la password',
        'description' => 'Un\'e-mail di reimpostazione della password è un messaggio automatico inviato all\'indirizzo e-mail di un utente che chiede di reimpostare la password di un account. L\'e-mail contiene in genere un link o istruzioni per reimpostare la password, nonché un limite di tempo per la validità del link.',
    ],
    VerifyEmailAddress::class => [
        'name' => 'Verifica dell\'indirizzo e-mail',
        'description' => 'Un codice di verifica viene inviato all\'indirizzo e-mail dell\'utente al momento della registrazione.',
    ],
    BeforeTrialExpirationFirstReminder::class => [
        'name' => 'Prima della scadenza della prova Primo promemoria',
        'description' => 'Un promemoria viene inviato all\'indirizzo e-mail dell\'utente prima della scadenza del servizio di prova.',
    ],
    BeforeTrialExpirationSecondReminder::class => [
        'name' => 'Prima della scadenza della prova Secondo promemoria',
        'description' => 'Un promemoria viene inviato all\'indirizzo e-mail dell\'utente prima della scadenza del servizio di prova.',
    ],
    BeforeTrialExpirationThirdReminder::class => [
        'name' => 'Prima della scadenza della prova Terzo promemoria',
        'description' => 'Un promemoria viene inviato all\'indirizzo e-mail dell\'utente prima della scadenza del servizio di prova.',
    ],
    TrialExpired::class => [
        'name' => 'Prova scaduta',
        'description' => 'Una notifica viene inviata all\'indirizzo e-mail dell\'utente quando il servizio di prova scade.',
    ],
    AfterTrialExpirationFirstReminder::class => [
        'name' => 'Dopo la scadenza della prova Primo promemoria',
        'description' => 'Un promemoria viene inviato all\'indirizzo e-mail dell\'utente dopo la scadenza del servizio di prova.',
    ],
    AfterTrialExpirationSecondReminder::class => [
        'name' => 'Dopo la scadenza della prova, secondo promemoria',
        'description' => 'Un promemoria viene inviato all\'indirizzo e-mail dell\'utente dopo la scadenza del servizio di prova.',
    ],
    AfterTrialExpirationThirdReminder::class => [
        'name' => 'Dopo la scadenza della prova Terzo promemoria',
        'description' => 'Un promemoria viene inviato all\'indirizzo e-mail dell\'utente dopo la scadenza del servizio di prova.',
    ],
    PluginUpdateAvailable::class => [
        'name' => 'Aggiornamento del plugin disponibile',
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per un plugin che sta utilizzando sul proprio sito web WordPress. L\'aggiornamento include correzioni di bug e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del plugin.',
    ],
    ThemeUpdateAvailable::class => [
        'name' => 'Aggiornamento del tema disponibile',
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per un tema che sta utilizzando sul proprio sito web WordPress. L\'aggiornamento include correzioni di bug e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del tema.',
    ],
    WordpressUpdateAvailable::class => [
        'name' => 'Disponibile l\'aggiornamento di WordPress',
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per il suo sito web WordPress. L\'aggiornamento include importanti correzioni di sicurezza e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del sito web.',
    ],
    QueueTaskFailed::class => [
        'name' => 'Attività di coda fallita',
        'description' => 'La notifica informa il destinatario che l\'attività in coda è fallita. La notifica può includere i dettagli dell\'attività, l\'istanza correlata e l\'errore.',
    ],
    QueueTaskSucceeded::class => [
        'name' => 'Attività di coda riuscita',
        'description' => 'La notifica informa il destinatario che l\'attività nella coda ha avuto successo. La notifica può includere i dettagli del compito e della relativa istanza.',
    ],
    ServiceSuspended::class => [
        'name' => 'Servizio sospeso',
        'description' => 'La notifica informa il destinatario che il suo servizio è stato sospeso. La notifica può includere informazioni sul dominio sospeso e un link per ripristinare il servizio.',
    ],
    ServiceUnsuspended::class => [
        'name' => 'Servizio non sospeso',
        'description' => 'La notifica informa il destinatario che il suo servizio è stato sospeso. La notifica può includere informazioni sul dominio non sospeso e sulle ulteriori misure da adottare.',
    ],
    ServerAlert::class => [
        'name' => 'Avviso del server',
        'description' => 'La notifica informa il destinatario degli avvisi rilevati sul server di hosting.',
    ],
    DnsZoneExists::class => [
        'name' => 'La zona DNS esiste',
        'description' => 'La notifica informa il destinatario che il tentativo di creazione della zona DNS è fallito perché la zona DNS esiste già. La notifica può includere dettagli sulla zona DNS esistente, sul servizio interessato e sul server DNS coinvolto.',
    ],
    DnsZoneCreateFailed::class => [
        'name' => 'Creazione zona DNS fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di creazione di una zona DNS è fallito. Il messaggio può fornire informazioni sulla zona DNS tentata, sul servizio in uso e sul server su cui la creazione non è riuscita.',
    ],
    ServiceUpgraded::class => [
        'name' => 'Servizio aggiornato',
        'description' => 'La notifica informa il destinatario che il suo servizio è stato aggiornato. La notifica può includere informazioni sul dominio aggiornato e su eventuali ulteriori passi da compiere.',
    ],
    CreateFailed::class => [
        'name' => 'Creazione del backup non riuscita',
        'description' => 'La notifica informa il destinatario che non è stato creato un backup del sito web o del sistema. La notifica può includere dettagli sul motivo del fallimento del backup e sulle misure da adottare per risolvere il problema.',
    ],
    CreateFinished::class => [
        'name' => 'Creazione del backup terminata',
        'description' => 'La notifica informa il destinatario che è stato creato con successo un backup del suo sito web o del suo sistema. La notifica può includere dettagli su dove è stato salvato il backup e su come accedervi.',
    ],
    DeleteFailed::class => [
        'name' => 'Eliminazione del backup non riuscita',
        'description' => 'La notifica informa il destinatario che un backup del suo sito web non è stato eliminato. La notifica può includere dettagli sul motivo del fallimento dell\'eliminazione e sulle misure da adottare per risolvere il problema.',
    ],
    DeleteFinished::class => [
        'name' => 'Backup Eliminazione terminata',
        'description' => 'La notifica informa il destinatario che un backup del suo sito web è stato eliminato con successo. La notifica può includere dettagli su quale backup è stato eliminato e su eventuali ulteriori passi da compiere.',
    ],
    RestoreFailed::class => [
        'name' => 'Ripristino del backup non riuscito',
        'description' => 'La notifica informa il destinatario che il tentativo di ripristinare un backup del proprio sito web è fallito. La notifica può includere dettagli sul motivo del fallimento del ripristino e sulle misure da adottare per risolvere il problema.',
    ],
    RestoreFinished::class => [
        'name' => 'Backup Ripristino terminato',
        'description' => 'La notifica informa il destinatario che il backup del suo sito web è stato ripristinato con successo. La notifica può includere dettagli su quale backup è stato ripristinato ed eventuali ulteriori passi da compiere.',
    ],
    AutomaticCreateFailed::class => [
        'name' => 'Creazione automatica del backup non riuscita',
        'description' => 'La notifica informa il destinatario che non è stato creato un backup automatico del sito web o del sistema. La notifica può includere dettagli sul motivo del fallimento del backup e sulle misure da adottare per risolvere il problema.',
    ],
    AutomaticCreateFinished::class => [
        'name' => 'Creazione automatica del backup terminata',
        'description' => 'La notifica informa il destinatario che è stato creato con successo un backup automatico del suo sito web o del suo sistema. La notifica può includere dettagli su dove è stato salvato il backup e su come accedervi.',
    ],
    InstallFailed::class => [
        'name' => 'Installazione del plugin fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di installare un plugin per il proprio sito web WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'installazione e sulle misure da adottare per risolvere il problema.',
    ],
    InstallFinished::class => [
        'name' => 'Installazione del plugin completata',
        'description' => 'La notifica informa il destinatario che un plugin per il suo sito web WordPress è stato installato con successo. La notifica può includere dettagli su quale plugin è stato installato ed eventuali ulteriori passi da compiere.',
    ],
    UpdateFailed::class => [
        'name' => 'Aggiornamento del plugin fallito',
        'description' => 'La notifica informa il destinatario che il tentativo di aggiornare un plugin per il suo sito web WordPress non è riuscito. La notifica può includere dettagli sul motivo del fallimento dell\'aggiornamento e sulle misure da adottare per risolvere il problema.',
    ],
    UpdateFinished::class => [
        'name' => 'Installazione del plugin completata',
        'description' => 'La notifica informa il destinatario che un plugin per il suo sito web WordPress è stato aggiornato con successo. La notifica può includere dettagli su quale plugin è stato aggiornato ed eventuali ulteriori passi da compiere.',
    ],
    \App\Notifications\User\Theme\InstallFailed::class => [
        'name' => 'Installazione del tema fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di installare un tema per il proprio sito web WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'installazione e sulle misure da adottare per risolvere il problema.',
    ],
    \App\Notifications\User\Theme\InstallFinished::class => [
        'name' => 'Installazione del tema completata',
        'description' => 'La notifica informa il destinatario che un tema per il suo sito web WordPress è stato installato con successo. La notifica può includere dettagli su quale tema è stato installato ed eventuali ulteriori passi da compiere.',
    ],
    \App\Notifications\User\Theme\UpdateFailed::class => [
        'name' => 'Aggiornamento del tema fallito',
        'description' => 'La notifica informa il destinatario che il tentativo di aggiornare un tema per il proprio sito web WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'aggiornamento e sulle misure da adottare per risolvere il problema.',
    ],
    \App\Notifications\User\Theme\UpdateFinished::class => [
        'name' => 'Aggiornamento del tema completato',
        'description' => 'La notifica informa il destinatario che un tema per il suo sito web WordPress è stato aggiornato con successo. La notifica può includere dettagli su quale tema è stato aggiornato ed eventuali ulteriori passi da compiere.',
    ],
    CreateStagingFailed::class => [
        'name' => 'Creazione della messa in scena fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di creare un\'istanza di staging del proprio sito web è fallito. La notifica può includere dettagli sul motivo del fallimento della creazione e sulle misure da adottare per risolvere il problema.',
    ],
    CreateStagingFinished::class => [
        'name' => 'Creare una messa in scena finita',
        'description' => 'La notifica informa il destinatario che è stata creata con successo un\'istanza di staging del suo sito web. La notifica può includere dettagli su dove è possibile accedere all\'istanza di staging e su eventuali ulteriori passi da compiere.',
    ],
    InstanceInstallationFailed::class => [
        'name' => 'Installazione dell\'istanza fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di installare un\'istanza di WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'installazione e sulle misure da adottare per risolvere il problema.',
    ],
    InstanceInstallationFinished::class => [
        'name' => 'Installazione dell\'istanza terminata',
        'description' => 'La notifica informa il destinatario che un\'istanza di WordPress è stata installata con successo. La notifica può includere dettagli su dove è possibile accedere all\'istanza e su eventuali ulteriori passi da compiere.',
    ],
    ImportFailed::class => [
        'name' => 'Importazione dell\'istanza non riuscita',
        'description' => 'La notifica informa il destinatario che il tentativo di importare un\'istanza di WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'importazione e sulle misure da adottare per risolvere il problema.',
    ],
    ImportFinished::class => [
        'name' => 'Importazione dell\'istanza terminata',
        'description' => 'La notifica informa il destinatario che un\'istanza di WordPress è stata importata con successo. La notifica può includere dettagli su dove è possibile accedere all\'istanza e su eventuali ulteriori passi da compiere.',
    ],
    InstanceInvitationReceived::class => [
        'name' => 'Istanza Invito ricevuto',
        'description' => 'La notifica informa il destinatario che ha ricevuto un invito a gestire un\'istanza specifica. La notifica può includere dettagli su chi ha inviato l\'invito, sull\'istanza da gestire e sulle azioni che possono essere eseguite sull\'istanza.',
    ],
    NewDeviceLogin::class => [
        'name' => 'Accesso da un nuovo dispositivo',
        'description' => 'La notifica è un avviso che viene generato quando un nuovo dispositivo o un nuovo browser o un nuovo indirizzo IP si connette al sito web. La notifica include tipicamente informazioni sul dispositivo, come l\'indirizzo IP e la data e l\'ora della connessione.',
    ],
    PushToLiveFailed::class => [
        'name' => 'La spinta a vivere è fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di eseguire il push delle modifiche apportate sull\'istanza di staging alla versione live del sito web è fallito. La notifica può includere dettagli sul motivo del fallimento del push e sulle misure da adottare per risolvere il problema.',
    ],
    PushToLiveFinished::class => [
        'name' => 'Spinta a vivere completata',
        'description' => 'La notifica informa il destinatario che le modifiche apportate all\'istanza di staging sono state trasferite con successo alla versione live del sito web o del sistema. La notifica può includere dettagli sulle modifiche apportate ed eventuali ulteriori passi da compiere.',
    ],
    UpdateWordpressFailed::class => [
        'name' => 'Aggiornamento di WordPress fallito',
        'description' => 'La notifica informa il destinatario che il tentativo di aggiornare l\'istanza di WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'aggiornamento e sulle misure da adottare per risolvere il problema.',
    ],
    UpdateWordpressFinished::class => [
        'name' => 'Aggiornamento WordPress completato',
        'description' => 'La notifica informa il destinatario che l\'istanza di WordPress è stata aggiornata con successo. La notifica può includere dettagli sulle modifiche apportate all\'istanza e su eventuali ulteriori passi da compiere.',
    ],
    \App\Notifications\User\System\ResetPassword::class => [
        'name' => 'Reimpostare la password',
        'description' => 'Un\'e-mail di reimpostazione della password è un messaggio automatico inviato all\'indirizzo e-mail di un utente che chiede di reimpostare la password di un account. L\'e-mail contiene in genere un link o istruzioni per reimpostare la password, nonché un limite di tempo per la validità del link.',
    ],
    \App\Notifications\User\Updates\PluginUpdateAvailable::class => [
        'name' => 'Aggiornamento del plugin disponibile',
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per un plugin che sta utilizzando sul proprio sito web WordPress. L\'aggiornamento include correzioni di bug e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del plugin.',
    ],
    \App\Notifications\User\Updates\ThemeUpdateAvailable::class => [
        'name' => 'Aggiornamento del tema disponibile',
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per un tema che sta utilizzando sul proprio sito web WordPress. L\'aggiornamento include correzioni di bug e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del tema.',
    ],
    \App\Notifications\User\Updates\WordpressUpdateAvailable::class => [
        'name' => 'Disponibile l\'aggiornamento di WordPress',
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per il suo sito web WordPress. L\'aggiornamento include importanti correzioni di sicurezza e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del sito web.',
    ],
    DnsPropagationExceeded::class => [
        'name' => 'Propagazione DNS superata per l\'ordine SSL',
        'description' => 'La notifica informa il destinatario che il tempo assegnato per la propagazione DNS è stato superato in relazione all\'ordine del certificato SSL.',
    ],
    CreateADnsRecordFailed::class => [
        'name' => 'Impostazione DNS del sottodominio non riuscita',
        'description' => 'La notifica informa il destinatario che la creazione del record DNS A è fallita.',
    ],
    InstanceTemplateCreateFailed::class => [
        'name' => 'Creazione modello di istanza non riuscita',
        'description' => 'La notifica informa il destinatario che il modello di istanza non è stato creato.',
    ],
    InstanceTemplateCreateFinished::class => [
        'name' => 'Creazione del modello di istanza terminata',
        'description' => 'La notifica informa il destinatario che il modello di istanza è stato creato con successo.',
    ],
    EmailDomainCreateFailed::class => [
        'name' => 'Creazione dominio e-mail non riuscita',
        'description' => 'La notifica informa il destinatario che la creazione del dominio e-mail non è riuscita.',
    ],
    EmailDomainExists::class => [
        'name' => 'Il dominio e-mail esiste',
        'description' => 'La notifica informa il destinatario che il dominio e-mail esiste già sul server e-mail.',
    ],
    SyncReportProvidersFailed::class => [
        'name' => 'Sincronizzazione dei fornitori di report fallita',
        'description' => 'Una notifica informa il destinatario che la sincronizzazione dei fornitori di report non è riuscita. La notifica può contenere informazioni sull\'istanza e sul messaggio di errore.',
    ],
    SyncReportProvidersFinished::class => [
        'name' => 'Sincronizzazione dei fornitori di rapporti completata',
        'description' => 'La notifica informa il destinatario che la sincronizzazione dei fornitori di report è stata completata La notifica può contenere informazioni sull\'istanza.',
    ],
    DnsRecordsCreateFailed::class => [
        'name' => 'Creazione record DNS fallita',
        'description' => 'La notifica informa il destinatario che i record dns elencati non sono stati creati per la zona. La notifica può contenere informazioni sui record dns o sulla zona dns.',
    ],
    ImportByUserFailed::class => [
        'name' => 'Importazione dell\'istanza da parte dell\'utente non riuscita',
        'description' => 'La notifica informa il destinatario che l\'importazione dell\'istanza da parte dell\'utente non è riuscita.',
    ],
    ImportByUserFinished::class => [
        'name' => 'Importazione di istanze per utente terminata',
        'description' => 'La notifica informa il destinatario che l\'importazione dell\'istanza da parte dell\'utente è avvenuta con successo.',
    ],
    ManualImportInstanceFailed::class => [
        'name' => 'Importazione manuale dell\'istanza fallita',
        'description' => 'La notifica informa il destinatario che l\'importazione manuale dell\'istanza da parte dell\'amministratore non è riuscita.',
    ],
    ManualImportInstanceFinished::class => [
        'name' => 'Importazione manuale Istanza terminata',
        'description' => 'La notifica informa il destinatario che l\'importazione manuale dell\'istanza da parte dell\'amministratore è avvenuta con successo.',
    ],
    ServerAccountConnectionError::class => [
        'name' => 'Errore di connessione dell\'account di hosting',
        'description' => 'La notifica informa il destinatario che la connessione all\'account di hosting è fallita.',
    ],
    RestoreInstanceFailed::class => [
        'name' => 'Ripristino dell\'istanza non riuscito',
        'description' => 'La notifica informa il destinatario che il tentativo di ripristinare l\'istanza dal backup è fallito. La notifica può includere dettagli sul motivo del fallimento del ripristino e sulle misure da adottare per risolvere il problema.',
    ],
    RestoreInstanceFinished::class => [
        'name' => 'Ripristino dell\'istanza terminato',
        'description' => 'La notifica informa il destinatario che l\'istanza è stata ripristinata con successo dal backup. La notifica può includere dettagli su quale backup è stato ripristinato ed eventuali ulteriori passi da compiere.',
    ],
    PlanConfigurationError::class => [
        'name' => 'Errore di configurazione del piano',
        'description' => 'La notifica informa il destinatario che la configurazione del piano è errata.',
    ],
    DiagnosticModeEnabled::class => [
        'name' => 'Modalità diagnostica abilitata',
        'description' => 'La notifica informa il destinatario che è stata attivata la modalità diagnostica. Questa modalità consente una registrazione e un monitoraggio avanzati, che possono aiutare nella risoluzione dei problemi e nell\'identificazione dei problemi all\'interno del sistema.',
    ],
    PushToStagingFailed::class => [
        'name' => 'Spinta allo Staging fallita',
        'description' => 'La notifica informa il destinatario che un tentativo di push delle modifiche apportate sull\'istanza live alla versione di staging del sito web è fallito. La notifica può includere dettagli sul motivo per cui il push non è riuscito e sulle misure da adottare per risolvere il problema.',
    ],
    PushToStagingFinished::class => [
        'name' => 'Spingi verso lo Staging Finito',
        'description' => 'La notifica informa il destinatario che le modifiche apportate all\'istanza live sono state trasferite con successo alla versione di staging del sito web o del sistema. La notifica può includere dettagli sulle modifiche apportate ed eventuali ulteriori passi da compiere.',
    ],
    SslOrderFailed::class => [
        'name' => 'Fallimento dell\'ordine SSL',
        'description' => 'La notifica informa l\'amministratore che un ordine SSL è fallito per il dominio specificato. Include dettagli rilevanti come il nome del dominio, il tipo, il provider SSL e le informazioni sul cliente. Potrebbe essere necessaria un\'attenzione immediata per risolvere il problema.',
    ],
    CreateFtpAccountForInstance::class => [
        'name' => 'Account FTP creato per l\'istanza',
        'description' => 'Questa notifica informa l\'utente che è stato creato con successo un nuovo account FTP. Include dettagli essenziali come il nome utente FTP, la password e l\'indirizzo del server, consentendo all\'utente di accedere ai propri file.',
    ],
    CreateUser::class => [
        'name' => 'Benvenuto utente',
        'description' => 'Questa notifica informa l\'utente che il suo account è stato creato con successo. Include i dati di accesso necessari, come nome utente e password, che consentono all\'utente di accedere al proprio account.',
    ],
    SyncHostingAccountFailed::class => [
        'name' => 'Sincronizzazione dell\'account di hosting del servizio non riuscita',
        'description' => 'Questa notifica informa l\'utente che l\'account di hosting di questo servizio non è stato sincronizzato.',
    ],
    SyncHostingAccountFinished::class => [
        'name' => 'Sincronizzazione dell\'account di hosting del servizio completata',
        'description' => 'Questa notifica informa l\'utente che l\'account di hosting di questo servizio è stato sincronizzato con successo.',
    ],
    ControlPanelUpgrade::class => [
        'name' => 'Email di benvenuto per l\'upgrade del pannello di controllo',
        'description' => 'Questa notifica informa che l\'account di hosting è stato aggiornato con successo dal pannello di controllo. Include i dati di accesso necessari per consentire all\'utente di accedere al proprio account.',
    ],
];
