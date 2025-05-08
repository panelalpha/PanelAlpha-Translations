<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Die Wiederherstellungsinstanz <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                   target="_blank">{{ $instance_name }}</a></strong> von
    <strong>{{ $backup_name }}</strong> Sicherung fehlgeschlagen.</p>
<p>Fehlernachricht: {{ $exception_message }}</p>
<p>Details zur Sicherung:</p>
<table>
    <tbody>
    <tr>
        <th>Name</th>
        <td>{{ $backup_name }}</td>
    </tr>
    <tr>
        <th>Typ</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Größe</th>
        <td>{{ $backup_size }} MB</td>
    </tr>
    <tr>
        <th>Version</th>
        <td>{{ $backup_version }}</td>
    </tr>
    <tr>
        <th>Datum</th>
        <td>{{ $backup_date }}</td>
    </tr>
    </tbody>
</table>
<p>Instanzdetails:</p>
<table>
    <tbody>
    <tr>
        <th>Seitenname</th>
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

