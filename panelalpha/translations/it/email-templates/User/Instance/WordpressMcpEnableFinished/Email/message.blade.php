<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>WordPress MCP è stato abilitato su <strong>{{ $instance_name }}</strong>.</p>
<p>Dettagli dell'istanza:</p>
<table>
    <tbody>
    <tr>
        <th>Nome del sito</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Dominio</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th>Url</th>
        <td><a href="{{ $instance_url }}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>