<p><strong>{{ $client_first_name }}</strong>,</p>
<p>La mise à jour du thème <strong>{{ $theme_title }}</strong> a été correctement effectuée vers la version <strong>{{ $theme_version }}</strong>.</p>
</p>
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
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
