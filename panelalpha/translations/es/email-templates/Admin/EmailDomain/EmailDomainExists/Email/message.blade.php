<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>Dominio de correo electrónico <strong>{{ $domain }}</strong> ya existe en el Servidor de Correo Electrónico.</p>

<p>Datos del dominio de correo electrónico:</p>
<table>
    <cuerpo>
    <tr>
        <th>Dominio de correo electrónico</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Servicio</th>
        <td><strong>#{{ $service_id }}</strong> {{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>Servidor de correo electrónico</th>
        <td><strong>#{{ $email_server_id }}</strong> {{ $email_server_name }}</td>
    </tr>
    </tbody>
</table>
