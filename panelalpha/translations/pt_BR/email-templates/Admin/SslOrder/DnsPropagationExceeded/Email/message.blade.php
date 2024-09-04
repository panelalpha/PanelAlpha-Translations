<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>A validação da propagação de DNS para <strong>{{ $ssl_order_domain }}</strong> excedeu o tempo máximo configurado.</p>
<p>Detalhes do pedido de SSL:</p>
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
        <th style="width: 33%;">Provedor SSL</th>
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
