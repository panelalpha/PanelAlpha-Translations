<p>Caro <strong>{{$admin_name }}</strong>,</p>
<p>Sembra esserci un problema con l'account di hosting
    <strong>#{{$server_account_id }} {{ $server_account_main_domain }}</strong>.
    . Il messaggio di errore è il seguente:</p>
<p>Messaggio: {{ $exception_message }}</p>
<p>Dettagli dell'account di hosting:</p>
<table>
    <tbody>
    <tr>
        <th>Server</th>
        <td>#{{ $server_id }} {{ $server_name }}</td>
    </tr>
    <tr>
        <th>Account di hosting</th>
        <td>#{{ $server_account_id }} {{ $server_account_main_domain }}</td>
    </tr>
    <tr>
        <th>Indirizzo IP</th>
        <td>{{$server_account_ip_address }}</td>
    </tr>
    </tbody>
</table>
