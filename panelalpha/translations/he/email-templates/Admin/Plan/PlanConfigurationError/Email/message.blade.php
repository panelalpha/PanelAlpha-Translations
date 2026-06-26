<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>נראה שיש בעיה עם התוכנית <strong><a href="{{ $admin_url }}/plans/{{ $plan_id }}"
                                                   target="_blank">{{ $plan_name }}</a></strong>. The error message is
    as follows:</p>
<p>הודעה: {{ $exception_message }}</p>
<p>פרטי התוכנית:</p>
<table>
    <tbody>
    <tr>
        <th>תוכנית</th>
        <td>#{{ $plan_id }} {{ $plan_name }}</td>
    </tr>

    <tr>
        <th>שרת</th>
        @if($server_id)
            <td>#{{ $server_id }} {{ $server_name }}</td>
        @else
            <td>{{ $plan_server_type }}</td>
        @endif
    </tr>
    @isset($dns_server_id)
        <tr>
            <th>שרת DNS</th>
            <td>#{{ $dns_server_id  }} {{ $dns_server_name  }} @if($dns_server_internal)(פנימי)                @endif</td>
        </tr>
    @endisset
    @isset($email_server_id)
        <tr>
            <th>שרת אימייל</th>
            <td>#{{ $email_server_id  }} {{ $email_server_name }} @if($email_server_internal)(פנימי)                @endif</td>
        </tr>
    @endisset
    </tbody>
</table>
