<p>שלום <strong>{{ $client_first_name }}</strong>,</p>
<p>יצירת גיבוי אוטומטי עבור המופע <strong>{{ $instance_name }}</strong> נכשל.</p>
<p>הודעה: {{ $exception_message }}</p>
<p>פרטי הגיבוי:</p>
<table>
    <tbody>
    <tr>
        <th>שם</th>
        <td>{{ $backup_name  }}</td>
    </tr>
    <tr>
        <th>סוג</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>גודל</th>
        <td>{{ $backup_size  }} MB</td>
    </tr>
    <tr>
        <th>גרסה</th>
        <td>{{ $backup_version  }}</td>
    </tr>
    <tr>
        <th>תאריך</th>
        <td>{{ $backup_date  }}</td>
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
