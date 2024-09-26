<p>Cher <strong>{{ $client_first_name }}</strong>,</p>
<p>L'installation de l'instance de mise en scène <strong>{{ $instance_name }}</strong> a été réalisée avec succès.</p>
<p>Détails de l'instance:</p>
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
        <th>URL</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>