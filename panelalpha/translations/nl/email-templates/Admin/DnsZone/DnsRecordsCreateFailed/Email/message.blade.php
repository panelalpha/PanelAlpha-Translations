<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De volgende DNS-records voor zone <strong>{{ $zone_name }}</strong> kunnen niet worden aangemaakt:</p>
<table>
    <tbody>
    <tr>
        <th style="text-align: left">DNS Record</th>
        <th style="text-align: left">Bericht</th>
    </tr>
    @foreach($dns_records as $dns_record)
        <tr>
            <td>{{ $dns_record['name'] }} {{ $dns_record['type'] }} {{ $dns_record['rdata'] }}</td>
            <td> {{ $dns_record['message'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<p>Details van de DNS-zone:</p>
<table>
    <tbody>
    <tr>
        <th style="text-align: left">Zone</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th style="text-align: left">Dienst</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th style="text-align: left">DNS-server</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>