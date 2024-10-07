<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The validation of DNS propagation for <strong>{{ $ssl_order_domain }}</strong> has exceeded the maximum configured time.</p>
<p>SSL Order details:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Domain</th>
        <td>{{ $ssl_order_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domain Type</th>
        <td>{{ $ssl_order_domain_type }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">SSL Provider</th>
        <td>{{ $ssl_provider }}</td>
    </tr>
    </tbody>
</table>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Name</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Company</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">E-mail</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>
