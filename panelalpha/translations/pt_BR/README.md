# Adicionar pacotes de idiomas do PanelAlpha

Aqui você aprenderá como adicionar pacotes de idiomas para o PanelAlpha de duas maneiras: manualmente e automaticamente.

> Aviso: Este texto foi traduzido automaticamente, portanto, podem haver erros ou imprecisões.

## Automático

Para instalar e usar essas traduções automaticamente com o PanelAlpha, siga estes passos:

1. <b>Baixe o script para /opt/panelalpha:</b>
    ```sh
    curl -sL -o /opt/panelalpha/sync-translations.sh https://raw.githubusercontent.com/panelalpha/PanelAlpha-Translations/feature/sync-translations/scripts/sync-translations.sh
    ```

2. <b>Execute o script com o idioma desejado:</b>
    ```sh
    bash /opt/panelalpha/sync-translations.sh --lang "pt_BR"
    ```

## Manualmente

1. Baixe os arquivos de idioma em português (`pt_BR`).
2. Copie os arquivos para o servidor no diretório `/opt/panelalpha/app/packages/api/resources/lang`.
3. Atribua as permissões apropriadas com o comando:
   ```sh
   chmod -R 755 pt_BR
   ```
4. Execute o seguinte comando para sincronizar as notificações:
    ```sh
    docker compose -f /opt/panelalpha/app/docker-compose.yml exec -T api php artisan notifications:sync
    ```

## Definição do idioma no PanelAlpha

1. Para definir o idioma da área do cliente no PanelAlpha, há três opções:

    1.1. <b>Área administrativa</b> <br> O administrador pode definir o idioma padrão para a área do cliente na seção Configuração → Geral → Área do Cliente → Idioma Padrão. O idioma selecionado aqui será o padrão para todos os seus clientes.

    1.2. <b>Área do cliente</b> <br> Seus clientes podem configurar suas próprias preferências de idioma e selecionar um idioma para seu uso ao fazer login na área do cliente usando o menu suspenso.

    1.3. <b>Detalhes da conta</b> <br> Na área do cliente, seus clientes também podem alterar o idioma através da seção de detalhes da conta. Navegue para Detalhes da Conta → Informações Pessoais → Idioma e escolha o idioma preferido no menu suspenso.