<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>Le domaine email <strong>{{ $domain }}</strong> existe déjà sur le serveur email.</p>

<p>Détails du domaine email:</p>
<table>
    <tbody>
    <tr>
        <th>Domaine email</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td><strong>#{{ $service_id }}</strong> {{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>Serveur email</th>
        <td><strong>#{{ $email_server_id }}</strong> {{ $email_server_name }}</td>
    </tr>
    </tbody>
</table>