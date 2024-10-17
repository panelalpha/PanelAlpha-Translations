<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>Het aanmaken van de DNS-zone voor het domein <strong>{{ $zone_name }}</strong> is mislukt.</p>
<p>Bericht: {{ $exception_message }}</p>
<p>Details van de DNS-zone:</p>
<table>
    <tbody>
    <tr>
        <th>DNS-zone</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th>Dienst</th>
        <td># {{ $service_id }}{{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>DNS-server</th>
        <td># {{ $dns_server_id }}{{ $dns_server_name }}</td>
    </tr>
    </tbody>
</table>