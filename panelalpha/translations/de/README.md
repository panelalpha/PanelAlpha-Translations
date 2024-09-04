# PanelAlpha Sprachpakete hinzufügen

Hier erfahren Sie, wie Sie die Sprachpakete für PanelAlpha auf zwei verschiedene Arten hinzufügen können: manuell und automatisch.

> Hinweis: Dieser Text wurde automatisch übersetzt, daher können Fehler oder Ungenauigkeiten auftreten.

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
5. Um die Sprache für den Client-Bereich in PanelAlpha einzustellen, gibt es drai Möglichkeiten:

    5.1. <b>Admin-Bereich</b> <br>
    Der Administrator kann die Standardsprache für den Client-Bereich unter Konfiguration → Allgemein → Client-Bereich →    
    Standardsprache festlegen. Die hier gewählte Sprache wird als Standard für alle Kunden festgelegt.

    5.2. <b>Client-Bereich</b> <br>
    Ihre Kunden können ihre eigenen Spracheinstellungen festlegen und eine Sprache für die Nutzung im Client-Bereich       
    auswählen, indem sie sich anmelden und im Dropdown-Menü die bevorzugte Sprache auswählen.
    
    5.3. <b>Kundendaten</b> <br>
    Im Client-Bereich können Ihre Kunden auch die Sprache über den Abschnitt Konto details ändern. Gehen Sie zu Konto details → Persönliche Informationen → Sprache und wählen Sie die bevorzugte Sprache aus dem Dropdown-Menü.