<p>Sehr geehrte/r <strong>{{ $client_first_name }}</strong>,</p>
<p>Die Aktualisierung des <strong>{{ $theme_title }}</strong> Themes ist fehlgeschlagen.</p>
<p>Fehler:{{ $exception_message }}</p>
<p>Instanzdetails:</p>
<table>
    <tbody>
    <tr>
        <th>Name</th>
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
