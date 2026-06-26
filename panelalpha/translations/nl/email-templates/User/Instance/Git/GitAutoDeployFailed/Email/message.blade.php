<p>Beste <strong>{{ $client_first_name }}</strong>,</p>
<p>Auto-deploy voor <strong>{{ $instance_name }}</strong> is mislukt.</p>
<p>Bericht: {{ $exception_message }}</p>
<p>Instantiegegevens:</p>
<table>
    <tbody>
    <tr>
        <th>Site naam</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domein</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
<p>Open de Git-instellingen in PanelAlpha om het probleem op te lossen.</p>