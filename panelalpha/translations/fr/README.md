# Ajouter des packs de langue pour PanelAlpha

Voici comment ajouter des packs de langue pour PanelAlpha de deux manières : manuellement et automatiquement.

> Remarque : Ce texte a été traduit automatiquement, il peut donc contenir des erreurs ou des inexactitudes.

## Automatique

Pour installer et utiliser automatiquement ces traductions avec PanelAlpha, suivez ces étapes :

1. <b>Téléchargez le script dans /opt/panelalpha :</b>
    ```sh
    curl -sL -o /opt/panelalpha/sync-translations.sh https://raw.githubusercontent.com/panelalpha/PanelAlpha-Translations/feature/sync-translations/scripts/sync-translations.sh
    ```

2. <b>Exécutez le script avec la langue souhaitée :</b>
    ```sh
    bash /opt/panelalpha/sync-translations.sh --lang "fr"
    ```

## Manuellement

1. Téléchargez les fichiers de langue en français (`fr`).
2. Copiez les fichiers sur le serveur dans le répertoire `/opt/panelalpha/app/packages/api/resources/lang`.
3. Attribuez les autorisations appropriées avec la commande :
   ```sh
   chmod -R 755 fr
   ```
4. Exécutez la commande suivante pour synchroniser les notifications :
    ```sh
    docker compose -f /opt/panelalpha/app/docker-compose.yml exec -T api php artisan notifications:sync
    ```

## Réglage de la langue dans PanelAlpha

1. Pour définir la langue de l'espace client dans PanelAlpha, il existe trois options :

    1.1. <b>Espace administrateur</b> <br> L'administrateur peut définir la langue par défaut de l'espace client dans Configuration → Général → Espace client → Langue par défaut. La langue sélectionnée ici sera celle par défaut pour tous les clients.

    1.2. <b>Espace client</b> <br> Vos clients peuvent définir leurs propres préférences de langue et sélectionner une langue pour leur utilisation lorsqu'ils se connectent à l'espace client à l'aide du menu déroulant.

    1.3. <b>Détails du compte</b> <br> Dans l'espace client, vos clients peuvent également modifier la langue via la section détails du compte. Allez dans Détails du compte → Informations personnelles → Langue et choisissez la langue préférée dans le menu déroulant.