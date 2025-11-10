@if($alerts_count === 1) Alerte : {{ $alert_name }} @else {{ $alerts_count }} alertes @endif sur @if($servers_count === 1) {{ $server_name }} @else {{ $servers_count }} serveurs @endif
