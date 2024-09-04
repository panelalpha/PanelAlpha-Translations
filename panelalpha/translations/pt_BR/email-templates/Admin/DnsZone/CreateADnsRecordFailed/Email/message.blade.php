<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>A criação do registro DNS A para <strong>{{ $domain }}</strong> falhou.</p>
<p>Mensagem:{{ $exception_message }}</p>
<p>Detalhes da zona DNS:</p>
<table>
    <tbody>
    <tr>
        <th>Domínio</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Serviço</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th>Servidor DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>
