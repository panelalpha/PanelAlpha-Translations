<?php

return [
    'instance' => 'instância',
    'self_signed' => 'Assinado pelo próprio',
    'hosting_account' => 'conta de hospedagem',
    'service' => 'serviço',
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
];
