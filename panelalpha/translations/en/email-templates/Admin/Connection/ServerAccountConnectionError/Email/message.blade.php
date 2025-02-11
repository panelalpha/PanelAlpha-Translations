<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>There seems to be an issue with hosting account
    <strong>#{{ $server_account_id  }} {{ $server_account_main_domain  }}</strong>
    . The error message is as follows:</p>
<p>Message: {{ $exception_message }}</p>
<p>Hosting Account details:</p>
<table>
    <tbody>
    <tr>
        <th>Server</th>
        <td>#{{ $server_id }} {{ $server_name  }}</td>
    </tr>
    <tr>
        <th>Hosting Account</th>
        <td>#{{ $server_account_id }} {{ $server_account_main_domain }}</td>
    </tr>
    <tr>
        <th>IP Address</th>
        <td>{{ $server_account_ip_address  }}</td>
    </tr>
    </tbody>
</table>
