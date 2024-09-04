<p>Liebe <strong>{{ $client_first_name }}</strong>,</p>
<p>Die <strong>{{ $plugin_title }}</strong> plugin has been updated to version <strong>{{ $plugin_version }}</strong>.
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
