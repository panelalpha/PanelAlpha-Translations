<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>La creazione di una zona DNS per <strong>{{ $zone_name }}</strong> dominio fallito.</p>
<p>Messaggio:{{ $exception_message }}</p>
<p>Dettagli della zona DNS:</p>
<tabella>
    <tbody>
    <tr>
        <th>Zona DNS</th>
        <td>{{ $zone_name }}</td>.
    </tr>.
    <tr>
        <th>Servizio</th>
        <td>#{{ $service_id }}{{ $service_main_domain }}</td>.
    </tr>.
    <tr>
        <th>Server DNS</th>
        <td>#{{ $dns_server_id }}{{ $dns_server_name }}</td>.
    </tr>.
    </tbody>
</tab>.
