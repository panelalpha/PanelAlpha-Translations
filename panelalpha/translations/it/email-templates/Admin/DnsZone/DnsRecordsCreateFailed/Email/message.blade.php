<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>I seguenti record DNS per la zona <strong>{{ $zone_name }}</strong>non può essere creato:</p>
<tabella>
    <tbody>
    <tr>
        <th style="text-align: left">DNS Record</th>
        <th style="text-align: left">Messaggio</th>
    </tr>.
    @foreach($dns_records as $dns_record)
        <tr>
            <td>{{ $dns_record['name'] }} {{ $dns_record['type'] }} {{ $dns_record['rdata'] }}</td>.
            <td>{{ $dns_record['message'] }}</td>.
        </tr>.
    @endforeach
    </tbody>
</tab>.
<p>Dettagli della zona DNS:</p>
<tabella>
    <tbody>
    <tr>
        <th style="text-align: left">Zona</th>
        <td>{{ $zone_name }}</td>.
    </tr>.
    <tr>
        <th style="text-align: left">Servizio</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>.
    </tr>.
    @if($dns_server_id)
        <tr>
            <th style="text-align: left">Server DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>.
        </tr>.
    @endif
    </tbody>
</tab>.
