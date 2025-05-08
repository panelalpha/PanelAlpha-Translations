</p> <p><strong>{{ $client_first_name }}</strong>,</p> <p>Le push vers staging de <strong>{ $instance_name }}</strong> a échoué.
<p>Le push vers staging de <strong>{{ $instance_name }}</strong> a échoué.</p>
<p>Message : {{ $exception_message }}</p> <p>Message : {{ $exception_message }}
</p> <p>Détails de l'instance:</p> <p>Tableau
<table>
    <tbody>
    <tr>
        <th>Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domaine</th>
        <td>{{ $instance_domaine }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
