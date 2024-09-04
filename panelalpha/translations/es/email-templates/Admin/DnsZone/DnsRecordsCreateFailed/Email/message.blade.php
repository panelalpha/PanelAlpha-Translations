<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>Los siguientes registros DNS para la zona <strong>{{ $zone_name }}</strong> no se puede crear:</p>
<table>
    <cuerpo>
    <tr>
        <th style="text-align: left">Registro DNS</th>
        <th style="text-align: left">Mensaje</th>
    </tr>
    @foreach($dns_records as $dns_record)
        <tr>    
            <td>{{ $dns_record['name'] }} {{ $dns_record['type'] }} {{ $dns_record['rdata'] }}</td>
            <td>{{ $dns_record['message'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<p>Detalles de la zona DNS:</p>
<table>
    <cuerpo>
    <tr>
        <th style="text-align: left">Zona</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th style="text-align: left">Servicio</th>
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
