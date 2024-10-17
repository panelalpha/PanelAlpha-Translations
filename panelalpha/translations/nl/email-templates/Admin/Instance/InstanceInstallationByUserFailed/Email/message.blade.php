<p>Geachte <strong>{{ $admin_name }}</strong>,</p>
<p>De installatie van de <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                      target="_blank">{{ $instance_name }}</a></strong> instantie door <strong><a
            href="{{ $admin_url }}/users/{{ $client_id }}">{{ $client_name }}</a></strong> is mislukt.</p>
<p>Bericht: {{ $exception_message }}</p>
<p>Instantiegegevens:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Site Naam</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domein</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
<p>Gegevens gebruiker:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Naam</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Bedrijf</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">E-mail</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>
