<p>Sehr geehrte/r <strong>{{ $client_first_name }}</strong>,</p>
<p>Der Push zum Staging von <strong>{{ $instance_name }}</strong> wurde erfolgreich abgeschlossen.</p>
<p>Instanzdetails:</p>
<table>
    <tbody>
    <tr>
        <th>Site Name</th>
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
