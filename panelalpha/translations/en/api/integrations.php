<?php

use App\Lib\Integrations\DbIp;
use App\Lib\Integrations\GooglePageSpeedInsights;
use App\Lib\Integrations\Onboarding\Extendify;
use App\Lib\Integrations\ReportProviders\GoogleAnalytics;
use App\Lib\Integrations\ReportProviders\Matomo;
use App\Lib\Integrations\SslProviders\LetsEncrypt;

return [
    DbIp::class => [
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
        "subtitle" => "Used to issue SSL certificates for instances",
        "description" => "Let's Encrypt is a free, automated, and open Certificate Authority that provides HTTPS encryption for websites. It's easy to install and use, and it ensures that your website is safe and accessible to everyone.",
        "instruction" => "To use Let's Encrypt, you should follow these steps:<ol><li>Enter your email address in the Contact Email field.</li><li>Read the \"Let's Encrypt Subscriber Agreement\" carefully and accept the terms of service.</li><li>Your account will then be created, and the SSL certificate integration will be automatically enabled.</li><li>Go to Configuration > Automatic SSL and set the Automatic SSL Provider to \"Let's Encrypt\".</li><li>From now on, Let's Encrypt will automatically issue SSL certificates for instances.</li></ol>",
        "fields" => [
            "account-id" => [
                "label" => "Let\'s Encrypt Account",
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
    Matomo::class => [
        "subtitle" => "Employed for Website Traffic Data Collection and Analysis",
        "description" => "Matomo Analytics is a privacy-focused web analytics platform that helps track website traffic and user behavior. It's a customizable and provides detailed insights while keeping user data secure.",
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
        "subtitle" => "Used for Super Quick Onboarding of instance",
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
];

