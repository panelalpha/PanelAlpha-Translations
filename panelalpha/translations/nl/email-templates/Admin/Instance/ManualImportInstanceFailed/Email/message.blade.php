<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The manual import of the <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                      target="_blank">{{ $instance_name }}</a></strong> instance failed.</p>
<p>Message: {{ $exception_message }}</p>
<p>Import Details:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Import</th>
        <td>#{{ $import_id }} {{ $import_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Status</th>
        <td>{{ $import_status }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Message</th>
        <td>{{ $import_message }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Current Step</th>
        <td>{{ $import_current_step  }}</td>
    </tr>
    </tbody>
</table>
<p>Instance Details:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Site Name</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domain</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>

