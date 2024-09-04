# Añadir paquetes de idiomas de PanelAlpha

Aquí aprenderá cómo añadir paquetes de idiomas para PanelAlpha de dos formas: manualmente y automáticamente.

> Nota: Este texto ha sido traducido automáticamente, por lo que pueden existir errores o imprecisiones.

## Manualmente

1. Descargue los archivos de idioma en español (`es`).
2. Copie los archivos al servidor en el directorio `/opt/panelalpha/app/packages/api/resources/lang`.
3. Asigne los permisos adecuados con el comando:
   ```sh
   chmod -R 755 es
   ```
4. Ejecute el siguiente comando para sincronizar las notificaciones:
    ```sh
    docker compose -f /opt/panelalpha/app/docker-compose.yml exec -T api php artisan notifications:sync
    ```
5. Para configurar el idioma del área de cliente en PanelAlpha, hay tres opciones:

    5.1. <b>Área de administración</b> <br> El administrador puede configurar el idioma predeterminado para el área de cliente en Configuración → General → Área de cliente → Idioma predeterminado. El idioma seleccionado aquí será el predeterminado para todos los clientes.

    5.2. <b>Área de cliente</b> <br> Sus clientes pueden establecer sus propias preferencias de idioma y seleccionar un idioma para su uso cuando inicien sesión en el área de cliente usando el menú desplegable.

    5.3. <b>Detalles de la cuenta</b> <br> En el área de cliente, sus clientes también pueden cambiar el idioma a través de la sección de detalles de la cuenta. Navegue a Detalles de la cuenta → Información personal → Idioma y seleccione el idioma preferido del menú desplegable.