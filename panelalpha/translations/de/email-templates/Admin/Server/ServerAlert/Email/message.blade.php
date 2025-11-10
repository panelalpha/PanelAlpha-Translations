<p>Hallo <strong>{{ $admin_name }}</strong>,</p>

<p>Die folgenden Warnungen wurden am {{ $check_time }} erkannt:</p>

@foreach($servers as $server)
<p>Server: <strong>{{ $server['name'] }}</strong> ({{ $server['hostname'] }})</p>
<ul>
@foreach($server['alerts'] as $alert)
    <li>{{ $alert['name'] }}: {{ $alert['message'] }}</li>
@endforeach
</ul>
@endforeach
