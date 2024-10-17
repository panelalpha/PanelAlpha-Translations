<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>Het e-maildomein <strong>{{ $domain }}</strong> bestaat al op de e-mailserver.</p>

<p>Details van het e-maildomein:</p>
<table>
    <tbody>
    <tr>
        <th>E-maildomein</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td><strong>#{{ $service_id }}</strong> {{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>E-mailserver</th>
        <td><strong>#{{ $email_server_id }}</strong> {{ $email_server_name }}</td>
    </tr>
    </tbody>
</table>