<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>ה <strong><a href="{{ $admin_url }}/plugins-and-themes">{{ $package_name }}</a></strong> הותקנה בהצלחה במופע <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}" target="_blank">{{ $instance_name }}</a></strong>מופע.</p>
<p>פרטי המופע:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">שם האתר</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">דומיין</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">כתובת URL</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
