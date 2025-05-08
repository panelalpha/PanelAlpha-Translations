<p><strong>{{ $admin_name }}</strong>,</p> <p>La commande SSL pour <strong>{{ $ssl_order_domain }}</strong> a échoué.
<p>La commande SSL pour <strong>{{ $ssl_order_domain }}</strong> a échoué.</p>
</p> <p>Message : {{ $exception_message }}</p> <p>Message : {{ $exception_message }}
</p> <p>Détails de la commande SSL:</p> <p>Tableau
<table>
    <tbody>
    <tr>
        <th style="width : 33% ;">Domaine</th>
        <td>{{ $ssl_order_domain }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Type de domaine</th>
        <td>{{ $ssl_order_domain_type }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Fournisseur SSL</th>
        <td>{{ $ssl_provider }}</td>
    </tr>
    </tbody>
</table>
<table>
    <tbody>
    <tr>
        <th style="width : 33% ;">Nom</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Société</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">E-mail</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>
