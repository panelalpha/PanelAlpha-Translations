<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>La convalida della propagazione del DNS per <strong>{{ $ssl_order_domain }}</strong> ha superato il tempo massimo configurato.</p>
<p>Dettagli dell'ordineSSL:</p>
<tabella>
    <tbody>
    <tr>
        <th style="width: 33%;">Dominio</th>
        <td>{{ $ssl_order_domain }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Tipo di dominio</th>
        <td>{{ $ssl_order_domain_type }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Fornitore SSL</th>
        <td>{{ $ssl_provider }}</td>.
    </tr>.
    </tbody>
</tab>.
<tabella>
    <tbody>
    <tr>
        <th style="width: 33%;">Nome</th>
        <td>{{ $client_name }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Azienda</th>
        <td>{{ $client_company_name }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">E-mail</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>.
    </tr>.
    </tbody>
</tab>.
