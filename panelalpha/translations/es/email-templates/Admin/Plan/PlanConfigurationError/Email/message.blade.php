<p>Estimado <strong>{ $admin_name }}</strong>,</p>
<p>Parece que hay un problema con el plan <strong><a href="{{ $admin_url }}/plans/{ $plan_id }}"
                                                   target="_blank">{{ $plan_name }}</a></strong>. El mensaje de error es
    como sigue:</p>
<p>Mensaje: {{ $exception_message }}</p>
<p>Detalles del plan:</p>
<table>
    <tbody>
    <tr>
        <th>Plan</th>
        <td>#{{ $plan_id }} {{ $plan_name }}</td>
    </tr>

    <tr>
        <th>Servidor</th>
        @if($id_servidor)
            <td>#{{ $server_id }} {{ $server_name }}</td>
        @else
            <td>{{ $server_type }}</td>
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
            <th>Servidor de correo electrónico</th>
            <td>#{{ $email_server_id }} {{ $email_server_name }} @if($email_server_internal)
                    (Interno)
                @endif</td>
        </tr>
    @endisset
    </tbody>
</table>
