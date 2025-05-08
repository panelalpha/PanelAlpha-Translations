<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>Parece haver um problema com a conta de hospedagem
    <strong>#{{ $server_account_id }} {{ $server_account_main_domain }}</strong>
    . A mensagem de erro é a seguinte:</p>
<p>Mensagem: {{ $exception_message }}</p>
<p>Detalhes da conta de hospedagem:</p>
<table>
    <tbody>
    <tr>
        <th>Servidor</th>
        <td>#{{ $server_id }} {{ $server_name }}</td>
    </tr>
    <tr>
        <th>Conta de Hospedagem</th>
        <td>#{{ $server_account_id }} {{ $server_account_main_domain }}</td>
    </tr>
    <tr>
        <th>Endereço IP</th>
        <td>{{ $server_account_ip_address }}</td>
    </tr>
    </tbody>
</table>
