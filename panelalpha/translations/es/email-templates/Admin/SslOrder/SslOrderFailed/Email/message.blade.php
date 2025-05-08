<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>El pedido SSL para <strong>{{ $ssl_order_domain }}</strong> ha fallado.</p>
<p>Mensaje: {{ $exception_message }}</p>
<p>Detalles del pedido SSL:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Dominio</th>
        <td>{{ $ssl_order_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Tipo de dominio</th>
        <td>{{ $ssl_order_domain_type }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Proveedor SSL</th>
        <td>{{ $ssl_provider }}</td>
    </tr>
    </tbody>
</table>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Nombre</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Empresa</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Correo electrónico</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>
