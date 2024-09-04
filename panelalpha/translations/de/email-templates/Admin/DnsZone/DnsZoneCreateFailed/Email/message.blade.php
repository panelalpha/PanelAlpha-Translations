<p>Liebe <strong>{{ $admin_name }}</strong>,</p>
<p>Die Erstellung der DNS-Zone für <strong>{{ $zone_name }}</strong> Domain fehlgeschlagen.</p>
<p>Mitteilung:{{ $exception_message }}</p>
<p>Details zur DNS-Zone:</p>
<table>
    <tbody>
    <tr>
        <th>DNS-Zone</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th>Dienstleistung</th>
        <td>#{{ $service_id }}{{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>DNS-Server</th>
        <td>#{{ $dns_server_id }}{{ $dns_server_name }}</td>
    </tr>
    </tbody>
</table>
