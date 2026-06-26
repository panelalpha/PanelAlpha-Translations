<p>Sehr geehrte/r <strong>{{ $client_first_name }}</strong>,</p>
<p>Auto-Deploy für <strong>{{ $instance_name }}</strong> ist fehlgeschlagen.</p>
<p>Mitteilung: {{ $exception_message }}</p>
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
<p>Öffnen Sie die Git-Einstellungen in PanelAlpha, um das Problem zu beheben.</p>