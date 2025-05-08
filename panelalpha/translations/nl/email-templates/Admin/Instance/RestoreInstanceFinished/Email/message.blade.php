<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De instantie <strong><a href="{{ $admin_url }}/instances/{ $instance_id }}"
                           target="_blank">{{ $instance_name }}</a></strong> van <strong>{{ $backup_name }}</strong>
    is succesvol hersteld.
</p>
<p>Backup details:</p>
<table>
    <tbody>
    <tr>
        <th>Naam</th>
        <td>{{ $backup_name }}</td>
    </tr>
    <tr>
        <th>Type</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Grootte</th>
        <td>{{ $backup_size }} MB</td>
    </tr>
    <tr>
        <th>Versie</th>
        <td>{{ $backup_version }}</td>
    </tr>
    <tr>
        <th>Datum</th>
        <td>{{ $backup_date }}</td>
    </tr>
    </tbody>
</table>
<p>Instance details:</p>
<table>
    <tbody>
    <tr>
        <th>Site naam</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domein</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>

