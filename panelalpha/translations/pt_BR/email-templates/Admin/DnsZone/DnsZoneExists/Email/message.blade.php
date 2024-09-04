<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>Zona DNS para <strong>{{ $zone_name }}</strong> já existe no servidor DNS.</p>
<p>Detalhes da zona DNS:</p>
<table>
    <tbody>
    <tr>
        <th>Zona DNS</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th>Serviço</th>
        <td>#{{ $service_id }}{{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>Servidor DNS</th>
        <td>#{{ $dns_server_id }}{{ $dns_server_name }}</td>
    </tr>
    </tbody>
</table>
