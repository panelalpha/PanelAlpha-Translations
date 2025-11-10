<p>שלום <strong>{{ $admin_name }}</strong>,</p>

<p>ההתראות הבאות זוהו ב-{{ $check_time }}:</p>

@foreach($servers as $server)
<p>שרת: <strong>{{ $server['name'] }}</strong> ({{ $server['hostname'] }})</p>
<ul>
@foreach($server['alerts'] as $alert)
    <li>{{ $alert['name'] }}: {{ $alert['message'] }}</li>
@endforeach
</ul>
@endforeach
