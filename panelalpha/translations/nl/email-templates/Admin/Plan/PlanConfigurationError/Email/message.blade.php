<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>Er lijkt een probleem te zijn met plan <strong><a href="{{ $admin_url }}/plannen/{ $plan_id }}"
                                                   target="_blank">{ $plan_name }}</a></strong>. De foutmelding is
    als volgt:</p>
<p>Bericht: {{ $exception_message }}</p>
<p>Plangegevens:</p>
<table>
    <tbody>
    <tr>
        <th>Plan</th>
        <td>#{{ $plan_id }} {{ $plan_naam }}</td>
    </tr>

    <tr>
        <th>Server</th>
        @if($server_id)
            <td>#{{ $server_id }} {{ $server_naam }}</td>
        Tussen haakjes
            <td>{{ $plan_server_type }}</td>
        Einde
    </tr>
    @isset($dns_server_id)
        <tr>
            <th>DNS-server</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_naam }} @if($dns_server_internal)
                    (Intern)
                @endif</td>
        </tr>
    @endisset
    @isset($email_server_id)
        <tr>
            <th>Emailserver</th>
            <td>#{{ $email_server_id }} {{ $email_server_name }} @if($email_server_internal)
                    (Intern)
                @endif</td>
        </tr>
    @endisset
    </tbody>
</table>
