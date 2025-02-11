<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The following DNS records for zone <strong>{{ $zone_name }}</strong> cannot be created:</p>
<table>
    <tbody>
    <tr>
        <th style="text-align: left">DNS Record</th>
        <th style="text-align: left">Message</th>
    </tr>
    @foreach($dns_records as $dns_record)
        <tr>
            <td>{{ $dns_record['name'] }} {{ $dns_record['type'] }} {{ $dns_record['rdata'] }}</td>
            <td> {{ $dns_record['message'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<p>DNS Zone details:</p>
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
            <th style="text-align: left">DNS Server</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>
