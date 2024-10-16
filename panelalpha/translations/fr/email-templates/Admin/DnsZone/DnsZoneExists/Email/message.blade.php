<p><strong>{{ $admin_name }}</strong>,</p>
<p>La zone DNS pour le domaine <strong>{{ $zone_name }}</strong> existe déjà sur le serveur DNS.</p>
<p>Détails de la zone DNS :</p>
<table>
    <tbody>
    <tr>
        <th>Zone DNS</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td># {{ $service_id }}{{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>Serveur DNS</th>
        <td># {{ $dns_server_id }}{{ $dns_server_name }}</td>
    </tr>
    </tbody>
</table>
