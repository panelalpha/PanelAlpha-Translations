<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>La création de l'enregistrement DNS A pour <strong>{{ $domain }}</strong> a échoué.</p>
<p>Message : {{ $exception_message }}</p>
<p>Détails de la zone DNS:</p>
<table>
    <tbody>
    <tr>
        <th> Domaine </th>
        <td>{{ $domain }}</td>
    </tr>
    <tr>
        <th> Service </th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>
    </tr>
    @if($dns_server_id)
        <tr>
            <th> Serveur DNS </th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>
        </tr>
    @endif
    </tbody>
</table>