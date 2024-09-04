</p> <p>Cher <strong>Chez nous</strong>{{ $client_first_name }}</strong>,</p> <p>
</p> <p>La mise en scène pour <strong>{{ $instance_name }}</strong> a été installée avec succès.
</p> <p>Détails de l'instance:</p> <p>Les détails de l'instance
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
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</tableau>
