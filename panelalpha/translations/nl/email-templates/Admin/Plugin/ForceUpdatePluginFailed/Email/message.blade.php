<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The forcible update of <strong>{{ $plugin_title }}</strong> plugin in <strong><a
            href="{{ $admin_url }}/instances/{{ $instance_id }}"
            target="_blank">{{ $instance_name }}</a></strong> instance
    failed.</p>
<p>Message: {{ $exception_message }}</p>
<p>Instance details:</p>
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
