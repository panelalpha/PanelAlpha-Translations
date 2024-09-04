</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
<p>La création d'un domaine d'email <strong>est un élément important de la stratégie de l'entreprise.{{ $domain }}</strong> a échoué.</p> <p>
<p>Message :{{ $exception_message }}</p>

</p> <p>Email Domain details:</p> <p>Les détails du domaine de l'e-mail
<b>Tableau>
    <tbody>
    <tr>
        <th>Domaine électronique</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td><strong>#{{ $service_id }}</strong> {{ $service_main_domain }}</td>
    </tr>
    <tr>
        <th>Serveur de messagerie</th>
        <td><strong>#{{ $email_server_id }}</strong> {{ $email_server_name }}</td>
    </tr>
    </tbody>
</tableau>
