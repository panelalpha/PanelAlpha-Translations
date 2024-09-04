<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>La creación Email Dominio <strong>{{ $domain }}</strong> falló.</p>
<p>Mensaje:{{ $exception_message }}</p>

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
