<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>Os seguintes registros DNS para a zona <strong>{{ $zone_name }}</strong> não pode ser criado:</p>
<table>
    <tbody>
    <tr>
        <th style="text-align: left">Registro DNS</th>
        <th style="text-align: left">Mensagem</th>
    </tr>
    @foreach($dns_records as $dns_record)
        <tr>
            <td>{{ $dns_record['name'] }} {{ $dns_record['type'] }} {{ $dns_record['rdata'] }}</td>
            <td>{{ $dns_record['message'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<p>Detalhes da zona DNS:</p>
<table>
    <tbody>
    <tr>
        <th style="text-align: left">Zona</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th style="text-align: left">Serviço</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th style="text-align: left">Servidor DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>
