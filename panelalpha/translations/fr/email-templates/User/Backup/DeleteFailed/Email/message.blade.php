<p>Cher <strong>{{ $client_first_name }}</strong>,</p>
<p>La suppression de la sauvegarde <strong>{{ $backup_name }}</strong> a échoué.</p>
<p>Message: {{ $exception_message }}</p>
<p>Détails de la sauvegarde:</p>
<table>
    <tbody>
    <tr>
        <th>Nom</th>
        <td>{{ $backup_name }}</td>
    </tr>
    <tr>
        <th>Type</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Taille</th>
        <td>{{ $backup_size }} MB</td>
    </tr>
    <tr>
        <th>Version</th>
        <td>{{ $backup_version }}</td>
    </tr>
    <tr>
        <th>Date</th>
        <td>{{ $backup_date }}</td>
    </tr>
    </tbody>
</table>
<p>Détails de l'instance :</p>
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