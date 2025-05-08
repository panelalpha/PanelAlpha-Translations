<p><strong>{ $client_first_name }}</strong>,</p> <p>Votre compte FTP/SFTP a été créé pour l'instance <strong>{{ $instance_name }}</strong>.
<p>Votre compte FTP/SFTP a été créé pour l'instance <strong>{{ $instance_name }}</strong>.</p>
</p> <p>Voici les détails de votre accès:</p> <p>Tableaux
<table>
    <tbody>
    <tr>
        <th>Nom d'utilisateur</th>
        <td>{{ $username }}</td>
    </tr>
    <tr>
        <th>Mot de passe</th>
        <td>{{ $password }}</td>
    </tr>
    <tr>
        <th>Hôte</th>
        <td>{{ $host }}</td>
    </tr>
    <tr>
        <th>Port</th>
        <td>{{ $port }}</td>
    </tr>
    </tbody>
</table>
<p>Détails de l'instance:</p>
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
