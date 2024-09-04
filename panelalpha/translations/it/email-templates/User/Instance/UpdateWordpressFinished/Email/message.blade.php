<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>La <strong>società di consulenza{{ $instance_name }}</strong> instance updated to WordPress version <strong>{{ $instance_version }}</strong>.</p>
<p>Dettagli dell'istanza:</p>
<tabella>
    <tbody>
    <tr>
        <th>Nome del sito</th>
        <td>{{ $instance_name }}</td>.
    </tr>.
    <tr>
        <th>Dominio</th>
        <td>{{ $instance_domain }}</td>.
    </tr>.
    <tr>
        <th>Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>.
    </tbody>
</tab>.