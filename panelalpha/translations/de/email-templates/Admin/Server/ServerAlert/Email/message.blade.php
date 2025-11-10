<p>Hello <strong>{{ $admin_name }}</strong>,</p>

<p>The following alerts were detected on {{ $check_time }}:</p>

@foreach($servers as $server)
<p>Server: <strong>{{ $server['name'] }}</strong> ({{ $server['hostname'] }})</p>
<ul>
@foreach($server['alerts'] as $alert)
    <li>{{ $alert['name'] }}: {{ $alert['message'] }}</li>
@endforeach
</ul>
@endforeach
