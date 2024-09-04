<p>Liebe <strong>{{ $admin_name }}</strong>,</p>
<p>Die Validierung der DNS-Verbreitung für <strong>{{ $ssl_order_domain }}</strong> hat die maximal konfigurierte Zeit überschritten.</p>
<p>SSL Bestelldaten:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Domain</th>
        <td>{{ $ssl_order_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domaintyp</th>
        <td>{{ $ssl_order_domain_type }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">SSL-Anbieter</th>
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
        <th style="width: 33%;">Unternehmen</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">E-Mail</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>
