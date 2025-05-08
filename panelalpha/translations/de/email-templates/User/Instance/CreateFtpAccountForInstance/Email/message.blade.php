<p>Sehr geehrte/r <strong>{{ $client_first_name }}</strong>,</p>
<p>Ihr FTP/SFTP-Konto wurde für die Instanz <strong>{{ $instance_name }}</strong> erstellt.</p>
<p>Hier sind deine Zugangsdaten:</p>
<table>
    <tbody>
    <tr>
        <th>Benutzername</th>
        <td>{{ $Benutzername }}</td>
    </tr>
    <tr>
        <th>Passwort</th>
        <td>{{ $Passwort }}</td>
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
