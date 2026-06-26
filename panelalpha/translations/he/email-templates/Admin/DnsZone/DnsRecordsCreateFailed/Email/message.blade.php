<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>לא ניתן ליצור את רשומות ה-DNS הבאות עבור אזור <strong>{{ $zone_name }}</strong> :</p>
<table>
    <tbody>
    <tr>
        <th style="text-align: left">רשומת DNS</th>
        <th style="text-align: left">הודעה</th>
    </tr>
    @foreach($dns_records as $dns_record)
        <tr>
            <td>{{ $dns_record['name'] }} {{ $dns_record['type'] }} {{ $dns_record['rdata'] }}</td>
            <td> {{ $dns_record['message'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<p>פרטי אזור ה-DNS:</p>
<table>
    <tbody>
    <tr>
        <th style="text-align: left">אזור</th>
        <td>{{ $zone_name }}</td>
    </tr>
    <tr>
        <th style="text-align: left">שירות</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th style="text-align: left">שרת DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>
