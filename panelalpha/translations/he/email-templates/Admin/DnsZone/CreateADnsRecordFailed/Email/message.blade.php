<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>הגדרת DNS לתת-דומיין עבור <strong>{{ $domain }}</strong> נכשל.</p>
<p>הודעה: {{ $exception_message }}</p>
<p>פרטי אזור ה-DNS:</p>
<table>
    <tbody>
    <tr>
        <th>דומיין</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>שירות</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th>שרת DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>
