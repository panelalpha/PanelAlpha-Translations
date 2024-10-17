<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>Email domain <strong>{{ $domain }}</strong> already exists on the Email Server.</p>

<p>Email Domain details:</p>
<table>
    <tbody>
    <tr>
        <th>Email Domain</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td><strong>#{{ $service_id }}</strong> {{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>Email Server</th>
        <td><strong>#{{ $email_server_id }}</strong> {{ $email_server_name }}</td>
    </tr>
    </tbody>
</table>
