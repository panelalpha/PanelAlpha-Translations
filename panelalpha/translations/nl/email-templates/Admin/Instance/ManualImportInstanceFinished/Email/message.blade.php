<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The manual import of the <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                       target="_blank">{{ $instance_name }}</a></strong> instance has been completed.
</p>
<p>Import Details:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Import</th>
        <td>#{{ $import_id }} {{ $import_domain }}</td>
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

