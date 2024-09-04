<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>L'installazione dell'<strong>autoreferenziario <strong>è stata effettuata in modo da poterlo utilizzare come un'alternativa.{{ $plugin_title }}</strong> fallito. </p>
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
