<p>Sehr geehrte/r <strong>{{ $client_first_name }}</strong>,</p>
<p>Die Instanz <strong>{{ $instance_name }}</strong> wurde auf die WordPress-Version <strong>{{ $instance_version }}</strong> aktualisiert.</p>
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
    <tr>
        <th>Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
