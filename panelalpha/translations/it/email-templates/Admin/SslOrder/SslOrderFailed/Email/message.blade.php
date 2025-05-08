<p>L'ordine SSL per <strong>{{$ssl_order_domain }}</strong> è fallito.</p>
<p>Messaggio: {{ $exception_message }}</p>
<p>Dettagli dell'ordine SSL:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Dominio</th>
        <td>{{ $ssl_order_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Tipo di dominio</th>
        <td>{{ $ssl_order_domain_type }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Fornitore SSL</th>
        <td>{{ $ssl_provider }}</td>
    </tr>
    </tbody>
</table>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Nome</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Azienda</th>
        <td>{{ $client_company }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">E-mail</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>
