<p>Caro <strong>{{$admin_name }}</strong>,</p>
<p>Sembra esserci un problema con il piano <strong><a href="{{ $admin_url }}/plans/{{ $plan_id }}"
                                                   target="_blank">{{ $plan_name }}</a></strong>. Il messaggio di errore è
    come segue:</p>
<p>Messaggio: {{ $exception_message }}</p>
<p>Dettagli del piano:</p>
<table>
    <tbody>
    <tr>
        <th>Piano</th>
        <td>#{{ $plan_id }} {{ $plan_name }}</td>
    </tr>

    <tr>
        <th>Server</th>
        @if($server_id)
            <td>#{{ $server_id }} {{ $server_name }}</td>
        @else
            <td>{{$plan_server_type }}</td>
        @endif
    </tr>
    @isset($dns_server_id)
        <tr>
            <th>Server DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }} @if($dns_server_internal)
                    (Interno)
                @endif</td>
        </tr>
    @endisset
    @isset($email_server_id)
        <tr>
            <th>Server di posta elettronica</th>
            <td>#{{ $email_server_id }} {{ $email_server_name }} @if($email_server_internal)
                    (Interno)
                @endif</td>
        </tr>
    @endisset
    </tbody>
</table>
