# PanelAlpha Sprachpakete hinzufügen

Hier erfahren Sie, wie Sie die Sprachpakete für PanelAlpha auf zwei verschiedene Arten hinzufügen können: manuell und automatisch.

> Hinweis: Dieser Text wurde automatisch übersetzt, daher können Fehler oder Ungenauigkeiten auftreten.

## Automatisch

Um diese Übersetzungen automatisch zu installieren und mit PanelAlpha zu verwenden, folgen Sie diesen Schritten:

1. <b>Das Skript nach /opt/panelalpha herunterladen:</b>
    ```sh
    curl -sL -o /opt/panelalpha/sync-translations.sh https://raw.githubusercontent.com/panelalpha/PanelAlpha-Translations/feature/sync-translations/scripts/sync-translations.sh
    ```

2. <b>Führen Sie das Skript mit der gewünschten Sprache aus:</b>
    ```sh
    bash /opt/panelalpha/sync-translations.sh --lang "de"
    ```

## Manuell

1. Laden Sie die deutschen Sprachdateien (`de`) herunter.
2. Kopieren Sie die Dateien auf den Server in das Verzeichnis `/opt/panelalpha/app/packages/api/resources/lang`.
3. Setzen Sie die entsprechenden Berechtigungen mit dem Befehl:  
   ```sh
   chmod -R 755 de
   ```
4. Führen Sie den folgenden Befehl aus, um die Benachrichtigungen zu synchronisieren:
    ```sh
    docker compose -f /opt/panelalpha/app/docker-compose.yml exec -T api php artisan notifications:sync
    ```

## Spracheinstellung in PanelAlpha

1. Um die Sprache für den Client-Bereich in PanelAlpha einzustellen, gibt es drai Möglichkeiten:

    1.1. <b>Admin-Bereich</b> <br>
    Der Administrator kann die Standardsprache für den Client-Bereich unter Konfiguration → Allgemein → Client-Bereich →    
    Standardsprache festlegen. Die hier gewählte Sprache wird als Standard für alle Kunden festgelegt.

    1.2. <b>Client-Bereich</b> <br>
    Ihre Kunden können ihre eigenen Spracheinstellungen festlegen und eine Sprache für die Nutzung im Client-Bereich       
    auswählen, indem sie sich anmelden und im Dropdown-Menü die bevorzugte Sprache auswählen.
    
    3.3. <b>Kundendaten</b> <br>
    Im Client-Bereich können Ihre Kunden auch die Sprache über den Abschnitt Konto details ändern. Gehen Sie zu Konto details → Persönliche Informationen → Sprache und wählen Sie die bevorzugte Sprache aus dem Dropdown-Menü.