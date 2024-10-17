<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>Het aanmaken van het e-maildomein <strong>{{ $domain }}</strong> is mislukt.</p>
<p>Bericht: {{ $exception_message }}</p>

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