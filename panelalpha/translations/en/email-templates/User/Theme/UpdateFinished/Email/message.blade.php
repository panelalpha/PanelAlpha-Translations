<p>Dear <strong>{{ $client_first_name }}</strong>,</p>
<p>The <strong>{{ $theme_title }}</strong> theme has been updated to version <strong>{{ $theme_version }}</strong>.</p>
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
