<p>שלום <strong>{{ $client_first_name }}</strong>,</p>
<p>חשבון ה-FTP/SFTP שלך נוצר עבור המופע <strong>{{ $instance_name }}</strong> מופע.</p>
<p>אלו פרטי הגישה שלך:</p>
<table>
    <tbody>
    <tr>
        <th>שם משתמש</th>
        <td>{{ $username }}</td>
    </tr>
    <tr>
        <th>סיסמה</th>
        <td>{{ $password }}</td>
    </tr>
    <tr>
        <th>מארח</th>
        <td>{{ $host }}</td>
    </tr>
    <tr>
        <th>פורט</th>
        <td>{{ $port }}</td>
    </tr>
    </tbody>
</table>
<p>פרטי המופע:</p>
<table>
    <tbody>
    <tr>
        <th>שם האתר</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>דומיין</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>כתובת URL</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
