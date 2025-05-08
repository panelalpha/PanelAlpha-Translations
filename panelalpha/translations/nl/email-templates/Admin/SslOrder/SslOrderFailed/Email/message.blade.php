<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De SSL-opdracht voor <strong>{ $ssl_order_domain }}</strong> is mislukt.</p>
<p>Bericht: {{ $exception_message }}</p>
<p>SSL Besteldetails:</p>
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
        <th style="width: 33%;">Naam</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Bedrijf</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">E-mail</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>
