<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>O pedido SSL para <strong>{{ $ssl_order_domain }}</strong> falhou.</p>
<p>Mensagem: {{ $exception_message }}</p>
<p>Detalhes do pedido SSL:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Domínio</th>
        <td>{{ $ssl_order_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Tipo de domínio</th>
        <td>{{ $ssl_order_domain_type }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Provedor de SSL</th>
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
        <th style="width: 33%;">Empresa</th>
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
