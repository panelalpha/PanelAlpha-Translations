<p>Hola <strong>{{ $admin_name }}</strong>,</p>

<p>Se detectaron las siguientes alertas el {{ $check_time }}:</p>

@foreach($servers as $server)
<p>Servidor: <strong>{{ $server['name'] }}</strong> ({{ $server['hostname'] }})</p>
<ul>
@foreach($server['alerts'] as $alert)
    <li>{{ $alert['name'] }}: {{ $alert['message'] }}</li>
@endforeach
</ul>
@endforeach
