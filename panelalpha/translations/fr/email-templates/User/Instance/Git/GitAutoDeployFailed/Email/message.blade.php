<p>Cher <strong>{{ $client_first_name }}</strong>,</p>
<p>Le d&eacute;ploiement automatique pour <strong>{{ $instance_name }}</strong> a &eacute;chou&eacute;.</p>
<p>Message&nbsp;: {{ $exception_message }}</p>
<p>D&eacute;tails de l'instance&nbsp;:</p>
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
    <th>URL</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
<p>Ouvrez les param&egrave;tres Git dans PanelAlpha pour r&eacute;soudre le probl&egrave;me.</p>
