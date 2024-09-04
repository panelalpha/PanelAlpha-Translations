</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
<p>La création de la zone DNS pour <strong>{{ $zone_name }}</strong> domain failed.</p>
<p>Message :{{ $exception_message }}</p>
</p> <p>Détails de la zone DNS:</p> <p>Les détails de la zone DNS sont les suivants
<b>Tableau>
    <tbody>
    <tr>
        <th>Zone DNS</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td>#{{ $service_id }}{{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>Serveur DNS</th>
        <td>#{{ $dns_server_id }}{{ $dns_server_name }}</td>
    </tr>
    </tbody>
</tableau>
