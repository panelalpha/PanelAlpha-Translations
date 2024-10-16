<p><strong>{{ $admin_name }}</strong>,</p>
<p>L’installation du paquet <strong><a href="{{ $admin_url }}/plugins-and-themes">{{ $package_name }}</a></strong> dans <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}" target="_blank">{{ $instance_name }}</a></strong> a été correctement effectuée.</p>
<p>Message : {{ $exception_message }}</p>
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
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
