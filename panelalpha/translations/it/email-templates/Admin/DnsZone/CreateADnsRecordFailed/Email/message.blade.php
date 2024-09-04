<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>Il record DNS di creazione A per <strong>{{ $domain }}</strong> fallito.</p>
<p>Messaggio:{{ $exception_message }}</p>
<p>Dettagli della zona DNS:</p>
<tabella>
    <tbody>
    <tr>
        <th>Dominio</th>
        <td>{{ $domain }}</td>.
    </tr>.
    <tr>
        <th>Servizio</th>
        <td>#{{ $service_id }} {{ $service_main_domain }}</td>.
    </tr>.
    @if($dns_server_id)
        <tr>
            <th>Server DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }}</td>.
        </tr>.
    @endif
    </tbody>
</tab>.
