<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>La spinta a vivere da <strong>un'altra parte del mondo{{ $instance_name }}</strong> fallito.</p>
<p>Messaggio:{{ $exception_message }}</p>
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
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>.
    </tbody>
</tab>.
