<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Die Installation von <strong><a href="{{ $admin_url }}/plugins-and-themes">{{ $package_name }}</a></strong> im
    <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
               target="_blank">{{ $instance_name }}</a></strong> Instanz ist fehlgeschlagen.</p>
<p>Fehlernachricht:{{ $exception_message }}</p>
<p>Instanzdetails:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Seitenname</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domain</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
