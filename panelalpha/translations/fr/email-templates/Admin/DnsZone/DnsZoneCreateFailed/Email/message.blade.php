<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>La création de la zone DNS pour le domaine <strong>{{ $zone_name }}</strong> a échoué.</p>
<p>Message: {{ $exception_message }}</p>
<p>Détails de la zone DNS:</p>
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