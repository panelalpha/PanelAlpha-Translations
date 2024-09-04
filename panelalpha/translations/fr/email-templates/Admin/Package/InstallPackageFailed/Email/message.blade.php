</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
<p>L'installation de <strong><a href="{{ $admin_url }}/plugins-and-themes">{{ $package_name }}</a></strong> paquet en
    <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
               target="_blank">{{ $instance_name }}</a></strong> instance failed.</p>
<p>Message :{{ $exception_message }}</p>
</p> <p>Détails de l'instance:</p> <p>Les détails de l'instance
<b>Tableau>
    <tbody>
    <tr>
        <th style="width : 33% ;">Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Domaine</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</tableau>
