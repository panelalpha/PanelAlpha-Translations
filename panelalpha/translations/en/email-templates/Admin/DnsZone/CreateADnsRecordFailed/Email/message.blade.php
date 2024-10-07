<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The creation DNS Record A for <strong>{{ $domain }}</strong> failed.</p>
<p>Message: {{ $exception_message }}</p>
<p>DNS Zone details:</p>
<table>
    <tbody>
    <tr>
        <th>Domain</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th>DNS Server</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>
