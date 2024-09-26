<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>Le thème <strong>{{ $theme_title }}</strong> dans l'instance <strong><a
            href="{{ $admin_url }}/instances/{{ $instance_id }}"
            target="_blank">{{ $instance_name }}</a></strong> a été mis à jour de force.</p>
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