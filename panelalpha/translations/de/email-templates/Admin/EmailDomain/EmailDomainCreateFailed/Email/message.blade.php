<p>Liebe <strong>{{ $admin_name }}</strong>,</p>
<p>Die Erstellung der E-Mail-Domain <strong>{{ $domain }}</strong> gescheitert.</p>
<p>Mitteilung:{{ $exception_message }}</p>

<p>Details zur E-Mail-Domäne:</p>
<table>
    <tbody>
    <tr>
        <th>E-Mail-Domäne</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Dienstleistung</th>
        <td><strong>#{{ $service_id }}</strong> {{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>E-Mail-Server</th>
        <td><strong>#{{ $email_server_id }}</strong> {{ $email_server_name }}</td>
    </tr>
    </tbody>
</table>
