<p>Estimado <strong>{ $admin_name }}</strong>,</p>
<p>Parece que hay un problema con la cuenta de alojamiento
    <strong>#{ $server_account_id }} {{ $server_account_main_domain }}</strong>
    . El mensaje de error es el siguiente:</p>
<p>Mensaje: {{ $exception_message }}</p>
<p>Detalles de la cuenta de alojamiento:</p>
<table>
    <tbody>
    <tr>
        <th>Servidor</th>
        <td>#{{ $server_id }} {{ $server_name }}</td>
    </tr>
    <tr>
        <th>Cuenta de alojamiento</th>
        <td>#{ $server_account_id }} {{ $server_account_main_domain }}</td>
    </tr>
    <tr>
        <th>Dirección IP</th>
        <td>{{ $server_account_ip_address }}</td>
    </tr>
    </tbody>
</table>
