<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>נראה שיש בעיה עם חשבון האירוח    <strong>#{{ $server_account_id  }} {{ $server_account_main_domain  }}</strong>. הודעת השגיאה היא כדלקמן:</p>
<p>הודעה: {{ $exception_message }}</p>
<p>פרטי חשבון האירוח:</p>
<table>
    <tbody>
    <tr>
        <th>שרת</th>
        <td>#{{ $server_id }} {{ $server_name  }}</td>
    </tr>
    <tr>
        <th>חשבון אירוח</th>
        <td>#{{ $server_account_id }} {{ $server_account_main_domain }}</td>
    </tr>
    <tr>
        <th>כתובת IP</th>
        <td>{{ $server_account_ip_address  }}</td>
    </tr>
    </tbody>
</table>
