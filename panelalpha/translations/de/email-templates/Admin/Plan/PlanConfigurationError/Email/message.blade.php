<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Es scheint ein Problem mit dem Plan <strong><a href="{{ $admin_url }}/pläne/{{ $plan_id }}"
                                                   target="_blank">{{ $plan_name }}</a></strong>. Die Fehlermeldung lautet
    wie folgt:</p>
<p>Fehlernachricht: {{ $exception_message }}</p>
<p>Plandetails:</p>
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
            <th>DNS-Server</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }} @if($dns_server_internal)
                    (Intern)
                @endif</td>
        </tr>
    @endisset
    @isset($email_server_id)
        <tr>
            <th>E-Mail-Server</th>
            <td>#{{ $email_server_id }} {{ $email_server_name }} @if($email_server_internal)
                    (Intern)
                @endif</td>
        </tr>
    @endisset
    </tbody>
</table>
