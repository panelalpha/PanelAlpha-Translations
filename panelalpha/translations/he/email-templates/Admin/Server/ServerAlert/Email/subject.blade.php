@if($alerts_count === 1) Alert: {{ $alert_name }} @else {{ $alerts_count }} alerts @endif on @if($servers_count === 1) {{ $server_name }} @else {{ $servers_count }} servers @endif
