# Aggiungere pacchetti di lingue per PanelAlpha

Qui imparerai come aggiungere pacchetti di lingue per PanelAlpha in due modi: manualmente e automaticamente.

> Nota: Questo testo è stato tradotto automaticamente, quindi potrebbero esserci errori o imprecisioni.

## Automatico

Per installare e utilizzare automaticamente queste traduzioni con PanelAlpha, segui questi passaggi:

1. <b>Scarica lo script in /opt/panelalpha:</b>
    ```sh
    curl -sL -o /opt/panelalpha/sync-translations.sh https://raw.githubusercontent.com/panelalpha/PanelAlpha-Translations/refs/heads/main/scripts/sync-translations.sh
    ```

2. <b>Esegui lo script con la lingua desiderata:</b>
    ```sh
    bash /opt/panelalpha/sync-translations.sh --lang "it"
    ```

## Manualmente

1. Scaricare i file di lingua italiana (`it`).
2. Copiare i file sul server nella directory `/opt/panelalpha/app/packages/api/resources/lang`.
3. Assegnare le autorizzazioni appropriate con il comando:
   ```sh
   chmod -R 755 it
   ```
4. Eseguire il seguente comando per sincronizzare le notifiche:
    ```sh
    docker compose -f /opt/panelalpha/app/docker-compose.yml exec -T api php artisan notifications:sync
    ```

## Impostazione della lingua in PanelAlpha

1. Per impostare la lingua per l'area cliente in PanelAlpha, ci sono tre opzioni:

    1.1. <b>Area amministrativa</b> <br> L'amministratore può impostare la lingua predefinita per l'area cliente nella sezione Configurazione → Generale → Area Cliente → Lingua predefinita. La lingua selezionata qui sarà quella predefinita per tutti i clienti.

    1.2. <b>Area cliente</b> <br> I tuoi clienti possono impostare le proprie preferenze linguistiche e selezionare una lingua per il loro utilizzo al momento dell'accesso all'area cliente utilizzando il menu a tendina.

    1.3. <b>Dettagli dell'account</b> <br> Nell'area cliente, i tuoi clienti possono anche cambiare la lingua attraverso la sezione dettagli dell'account. Vai a Dettagli account → Informazioni personali → Lingua e seleziona la lingua preferita dal menu a tendina.