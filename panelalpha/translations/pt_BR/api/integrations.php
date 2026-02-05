<?php

use App\Lib\Integrations\Atarim;
use App\Lib\Integrations\Auth\Apple;
use App\Lib\Integrations\Auth\Facebook;
use App\Lib\Integrations\Auth\Github;
use App\Lib\Integrations\Auth\Google;
use App\Lib\Integrations\Auth\Linkedin;
use App\Lib\Integrations\Auth\Microsoft;
use App\Lib\Integrations\DbIp;
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
        "subtitle" => "Usado para determinar a localização ao fazer login de um novo dispositivo",
        "description" => "DB-IP é um poderoso banco de dados de geolocalização que mapeia endereços IP para locais físicos. Ele permite que empresas personalizem conteúdo e serviços com base em regiões específicas, melhorem anúncios direcionados e aprimorem a experiência do usuário.",
        "instruction" => "PanelAlpha utiliza um banco de dados de geolocalização gratuito preparado por DB-IP. A condição para usar este banco de dados é incluir um backlink para DB-IP.com em qualquer página que exiba ou use resultados do banco de dados.<br>Portanto, este link será incluído no e-mail para detecção de novo dispositivo.",
        "fields" => [
            "db-ip-accepted" => [
                "label" => "Concordo com os termos de licenciamento"
            ]
        ]
    ],
    GooglePageSpeedInsights::class => [
        "title" => "Google PageSpeed Insights",
        "subtitle" => "Usado para tirar capturas de tela de instâncias e calcular a velocidade de carregamento de páginas",
        "description" => "Google PageSpeed Insights é uma ferramenta que analisa a velocidade e o desempenho do seu site em dispositivos desktop e móveis. Ele fornece sugestões acionáveis para melhorar os tempos de carregamento e a experiência do usuário.",
        "instruction" => "Para usar o Google PageSpeed Insights, siga estas etapas:<ol><li>Acesse <a href='https://developers.google.com/speed/docs/insights/v5/get-started#key' target='_blank'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Faça login na sua conta do Google, se necessário.</li><li>Crie uma nova chave de API clicando no botão \"Get a Key\".</li><li>Selecione um projeto existente ou crie um novo e clique no botão \"Next\".</li><li>Depois que a chave de API for criada, ela será exibida na tela. Copie esta chave e use-a para integrar o Google PageSpeed Insights.</li></ol>",
        "fields" => [
            "api-key" => [
                "label" => "Chave de API",
                "placeholder" => "Digite sua chave de API..."
            ]
        ]
    ],
    LetsEncrypt::class => [
        "title" => "Let's Encrypt",
        "subtitle" => "Usado para emitir certificados SSL para instâncias",
        "description" => "Let's Encrypt é uma Autoridade Certificadora gratuita, automatizada e aberta que fornece criptografia HTTPS para sites. É fácil de instalar e usar, e garante que seu site seja seguro e acessível a todos.",
        "instruction" => "Para usar o Let's Encrypt, siga estas etapas:<ol><li>Digite seu endereço de e-mail no campo Contact Email.</li><li>Leia o \"Let's Encrypt Subscriber Agreement\" com atenção e aceite os termos de serviço.</li><li>Sua conta será criada e a integração do certificado SSL será habilitada automaticamente.</li><li>Vá para Configuration > Automatic SSL e defina o Automatic SSL Provider como \"Let's Encrypt\".</li><li>A partir de agora, o Let's Encrypt emitirá automaticamente certificados SSL para instâncias.</li></ol>",
        "fields" => [
            "account-id" => [
                "label" => "Conta Let's Encrypt",
                "placeholder" => "A conta será gerada após salvar as alterações"
            ],
            "contact-email" => [
                "label" => "E-mail de Contato",
                "placeholder" => "Digite seu e-mail..."
            ],
            "tos-accepted" => [
                "label" => "Aceitar Termos de Serviço"
            ]
        ]
    ],
    SelfSigned::class => [
        "title" => "Autoassinado",
    ],
    Matomo::class => [
        "title" => "Matomo (obsoleto)",
        "subtitle" => "Empregado para Coleta e Análise de Dados de Tráfego de Sites",
        "description" => "Desde a versão 1.4.1, o PanelAlpha não precisa mais do Matomo para obter estatísticas do site e agora é baseado em uma ferramenta interna. A integração com o Matomo será totalmente removida do PanelAlpha na versão 1.5 (planejada para julho/agosto). Desabilitar este plugin não causará problemas com as estatísticas do site.",
        "instruction" => "Para usar o Matomo, siga estas etapas:<ol><li>Acesse a URL do Matomo: <a href=\"{{\$url}}\" target=\"_blank\">{{\$url}}</a></li><li>Passe pelo processo de instalação do Matomo.</li><li>Faça login no Matomo.</li><li>Navegue para Configuration &gt; Personal &gt; Security.</li><li>Na parte inferior da página, clique em \"Create new token\" para gerar um novo token.</li><li>Retorne ao PanelAlpha e digite o API Token.</li></ol>",
        "fields" => [
            "url" => [
                "label" => "URL",
                "placeholder" => "Digite a URL do Matomo"
            ],
            "api-token" => [
                "label" => "Token de API",
                "placeholder" => "Digite o Token de API"
            ]
        ]
    ],
    Extendify::class => [
        "title" => "Extendify",
        "subtitle" => "Usado para Integração Super Rápida de Instâncias",
        "description" => "Extendify fornece uma experiência de integração semelhante a um construtor de sites para seus clientes finais. Capacite seus clientes de hospedagem a criar sites bonitos e profissionais em minutos usando as mais recentes tecnologias de IA nativamente no WordPress.",
        "instruction" => "Para usar o <b>Extendify</b>, use o método \"Super Quick Onboarding\" em seus planos.<br>Ainda não tem uma conta? <a href=\"https://extendify.com/pricing/\" target=\"_blank\">Configure sua conta</a>.",
        "fields" => [
            "partner_id" => [
                "label" => "ID do Parceiro",
                "placeholder" => "Digite o ID do Parceiro"
            ]
        ]
    ],
    GoogleAnalytics::class => [
        "title" => "Google Analytics",
        "subtitle" => "Empregado para Coletar e Analisar Dados de Tráfego de Sites",
        "description" => "Google Analytics oferece ferramentas gratuitas para consolidar e analisar os dados da sua empresa, permitindo que o processo de decisão seja orientado por dados",
        "instruction" => "Para usar o Google Analytics, siga estas etapas:<ol><li>Acesse o site do Google Analytics: <a href=\"https://analytics.google.com\" target=\"_blank\">https://analytics.google.com/</a></li><li>Faça login na sua conta do Google, se ainda não estiver logado.</li><li>Crie uma conta do Google Analytics.</li><li>Navegue para Administration > Account Settings > Account Details e encontre seu Account ID.</li><li>Copie e cole o Property ID no formulário abaixo.</li><li>Crie um arquivo JSON de credenciais conforme <a href=\"https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file\" target=\"_blank\">descrito na documentação</a>.</li><li>Anexe o arquivo JSON no campo Service Account Credentials abaixo.</li></ol><br>Aviso! Esta integração funciona com base em código JavaScript instalado automaticamente nas instâncias do cliente. O usuário pode remover este código e a integração parará de funcionar.",
        "fields" => [
            "account-id" => [
                "label" => "ID da Conta",
                "placeholder" => "Digite o ID da Conta"
            ],
            "service-account-credentials-json" => [
                "label" => "Credenciais da Conta de Serviço",
                "placeholder" => "Anexe o Arquivo JSON de Credenciais de Serviço"
            ]
        ]
    ],
    WithoutDns::class => [
        "title" => "WithoutDNS",
        "subtitle" => "Permite visualização rápida do WordPress",
        "description" => "WithoutDNS fornece um conjunto de ferramentas abrangente que simplifica os processos de teste e migração. Ele fornece uma URL temporária que direciona seu domínio para um endereço IP de servidor especificado através de um de nossos servidores proxy.",
        "instruction" => "Para usar o WithoutDNS, siga estas etapas:<ol><li>Acesse <a href=\"https://withoutdns.com/api-configuration\" target=\"_blank\">https://withoutdns.com/</a></li><li>Faça login na sua conta, se necessário.</li><li>Crie um novo API Token clicando no botão \"Generate Token\".</li><li>Copie e cole o API Token no formulário abaixo.</li><li>Execute uma conexão de teste.</li><li>Após executar a conexão de teste, as opções para Temporary Domain e Temporary URL Duration aparecerão. Depois de selecioná-las, a integração estará pronta para uso.</li></ol><br>Sem completar totalmente a configuração, a integração permite a geração de até três links temporários.",
        "fields" => [
            "api-token" => [
                "label" => "Token de API",
                "placeholder" => "Digite seu Token de API"
            ],
            'temporary-url-duration' => [
                "label" => 'Duração da URL Temporária',
                "tooltip" => "Defina por quanto tempo a URL de visualização gerada para o site permanecerá acessível antes de expirar.",
                "options" => [
                    "15m" => "15 Minutos",
                    "1h" => "1 Hora",
                    "24h" => '24 horas',
                    "7d" => '7 dias',
                    "30d" => '30 dias',
                    "never" => 'Nunca'
                ]
            ],
            'temporary_domain' => [
                'label' => "Domínio Temporário",
                "tooltip" => "Selecione o domínio a ser usado para gerar a URL temporária para os clientes visualizarem o site.",
            ]
        ]
    ],

    //Email Providers
    Smtp::class => [
        "title" => "SMTP",
        "fields" => [
            "host" => [
                "label" => "Host",
                "tooltip" => "Host de e-mail refere-se ao servidor ou provedor de hospedagem."
            ],
            "port" => [
                "label" => "Porta",
                "tooltip" => "Porta de e-mail refere-se a uma porta específica dedicada ao tratamento do tráfego de e-mail."
            ],
            "encryption" => [
                "label" => "Tipo SSL",
                "tooltip" => "Tipo SSL refere-se ao método de criptografia (SSL ou TLS) usado para proteger a conexão entre o cliente de e-mail e o servidor.",
                "options" => [
                    "none" => "Nenhum",
                    "ssl" => "SSL",
                    "tls" => "TLS",
                ]
            ],
            "username" => [
                "label" => "Nome de usuário",
                "tooltip" => "Nome de usuário é um nome associado a uma conta de e-mail."
            ],
            "password" => [
                "label" => "Senha",
                "tooltip" => "Senha de e-mail é uma senha para autenticação e acesso a uma conta de e-mail."
            ]
        ]
    ],
    Postmark::class => [
        "title" => "Postmark",
        "fields" => [
            "token" => [
                "label" => "Token",
                "tooltip" => "Token do Postmark refere-se ao token de API usado para acessar o serviço de entrega de e-mail Postmark."
            ],
        ]
    ],
    MailerSend::class => [
        "title" => "MailerSend",
        "fields" => [
            "api_token" => [
                "label" => "Token de API",
                "tooltip" => "Token de API é usado para autenticar solicitações feitas ao enviar e-mails."
            ],
        ]
    ],
    Mailgun::class => [
        "title" => "Mailgun",
        "fields" => [
            "domain" => [
                "label" => "Domínio",
                "tooltip" => "Digite o nome do domínio do Mailgun."
            ],
            "secret" => [
                "label" => "Chave de API",
                "tooltip" => "Forneça sua chave de API do Mailgun para autenticação."
            ],
            "endpoint" => [
                "label" => "Região",
                "tooltip" => "Selecione sua região do Mailgun.",
                "options" => [
                    "us" => "Estados Unidos",
                    "eu" => "União Europeia",
                ]
            ],
        ]
    ],
    SendGrid::class => [
        "title" => "SendGrid",
        "fields" => [
            "api_key" => [
                "label" => "Chave de API",
                "tooltip" => "Chave de API é usada para autenticar solicitações feitas ao enviar e-mails."
            ],
        ]
    ],
    // Hosting Servers
    App\Lib\Integrations\HostingServers\Cpanel::class => [
        "title" => "cPanel",
        "description" => "cPanel - um software de colaboração hospedado na nuvem e plataforma de e-mail",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Nome de usuário',
            ],
            'api_token' => [
                'label' => 'Token de API',
                'link_label' => 'Como criar token de API',
            ],
            'ssl_verification' => [
                'label' => 'Verificação SSL',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'Pacote WHM',
            ]
        ]
    ],
    App\Lib\Integrations\HostingServers\DirectAdmin::class => [
        "title" => "Direct Admin",
        "description" => "DirectAdmin - um software de colaboração hospedado na nuvem e plataforma de e-mail",
        "fields" => [
            'url' => [
                'label' => 'URL',
            ],
            'username' => [
                'label' => 'Nome de usuário',
            ],
            'password' => [
                'label' => 'Senha',
            ],
            'ssl_verification' => [
                'label' => 'Verificação SSL',
            ],
        ],
        "config" => [
            'package' => [
                'label' => 'Pacote',
            ],
            'ip_address' => [
                'label' => 'Endereço IP',
            ]
        ]
    ],
    App\Lib\Integrations\HostingServers\Plesk::class => [
        "title" => "Plesk",
        "description" => "Plesk - um software de colaboração hospedado na nuvem e plataforma de e-mail",
        "fields" => [
            'url' => [
                'label' => 'IP/Nome do host',
            ],
            'username' => [
                'label' => 'Nome de usuário',
            ],
            'password' => [
                'label' => 'Senha',
            ],
            'ssl_verification' => [
                'label' => 'Verificação SSL',
            ],
        ],
        "config" => [
            'ip_address' => [
                'label' => 'Endereço IP',
                'tooltip' => "Selecione um endereço IP disponível",
            ],
            'hosting_plan' => [
                'label' => 'Plano de hospedagem',
                'tooltip' => "Selecione um plano de hospedagem para a assinatura. Importante: esta opção só está disponível quando 'Conta de revendedor' está desativada.",
            ],
            'reseller_account' => [
                'label' => 'Conta de revendedor',
                'tooltip' => "Ative esta opção para permitir a criação de contas de clientes sob o revendedor. Requer que um 'plano de revendedor' seja selecionado. Observação: esta opção pode estar indisponível se o servidor não suportar contas de revendedor.",
            ],
            'reseller_plan' => [
                'label' => 'Plano de revendedor',
                'tooltip' => "Selecione um plano de revendedor. Importante: esta opção só está disponível quando 'Conta de revendedor' está ativada. Observação: esta opção pode estar indisponível se o servidor não suportar contas de revendedor.",
            ],
        ]
    ],
    App\Lib\Integrations\HostingServers\PanelAlpha::class => [
        "title" => "PanelAlpha Engine",
        "description" => "PanelAlpha - uma solução de hospedagem web baseada em Docker",
        "fields" => [
            'api_url' => [
                'label' => 'URL da API',
            ],
            'api_token' => [
                'label' => 'Token de API',
            ],
        ],
        "config" => [
            'disk_space_limit' => [
                'label' => 'Limite de espaço em disco (MB)',
            ],
            'memory_limit' => [
                'label' => 'Limite de memória (MB)',
            ],
            'cpu_limit' => [
                'label' => 'Limite de CPU',
            ],
            'device_read_bps' => [
                'label' => 'Limite de taxa de leitura (bytes por segundo)',
            ],
            'device_write_bps' => [
                'label' => 'Limite de taxa de gravação (bytes por segundo)',
            ],
            'bandwidth_limit' => [
                'label' => 'Limite de banda (MB por mês)',
            ],
            'mysql_databases_limit' => [
                'label' => 'Limite de bancos de dados MySQL'
            ],
            'ftp_accounts_limit' => [
                'label' => 'Limite de contas FTP',
            ],
            'sftp_accounts_limit' => [
                'label' => 'Limite de contas SFTP',
            ],
            'addon_domains_limit' => [
                'label' => 'Limite de domínios addon',
            ],
            'subdomains_limit' => [
                'label' => 'Limite de subdomínios',
            ],
            'inodes_limit' => [
                'label' => 'Limite de inodes',
            ],
            'enable_redis_cache' => [
                'label' => 'Ativar cache Redis',
            ],
            'enable_litespeed_cache' => [
                'label' => 'Ativar cache LiteSpeed',
            ],
            'php_fpm_pool_settings' => [
                'label' => 'Configurações do pool PHP-FPM',
            ],
            'lsphp_settings' => [
                'label' => 'Configurações LSPHP',
            ],
            'dedicated_ipv4' => [
                'label' => 'IPv4 dedicado',
            ],
            'dedicated_ipv6' => [
                'label' => 'IPv6 dedicado',
            ],
        ]
    ],
    App\Lib\Integrations\HostingServers\WpCloud::class => [
        "title" => "WP Cloud",
        "description" => "WP Cloud - hospedagem em nuvem focada em WordPress",
        "fields" => [
            'client_identifier' => [
                'label' => 'Identificador do cliente',
            ],
            'api_key' => [
                'label' => 'Chave de API',
            ]
        ],
        "config" => [
            'space_quota' => [
                'label' => 'Cota de disco',
                'tooltip' => 'Espaço em disco para sites. O valor padrão é medido em megabytes, mas para especificá-lo em gigabytes, o sufixo \'GB\' deve ser adicionado. O valor máximo é 200 GB.',
            ],
            'php_workers' => [
                'label' => 'Workers PHP',
                'tooltip' => 'Defina a quantidade de CPU e PHP Workers. Por padrão, você pode definir um valor entre 2 e 10. Para outras opções, entre em contato com o WP Cloud.',
            ],
            'php_memory_limit' => [
                'label' => 'Limite de memória PHP',
                'tooltip' => 'Defina o limite de memória PHP por requisição.',
            ],
            'burst_up_php_workers' => [
                'label' => 'Burst de workers PHP',
                'tooltip' => 'Permite aumentar dinamicamente até 110 PHP Workers.',
            ],
            'allow_user_choose_location' => [
                'label' => 'Permitir que o usuário escolha a localização',
                'tooltip' => 'Permite que os usuários escolham a localização para novas instâncias.',
            ],
            'geo_affinity' => [
                'label' => 'Datacenter padrão',
                'tooltip' => 'Selecione o datacenter para o qual as páginas serão atribuídas.',
            ],
            'default_ssh_access_enabled' => [
                'label' => 'Acesso SSH padrão habilitado',
                'tooltip' => 'Define o acesso SSH habilitado por padrão em todas as novas instâncias do WP Cloud.',
            ],
            'allow_user_enable_ssh_access' => [
                'label' => 'Permitir que o usuário habilite acesso SSH',
                'tooltip' => 'Permite que os usuários gerenciem o acesso SSH/SFTP à instância do WP Cloud.',
            ],
        ]
    ],
    // Email Servers
    Mailcow::class => [
        "title" => "Mailcow",
        "description" => "mailcow - dockerized é uma suíte de groupware/e-mail de código aberto baseada em docker",
        "fields" => [
            'api_url' => [
                'label' => 'URL da API',
            ],
            'api_key' => [
                'label' => 'Chave de API',
            ],
        ],
        "config" => [
            'domain_template' => [
                'label' => 'Modelo de Domínio',
            ]
        ]
    ],
    CpanelEmailServer::class => [
        "title" => "cPanel",
        "description" => 'cPanel - Um Software de Colaboração Hospedado na Nuvem e Plataforma de E-mail',
        "fields" => [
            'url' => [
                'label' => 'IP/Nome do host',
            ],
            'username' => [
                'label' => 'Nome de usuário',
            ],
            'api_token' => [
                'label' => 'Token de API',
            ],
            'ssl_verification' => [
                'label' => 'Verificação SSL',
            ],
        ],
        "config" => [
            'whm_package' => [
                'label' => 'Pacote WHM',
            ]
        ]
    ],

    // DNS Servers
    Cloudflare::class => [
        "title" => "Cloudflare",
        "description" => 'Cloudflare - A Empresa de Desempenho e Segurança Web',
        "fields" => [
            'api_token' => [
                'label' => 'Token de API',
            ],
            'account_id' => [
                'label' => 'ID da Conta',
            ],
        ],
    ],
    App\Lib\Integrations\DnsServers\CpanelDnsOnly::class => [
        "title" => "cPanel DNSOnly",
        "description" => 'cPanel DNSOnly - permite executar um servidor de nomes dedicado',
        "fields" => [
            'url' => [
                'label' => 'IP/Nome do host',
            ],
            'username' => [
                'label' => 'Nome de usuário',
            ],
            'api_token' => [
                'label' => 'Token de API',
                'link_label' => 'Como criar token de API',
            ],
            'nameserver_1' => [
                'label' => 'Servidor de nomes 1',
            ],
            'nameserver_2' => [
                'label' => 'Servidor de nomes 2',
            ],
            'nameserver_3' => [
                'label' => 'Servidor de nomes 3',
            ],
            'nameserver_4' => [
                'label' => 'Servidor de nomes 4',
            ]
        ],
    ],
    App\Lib\Integrations\DnsServers\DnsManagerForWhmcs::class => [
        "title" => "DNS Manager For WHMCS",
        "description" => 'DNS Manager For WHMCS - módulo de gerenciamento de zonas DNS',
        "fields" => [
            'whmcs_url' => [
                'label' => 'URL do WHMCS',
            ],
            'whmcs_api_token' => [
                'label' => 'Token de API do WHMCS',
            ],
        ]
    ],
    PowerDns::class => [
        "title" => "PowerDNS",
        "description" => 'PowerDNS - principal provedor de software DNS de código aberto e comercial seguro',
        "fields" => [
            'api_url' => [
                'label' => 'URL da API',
            ],
            'api_token' => [
                'label' => 'Token de API',
            ],
            'server' => [
                'label' => 'Servidor',
            ],
            'zones_kind' => [
                'label' => 'Tipo de Zonas',
            ],
            'nameservers' => [
                'label' => 'Servidores de nomes (separados por vírgula)',
            ],
        ]
    ],

    // Auth
    Google::class => [
        "title" => "Google",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Siga estas etapas para habilitar a autenticação com este provedor e registrar um novo aplicativo:
                <ol>
                <li>Prossiga para: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> e faça login se necessário.</li>
                <li>Clique em <b>Select Project</b>, então pressione <b>Create Project</b> e selecione-o quando criado. </li>
                <li>Vá para <b>API Manager → Credentials → OAuth</b> tela de consentimento e preencha o formulário lá. </li>
                <li>Em seguida, vá para <b>Credentials → Create credentials (OAuth client ID type)</b> e selecione <b>Web application</b>.</li>
                <li>Defina <b>Authorize redirect URIs</b> para  <br /><b>{{$callback_url}}</b></li>
                <li>Depois de registrado, cole as credenciais do aplicativo criado (Client ID para ID do aplicativo e Client Secret para segredo do aplicativo) no formulário abaixo.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'ID do Cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do Cliente',
            ],
        ]
    ],
    Apple::class => [
        "title" => "Apple",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Siga estas etapas para habilitar a autenticação com este provedor e registrar um novo aplicativo:
            ',
        "fields" => [
            'client_id' => [
                'label' => 'ID do Cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do Cliente',
            ],
        ]
    ],
    Microsoft::class => [
        "title" => "Microsoft",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Siga estas etapas para habilitar a autenticação com este provedor e registrar um novo aplicativo:
                <ol>
                <li>Prossiga para: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> e faça login se necessário</li>
                <li>Crie um novo aplicativo.</li>
                <li>Preencha qualquer campo obrigatório, como o nome do aplicativo e sua descrição.</li>
                <li>Defina <b>Redirect URL</b> para <br /><b>{{$callback_url}}</b></li>
                <li>Depois de registrado, cole as credenciais do aplicativo criado no formulário abaixo. </li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'ID do Cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do Cliente',
            ],
        ]
    ],
    Linkedin::class => [
        "title" => "LinkedIn",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Siga estas etapas para habilitar a autenticação com este provedor e registrar um novo aplicativo:
            <ol>
                <li>Prossiga para: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> e faça login se necessário.</li>
                <li>Crie um novo aplicativo.</li>
                <li>Preencha qualquer campo obrigatório, como o nome do aplicativo e sua descrição</li>
                <li>Escolha <b>Live</b> em <b>Live Status</b>.</li>
                <li>Selecione permissões <b>r_liteprofile</b> e <b>r_emailaddress</b>.</li>
                <li>Defina <b>Redirect URL</b> para <br /><b>{{$callback_url}}</b></li>
                <li>Depois de registrado, cole as credenciais do aplicativo criado no formulário abaixo.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'ID do Cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do Cliente',
            ],
        ]
    ],
    Facebook::class => [
        "title" => "Facebook",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Siga estas etapas para habilitar a autenticação com este provedor e registrar um novo aplicativo:
            <ol>
                <li>Prossiga para: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> e faça login se necessário.</li>
                <li>Crie um novo aplicativo.</li>
                <li>Preencha <b>Display Name</b>, <b>Contact Email</b>, escolha uma categoria e clique em <b>Create App ID</b>. </li>
                <li>Vá para a página <b>Settings</b> e copie <b>App ID</b> e <b>App Secret</b> para este formulário.</li>
                <li>Volte para <b>+Add Product</b> e selecione <b>Facebook Login</b></li>
                <li>Defina <b>Valid OAuth redirect URIs</b> para <br /><b>{{$callback_url}}</b></li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'ID do Cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do Cliente',
            ],
        ]
    ],
    Github::class => [
        "title" => "GitHub",
        "subtitle" => "",
        "description" => "",
        "instruction" => 'Siga estas etapas para habilitar a autenticação com este provedor e registrar um novo aplicativo:
            <ol>
                <li>Prossiga para: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> e faça login se necessário.</li>
                <li>Crie um novo aplicativo.</li>
                <li>Preencha <b>Name, Description, Website URL</b>.</li>
                <li>Defina <b>Redirect URL</b> para <br /><b>{{$callback_url}}</b></li>
                <li>Envie o formulário e atualize as configurações do aplicativo. </li>
                <li>Encontre na próxima página e copie Client ID e Client Secret de <b>OAuth Information</b> para os campos abaixo.</li>
            </ol>',
        "fields" => [
            'client_id' => [
                'label' => 'ID do Cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do Cliente',
            ],
        ]
    ],
    Atarim::class => [
        "title" => "Atarim",
        "subtitle" => "Usado para colaboração visual e feedback em sites",
        "description" => "Atarim simplifica a colaboração em sites permitindo que equipes e clientes deixem feedback visual diretamente em sites ao vivo, transformando comentários em tarefas acionáveis para acelerar a entrega do projeto.",
        "instruction" => "Para usar o Atarim, siga estas etapas:
            <ol>
                <li>Vá para <a href=\"https://atarim.firstpromoter.com/signup/32353\" target=\"_blank\">Página de cadastro do Atarim</a></li>
                <li>Crie uma conta ou faça login em uma conta existente.</li>
                <li>Copie o <strong>link de indicação</strong> e cole no campo abaixo.</li>
            </ol>",
        "fields" => [
            'link' => [
                'label' => 'Link',
            ],
        ]
    ],
];
