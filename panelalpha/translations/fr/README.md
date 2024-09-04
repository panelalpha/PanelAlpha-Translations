# Ajouter des packs de langue pour PanelAlpha

Voici comment ajouter des packs de langue pour PanelAlpha de deux manières : manuellement et automatiquement.

> Remarque : Ce texte a été traduit automatiquement, il peut donc contenir des erreurs ou des inexactitudes.

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
5. Pour définir la langue de l'espace client dans PanelAlpha, il existe trois options :

    5.1. <b>Espace administrateur</b> <br> L'administrateur peut définir la langue par défaut de l'espace client dans Configuration → Général → Espace client → Langue par défaut. La langue sélectionnée ici sera celle par défaut pour tous les clients.

    5.2. <b>Espace client</b> <br> Vos clients peuvent définir leurs propres préférences de langue et sélectionner une langue pour leur utilisation lorsqu'ils se connectent à l'espace client à l'aide du menu déroulant.

    5.3. <b>Détails du compte</b> <br> Dans l'espace client, vos clients peuvent également modifier la langue via la section détails du compte. Allez dans Détails du compte → Informations personnelles → Langue et choisissez la langue préférée dans le menu déroulant.