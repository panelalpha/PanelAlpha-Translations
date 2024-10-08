</p> <p>Cher <strong>Chez nous</strong>{{ $client_first_name }}</strong>,</p> <p>
</p> <p>La création d'une sauvegarde automatique pour l'instance <strong>Compte rendu</strong>.{{ $instance_name }}</strong> a échoué.</p>
<p>Message:{{ $exception_message }}</p>
</p> <p>Détails de la sauvegarde:</p> <p>Les détails de la sauvegarde sont les suivants
<b>Tableau>
    <tbody>
    <tr>
        <th>Nom</th>
        <td>{{ $backup_name  }}</td>
    </tr>
    <tr>
        <th>Type</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Taille</th>
        <td>{{ $backup_size  }} MB</td>
    </tr>
    <tr>
        <th>Version</th>
        <td>{{ $backup_version  }}</td>
    </tr>
    <tr>
        <th>Date</th>
        <td>{{ $backup_date  }}</td>
    </tr>
    </tbody>
</tableau>
</p> <p>Détails de l'instance:</p> <p>Les détails de l'instance sont les suivants
<b>Tableau>
    <tbody>
    <tr>
        <th>Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domaine</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>URL</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</tableau>
