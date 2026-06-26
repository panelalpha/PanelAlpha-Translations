<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>יצירת דומיין האימייל <strong>{{ $domain }}</strong> נכשל.</p>
<p>הודעה: {{ $exception_message }}</p>

<p>פרטי דומיין האימייל:</p>
<table>
    <tbody>
    <tr>
        <th>דומיין אימייל</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>שירות</th>
        <td><strong>#{{ $service_id }}</strong> {{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>שרת אימייל</th>
        <td><strong>#{{ $email_server_id }}</strong> {{ $email_server_name }}</td>
    </tr>
    </tbody>
</table>
