<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De validatie van DNS-propagatie voor <strong>{{ $ssl_order_domain }}</strong> heeft de maximaal ingestelde tijd overschreden.</p>
<p>SSL-bestelgegevens:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Domein</th>
        <td>{{ $ssl_order_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domeintype</th>
        <td>{{ $ssl_order_domain_type }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">SSL-provider</th>
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
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>
