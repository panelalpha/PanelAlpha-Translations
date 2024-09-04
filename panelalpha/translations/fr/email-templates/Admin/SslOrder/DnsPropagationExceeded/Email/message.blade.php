</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
<strong>La validation de la propagation du DNS pour <strong>l'utilisation de la technologie de l'information</strong>.{{ $ssl_order_domain }}</strong> a dépassé le temps maximum configuré.</p>
</p> <p>Détails de la commandeSSL:</p> <p>Les détails de la commandeSSL sont les suivants
<b>Tableau>
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
</tableau>
<b>Tableau>
    <tbody>
    <tr>
        <th style="width : 33% ;">Nom</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Entreprise</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">E-mail</th>
        <td>
            <a href="mailto :{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</tableau>
