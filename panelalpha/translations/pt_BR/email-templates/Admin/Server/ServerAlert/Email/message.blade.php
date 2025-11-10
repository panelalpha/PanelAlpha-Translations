<p>Olá <strong>{{ $admin_name }}</strong>,</p>

<p>Os seguintes alertas foram detectados em {{ $check_time }}:</p>

@foreach($servers as $server)
<p>Servidor: <strong>{{ $server['name'] }}</strong> ({{ $server['hostname'] }})</p>
<ul>
@foreach($server['alerts'] as $alert)
    <li>{{ $alert['name'] }}: {{ $alert['message'] }}</li>
@endforeach
</ul>
@endforeach
