<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De gedwongen update van de <strong>{{ $plugin_title }}</strong> plugin in de <strong><a
        href="{{ $admin_url }}/instances/{{ $instance_id }}"
        target="_blank">{{ $instance_name }}</a></strong> instantie is mislukt.</p>
<p>Bericht: {{ $exception_message }}</p>
<p>Instantiedetails:</p>
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