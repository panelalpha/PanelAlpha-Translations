<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>Er lijkt een probleem te zijn met hostingaccount
    <strong>#{ $server_account_id }} {{ $server_account_main_domain }}</strong>.
    . De foutmelding is als volgt:</p>
<p>Boodschap: {{ $exception_message }}</p>
<p>Hosting accountgegevens:</p>
<table>
    <tbody>
    <tr>
        <th>Server</th>
        <td>#{ $server_id }} {{ $server_naam }}</td>
    </tr>
    <tr>
        <th>Hosting account</th>
        <td>#{ $server_account_id }} {{ $server_account_main_domain }}</td>
    </tr>
    <tr>
        <th>IP-adres</th>
        <td>{{ $server_account_ip_address }}</td>
    </tr>
    </tbody>
</table>
