<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Die <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}" target="_blank">{{ $instance_name }}</a></strong>
    Instanz von
    <strong><a href="{{ $admin_url }}/users/{{ $client_id }}">{{ $client_name }}</a></strong> wurde erfolgreich installiert.</p>
<p>Instanzdetails:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Seitenname</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domain</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
<p>Benutzerdetails:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Name</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Unternehmen</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">E-Mail</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>
