<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The restore instance <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                   target="_blank">{{ $instance_name }}</a></strong> from
    <strong>{{ $backup_name }}</strong> backup failed.</p>
<p>Message: {{ $exception_message }}</p>
<p>Backup details:</p>
<table>
    <tbody>
    <tr>
        <th>Name</th>
        <td>{{ $backup_name  }}</td>
    </tr>
    <tr>
        <th>Type</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Size</th>
        <td>{{ $backup_size  }} MB</td>
    </tr>
    <tr>
        <th>Version</th>
        <td>{{ $backup_version  }}</td>
    </tr>
    <tr>
        <th>Date</th>
        <td>{{ $backup_date  }}</td>
    </tr>
    </tbody>
</table>
<p>Instance details:</p>
<table>
    <tbody>
    <tr>
        <th>Site Name</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domain</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>

