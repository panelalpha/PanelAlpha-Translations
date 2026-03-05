<?php

use App\Lib\Integrations\Atarim;
use App\Lib\Integrations\Auth\Apple;
use App\Lib\Integrations\Auth\Facebook;
use App\Lib\Integrations\Auth\Github;
use App\Lib\Integrations\Auth\Google;
use App\Lib\Integrations\Auth\Linkedin;
use App\Lib\Integrations\Auth\Microsoft;
use App\Lib\Integrations\DbIp;
use App\Lib\Integrations\DnsServers\Bunny;
use App\Lib\Integrations\DnsServers\Cloudflare;
use App\Lib\Integrations\DnsServers\PowerDns;
use App\Lib\Integrations\EmailProvider\MailerSend;
use App\Lib\Integrations\EmailProvider\Mailgun;
use App\Lib\Integrations\EmailProvider\Postmark;
use App\Lib\Integrations\EmailProvider\Smtp;
use App\Lib\Integrations\EmailProvider\SendGrid;
use App\Lib\Integrations\EmailServers\Cpanel as CpanelEmailServer;
use App\Lib\Integrations\EmailServers\Mailcow;
use App\Lib\Integrations\GooglePageSpeedInsights;
use App\Lib\Integrations\Onboarding\Extendify;
use App\Lib\Integrations\PreviewSiteProvider\WithoutDns;
use App\Lib\Integrations\ReportProviders\GoogleAnalytics;
use App\Lib\Integrations\ReportProviders\Matomo;
use App\Lib\Integrations\SslProviders\LetsEncrypt;
use App\Lib\Integrations\SslProviders\SelfSigned;

return [
    DbIp::class => [
        "title" => "DB IP",
        "subtitle" => "Used to determine the location when logging in from a new device",
        "description" => "DB-IP is a powerful geolocation database that maps IP addresses to physical locations. It enables businesses to customize content and services based on specific regions, improve targeted advertising, and enhance user experience.",
        "instruction" => "PanelAlpha utilizes a free geolocation database prepared by DB-IP. The condition for using this database is to include a backlink to DB-IP.com on any pages that display or use results from the database.<br>Therefore, this link will be included in the email for new device detection.",
        "fields" => [
            "db-ip-accepted" => [
                "label" => "I agree with the licensing terms"
            ]
        ]
    ],
    GooglePageSpeedInsights::class => [
        "title" => "Google PageSpeed Insights ",
        "subtitle" => "Used to take screenshots of instances and to calculate pages loading speed",
        "description" => "Google PageSpeed Insights is a tool that analyzes your website's speed and performance on desktop and mobile devices. It provides actionable suggestions to improve loading times and user experience.",
        "instruction" => "To use Google PageSpeed Insights, follow these steps:<ol><li>Go to <a href='https://developers.google.com/speed/docs/insights/v5/get-started#key' target='_blank'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Log in to your Google account if needed.</li><li>Create a new API key by clicking the \"Get a Key\" button.</li><li>Select an existing project or create a new one and click the \"Next\" button.</li><li>Once the API key is created, it will be displayed on the screen. Copy this key and use it to integrate Google PageSpeed Insights.</li></ol>",
        "fields" => [
            "api-key" => [
                "label" => "API Key",
                "placeholder" => "Enter your API key..."
            ]
        ]
    ],
    LetsEncrypt::class => [
        "title" => "Let's Encrypt",
        "subtitle" => "Used to issue SSL certificates for instances",
        "description" => "Let's Encrypt is a free, automated, and open Certificate Authority that provides HTTPS encryption for websites. It's easy to install and use, and it ensures that your website is safe and accessible to everyone.",
        "instruction" => "To use Let's Encrypt, you should follow these steps:<ol><li>Enter your email address in the Contact Email field.</li><li>Read the \"Let's Encrypt Subscriber Agreement\" carefully and accept the terms of service.</li><li>Your account will then be created, and the SSL certificate integration will be automatically enabled.</li><li>Go to Configuration > Automatic SSL and set the Automatic SSL Provider to \"Let's Encrypt\".</li><li>From now on, Let's Encrypt will automatically issue SSL certificates for instances.</li></ol>",
        "fields" => [
            "account-id" => [
                "label" => "Let's Encrypt Account",
                "placeholder" => "Account will be generated after saving changes"
            ],
            "contact-email" => [
                "label" => "Contact Email",
                "placeholder" => "Enter your email..."
            ],
            "tos-accepted" => [
                "label" => "Accept Terms Of Service"
            ]
        ]
    ],
    SelfSigned::class => [
        "title" => "Self Signed",
    ],
    Matomo::class => [
        "title" => "Matomo (deprecated)",
        "subtitle" => "Employed for Website Traffic Data Collection and Analysis",
        "description" => "Since version 1.4.1, PanelAlpha no longer needs Matomo to get site statistics and is now based on an internal tool. The integration with Matomo will be entirely removed from PanelAlpha in version 1.5 (planned for July/August). Disabling this plugin will not cause any issues with site statistics.",
        "instruction" => "To use Matomo, follow these steps:<ol><li>Go to the Matomo URL: <a href=\"{{\$url}}\" target=\"_blank\">{{\$url}}</a></li><li>Go through the Matomo installation process.</li><li>Log in to Matomo.</li><li>Navigate to Configuration &gt; Personal &gt; Security.</li><li>At the bottom of the page, click on \"Create new token\" to generate a new token.</li><li>Return to PanelAlpha and enter the API Token.</li></ol>",
        "fields" => [
            "url" => [
                "label" => "URL",
                "placeholder" => "Enter Matomo URL"
            ],
            "api-token" => [
                "label" => "API Token",
                "placeholder" => "Enter API Token"
            ]
        ]
    ],
    Extendify::class => [
        "title" => "Extendify",
        "subtitle" => "Used for Super Quick Onboarding of instances",
        "description" => "Extendify provides a website-builder-like onboarding experience for your end customers. Empower your hosting customers to create beautiful, professional-looking websites in minutes using the latest AI technologies natively in WordPress.",
        "instruction" => "To use <b>Extendify</b>, please use \"Super Quick Onboarding\" method in your plans.<br>Don't have an account yet? <a href=\"https://extendify.com/pricing/\" target=\"_blank\">Set up your account</a>.",
        "fields" => [
            "partner_id" => [
                "label" => "Partner ID",
                "placeholder" => "Enter Partner ID"
            ]
        ]
    ],
    GoogleAnalytics::class => [
        "title" => "Google Analytics",
        "subtitle" => "Employed for Gathering and Analyzing Website Traffic Data",
        "description" => "Google Analytics offers free tools for consolidating and analyzing your company's data, enabling the decision process to be data-oriented",
        "instruction" => "To use Google Analytics, follow these steps:<ol><li>Go to the Google Analytics site: <a href=\"https://analytics.google.com\" target=\"_blank\">https://analytics.google.com/</a></li><li>Log into your Google account if not already logged in.</li><li>Create a Google Analytics account.</li><li>Navigate to Administration > Account Settings > Account Details and find your Account ID.</li><li>Copy and paste the Property ID in the form below.</li><li>Create a credentials JSON file as <a href=\"https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file\" target=\"_blank\">described in the documentation</a>.</li><li>Attach the JSON file in the Service Account Credentials field below.</li></ol><br>Warning! This integration works based on javascript code automatically installed on customer instances. The user can remove this code and the integration will stop working.",
        "fields" => [
            "account-id" => [
                "label" => "Account ID",
                "placeholder" => "Enter Account ID"
            ],
            "service-account-credentials-json" => [
                "label" => "Service Account Credentials",
                "placeholder" => "Attach Service Credentials JSON File"
            ]
        ]
    ],
    WithoutDns::class => [
        "title" => "WithoutDNS",
        "subtitle" => "Enables quick preview of WordPress",
        "description" => "WithoutDNS provides a comprehensive toolkit that simplifies testing and migration processes. It provides a temporary URL that directs your domain to a specified server IP address through one of our proxy servers.",
        "instruction" => "To use WithoutDNS, follow these steps:<ol><li>Go to <a href=\"https://withoutdns.com/api-configuration\" target=\"_blank\">https://withoutdns.com/</a></li><li>Log in to your account if needed.</li><li>Create a new API Token by clicking the \"Generate Token\" button.</li><li>Copy and paste the API Token into the form below.</li><li>Perform a test connection.</li><li>After performing the test connection, the options for Temporary Domain and Temporary URL Duration will appear. Once you select them, the integration will be ready for use.</li></ol><br>Without fully completing the configuration, the integration allows the generation of up to three temporary links.",
        "fields" => [
            "api-token" => [
                "label" => "API Token",
                "placeholder" => "Enter your API Token"
            ],
            'temporary-url-duration' => [
                "label" => 'Temporary URL Duration',
                "tooltip" => "Define how long the generated preview URL for the site will remain accessible before it expires.",
                "options" => [
                    "15m" => "15 Minutes",
                    "1h" => "1 Hour",
                    "24h" => '24 hours',
                    "7d" => '7 days',
                    "30d" => '30 days',
                    "never" => 'Never'
                ]
            ],
            'temporary_domain' => [
                'label' => "Temporary Domain",
                "tooltip" => "Select the domain to be used for generating the temporary URL for clients to preview the site.",
            ]
        ]
    ],

    //Email Providers
    Smtp::class => [
        "title" => "SMTP",
        "fields" => [
            "host" => [
                "label" => "Host",
                "tooltip" => "Email host refers to the server or hosting provider."
            ],
            "port" => [
                "label" => "Port",
                "tooltip" => "Email port refers to a specific port dedicated to handling email traffic."
            ],
            "encryption" => [
                "label" => "SSL Type",
                "tooltip" => "SSL Type refers to the encryption method (SSL or TLS) used to secure the connection between the email client and server.",
                "options" => [
                    "none" => "None",
                    "ssl" => "SSL",
                    "tls" => "TLS",
                ]
            ],
            "username" => [
                "label" => "Username",
                "tooltip" => "Username is a name associated with an email account."
            ],
            "password" => [
                "label" => "Password",
                "tooltip" => "Email password is a password for authentication and accessing an email account."
            ]
        ]
    ],
    Postmark::class => [
        "title" => "Postmark",
        "fields" => [
            "token" => [
                "label" => "Token",
                "tooltip" => "Postmark token refers to API token used for accessing with the Postmark email delivery service."
            ],
        ]
    ],
    MailerSend::class => [
        "title" => "MailerSend",
        "fields" => [
            "api_token" => [
                "label" => "API Token",
                "tooltip" => "API token is used to authenticate requests made when sending emails."
            ],
        ]
    ],
    Mailgun::class => [
        "title" => "Mailgun",
        "fields" => [
            "domain" => [
                "label" => "Domain",
                "tooltip" => "Enter your Mailgun domain name."
            ],
            "secret" => [
                "label" => "API Key",
                "tooltip" => "Provide your Mailgun API key for authentication."
            ],
            "endpoint" => [
                "label" => "Region",
                "tooltip" => "Select your Mailgun region.",
                "options" => [
                    "us" => "United States",
                    "eu" => "European Union",
                ]
            ],
        ]
    ],
    SendGrid::class => [
        "title" => "SendGrid",
        "fields" => [
            "api_key" => [
                "label" => "API Key",
                "tooltip" => "API Key is used to authenticate requests made when sending emails."
            ],
        ]
    ],
    // Hosting Servers
    App\Lib\Integrations\HostingServers\Cpanel::class => [
        "title" => "cPanel",
        "description" => "cPanel - A Cloud-Hosted Collaboration Software and Email Platform",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Username',
            ],
            'api_token' => [
                'label' => 'API Token',
                'link_label' => 'How To Create API Token',
            ],
            'ssl_verification' => [
                'label' => 'SSL Verification',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'WHM Package',
            ]
        ]
    ],
    App\Lib\Integrations\HostingServers\DirectAdmin::class => [
        "title" => "Direct Admin",
        "description" => "DirectAdmin - A Cloud-Hosted Collaboration Software and Email Platform",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'username',
            ],
            'password' => [
                'label' => 'Password',
            ],
            'ssl_verification' => [
                'label' => 'SSL Verification',
            ],
        ],
        "config" => [
            'package' => [
                'label' => 'Package',
            ],
            'ip_address' => [
                'label' => 'IP Address',
            ]
        ]
    ],
    App\Lib\Integrations\HostingServers\Plesk::class => [
        "title" => "Plesk",
        "description" => "Plesk - A Cloud-Hosted Collaboration Software and Email Platform",
        "fields" => [
            'url' => [
                'label' => 'IP/Hostname',
            ],
            'username' => [
                'label' => 'Username',
            ],
            'password' => [
                'label' => 'Password',
            ],
            'ssl_verification' => [
                'label' => 'SSL Verification',
            ],
        ],
        "config" => [
            'ip_address' => [
                'label' => 'IP Address',
                'tooltip' => "Select an available IP address",
            ],
            'hosting_plan' => [
                'label' => 'Hosting Plan',
                'tooltip' => "Select a hosting plan for the subscription. Important: This option is only available when 'Reseller Account' is disabled.",
            ],
            'reseller_account' => [
                'label' => 'Reseller Account',
                'tooltip' => "Enable this option to allow creating customer accounts under reseller. Requires a 'reseller plan' to be selected. Note: This option may be unavailable if the server doesn't support reseller accounts",
            ],
            'reseller_plan' => [
                'label' => 'Reseller Plan',
                'tooltip' => "Select a reseller plan. Important: This option is only available when 'Reseller Account' is enabled. Note: This option may be unavailable if the server doesn't support reseller accounts",
            ],
        ]
    ],
    App\Lib\Integrations\HostingServers\PanelAlpha::class => [
        "title" => "PanelAlpha Engine",
        "description" => "PanelAlpha - A Docker-based webhosting solution",
        "fields" => [
            'api_url' => [
                'label' => 'API URL',
            ],
            'api_token' => [
                'label' => 'API Token',
            ],
        ],
        "config" => [
            'disk_space_limit' => [
                'label' => 'Disk Space Limit (MB)',
            ],
            'memory_limit' => [
                'label' => 'Memory Limit (MB)',
            ],
            'cpu_limit' => [
                'label' => 'CPU Limit',
            ],
            'device_read_bps' => [
                'label' => 'Read Rate Limit (Bytes Per Second)',
            ],
            'device_write_bps' => [
                'label' => 'Write Rate Limit (Bytes Per Second)',
            ],
            'bandwidth_limit' => [
                'label' => 'Bandwidth Limit (MB Per Month)',
            ],
            'mysql_databases_limit' => [
                'label' => 'MySQL Databases Limit'
            ],
            'ftp_accounts_limit' => [
                'label' => 'FTP Accounts Limit',
            ],
            'sftp_accounts_limit' => [
                'label' => 'SFTP Accounts Limit',
            ],
            'addon_domains_limit' => [
                'label' => 'Addon Domains Limit',
            ],
            'subdomains_limit' => [
                'label' => 'Subdomains Limit',
            ],
            'inodes_limit' => [
                'label' => 'Inodes Limit',
            ],
            'enable_redis_cache' => [
                'label' => 'Enable Redis Cache',
            ],
            'enable_litespeed_cache' => [
                'label' => 'Enable LiteSpeed Cache',
            ],
            'php_fpm_pool_settings' => [
                'label' => 'PHP-FPM Pool Settings',
            ],
            'lsphp_settings' => [
                'label' => 'LSPHP Settings',
            ],
            'dedicated_ipv4' => [
                'label' => 'Dedicated IPv4',
            ],
            'dedicated_ipv6' => [
                'label' => 'Dedicated IPv6',
            ],
        ]
    ],
    App\Lib\Integrations\HostingServers\WpCloud::class => [
        "title" => "WP Cloud",
        "description" => "WP Cloud - WordPress-first cloud hosting",
        "fields" => [
            'client_identifier' => [
                'label' => 'Client Identifier',
            ],
            'api_key' => [
                'label' => 'API Key',
            ]
        ],
        "config" => [
            'space_quota' => [
                'label' => 'Disk Quota',
                'tooltip' => 'Disk space for sites. The default value is measured in megabytes, but to specify it in gigabytes, the suffix \'GB\' must be added. The maximum value is 200 GB.',
            ],
            'php_workers' => [
                'label' => 'PHP Workers',
                'tooltip' => "Set the number of CPU and PHP Workers. By default, you can set a value between 2 and 10. For other options, please contact WP Cloud.",
            ],
            'php_memory_limit' => [
                'label' => 'PHP Memory Limit',
                'tooltip' => 'Set the per-request PHP memory limit.',
            ],
            'burst_up_php_workers' => [
                'label' => 'Burst Up PHP Workers',
                'tooltip' => "Allow to dynamic burst up to 110 PHP Workers.",
            ],
            'allow_user_choose_location' => [
                'label' => 'Allow User To Choose Location',
                'tooltip' => "Allow users to choose location for new instances.",
            ],
            'geo_affinity' => [
                'label' => 'Default Datacenter',
                'tooltip' => "Select datacenter to which the pages will be assigned.",
            ],
            'default_ssh_access_enabled' => [
                'label' => 'Default SSH Access Enabled',
                'tooltip' => "Set SSH access to be enabled by default on all new WP Cloud instances.",
            ],
            'allow_user_enable_ssh_access' => [
                'label' => 'Allow User To Enable SSH Access',
                'tooltip' => "Allow users to manage SSH/SFTP access to their WP Cloud instance.",
            ],
        ]
    ],

    // Email Servers
    Mailcow::class => [
        "title" => "Mailcow",
        "description" => "mailcow - dockerized is an open source groupware/email suite based on docker",
        "fields" => [
            'api_url' => [
                'label' => 'API URL',
            ],
            'api_key' => [
                'label' => 'API Key',
            ],
        ],
        "config" => [
            'domain_template' => [
                'label' => 'Domain Template',
            ]
        ]
    ],
    CpanelEmailServer::class => [
        "title" => "cPanel",
        "description" => 'cPanel - A Cloud-Hosted Collaboration Software and Email Platform',
        "fields" => [
            'url' => [
                'label' => 'IP/Hostname',
            ],
            'username' => [
                'label' => 'Username',
            ],
            'api_token' => [
                'label' => 'API Token',
                'link_label' => 'How To Create API Token',
            ],
            'ssl_verification' => [
                'label' => 'SSL Verification',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'WHM Package',
            ]
        ]
    ],

    // DNS Servers
    Cloudflare::class => [
        "title" => "Cloudflare",
        "description" => 'Cloudflare - The Web Performance & Security Company',
        "fields" => [
            'api_token' => [
                'label' => 'API Token',
            ],
            'account_id' => [
                'label' => 'Account ID',
            ],
        ],
    ],
    App\Lib\Integrations\DnsServers\CpanelDnsOnly::class => [
        "title" => "cPanel DNSOnly",
        "description" => 'cPanel DNSOnly - allows you to run a dedicated physical nameserver',
        "fields" => [
            'url' => [
                'label' => 'IP/Hostname',
            ],
            'username' => [
                'label' => 'Username',
            ],
            'api_token' => [
                'label' => 'API Token',
                'link_label' => 'How To Create API Token',
            ],
            'nameserver_1' => [
                'label' => 'Nameserver 1',
            ],
            'nameserver_2' => [
                'label' => 'Nameserver 2',
            ],
            'nameserver_3' => [
                'label' => 'Nameserver 3',
            ],
            'nameserver_4' => [
                'label' => 'Nameserver 4',
            ]
        ],
    ],
    App\Lib\Integrations\DnsServers\DnsManagerForWhmcs::class => [
        "title" => "DNS Manager For WHMCS",
        "description" => 'DNS Manager For WHMCS - DNS zone management module',
        "fields" => [
            'whmcs_url' => [
                'label' => 'WHMCS URL',
            ],
            'whmcs_api_token' => [
                'label' => 'WHMCS API Token',
            ],
        ]
    ],
    PowerDns::class => [
        "title" => "PowerDNS",
        "description" => 'PowerDNS - leading provider of secure open-source and commercial DNS software',
        "fields" => [
            'api_url' => [
                'label' => 'API URL',
            ],
            'api_token' => [
                'label' => 'API Token',
            ],
            'server' => [
                'label' => 'Server',
            ],
            'zones_kind' => [
                'label' => 'Zones Kind',
            ],
            'nameservers' => [
                'label' => 'Nameservers (comma separated)',
            ],
        ]
    ],
    Bunny::class => [
        "title" => "Bunny.net",
        "description" => 'Bunny.net - The global edge platform that truly hops',
        "fields" => [
            'api_key' => [
                'label' => 'API Key',
            ],
        ]
    ],

    // Auth
    Google::class => [
        "title" => "Google",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Follow these steps to enable the authentication with this provider and to register a new application:
                <ol>
                <li>Proceed to:: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> and log in if necessary.</li>
                <li>Click on <b>Select Project</b>, then press <b>Create Project</b> and select it when created. </li>
                <li>Move to <b>API Manager → Credentials → OAuth</b> consent screen and fill out the form there. </li>
                <li>Next, go to <b>Credentials → Create credentials (OAuth client ID type)</b> and select <b>Web application</b>.</li>
                <li>Set <b>Authorize redirect URIs</b> to  <br /><b>{{$callback_url}}</b></li>
                <li>Once you have registered paste the created application credentials (Client ID for application ID and Client Secret for Application secret) into the form below.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'Client ID',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
            ],
        ]
    ],
    Apple::class => [
        "title" => "Apple",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Follow these steps to enable the authentication with this provider and to register a new application:
            ',
        "fields" => [
            'client_id' => [
                'label' => 'Client ID',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
            ],
        ]
    ],
    Microsoft::class => [
        "title" => "Microsoft",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Follow these steps to enable the authentication with this provider and to register a new application:
                <ol>
                <li>Proceed to: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> and log in if necessary</li>
                <li>Create a new application.</li>
                <li>Fill out any required fields such as the application name and its description.</li>
                <li>Set <b>Redirect URL</b> to <br /><b>{{$callback_url}}</b></li>
                <li>Once you have registered, paste the created application credentials into the form below. </li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'Client ID',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
            ],
        ]
    ],
    Linkedin::class => [
        "title" => "LinkedIn",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Follow these steps to enable the authentication with this provider and to register a new application:
            <ol>
                <li>Proceed to: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> and log in if necessary.</li>
                <li>Create a new application.</li>
                <li>Fill out any required fields, such as the application name and its description</li>
                <li>Choose <b>Live</b> under <b>Live Status</b>.</li>
                <li>Select <b>r_liteprofile</b> and <b>r_emailaddress</b> permissions.</li>
                <li>Set <b>Redirect URL</b> to <br /><b>{{$callback_url}}</b></li>
                <li>Once you have registered, paste the created application credentials into the form below.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'Client ID',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
            ],
        ]
    ],
    Facebook::class => [
        "title" => "Facebook",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Follow these steps to enable the authentication with this provider and to register a new application:
            <ol>
                <li>Proceed to: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> and log in if necessary.</li>
                <li>Create a new application.</li>
                <li>Fill out <b>Display Name</b>, <b>Contact Email</b>, choose a category and click <b>Create App ID</b>. </li>
                <li>Go to <b>Settings</b> page and copy <b>App ID</b> and <b>App Secret</b> to this form.</li>
                <li>Come back to <b>+Add Product</b> and select <b>Facebook Login</b></li>
                <li>Set <b>Valid OAuth redirect URIs</b> to <br /><b>{{$callback_url}}</b></li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'Client ID',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
            ],
        ]
    ],
    Github::class => [
        "title" => "GitHub",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Follow these steps to enable the authentication with this provider and to register a new application:
            <ol>
                <li>Proceed to: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> and log in if necessary.</li>
                <li>Create a new application.</li>
                <li>Fill out <b>Name, Description, Website URL</b>.</li>
                <li>Set <b>Redirect URL</b> to <br /><b>{{$callback_url}}</b></li>
                <li>Submit the form and update the application settings. </li>
                <li>Find on the next page and copy Client ID and Client Secret from <b>OAuth Information</b> to the fields below.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'Client ID',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
            ],
        ]
    ],
    Atarim::class => [
        "title" => "Atarim",
        "subtitle" => "Utilized for Visual Collaboration and Feedback on Websites",
        "description" => "Atarim streamlines website collaboration by allowing teams and clients to leave visual feedback directly on live sites, turning comments into actionable tasks to speed up project delivery.",
        "instruction" => "To use Atarim, follow these steps:
            <ol>
                <li>Go to <a href=\"https://atarim.firstpromoter.com/signup/32353\" target=\"_blank\">Atarim Sign Up Page</a></li>
                <li>Create account or log in to an already existing account.</li>
                <li>Copy the <strong>referral link</strong> and paste it into the form field below.</li>
            </ol>",
        "fields" => [
            'link' => [
                'label' => 'Link',
            ],
        ]
    ],
];
