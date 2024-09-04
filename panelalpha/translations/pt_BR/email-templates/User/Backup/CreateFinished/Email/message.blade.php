<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>O <strong>{{ $backup_name }}</strong> o backup foi criado com sucesso.</p>
<p>Detalhes do backup:</p>
<table>
    <tbody>
    <tr>
        <th>Nome</th>
        <td>{{ $backup_name  }}</td>
    </tr>
    <tr>
        <th>Tipo</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Tamanho</th>
        <td>{{ $backup_size  }} MB</td>
    </tr>
    <tr>
        <th>Versão</th>
        <td>{{ $backup_version  }}</td>
    </tr>
    <tr>
        <th>Data</th>
        <td>{{ $backup_date  }}</td>
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
