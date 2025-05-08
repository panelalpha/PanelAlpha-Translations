<?php

return [
    'App\\Lib\\Integrations\\DbIp' => [
        'title' => 'DB IP',
        'description' => 'O DB-IP é um poderoso banco de dados de geolocalização que mapeia endereços IP para locais físicos. Ele permite que as empresas personalizem o conteúdo e os serviços com base em regiões específicas, aprimorem a publicidade direcionada e melhorem a experiência do usuário.',
        'instruction' => 'O PanelAlpha utiliza um banco de dados de geolocalização gratuito preparado pela DB-IP. A condição para usar esse banco de dados é incluir um backlink para o DB-IP.com em todas as páginas que exibem ou usam resultados do banco de dados.<br>Portanto, esse link será incluído no e-mail para detecção de novos dispositivos.',
        'fields' => [
            'db-ip-accepted' => [
                'label' => 'Concordo com os termos de licenciamento',
            ],
        ],
        'subtitle' => 'Usado para determinar o local ao fazer login a partir de um novo dispositivo',
    ],
    'App\\Lib\\Integrations\\GooglePageSpeedInsights' => [
        'title' => 'Google PageSpeed Insights ',
        'subtitle' => 'Usado para tirar capturas de tela das instâncias e calcular a velocidade de carregamento das páginas',
        'description' => 'O Google PageSpeed Insights é uma ferramenta que analisa a velocidade e o desempenho do seu site em desktops e dispositivos móveis. Ela fornece sugestões práticas para melhorar os tempos de carregamento e a experiência do usuário.',
        'instruction' => 'Para usar o Google PageSpeed Insights, siga estas etapas:<ol><li>Ir para <a href=\'https://developers.google.com/speed/docs/insights/v5/get-started#key\' target=\'_blank\'>developers.google.com/speed/docs/insights/v5/get-started</a>.</li><li>Faça login em sua conta do Google, se necessário.</li><li>Crie uma nova chave de API clicando no botão "Get a Key" (Obter uma chave).</li><li>Selecione um projeto existente ou crie um novo e clique no botão "Next" (Avançar).</li><li>Após a criação da chave de API, ela será exibida na tela. Copie essa chave e use-a para integrar o Google PageSpeed Insights.</li></ol>',
        'fields' => [
            'api-key' => [
                'label' => 'Chave da API',
                'placeholder' => 'Digite sua chave de API...',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\SslProviders\\LetsEncrypt' => [
        'title' => 'Let\'s Encrypt',
        'subtitle' => 'Usado para emitir certificados SSL para instâncias',
        'description' => 'O Let\'s Encrypt é uma autoridade de certificação gratuita, automatizada e aberta que fornece criptografia HTTPS para sites. É fácil de instalar e usar, e garante que seu site seja seguro e acessível a todos.',
        'instruction' => 'Para usar o Let\'s Encrypt, siga estas etapas:<ol><li>Digite seu endereço de e-mail no campo E-mail de contato.</li><li>Leia atentamente o "Contrato de assinante do Let\'s Encrypt" e aceite os termos de serviço.</li><li>Sua conta será criada e a integração do certificado SSL será ativada automaticamente.</li><li>Acesse Configuration > Automatic SSL e defina o Automatic SSL Provider como "Let\'s Encrypt".</li><li>De agora em diante, a Let\'s Encrypt emitirá automaticamente certificados SSL para instâncias.</li></ol>',
        'fields' => [
            'account-id' => [
                'label' => 'Conta Let\\\'s Encrypt',
                'placeholder' => 'A conta será gerada após salvar as alterações',
            ],
            'contact-email' => [
                'label' => 'E-mail de contato',
                'placeholder' => 'Digite seu e-mail...',
            ],
            'tos-accepted' => [
                'label' => 'Aceitar os Termos de Serviço',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\SslProviders\\SelfSigned' => [
        'title' => 'Self Signed',
    ],
    'App\\Lib\\Integrations\\Onboarding\\Extendify' => [
        'title' => 'Extendify',
        'description' => 'Extendify provides a website-builder-like onboarding experience for your end customers. Empower your hosting customers to create beautiful, professional-looking websites in minutes using the latest AI technologies natively in WordPress.',
        'instruction' => 'Para usar o <b>Extendify</b>, use o método "Super Quick Onboarding" em seus planos.<br>Ainda não tem uma conta? <a href="https://extendify.com/pricing/" target="_blank">Configure sua conta</a>.',
        'fields' => [
            'partner_id' => [
                'label' => 'ID do parceiro',
                'placeholder' => 'Inserir ID do parceiro',
            ],
        ],
        'subtitle' => 'Usado para integração super rápida de instâncias',
    ],
    'App\\Lib\\Integrations\\ReportProviders\\GoogleAnalytics' => [
        'title' => 'Google Analytics',
        'subtitle' => 'Empregado para coletar e analisar dados de tráfego do site',
        'description' => 'Google Analytics offers free tools for consolidating and analyzing your company\'s data, enabling the decision process to be data-oriented',
        'instruction' => 'Para usar o Google Analytics, siga estas etapas:<ol><li>Ir para o site do Google Analytics: <a href="https://analytics.google.com" target="_blank">https://analytics.google.com/</a></li><li>Faça login em sua conta do Google, se ainda não tiver feito login.</li><li>Crie uma conta do Google Analytics.</li><li>Navegue até Administração > Configurações da conta > Detalhes da conta e encontre seu ID da conta.</li><li>Copie e cole o ID da propriedade no formulário abaixo.</li><li>Crie um arquivo JSON de credenciais conforme <a href="https://www.panelalpha.com/documentation/integrations/google-analytics/#google-anlytics-json-file" target="_blank">descrito na documentação</a>.</li><li>Anexe o arquivo JSON no campo Credenciais da conta de serviço abaixo.</li></ol><br>Aviso! Essa integração funciona com base no código javascript instalado automaticamente nas instâncias do cliente. O usuário pode remover esse código e a integração deixará de funcionar.',
        'fields' => [
            'account-id' => [
                'label' => 'ID da conta',
                'placeholder' => 'Inserir ID da conta',
            ],
            'service-account-credentials-json' => [
                'label' => 'Credenciais da conta de serviço',
                'placeholder' => 'Anexar arquivo JSON de credenciais de serviço',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\PreviewSiteProvider\\WithoutDns' => [
        'title' => 'WithoutDNS',
        'subtitle' => 'Enables quick preview of WordPress',
        'description' => 'O WithoutDNS fornece um kit de ferramentas abrangente que simplifica os processos de teste e migração. Ele fornece um URL temporário que direciona seu domínio para um endereço IP de servidor especificado por meio de um de nossos servidores proxy.',
        'fields' => [
            'api-token' => [
                'label' => 'Token de API',
                'placeholder' => 'Digite seu token de API',
            ],
            'temporary-url-duration' => [
                'label' => 'Duração do URL temporário',
                'options' => [
                    '15m' => '15 Minutes',
                    '1h' => '1 hora',
                    '24h' => '24 hours',
                    '7d' => '7 dias',
                    '30d' => '30 dias',
                    'never' => 'Never',
                ],
                'tooltip' => 'Defina por quanto tempo o URL de visualização gerado para o site permanecerá acessível antes de expirar.',
            ],
            'temporary_domain' => [
                'label' => 'Domínio temporário',
                'tooltip' => 'Selecione o domínio a ser usado para gerar a URL temporária para os clientes visualizarem o site.',
            ],
        ],
        'instruction' => 'Para usar o WithoutDNS, siga estas etapas:<ol><li>Acesse <a href="https://withoutdns.com/api-configuration" target="_blank">https://withoutdns.com/</a></li><li>Faça login em sua conta, se necessário.</li><li>Crie um novo Token de API clicando no botão "Gerar Token".</li><li>Copie e cole o Token de API no formulário abaixo.</li><li>Faça uma conexão de teste.</li><li>Depois de fazer a conexão de teste, as opções de Domínio temporário e Duração do URL temporário serão exibidas. Depois de selecioná-las, a integração estará pronta para uso.</li></ol><br>Sem concluir totalmente a configuração, a integração permite a geração de até três links temporários.',
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Smtp' => [
        'title' => 'SMTP',
        'fields' => [
            'host' => [
                'label' => 'Anfitrião',
                'tooltip' => 'O host de e-mail refere-se ao servidor ou provedor de hospedagem.',
            ],
            'port' => [
                'label' => 'Porto',
                'tooltip' => 'A porta de e-mail refere-se a uma porta específica dedicada a lidar com o tráfego de e-mail.',
            ],
            'encryption' => [
                'label' => 'SSL Type',
                'options' => [
                    'none' => 'Nenhum',
                    'ssl' => 'SSL',
                    'tls' => 'TLS',
                ],
                'tooltip' => 'O tipo de SSL refere-se ao método de criptografia (SSL ou TLS) usado para proteger a conexão entre o cliente de e-mail e o servidor.',
            ],
            'username' => [
                'label' => 'Nome de usuário',
                'tooltip' => 'Nome de usuário é um nome associado a uma conta de e-mail.',
            ],
            'password' => [
                'label' => 'Senha',
                'tooltip' => 'A senha de e-mail é uma senha para autenticação e acesso a uma conta de e-mail.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Postmark' => [
        'title' => 'Carimbo do correio',
        'fields' => [
            'token' => [
                'label' => 'Token',
                'tooltip' => 'O token Postmark refere-se ao token de API usado para acessar o serviço de entrega de e-mail Postmark.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\MailerSend' => [
        'title' => 'MailerSend',
        'fields' => [
            'api_token' => [
                'tooltip' => 'O token de API é usado para autenticar solicitações feitas ao enviar e-mails.',
                'label' => 'Token de API',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\Mailgun' => [
        'title' => 'Mailgun',
        'fields' => [
            'domain' => [
                'label' => 'Domínio',
                'tooltip' => 'Digite seu nome de domínio do Mailgun.',
            ],
            'secret' => [
                'label' => 'API Key',
                'tooltip' => 'Forneça sua chave de API do Mailgun para autenticação.',
            ],
            'endpoint' => [
                'label' => 'Region',
                'tooltip' => 'Selecione sua região do Mailgun.',
                'options' => [
                    'us' => 'Estados Unidos',
                    'eu' => 'União Europeia',
                ],
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailProvider\\SendGrid' => [
        'title' => 'SendGrid',
        'fields' => [
            'api_key' => [
                'label' => 'Chave da API',
                'tooltip' => 'A chave de API é usada para autenticar solicitações feitas ao enviar e-mails.',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\EmailServers\\Mailcow' => [
        'title' => 'Mailcow',
        'fields' => [
            'api_url' => [
                'label' => 'URL DA API',
            ],
            'api_key' => [
                'label' => 'Chave da API',
            ],
        ],
        'config' => [
            'domain_template' => [
                'label' => 'Modelo de domínio',
            ],
        ],
        'description' => 'mailcow - dockerized é uma suíte de groupware/e-mail de código aberto baseada em docker',
    ],
    'App\\Lib\\Integrations\\EmailServers\\Cpanel' => [
        'title' => 'cPanel',
        'description' => 'cPanel - Um software de colaboração e uma plataforma de e-mail hospedados na nuvem',
        'fields' => [
            'url' => [
                'label' => 'IP/nome do host',
            ],
            'username' => [
                'label' => 'Nome de usuário',
            ],
            'api_token' => [
                'label' => 'Token de API',
            ],
            'ssl_verification' => [
                'label' => 'Verificação de SSL',
            ],
        ],
        'config' => [
            'whm_package' => [
                'label' => 'Pacote WHM',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\ReportProviders\\Matomo' => [
        'title' => 'Matomo',
        'subtitle' => 'Empregado para coleta e análise de dados de tráfego do site',
        'description' => 'O Matomo Analytics é uma plataforma de análise da Web com foco na privacidade que ajuda a rastrear o tráfego do site e o comportamento do usuário. É personalizável e fornece insights detalhados, mantendo os dados do usuário seguros.',
        'instruction' => 'Para usar o Matomo, siga estas etapas:<ol><li>Vá para o URL do Matomo: <a href="{{$url}}" target="_blank">{{$url}}</a></li><li>Passe pelo processo de instalação do Matomo.</li><li>Faça login no Matomo.</li><li>Navegue até Configuration &gt; Personal &gt; Security.</li><li>Na parte inferior da página, clique em "Create new token" (Criar novo token) para gerar um novo token.</li><li>Retornar ao PanelAlpha e inserir o token de API.</li></ol>',
        'fields' => [
            'url' => [
                'label' => 'URL',
                'placeholder' => 'Digite a URL do Matomo',
            ],
            'api-token' => [
                'label' => 'Token de API',
                'placeholder' => 'Inserir token de API',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Google' => [
        'title' => 'Google',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Siga estas etapas para ativar a autenticação com esse provedor e para registrar um novo aplicativo:
                <ol>
                <li>Proceda para:: <a href="https://console.developers.google.com/iam-admin/projects">https://console.developers.google.com/iam-admin/projects</a> e faça login, se necessário.</li>
                <li>Clique em <b>Select Project</b>, depois pressione <b>Create Project</b> e selecione-o quando for criado. </li>
                <li>Mova para a tela de consentimento <b>API Manager → Credentials → OAuth</b> e preencha o formulário lá. </li>
                <li>Em seguida, vá para <b>Credenciais → Criar credenciais (tipo de ID de cliente OAuth)</b> e selecione <b>Aplicativo Web</b>.</li>
                <li>Defina <b>Autorizar URIs de redirecionamento</b> como <br /><b>{{$callback_url}}</b></li>
                <li>Depois de se registrar, cole as credenciais do aplicativo criadas (Client ID para o ID do aplicativo e Client Secret para o Application secret) no formulário abaixo.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID do cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Apple' => [
        'title' => 'Apple',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Siga estas etapas para ativar a autenticação com esse provedor e para registrar um novo aplicativo:
            ',
        'fields' => [
            'client_id' => [
                'label' => 'ID do cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Microsoft' => [
        'title' => 'Microsoft',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Siga estas etapas para ativar a autenticação com esse provedor e para registrar um novo aplicativo:
                <ol>
                <li>Proceda para: <a href="https://account.live.com/developers/applications/create" target="_blank">https://account.live.com/developers/applications/create</a> e faça login, se necessário</li>
                <li>Crie um novo aplicativo.</li>
                <li>Preencha todos os campos obrigatórios, como o nome do aplicativo e sua descrição.</li>
                <li>Defina o <b>URL de redirecionamento</b> como <br /><b>{{$callback_url}}</b></li>
                <li>Depois de se registrar, cole as credenciais de aplicativo criadas no formulário abaixo. </li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID do cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Linkedin' => [
        'title' => 'LinkedIn',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Siga estas etapas para ativar a autenticação com esse provedor e para registrar um novo aplicativo:
            <ol>
                <li>Proceda para: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a> e faça login, se necessário.</li>
                <li>Crie um novo aplicativo.</li>
                <li>Preencha todos os campos obrigatórios, como o nome do aplicativo e sua descrição</li>
                <li>Escolha <b>Ativo</b> em <b>Status ativo</b>.</li>
                <li>Selecione as permissões <b>r_liteprofile</b> e <b>r_emailaddress</b>.
                <li>Definir <b>Redirecionamento de URL</b> para <br /><b>{{$callback_url}}</b></li>
                <li>Depois de se registrar, cole as credenciais de aplicativo criadas no formulário abaixo.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID do cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Facebook' => [
        'title' => 'Facebook',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Siga estas etapas para ativar a autenticação com esse provedor e para registrar um novo aplicativo:
            <ol>
                <li>Proceda para: <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a> e faça login, se necessário.</li>
                <li>Crie um novo aplicativo.</li>
                <li>Preencha <b>Display Name</b>, <b>Contact Email</b>, escolha uma categoria e clique em <b>Create App ID</b>. </li>
                <li>Vá para a página <b>Settings</b> e copie <b>App ID</b> e <b>App Secret</b> para esse formulário.</li>
                <li>Volte para <b>+Add Product</b> e selecione <b>Facebook Login</b></li>
                <li>Defina <b>Valid OAuth redirect URIs</b> como <br /><b>{{$callback_url}}</b></li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID do cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do cliente',
            ],
        ],
    ],
    'App\\Lib\\Integrations\\Auth\\Github' => [
        'title' => 'GitHub',
        'subtitle' => '',
        'description' => '',
        'instruction' => 'Siga estas etapas para ativar a autenticação com esse provedor e para registrar um novo aplicativo:
            <ol>
                <li>Proceda para: <a href="https://github.com/settings/developers" target="_blank">https://github.com/settings/developers</a> e faça login, se necessário.</li>
                <li>Crie um novo aplicativo.</li>
                <li>Preencha <b>Nome, Descrição, URL do site</b>.</li>
                <li>Definir <b>Redirecionar URL</b> para <br /><b>{{$callback_url}}</b></li>
                <li>Submeta o formulário e atualize as configurações do aplicativo. </li>
                <li>Localize na próxima página e copie o Client ID e o Client Secret de <b>OAuth Information</b> para os campos abaixo.</li>
            </ol>',
        'fields' => [
            'client_id' => [
                'label' => 'ID do cliente',
            ],
            'client_secret' => [
                'label' => 'Segredo do cliente',
            ],
        ],
    ],
];
