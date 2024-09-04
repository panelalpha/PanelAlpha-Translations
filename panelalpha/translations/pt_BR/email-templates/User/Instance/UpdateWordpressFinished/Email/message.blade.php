<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>O <strong>{{ $instance_name }}</strong> instance updated to WordPress version <strong>{{ $instance_version }}</strong>.</p>
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
    <tr>
        <th>Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
