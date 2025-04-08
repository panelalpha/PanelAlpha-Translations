<p>Dear <strong>{{ $client_first_name }}</strong>,</p>
<p>Your FTP/SFTP account has been created for the <strong>{{ $instance_name }}</strong> instance.</p>
<p>Here are your access details:</p>
<table>
    <tbody>
    <tr>
        <th>Username</th>
        <td>{{ $username }}</td>
    </tr>
    <tr>
        <th>Password</th>
        <td>{{ $password }}</td>
    </tr>
    <tr>
        <th>Host</th>
        <td>{{ $host }}</td>
    </tr>
    <tr>
        <th>Port</th>
        <td>{{ $port }}</td>
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
