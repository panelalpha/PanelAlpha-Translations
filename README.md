<p align="center">
  <img src="https://www.inbs.software/assets/img/logo-pa.svg" alt="PanelAlpha Logo" width="200">
</p>

<h3 align="center">Gain Advantage With Full WordPress Automation</h3>

---

### PanelAlpha Translations

Welcome to the PanelAlpha Translations repository! This repository contains translation files for PanelAlpha in multiple languages. Each language has its own directory with translation files organized by category.

> **Disclaimer:** This repository was created with the help of automated tools, so there might be errors or inaccuracies in the translations. Please feel free to contribute improvements or corrections.

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
└── email-templates
    ├── Admin
    │   ├── DnsZone
    │   │   ├── CreateADnsRecordFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   ├── DnsRecordsCreateFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   ├── DnsZoneCreateFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   └── DnsZoneExists
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   ├── EmailDomain
    │   │   ├── EmailDomainCreateFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   └── EmailDomainExists
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   ├── Instance
    │   │   ├── ImportByUserFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   ├── ImportByUserFinished
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   ├── InstanceDeletedByUser
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   ├── InstanceInstallationByUserFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   ├── InstanceInstallationByUserFinished
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   ├── ManualImportInstanceFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   └── ManualImportInstanceFinished
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   ├── InstanceTemplate
    │   │   ├── InstanceTemplateCreateFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   └── InstanceTemplateCreateFinished
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   ├── Package
    │   │   ├── InstallPackageFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   └── InstallPackageFinished
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   ├── Plugin
    │   │   ├── ForceUpdatePluginFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   └── ForceUpdatePluginFinished
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   ├── Queue
    │   │   ├── QueueTaskFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   └── QueueTaskSucceeded
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   ├── ReportProvider
    │   │   ├── SyncReportProvidersFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   └── SyncReportProvidersFinished
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   ├── Service
    │   │   ├── ServiceSuspended
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   ├── ServiceUnsuspended
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   └── ServiceUpgraded
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   ├── SslOrder
    │   │   └── DnsPropagationExceeded
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   ├── System
    │   │   ├── NewDeviceLogin
    │   │   │   └── Email
    │   │   │       ├── message.blade.php
    │   │   │       └── subject.blade.php
    │   │   └── ResetPassword
    │   │       └── Email
    │   │           ├── message.blade.php
    │   │           └── subject.blade.php
    │   ├── Theme
    │   │   ├── ForceUpdateThemeFailed
    │   │   │   ├── Email
    │   │   │   │   ├── message.blade.php
    │   │   │   │   └── subject.blade.php
    │   │   │   └── InApp
    │   │   │       └── message.blade.php
    │   │   └── ForceUpdateThemeFinished
    │   │       ├── Email
    │   │       │   ├── message.blade.php
    │   │       │   └── subject.blade.php
    │   │       └── InApp
    │   │           └── message.blade.php
    │   └── Updates
    │       ├── PluginUpdateAvailable
    │       │   └── Email
    │       │       ├── message.blade.php
    │       │       └── subject.blade.php
    │       ├── ThemeUpdateAvailable
    │       │   └── Email
    │       │       ├── message.blade.php
    │       │       └── subject.blade.php
    │       └── WordpressUpdateAvailable
    │           └── Email
    │               ├── message.blade.php
    │               └── subject.blade.php
    └── User
        ├── Backup
        │   ├── AutomaticCreateFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── AutomaticCreateFinished
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── CreateFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── CreateFinished
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── DeleteFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── DeleteFinished
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── RestoreFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   └── RestoreFinished
        │       ├── Email
        │       │   ├── message.blade.php
        │       │   └── subject.blade.php
        │       └── InApp
        │           └── message.blade.php
        ├── Instance
        │   ├── CreateStagingFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── CreateStagingFinished
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── ImportFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── ImportFinished
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── InstanceInstallationFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── InstanceInstallationFinished
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── InstanceInvitationReceived
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── PushToLiveFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── PushToLiveFinished
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── UpdateWordpressFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   └── UpdateWordpressFinished
        │       ├── Email
        │       │   ├── message.blade.php
        │       │   └── subject.blade.php
        │       └── InApp
        │           └── message.blade.php
        ├── Plugin
        │   ├── InstallFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── InstallFinished
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── UpdateFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   └── UpdateFinished
        │       ├── Email
        │       │   ├── message.blade.php
        │       │   └── subject.blade.php
        │       └── InApp
        │           └── message.blade.php
        ├── System
        │   ├── NewDeviceLogin
        │   │   └── Email
        │   │       ├── message.blade.php
        │   │       └── subject.blade.php
        │   └── ResetPassword
        │       └── Email
        │           ├── message.blade.php
        │           └── subject.blade.php
        ├── Theme
        │   ├── InstallFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── InstallFinished
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   ├── UpdateFailed
        │   │   ├── Email
        │   │   │   ├── message.blade.php
        │   │   │   └── subject.blade.php
        │   │   └── InApp
        │   │       └── message.blade.php
        │   └── UpdateFinished
        │       ├── Email
        │       │   ├── message.blade.php
        │       │   └── subject.blade.php
        │       └── InApp
        │           └── message.blade.php
        └── Updates
            ├── PluginUpdateAvailable
            │   └── Email
            │       ├── message.blade.php
            │       └── subject.blade.php
            ├── ThemeUpdateAvailable
            │   └── Email
            │       ├── message.blade.php
            │       └── subject.blade.php
            └── WordpressUpdateAvailable
                └── Email
                    ├── message.blade.php
                    └── subject.blade.php
```

### Description

- `README.md`: Contains information about the specific translations for that language. This file provides context and instructions for the translation files within that language directory.
  
- `clientarea/`: Contains translation files related to the client area of PanelAlpha. These files translate text and interface elements visible to users in the client area of the application.

- `email-templates/`: Contains translation files for email templates used by PanelAlpha. These files translate the content of emails sent by the application to users.

## Contributing

If you'd like to contribute translations or updates to existing translations, please follow these steps:

1. Fork the repository.
2. Make your changes in a separate branch.
3. Submit a pull request with a clear description of the changes made.

## Getting Started

For more information on how to use and integrate these translations with PanelAlpha, please refer to the [PanelAlpha documentation](https://www.panelalpha.com/documentation/getting-started/translations/)