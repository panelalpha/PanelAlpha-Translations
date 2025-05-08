<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>Parece haver um problema com o plano <strong><a href="{{ $admin_url }}/plans/{{ $plan_id }}"
                                                   target="_blank">{{ $plan_name }}</a></strong>. A mensagem de erro é
    como segue:</p>
<p>Mensagem: {{ $exception_message }}</p>
<p>Detalhes do plano:</p>
<table>
    <tbody>
    <tr>
        <th>Plano</th>
        <td>#{{ $plan_id }} {{ $plan_name }}</td>
    </tr>

    <tr>
        <th>Servidor</th>
        @if($server_id)
            <td>#{{ $server_id }} {{ $server_name }}</td>
        @else
            <td>{{ $plan_server_type }}</td>
        @endif
    </tr>
    @isset($dns_server_id)
        <tr>
            <th>Servidor DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }} @if($dns_server_internal)
                    (Interno)
                @endif</td>
        </tr>
    @endisset
    @isset($email_server_id)
        <tr>
            <th>Servidor de e-mail</th>
            <td>#{{ $email_server_id }} {{ $email_server_name }} @if($email_server_internal)
                    (Interno)
                @endif</td>
        </tr>
    @endisset
    </tbody>
</table>
