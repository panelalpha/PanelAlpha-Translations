<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>Il semble y avoir un problème avec l’hébergement <strong>#{{ $server_account_id  }} {{ $server_account_main_domain  }}</strong>.</p>
<p>Message : {{ $exception_message }}</p>
<p>Détails de l’hébergement :</p>
<table>
    <tbody>
    <tr>
        <th>Serveur</th>
        <td>#{{ $server_id }} {{ $server_name  }}</td>
    </tr>
    <tr>
        <th>Hébergement</th>
        <td>#{{ $server_account_id }} {{ $server_account_main_domain }}</td>
    </tr>
    <tr>
        <th>Addresse IP</th>
        <td>{{ $server_account_ip_address  }}</td>
    </tr>
    </tbody>
</table>