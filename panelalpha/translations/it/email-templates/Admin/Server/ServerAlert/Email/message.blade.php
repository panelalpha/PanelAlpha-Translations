<p>Ciao <strong>{{ $admin_name }}</strong>,</p>

<p>I seguenti avvisi sono stati rilevati il {{ $check_time }}:</p>

@foreach($servers as $server)
<p>Server: <strong>{{ $server['name'] }}</strong> ({{ $server['hostname'] }})</p>
<ul>
@foreach($server['alerts'] as $alert)
    <li>{{ $alert['name'] }}: {{ $alert['message'] }}</li>
@endforeach
</ul>
@endforeach
