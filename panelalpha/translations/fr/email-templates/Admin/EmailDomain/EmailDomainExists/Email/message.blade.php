<p><strong>{{ $admin_name }}</strong>,</p>
<p>Le domaine de messagerie <strong>{{ $domain }}</strong> existe déjà sur le serveur de messagerie.</p>
<p>Détails du domaine de messagerie :</p>
<table>
    <tbody>
    <tr>
        <th>Domaine de messagerie :</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td><strong>#{{ $service_id }}</strong> {{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>Serveur de messagerie</th>
        <td><strong>#{{ $email_server_id }}</strong> {{ $email_server_name }}</td>
    </tr>
    </tbody>
</table>
