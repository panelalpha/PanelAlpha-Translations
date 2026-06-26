<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>הגדרת DNS לדומיין עבור <strong>{{ $zone_name }}</strong> נכשל.</p>
<p>הודעה: {{ $exception_message }}</p>
<p>פרטי אזור ה-DNS:</p>
<table>
    <tbody>
    <tr>
        <th>אזור DNS</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th>שירות</th>
        <td># {{ $service_id }}{{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>שרת DNS</th>
        <td># {{ $dns_server_id }}{{ $dns_server_name }}</td>
    </tr>
    </tbody>
</table>
