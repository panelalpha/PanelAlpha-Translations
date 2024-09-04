<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>Il <strong><a href="{{ $admin_url }}/plugins-and-themes">{{ $package_name }}</a></strong> has been installed successfully in <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}" target="_blank">{{ $instance_name }}</a></strong>
    istanza.</p>
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
