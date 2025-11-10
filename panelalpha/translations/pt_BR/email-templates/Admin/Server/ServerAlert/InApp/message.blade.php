@if($alerts_count === 1) Alerta: {{ $alert_name }} @else {{ $alerts_count }} alertas @endif em @if($servers_count === 1) {{ $server_name }} @else {{ $servers_count }} servidores @endif
