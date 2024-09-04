<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>Domínio de e-mail <strong>{{ $domain }}</strong> já existe no servidor de e-mail.</p>

<p>Detalhes do domínio de e-mail:</p>
<table>
    <tbody>
    <tr>
        <th>Domínio de e-mail</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Serviço</th>
        <td><strong>#{{ $service_id }}</strong> {{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>Servidor de e-mail</th>
        <td><strong>#{{ $email_server_id }}</strong> {{ $email_server_name }}</td>
    </tr>
    </tbody>
</table>
