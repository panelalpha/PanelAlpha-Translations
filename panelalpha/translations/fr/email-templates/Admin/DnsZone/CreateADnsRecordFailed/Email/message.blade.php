</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
<p>L'enregistrement DNS de création A pour <strong>{{ $domain }}</strong> a échoué.</p> <p>
<p>Message :{{ $exception_message }}</p>
</p> <p>Détails de la zone DNS:</p> <p>Les détails de la zone DNS sont les suivants
<b>Tableau>
    <tbody>
    <tr>
        <th>Domaine</th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th>Service</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th>Serveur DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</tableau>
