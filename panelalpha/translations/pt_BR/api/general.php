<?php

return [
    'instance' => 'instância',
    'self_signed' => 'Assinado pelo próprio',
    'hosting_account' => 'conta de hospedagem',
    'service' => 'serviço',
    'arquivos',
    'banco de dados',
    'import_steps' => [
        'creating-hosting-account' => 'Criação de conta de hospedagem',
        'creating-domain' => 'Criação de domínio',
        'creating-database' => 'Criação de banco de dados',
        'uploading-files' => 'Carregamento de arquivos',
        'uploading-database' => 'Carregamento do banco de dados',
        'extracting-files' => 'Extração de arquivos',
        'extracting-database' => 'Extracting database',
        'importing-database' => 'Importação de banco de dados',
        'configuring-wordpress' => 'Configuração do WordPress',
        'cleaning-files' => 'Limpeza de arquivos',
        'creating-ftp-account' => 'Criação de conta FTP',
        'creating-site' => 'Criação de site',
        'checking-domain' => 'Verificação de domínio',
        'downloading-files' => 'Download de arquivos',
        'downloading-database' => 'Download do banco de dados',
        'removing-ftp-account' => 'Remoção da conta FTP',
        'creating-temporary-directory' => 'Criação de diretório temporário',
        'installPluginOnNewInstance' => "Instalando o plugin 'WordPress Migrator' na nova instância",
        'installPluginOnImportedInstance' => "Instalando o plugin 'WordPress Migrator' na instância importada",
        'installNewInstance' => 'Instalando nova instância',
        'prepareNewInstanceToMigration' => 'Preparando nova instância para migração',
        'prepareMigrationUsingPlugin' => 'Preparando migração',
        'runMigrationUsingPlugin' => 'Executando migração',
        'prepareInstance' => 'Preparando instância para migração',
        'downloadDatabase' => 'Baixando banco de dados',
        'downloadFiles' => 'Baixando arquivos',
        'uploadFiles' => 'Enviando arquivos',
        'prepareFiles' => 'Preparando arquivos',
        'uploadDatabase' => 'Enviando banco de dados',
        'importDatabase' => 'Importando banco de dados',
        'configureWordPress' => 'Configurando WordPress',
        'cleanUp' => 'Limpando arquivos',
        'createFtpAccount' => 'Criando conta FTP/SFTP',
        'cleanUpPlugins' => 'Limpando plugins',
],
    'health-checks' => [
        'server' => [
            'ping' => 'Conexão de teste do servidor',
            'api' => 'Conexão API de teste do servidor',
            'wp_cli' => 'Teste de servidor Conexão WP CLI',
        ],
        'hosting_account' => [
            'exists' => 'Existência de um servidor de hospedagem',
            'local_data' => 'Hosting Server Checking Correct Local Data',
            'ping' => 'Conexão de teste do servidor de hospedagem',
            'ip_addresses' => 'Endereços IP do servidor de hospedagem',
        ],
        'domain' => [
            'exists' => 'O domínio existe',
            'ip_addresses' => 'Endereços IP de domínio',
            'local_data' => 'Verificação de domínio Dados locais corretos',
            'ping' => 'Conexão de teste de domínio',
            'installed_ssl_cert' => 'Certificado SSL instalado no domínio',
        ],
        'app' => [
            'wp_exists' => 'O WordPress existe',
            'ping' => 'Conexão de teste da instância do Wordpress',
            'local_data' => 'Verificação de dados locais corretos no WordPress',
        ],
    ],

    'server_alerts' => [
        "high_disk_usage" => "High Disk Usage",
        "high_cpu_usage" => "High CPU Usage",
        "high_ram_usage" => "High RAM Usage",
    ],
    'report_providers' => [
        'referer' => [
            'website' => 'Websites',
            'direct' => 'Direct Entry',
            'search_engine' => 'Search Engines',
            'unknown' => 'Unknown',
            'internal' => 'Internal',
        ]
    ],
    'continent' => [
        'as' => 'Asia',
        'eu' => 'Europe',
        'na' => 'North America',
        'sa' => 'South America',
        'af' => 'Africa',
        'oc' => 'Oceania',
        'an' => 'Antarctica'
    ],
    'field' => [
        'onboarding_domain' => [
            'label' => 'Onboarding Domain (Optional)',
            'description' => 'Optional, if set, it will override onboarding domain configured in plan settings.'
        ]
    ],
    'files' => 'Arquivos',
    'database' => 'Banco de dados',
];