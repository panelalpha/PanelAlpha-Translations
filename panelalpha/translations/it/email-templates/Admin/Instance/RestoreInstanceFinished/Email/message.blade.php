<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>L'istanza <strong><a href="{{ $admin_url }}/instances/{ $instance_id }}"
                           target="_blank">{{$instance_name }}</a></strong> da <strong>{{$backup_name }}</strong>
    è stato ripristinato con successo.
</p>
<p>Dettagli del backup:</p>
<table>
    <tbody>
    <tr>
        <th>Nome</th>
        <td>{{$backup_name }}</td>
    </tr>
    <tr>
        <th>Tipo</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Dimensione</th>
        <td>{{$backup_size }} MB</td>
    </tr>
    <tr>
        <th>Versione</th>
        <td>{{ $backup_version }}</td>
    </tr>
    <tr>
        <th>Data</th>
        <td>{{ $backup_date }}</td>
    </tr>
    </tbody>
</table>
<p>Dettagli dell'istanza:</p>
<tab>
    <tbody>
    <tr>
        <th>Nome del sito</th>
        <td>{{ $nome_istanza }}</td>
    </tr>
    <tr>
        <th>Dominio</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{$instance_url }}</a></td>
    </tr>
    </tbody>
</table>

