@if($alerts_count === 1) Waarschuwing: {{ $alert_name }} @else {{ $alerts_count }} waarschuwingen @endif op @if($servers_count === 1) {{ $server_name }} @else {{ $servers_count }} servers @endif
