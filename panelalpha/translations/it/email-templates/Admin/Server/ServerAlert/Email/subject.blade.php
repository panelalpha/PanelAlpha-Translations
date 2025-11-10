@if($alerts_count === 1) Avviso: {{ $alert_name }} @else {{ $alerts_count }} avvisi @endif su @if($servers_count === 1) {{ $server_name }} @else {{ $servers_count }} server @endif
