<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De DNS-zone voor het domein <strong>{{ $zone_name }}</strong> bestaat al op de DNS-server.</p>
<p>Details van de DNS-zone:</p>
<table>
    <tbody>
    <tr>
        <th>DNS-zone</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td># {{ $service_id }}{{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>DNS-server</th>
        <td># {{ $dns_server_id }}{{ $dns_server_name }}</td>
    </tr>
    </tbody>
</table>