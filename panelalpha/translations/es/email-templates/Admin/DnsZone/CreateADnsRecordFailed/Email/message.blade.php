<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>La creación DNS Record A para <strong>{{ $domain }}</strong> falló.</p>
<p>Mensaje:{{ $exception_message }}</p>
<p>Detalles de la zona DNS:</p>
<table>
    <cuerpo>
    <tr>
        <th>Dominio</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Servicio</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th>Servidor DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>
