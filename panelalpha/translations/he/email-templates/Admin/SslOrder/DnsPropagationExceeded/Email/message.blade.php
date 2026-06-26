<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>אימות הפצת ה-DNS עבור <strong>{{ $ssl_order_domain }}</strong> חרג מהזמן המוגדר המרבי.</p>
<p>פרטי הזמנת ה-SSL:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">דומיין</th>
        <td>{{ $ssl_order_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">סוג דומיין</th>
        <td>{{ $ssl_order_domain_type }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">ספק SSL</th>
        <td>{{ $ssl_provider }}</td>
    </tr>
    </tbody>
</table>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">שם</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">חברה</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">אימייל</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>
