<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>L'instance <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}" target="_blank">{{ $instance_name }}</a></strong> par <strong><a href="{{ $admin_url }}/users/{{ $client_id }}">{{ $client_name }}</a></strong> a été installée avec succès.</p>
<p>Détails de l'instance:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domaine</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">URL</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
<p>Détails de l'utilisateur:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Nom</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Société</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">E-mail</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>