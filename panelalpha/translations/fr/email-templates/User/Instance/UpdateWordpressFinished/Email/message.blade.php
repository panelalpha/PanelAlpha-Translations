<p><strong>{{ $client_first_name }}</strong>,</p>
<p>La mise à jour de <strong>{{ $instance_name }}</strong> vers <strong>WordPress {{ $instance_version }}</strong> a été correctement effectuée.</p>
<p>Détails de l’instance :</p>
<table>
    <tbody>
    <tr>
        <th>Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domaine</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th>Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
