<p>Caro <strong>{{$client_first_name }}</strong>,</p>
<p>Il tuo account FTP/SFTP è stato creato per l'istanza <strong>{{$instance_name }}</strong>.</p>
<p>Ecco i suoi dettagli di accesso:</p>
<table>
    <tbody>
    <tr>
        <th>Nome utente</th>
        <td>{{$username }}</td>
    </tr>
    <tr>
        <th>Password</th>
        <td>{{ $password }}</td>
    </tr>
    <tr>
        <th>Host</th>
        <td>{{ $host }}</td>
    </tr>
    <tr>
        <th>Porta</th>
        <td>{{ $port }}</td>
    </tr>
    </tbody>
</table>
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
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{$instance_url }}</a></td>
    </tr>
    </tbody>
</table>
