<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Der SSL-Auftrag für <strong>{{ $ssl_order_domain }}</strong> ist fehlgeschlagen.</p>
<p>Fehlernachricht: {{ $exception_message }}</p>
<p>Details zur SSL-Bestellung:</p>
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
        <th style="width: 33%;">Firma</th>
        <td>{{ $Kunden_Unternehmensname }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">E-Mail</th>
        <td>
            <a href="mailto:{{$kunden_email_adresse}}">{{$kunden_email_adresse}}</a>
        </td>
    </tr>
    </tbody>
</table>
