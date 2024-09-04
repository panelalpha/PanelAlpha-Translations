<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>Zona DNS para <strong>{{ $zone_name }}</strong> dominio ya existe en el servidor DNS.</p> <p>
<p>Detalles de la zona DNS:</p>
<table>
    <cuerpo>
    <tr>
        <th>Zona DNS</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th>Servicio</th>
        <td>#{{ $service_id }}{{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>Servidor DNS</th>
        <td>#{{ $dns_server_id }}{{ $dns_server_name }}</td>
    </tr>
    </tbody>
</table>
