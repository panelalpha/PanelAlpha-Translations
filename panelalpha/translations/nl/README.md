# Taalpakketten toevoegen aan PanelAlpha

Hier leert u hoe u taalpakketten kunt toevoegen aan PanelAlpha op twee manieren: handmatig en automatisch.

> Waarschuwing: Deze tekst is automatisch vertaald, dus er kunnen fouten of onnauwkeurigheden zijn.

## Automatisch

Om deze vertalingen automatisch te installeren en gebruiken met PanelAlpha, volgt u deze stappen:

1. <b>Download het script naar /opt/panelalpha:</b>
    ```sh
    curl -sL -o /opt/panelalpha/sync-translations.sh https://raw.githubusercontent.com/panelalpha/PanelAlpha-Translations/feature/sync-translations/scripts/sync-translations.sh
    ```

2. <b>Voer het script uit met de gewenste taal:</b>
    ```sh
    bash /opt/panelalpha/sync-translations.sh --lang "nl"
    ```

## Handmatig

1. Download de taalbestanden in het Nederlands (`nl`).
2. Kopieer de bestanden naar de server in de directory `/opt/panelalpha/app/packages/api/resources/lang`.
3. Ken de juiste rechten toe met het volgende commando:
   ```sh
   chmod -R 755 nl
   ```
4. Voer het volgende commando uit om de notificaties te synchroniseren:
    ```sh
    docker compose -f /opt/panelalpha/app/docker-compose.yml exec -T api php artisan notifications:sync
    ```

## Taalinstelling in PanelAlpha

1. Om de taal van het klantgedeelte in PanelAlpha in te stellen, zijn er drie opties:

    1.1. <b>Beheerderspaneel</b> <br> De beheerder kan de standaardtaal voor het klantgedeelte instellen in het gedeelte Configuratie → Algemeen → Klantgedeelte → Standaardtaal. De hier geselecteerde taal zal de standaardtaal zijn voor al uw klanten.

    1.2. <b>Klantgedeelte</b> <br> Uw klanten kunnen hun eigen taalvoorkeuren instellen en een taal kiezen voor hun gebruik door in te loggen in het klantgedeelte en het vervolgkeuzemenu te gebruiken.

    1.3. <b>Accountgegevens</b> <br> In het klantgedeelte kunnen uw klanten de taal ook wijzigen via het gedeelte accountgegevens. Ga naar Accountgegevens → Persoonlijke informatie → Taal en kies de gewenste taal in het vervolgkeuzemenu.