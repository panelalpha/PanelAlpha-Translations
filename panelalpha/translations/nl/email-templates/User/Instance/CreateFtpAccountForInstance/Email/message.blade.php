<p>Beste <strong>{{ $client_first_name }}</strong>,</p>
<p>Uw FTP/SFTP-account is aangemaakt voor de <strong>{ $instance_name }}</strong> instantie.</p>
<p>Hier zijn uw toegangsgegevens:</p>
<table>
    <tbody>
    <tr>
        <th>Gebruikersnaam</th>
        <td>{{ $username }}</td>
    </tr>
    <tr>
        <th>Wachtwoord</th>
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
