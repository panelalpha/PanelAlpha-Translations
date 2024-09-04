<p>Cher <strong>{{ $client_first_name }}</strong>,</p>
<p>L'installation du <strong>{{ $plugin_title }}</strong> a échoué.</p>
<p>Message : {{ $exception_message }}</p>
<p>Détails de l'instance :</p>
<table>
    <tbody>
    <tr>
        <th>Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domain</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th>URL</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>