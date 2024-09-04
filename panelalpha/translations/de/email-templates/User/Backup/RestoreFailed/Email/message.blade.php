<p>Liebe <strong>{{ $client_first_name }}</strong>,</p>
<p>Die Wiederherstellung des <strong>{{ $backup_name }}</strong> Sicherung fehlgeschlagen.</p>
<p>Mitteilung:{{ $exception_message }}</p>
<p>Details zur Datensicherung:</p>
<table>
    <tbody>
    <tr>
        <th>Name</th>
        <td>{{ $backup_name  }}</td>
    </tr>
    <tr>
        <th>Typ</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Größe</th>
        <td>{{ $backup_size  }} MB</td>
    </tr>
    <tr>
        <th>Version</th>
        <td>{{ $backup_version  }}</td>
    </tr>
    <tr>
        <th>Datum</th>
        <td>{{ $backup_date  }}</td>
    </tr>
    </tbody>
</table>
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
