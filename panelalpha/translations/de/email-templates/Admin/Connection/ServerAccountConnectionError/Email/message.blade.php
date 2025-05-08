<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Es scheint ein Problem mit dem Hosting-Account zu geben.
    <strong>#{{ $server_account_id }} {{ $server_account_main_domain }}</strong>
    . Die Fehlermeldung lautet wie folgt:</p>
<p>Meldung: {{ $exception_message }}</p>
<p>Details zum Hosting-Konto:</p>
<table>
    <tbody>
    <tr>
        <th>Server</th>
        <td>#{{ $server_id }} {{ $server_name }}</td>
    </tr>
    <tr>
        <th>Hosting-Konto</th>
        <td>#{ $server_account_id }} {{ $server_account_main_domain }}</td>
    </tr>
    <tr>
        <th>IP-Adresse</th>
        <td>{{ $server_account_ip_address }}</td>
    </tr>
    </tbody>
</table>
