<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}" target="_blank">{{ $instance_name }}</a></strong>
    instance by <strong><a href="{{ $admin_url }}/users/{{ $client_id }}">{{ $client_name }}</a></strong> has been
    deleted successfully.</p>
<p>Instance Details:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Site Name</th>
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
<p>User Details:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Name</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Company</th>
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
