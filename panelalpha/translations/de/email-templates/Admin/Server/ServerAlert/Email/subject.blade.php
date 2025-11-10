@if($alerts_count === 1) Warnung: {{ $alert_name }} @else {{ $alerts_count }} Warnungen @endif auf @if($servers_count === 1) {{ $server_name }} @else {{ $servers_count }} Servern @endif
