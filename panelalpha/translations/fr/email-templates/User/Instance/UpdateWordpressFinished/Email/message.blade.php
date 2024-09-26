<p>Cher <strong>{{ $client_first_name }}</strong>,</p>
<p>L'instance <strong>{{ $instance_name }}</strong> a été mise à jour vers la version WordPress <strong>{{ $instance_version }}</strong>.</p>
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