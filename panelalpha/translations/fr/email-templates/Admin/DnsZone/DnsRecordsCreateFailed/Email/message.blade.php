</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
<p>Les enregistrements DNS suivants pour la zone <strong>{{ $zone_name }}</strong> ne peut pas être créé:</p> <p class="rtejustify">
<b>Tableau>
    <tbody>
    <tr>
        <th style="text-align : left">Enregistrement DNS</th>
        <th style="text-align : left">Message</th>
    </tr>
    @foreach($dns_records as $dns_record)
        <tr>
            <td>{{ $dns_record['name'] }} {{ $dns_record['type'] }} {{ $dns_record['rdata'] }}</td>
            <td>{{ $dns_record['message'] }}</td>
        </tr>
    @endforeach
    </tbody>
</tableau>
</p> <p>Détails de la zone DNS:</p> <p>Les détails de la zone DNS
<b>Tableau>
    <tbody>
    <tr>
        <th style="text-align : left">Zone</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th style="text-align : left">Service</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th style="text-align : left">Serveur DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</tableau>
