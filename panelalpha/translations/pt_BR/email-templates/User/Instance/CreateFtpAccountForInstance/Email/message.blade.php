<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>Sua conta FTP/SFTP foi criada para a instância <strong>{{ $instance_name }}</strong>.</p>
<p>Aqui estão seus detalhes de acesso:</p>
<table>
    <tbody>
    <tr>
        <th>Nome de usuário</th>
        <td>{{ $username }}</td>
    </tr>
    <tr>
        <th>Senha</th>
        <td>{{ $password }}</td>
    </tr>
    <tr>
        <th>Host</th>
        <td>{{ $host }}</td>
    </tr>
    <tr>
        <th>Port</th>
        <td>{{ $port }}</td>
    </tr>
    </tbody>
</table>
<p>Detalhes da instância:</p>
<table>
    <tbody>
    <tr>
        <th>Nome do site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domínio</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
