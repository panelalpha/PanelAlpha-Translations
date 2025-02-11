<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>There seems to be an issue with plan <strong><a href="{{ $admin_url }}/plans/{{ $plan_id }}"
                                                   target="_blank">{{ $plan_name }}</a></strong>. The error message is
    as follows:</p>
<p>Message: {{ $exception_message }}</p>
<p>Plan details:</p>
<table>
    <tbody>
    <tr>
        <th>Plan</th>
        <td>#{{ $plan_id }} {{ $plan_name }}</td>
    </tr>

    <tr>
        <th>Server</th>
        @if($server_id)
            <td>#{{ $server_id }} {{ $server_name }}</td>
        @else
            <td>{{ $plan_server_type }}</td>
        @endif
    </tr>
    @isset($dns_server_id)
        <tr>
            <th>DNS Server</th>
            <td>#{{ $dns_server_id  }} {{ $dns_server_name  }} @if($dns_server_internal)
                    (Internal)
                @endif</td>
        </tr>
    @endisset
    @isset($email_server_id)
        <tr>
            <th>Email Server</th>
            <td>#{{ $email_server_id  }} {{ $email_server_name }} @if($email_server_internal)
                    (Internal)
                @endif</td>
        </tr>
    @endisset
    </tbody>
</table>
