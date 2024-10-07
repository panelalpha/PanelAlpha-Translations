<p>Sehr geehrte/r <strong>{{ $client_first_name }}</strong>,</p>
<p>Das Plugin <strong>{{ $plugin_title }}</strong> wurde auf die Version <strong>{{ $plugin_version }}</strong> aktualisiert.
</p>
<p>Instanzdetails:</p>
<table>
    <tbody>
    <tr>
        <th>Standortname</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domäne</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
