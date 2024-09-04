<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>L'importazione del <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                      target="_blank">{{ $instance_name }}</a></strong> istanza di <strong><a
            href="{{ $admin_url }}/users/{{ $client_id }}">{{ $client_name }}</a></strong> non è riuscito.
</p>
<p>Messaggio:{{ $exception_message }}</p>
<p>Dettagli dell'istanza:</p>
<tabella>
    <tbody>
    <tr>
        <th style="width: 33%;">Nome del sito</th>
        <td>{{ $instance_name }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Dominio</th>
        <td>{{ $instance_domain }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>.
    </tbody>
</tab>.
<p>Dettagli dell'utente:</p>
<tabella>
    <tbody>
    <tr>
        <th style="width: 33%;">Nome</th>
        <td>{{ $client_name }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Azienda</th>
        <td>{{ $client_company_name }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">E-mail</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>.
    </tr>.
    </tbody>
</tab>.
