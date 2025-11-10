<p>Bonjour <strong>{{ $admin_name }}</strong>,</p>

<p>Les alertes suivantes ont été détectées le {{ $check_time }} :</p>

@foreach($servers as $server)
<p>Serveur : <strong>{{ $server['name'] }}</strong> ({{ $server['hostname'] }})</p>
<ul>
@foreach($server['alerts'] as $alert)
    <li>{{ $alert['name'] }} : {{ $alert['message'] }}</li>
@endforeach
</ul>
@endforeach
