<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>Het aanmaken van DNS Record A voor <strong>{{ $domain }}</strong> is mislukt.</p>
<p>Bericht: {{ $exception_message }}</p>
<p>Details van de DNS-zone:</p>
<table>
    <tbody>
    <tr>
        <th>Domein</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Dienst</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th>DNS-server</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>