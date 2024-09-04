<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>Dominio e-mail <strong>{{ $domain }}</strong> esiste già sul server e-mail.</p>

<p>Dettagli del dominio e-mail:</p>
<tabella>
    <tbody>
    <tr>
        <th>Dominio e-mail</th>
        <td>{{ $domain }}</td>.
    </tr>.
    <tr>
        <th>Servizio</th>
        <td><strong>#{{ $service_id }}</strong> {{ $service_main_domain }}</td>.
    </tr>.
    <tr>
        <th>Server di posta elettronica</th>
        <td><strong>#{{ $email_server_id }}</strong> {{ $email_server_name }}</td>.
    </tr>.
    </tbody>
</tab>.
