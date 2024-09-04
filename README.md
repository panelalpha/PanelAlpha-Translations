<p align="center">
  <img src="https://www.inbs.software/assets/img/logo-pa.svg" alt="PanelAlpha Logo" width="200">
</p>

<h3 align="center">Gain Advantage With Full WordPress Automation</h3>

---

### PanelAlpha Translations

Welcome to the PanelAlpha Translations repository! This repository contains translation files for PanelAlpha in multiple languages. Each language has its own directory with translation files organized by category.

> [!NOTE]
> This repository was created with the help of automated tools, specifically DeepL. As a result, some translations may contain inaccuracies. 

> [!NOTE]
> We encourage you to contribute improvements or corrections to ensure the best quality.

## Available Translations

The following languages are currently available:

- **German** (`de`)
- **Spanish** (`es`)
- **French** (`fr`)
- **Italian** (`it`)
- **Brazilian Portuguese** (`pt_BR`)

## Directory Structure

Each language directory contains the following structure:

```console
<lang>
|
├── clientarea
│   └── translation.json
├── email-templates
└── README.md
```

### Description
  
- `clientarea/`: Contains translation files related to the client area of PanelAlpha. These files translate text and interface elements visible to users in the client area of the application.

- `email-templates/`: Contains translation files for email templates used by PanelAlpha. These files translate the content of emails sent by the application to users.

- `README.md`: Contains information about the specific translations for that language. This file provides context and instructions for the translation files within that language directory.

## Installation

To install and use these translations with PanelAlpha, follow these general steps:

1. <b>Download the Translation Files:</b>
    - Download the language files for your desired language from the repository.

2. <b>Copy Files to the Server:</b>
    - Copy the translation files to your server's language directory. For example:

3. <b>Set Appropriate Permissions:</b>
    - Ensure the correct permissions are set for the translation files. Run the following command:
    ```sh
    chmod -R 755 /opt/panelalpha/app/packages/api/resources/lang/<language_code>
    ```

4. <b>Synchronize Notifications:</b>
    - Execute the following command to sync notifications with the new translations:
    ```sh
    docker compose -f /opt/panelalpha/app/docker-compose.yml exec -T api php artisan notifications:sync
    ```

5. <b>Configure the Client Area Language:</b>
    - <b>Administrator Settings</b>: <br>
    The administrator can set the default language for the client area in the PanelAlpha admin interface. Go to Configuration → General → Client Area → Default Language. The selected language here will be the default for all clients.

    - <b>Client Preferences</b>: <br>
    Clients can set their own language preferences and select a language when accessing the client area using the dropdown menu.
    
    - <b>Account Details</b>: <br>
    In the client area, clients can also change the language via their account details. Navigate to Account Details → Personal Information → Language and choose the preferred language from the dropdown menu.

## Additional Information

- <b>Translations Documentation:</b> Each language directory contains a README.md file with specific details and instructions for the translations in that language. Please refer to this file for additional context.

- <b>For more information</b> on how to use and integrate these translations with PanelAlpha, please refer to the [PanelAlpha documentation](https://www.panelalpha.com/documentation/getting-started/translations/)

## Contributing

If you'd like to contribute translations or updates to existing translations, please follow these steps:

1. Fork the repository.
2. Make your changes in a separate branch.
3. Submit a pull request with a clear description of the changes made.

## License

This repository is licensed under the [MIT License](https://github.com/panelalpha/PanelAlpha-Translations/blob/main/LICENSE).