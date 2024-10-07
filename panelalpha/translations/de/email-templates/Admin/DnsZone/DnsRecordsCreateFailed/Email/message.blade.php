<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Die folgenden DNS-Einträge für die Zone <strong>{{ $zone_name }}</strong> konnten nicht erstellt werden:</p>
<table>
    <tbody>
    <tr>
        <th style="text-align: left">DNS-Eintrag</th>
        <th style="text-align: left">Fehlernachricht</th>
    </tr>
    @foreach($dns_records as $dns_record)
        <tr>
            <td>{{ $dns_record['name'] }} {{ $dns_record['type'] }} {{ $dns_record['rdata'] }}</td>
            <td>{{ $dns_record['message'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<p>Details zur DNS-Zone:</p>
<table>
    <tbody>
    <tr>
        <th style="text-align: left">Zone</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th style="text-align: left">Service</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th style="text-align: left">DNS-Server</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>
