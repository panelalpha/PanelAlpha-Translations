<?php

return [
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFailed' => [
        'description' => 'La notifica informa il destinatario che il tentativo di forzare un plugin di aggiornamento nell\'istanza è fallito. La notifica può includere dettagli sul plugin e sull\'istanza correlata ed eventuali ulteriori passi da compiere.',
        'name' => 'Aggiornamento forzato del plugin non riuscito',
    ],
    'App\\Notifications\\Admin\\Plugin\\ForceUpdatePluginFinished' => [
        'name' => 'Aggiornamento forzato del plugin terminato',
        'description' => 'La notifica informa il destinatario che il tentativo di forzare un plugin di aggiornamento nell\'istanza è stato portato a termine con successo. La notifica può includere dettagli sul plugin e sull\'istanza correlata ed eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFailed' => [
        'description' => 'La notifica informa il destinatario che il tentativo di forzare un tema di aggiornamento nell\'istanza è fallito. La notifica può includere dettagli sul tema e sull\'istanza correlata ed eventuali ulteriori passi da compiere.',
        'name' => 'Aggiornamento forzato del tema non riuscito',
    ],
    'App\\Notifications\\Admin\\Theme\\ForceUpdateThemeFinished' => [
        'name' => 'Aggiornamento del tema della forza terminato',
        'description' => 'La notifica informa il destinatario che il tentativo di forzare un tema di aggiornamento nell\'istanza è stato portato a termine con successo. La notifica può includere dettagli sul tema e sull\'istanza correlata ed eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFailed' => [
        'name' => 'Installazione del pacchetto fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di installare e attivare plugin e temi dai pacchetti assegnati all\'istanza è fallito. La notifica può includere dettagli sull\'istanza in questione ed eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\Admin\\Package\\InstallPackageFinished' => [
        'name' => 'Pacchetto di installazione terminato',
        'description' => 'La notifica informa il destinatario che il tentativo di installare e attivare plugin e temi dai pacchetti dell\'istanza è stato portato a termine con successo. La notifica può includere dettagli sull\'istanza correlata ed eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFinished' => [
        'name' => 'Installazione dell\'istanza per utente terminata',
        'description' => 'La notifica informa il destinatario che l\'installazione di una nuova istanza di WordPress da parte dell\'utente è terminata. La notifica può includere dettagli su chi ha creato l\'istanza, sulla posizione dell\'istanza e su eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceInstallationByUserFailed' => [
        'name' => 'Installazione dell\'istanza da parte dell\'utente non riuscita',
        'description' => 'La notifica informa il destinatario che l\'installazione di una nuova istanza di WordPress da parte dell\'utente non è riuscita. La notifica può includere dettagli su chi ha creato l\'istanza, la posizione dell\'istanza, informazioni sugli errori ed eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\Admin\\Instance\\InstanceDeletedByUser' => [
        'name' => 'Istanza eliminata dall\'utente',
        'description' => 'La notifica informa il destinatario che un\'istanza di WordPress è stata eliminata da un utente. La notifica può includere dettagli su chi ha eliminato l\'istanza, sul nome dell\'istanza e su eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\Admin\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Aggiornamento del tema disponibile',
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per un tema che sta utilizzando sul proprio sito web WordPress. L\'aggiornamento include correzioni di bug e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del tema.',
    ],
    'App\\Notifications\\Admin\\Updates\\WordpressUpdateAvailable' => [
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per il suo sito web WordPress. L\'aggiornamento include importanti correzioni di sicurezza e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del sito web.',
        'name' => 'Disponibile l\'aggiornamento di WordPress',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskFailed' => [
        'description' => 'La notifica informa il destinatario che l\'attività in coda è fallita. La notifica può includere i dettagli dell\'attività, l\'istanza correlata e l\'errore.',
        'name' => 'Attività di coda fallita',
    ],
    'App\\Notifications\\Admin\\Queue\\QueueTaskSucceeded' => [
        'description' => 'La notifica informa il destinatario che l\'attività nella coda ha avuto successo. La notifica può includere i dettagli del compito e della relativa istanza.',
        'name' => 'Attività di coda riuscita',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceSuspended' => [
        'description' => 'La notifica informa il destinatario che il suo servizio è stato sospeso. La notifica può includere informazioni sul dominio sospeso e un link per ripristinare il servizio.',
        'name' => 'Servizio sospeso',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUnsuspended' => [
        'description' => 'La notifica informa il destinatario che il suo servizio è stato sospeso. La notifica può includere informazioni sul dominio non sospeso e sulle ulteriori misure da adottare.',
        'name' => 'Servizio non sospeso',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneExists' => [
        'name' => 'La zona DNS esiste',
        'description' => 'La notifica informa il destinatario che il tentativo di creazione della zona DNS è fallito perché la zona DNS esiste già. La notifica può includere dettagli sulla zona DNS esistente, sul servizio interessato e sul server DNS coinvolto.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsZoneCreateFailed' => [
        'name' => 'Creazione zona DNS fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di creazione di una zona DNS è fallito. Il messaggio può fornire informazioni sulla zona DNS tentata, sul servizio in uso e sul server su cui la creazione non è riuscita.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFailed' => [
        'name' => 'Creazione del backup non riuscita',
        'description' => 'La notifica informa il destinatario che non è stato creato un backup del sito web o del sistema. La notifica può includere dettagli sul motivo del fallimento del backup e sulle misure da adottare per risolvere il problema.',
    ],
    'App\\Notifications\\User\\Backup\\CreateFinished' => [
        'description' => 'La notifica informa il destinatario che è stato creato con successo un backup del suo sito web o del suo sistema. La notifica può includere dettagli su dove è stato salvato il backup e su come accedervi.',
        'name' => 'Creazione del backup terminata',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFailed' => [
        'name' => 'Eliminazione del backup non riuscita',
        'description' => 'La notifica informa il destinatario che un backup del suo sito web non è stato eliminato. La notifica può includere dettagli sul motivo del fallimento dell\'eliminazione e sulle misure da adottare per risolvere il problema.',
    ],
    'App\\Notifications\\User\\Backup\\DeleteFinished' => [
        'name' => 'Backup Eliminazione terminata',
        'description' => 'La notifica informa il destinatario che un backup del suo sito web è stato eliminato con successo. La notifica può includere dettagli su quale backup è stato eliminato e su eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFailed' => [
        'description' => 'La notifica informa il destinatario che il tentativo di ripristinare un backup del proprio sito web è fallito. La notifica può includere dettagli sul motivo del fallimento del ripristino e sulle misure da adottare per risolvere il problema.',
        'name' => 'Ripristino del backup non riuscito',
    ],
    'App\\Notifications\\User\\Backup\\RestoreFinished' => [
        'description' => 'La notifica informa il destinatario che il backup del suo sito web è stato ripristinato con successo. La notifica può includere dettagli su quale backup è stato ripristinato ed eventuali ulteriori passi da compiere.',
        'name' => 'Backup Ripristino terminato',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFailed' => [
        'description' => 'La notifica informa il destinatario che il tentativo di installare un plugin per il proprio sito web WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'installazione e sulle misure da adottare per risolvere il problema.',
        'name' => 'Installazione del plugin fallita',
    ],
    'App\\Notifications\\User\\Plugin\\InstallFinished' => [
        'name' => 'Installazione del plugin completata',
        'description' => 'La notifica informa il destinatario che un plugin per il suo sito web WordPress è stato installato con successo. La notifica può includere dettagli su quale plugin è stato installato ed eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFailed' => [
        'description' => 'La notifica informa il destinatario che il tentativo di aggiornare un plugin per il suo sito web WordPress non è riuscito. La notifica può includere dettagli sul motivo del fallimento dell\'aggiornamento e sulle misure da adottare per risolvere il problema.',
        'name' => 'Aggiornamento del plugin fallito',
    ],
    'App\\Notifications\\User\\Plugin\\UpdateFinished' => [
        'name' => 'Installazione del plugin completata',
        'description' => 'La notifica informa il destinatario che un plugin per il suo sito web WordPress è stato aggiornato con successo. La notifica può includere dettagli su quale plugin è stato aggiornato ed eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFailed' => [
        'description' => 'La notifica informa il destinatario che il tentativo di installare un tema per il proprio sito web WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'installazione e sulle misure da adottare per risolvere il problema.',
        'name' => 'Installazione del tema fallita',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFailed' => [
        'description' => 'La notifica informa il destinatario che il tentativo di aggiornare un tema per il proprio sito web WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'aggiornamento e sulle misure da adottare per risolvere il problema.',
        'name' => 'Aggiornamento del tema fallito',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFailed' => [
        'name' => 'Creazione della messa in scena fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di creare un\'istanza di staging del proprio sito web è fallito. La notifica può includere dettagli sul motivo del fallimento della creazione e sulle misure da adottare per risolvere il problema.',
    ],
    'App\\Notifications\\User\\Instance\\CreateStagingFinished' => [
        'description' => 'La notifica informa il destinatario che è stata creata con successo un\'istanza di staging del suo sito web. La notifica può includere dettagli su dove è possibile accedere all\'istanza di staging e su eventuali ulteriori passi da compiere.',
        'name' => 'Creare una messa in scena finita',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFailed' => [
        'name' => 'Installazione dell\'istanza fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di installare un\'istanza di WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'installazione e sulle misure da adottare per risolvere il problema.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInstallationFinished' => [
        'description' => 'La notifica informa il destinatario che un\'istanza di WordPress è stata installata con successo. La notifica può includere dettagli su dove è possibile accedere all\'istanza e su eventuali ulteriori passi da compiere.',
        'name' => 'Installazione dell\'istanza terminata',
    ],
    'App\\Notifications\\User\\Instance\\ImportFailed' => [
        'name' => 'Importazione dell\'istanza non riuscita',
        'description' => 'La notifica informa il destinatario che il tentativo di importare un\'istanza di WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'importazione e sulle misure da adottare per risolvere il problema.',
    ],
    'App\\Notifications\\User\\Instance\\ImportFinished' => [
        'name' => 'Importazione dell\'istanza terminata',
        'description' => 'La notifica informa il destinatario che un\'istanza di WordPress è stata importata con successo. La notifica può includere dettagli su dove è possibile accedere all\'istanza e su eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\User\\Instance\\InstanceInvitationReceived' => [
        'name' => 'Istanza Invito ricevuto',
        'description' => 'La notifica informa il destinatario che ha ricevuto un invito a gestire un\'istanza specifica. La notifica può includere dettagli su chi ha inviato l\'invito, sull\'istanza da gestire e sulle azioni che possono essere eseguite sull\'istanza.',
    ],
    'App\\Notifications\\User\\System\\NewDeviceLogin' => [
        'name' => 'Accesso da un nuovo dispositivo',
        'description' => 'La notifica è un avviso che viene generato quando un nuovo dispositivo o un nuovo browser o un nuovo indirizzo IP si connette al sito web. La notifica include tipicamente informazioni sul dispositivo, come l\'indirizzo IP e la data e l\'ora della connessione.',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFailed' => [
        'name' => 'La spinta a vivere è fallita',
        'description' => 'La notifica informa il destinatario che il tentativo di eseguire il push delle modifiche apportate sull\'istanza di staging alla versione live del sito web è fallito. La notifica può includere dettagli sul motivo del fallimento del push e sulle misure da adottare per risolvere il problema.',
    ],
    'App\\Notifications\\User\\Instance\\PushToLiveFinished' => [
        'description' => 'La notifica informa il destinatario che le modifiche apportate all\'istanza di staging sono state trasferite con successo alla versione live del sito web o del sistema. La notifica può includere dettagli sulle modifiche apportate ed eventuali ulteriori passi da compiere.',
        'name' => 'Spinta a vivere completata',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFailed' => [
        'description' => 'La notifica informa il destinatario che il tentativo di aggiornare l\'istanza di WordPress è fallito. La notifica può includere dettagli sul motivo del fallimento dell\'aggiornamento e sulle misure da adottare per risolvere il problema.',
        'name' => 'Aggiornamento di WordPress fallito',
    ],
    'App\\Notifications\\User\\Instance\\UpdateWordpressFinished' => [
        'name' => 'Aggiornamento WordPress completato',
        'description' => 'La notifica informa il destinatario che l\'istanza di WordPress è stata aggiornata con successo. La notifica può includere dettagli sulle modifiche apportate all\'istanza e su eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\User\\Updates\\ThemeUpdateAvailable' => [
        'name' => 'Aggiornamento del tema disponibile',
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per un tema che sta utilizzando sul proprio sito web WordPress. L\'aggiornamento include correzioni di bug e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del tema.',
    ],
    'App\\Notifications\\User\\Updates\\WordpressUpdateAvailable' => [
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per il suo sito web WordPress. L\'aggiornamento include importanti correzioni di sicurezza e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del sito web.',
        'name' => 'Disponibile l\'aggiornamento di WordPress',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFailed' => [
        'name' => 'Creazione modello di istanza non riuscita',
        'description' => 'La notifica informa il destinatario che il modello di istanza non è stato creato.',
    ],
    'App\\Notifications\\Admin\\InstanceTemplate\\InstanceTemplateCreateFinished' => [
        'name' => 'Creazione del modello di istanza terminata',
        'description' => 'La notifica informa il destinatario che il modello di istanza è stato creato con successo.',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainCreateFailed' => [
        'name' => 'Creazione dominio e-mail non riuscita',
        'description' => 'La notifica informa il destinatario che la creazione del dominio e-mail non è riuscita.',
    ],
    'App\\Notifications\\Admin\\EmailDomain\\EmailDomainExists' => [
        'name' => 'Il dominio e-mail esiste',
        'description' => 'La notifica informa il destinatario che il dominio e-mail esiste già sul server e-mail.',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFailed' => [
        'description' => 'Una notifica informa il destinatario che la sincronizzazione dei fornitori di report non è riuscita. La notifica può contenere informazioni sull\'istanza e sul messaggio di errore.',
        'name' => 'Sincronizzazione dei fornitori di report fallita',
    ],
    'App\\Notifications\\Admin\\ReportProvider\\SyncReportProvidersFinished' => [
        'name' => 'Sincronizzazione dei fornitori di rapporti completata',
        'description' => 'La notifica informa il destinatario che la sincronizzazione dei fornitori di report è stata completata La notifica può contenere informazioni sull\'istanza.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\DnsRecordsCreateFailed' => [
        'name' => 'Creazione record DNS fallita',
        'description' => 'La notifica informa il destinatario che i record dns elencati non sono stati creati per la zona. La notifica può contenere informazioni sui record dns o sulla zona dns.',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFailed' => [
        'name' => 'Importazione dell\'istanza da parte dell\'utente non riuscita',
        'description' => 'La notifica informa il destinatario che l\'importazione dell\'istanza da parte dell\'utente non è riuscita.',
    ],
    'App\\Notifications\\Admin\\Instance\\ImportByUserFinished' => [
        'description' => 'La notifica informa il destinatario che l\'importazione dell\'istanza da parte dell\'utente è avvenuta con successo.',
        'name' => 'Importazione di istanze per utente terminata',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFailed' => [
        'name' => 'Importazione manuale dell\'istanza fallita',
        'description' => 'La notifica informa il destinatario che l\'importazione manuale dell\'istanza da parte dell\'amministratore non è riuscita.',
    ],
    'App\\Notifications\\Admin\\Instance\\ManualImportInstanceFinished' => [
        'name' => 'Importazione manuale Istanza terminata',
        'description' => 'La notifica informa il destinatario che l\'importazione manuale dell\'istanza da parte dell\'amministratore è avvenuta con successo.',
    ],
    'App\\Notifications\\Admin\\Connection\\ServerAccountConnectionError' => [
        'description' => 'La notifica informa il destinatario che la connessione all\'account di hosting è fallita.',
        'name' => 'Errore di connessione dell\'account di hosting',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFinished' => [
        'description' => 'La notifica informa il destinatario che l\'istanza è stata ripristinata con successo dal backup. La notifica può includere dettagli su quale backup è stato ripristinato ed eventuali ulteriori passi da compiere.',
        'name' => 'Ripristino dell\'istanza terminato',
    ],
    'App\\Notifications\\Admin\\Plan\\PlanConfigurationError' => [
        'name' => 'Errore di configurazione del piano',
        'description' => 'La notifica informa il destinatario che la configurazione del piano è errata.',
    ],
    'App\\Notifications\\Admin\\DiagnosticMode\\DiagnosticModeEnabled' => [
        'name' => 'Modalità diagnostica abilitata',
        'description' => 'La notifica informa il destinatario che è stata attivata la modalità diagnostica. Questa modalità consente una registrazione e un monitoraggio avanzati, che possono aiutare nella risoluzione dei problemi e nell\'identificazione dei problemi all\'interno del sistema.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFailed' => [
        'name' => 'Spinta allo Staging fallita',
        'description' => 'La notifica informa il destinatario che un tentativo di push delle modifiche apportate sull\'istanza live alla versione di staging del sito web è fallito. La notifica può includere dettagli sul motivo per cui il push non è riuscito e sulle misure da adottare per risolvere il problema.',
    ],
    'App\\Notifications\\User\\Instance\\PushToStagingFinished' => [
        'name' => 'Spingi verso lo Staging Finito',
        'description' => 'La notifica informa il destinatario che le modifiche apportate all\'istanza live sono state trasferite con successo alla versione di staging del sito web o del sistema. La notifica può includere dettagli sulle modifiche apportate ed eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\Admin\\System\\ResetPassword' => [
        'name' => 'Reimpostare la password',
        'description' => 'Un\'e-mail di reimpostazione della password è un messaggio automatico inviato all\'indirizzo e-mail di un utente che chiede di reimpostare la password di un account. L\'e-mail contiene in genere un link o istruzioni per reimpostare la password, nonché un limite di tempo per la validità del link.',
    ],
    'App\\Notifications\\Admin\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Aggiornamento del plugin disponibile',
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per un plugin che sta utilizzando sul proprio sito web WordPress. L\'aggiornamento include correzioni di bug e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del plugin.',
    ],
    'App\\Notifications\\Admin\\Service\\ServiceUpgraded' => [
        'description' => 'La notifica informa il destinatario che il suo servizio è stato aggiornato. La notifica può includere informazioni sul dominio aggiornato e su eventuali ulteriori passi da compiere.',
        'name' => 'Servizio aggiornato',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFailed' => [
        'name' => 'Creazione automatica del backup non riuscita',
        'description' => 'La notifica informa il destinatario che non è stato creato un backup automatico del sito web o del sistema. La notifica può includere dettagli sul motivo del fallimento del backup e sulle misure da adottare per risolvere il problema.',
    ],
    'App\\Notifications\\User\\Backup\\AutomaticCreateFinished' => [
        'name' => 'Creazione automatica del backup terminata',
        'description' => 'La notifica informa il destinatario che è stato creato con successo un backup automatico del suo sito web o del suo sistema. La notifica può includere dettagli su dove è stato salvato il backup e su come accedervi.',
    ],
    'App\\Notifications\\User\\Theme\\InstallFinished' => [
        'name' => 'Installazione del tema completata',
        'description' => 'La notifica informa il destinatario che un tema per il suo sito web WordPress è stato installato con successo. La notifica può includere dettagli su quale tema è stato installato ed eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\User\\Theme\\UpdateFinished' => [
        'name' => 'Aggiornamento del tema completato',
        'description' => 'La notifica informa il destinatario che un tema per il suo sito web WordPress è stato aggiornato con successo. La notifica può includere dettagli su quale tema è stato aggiornato ed eventuali ulteriori passi da compiere.',
    ],
    'App\\Notifications\\User\\System\\ResetPassword' => [
        'name' => 'Reimpostare la password',
        'description' => 'Un\'e-mail di reimpostazione della password è un messaggio automatico inviato all\'indirizzo e-mail di un utente che chiede di reimpostare la password di un account. L\'e-mail contiene in genere un link o istruzioni per reimpostare la password, nonché un limite di tempo per la validità del link.',
    ],
    'App\\Notifications\\User\\Updates\\PluginUpdateAvailable' => [
        'name' => 'Aggiornamento del plugin disponibile',
        'description' => 'La notifica informa il destinatario che è disponibile un nuovo aggiornamento per un plugin che sta utilizzando sul proprio sito web WordPress. L\'aggiornamento include correzioni di bug e nuove funzioni che miglioreranno le prestazioni e le funzionalità complessive del plugin.',
    ],
    'App\\Notifications\\Admin\\SslOrder\\DnsPropagationExceeded' => [
        'name' => 'Propagazione DNS superata per l\'ordine SSL',
        'description' => 'La notifica informa il destinatario che il tempo assegnato per la propagazione DNS è stato superato in relazione all\'ordine del certificato SSL.',
    ],
    'App\\Notifications\\Admin\\DnsZone\\CreateADnsRecordFailed' => [
        'name' => 'Impostazione DNS del sottodominio non riuscita',
        'description' => 'La notifica informa il destinatario che la creazione del record DNS A è fallita.',
    ],
    'App\\Notifications\\Admin\\Instance\\RestoreInstanceFailed' => [
        'name' => 'Ripristino dell\'istanza non riuscito',
        'description' => 'La notifica informa il destinatario che il tentativo di ripristinare l\'istanza dal backup è fallito. La notifica può includere dettagli sul motivo del fallimento del ripristino e sulle misure da adottare per risolvere il problema.',
    ],
];
