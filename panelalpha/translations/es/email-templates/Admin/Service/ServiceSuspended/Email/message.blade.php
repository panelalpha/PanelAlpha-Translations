<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>El servicio <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong>
    se ha suspendido con éxito.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="color de fondo: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Suspender remotamente
            failed<br>Mensaje de excepción:{{ $exception_message }}</div>
    @else
        <div style="color de fondo: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">El servicio ha sido
            suspendido a distancia.
        </div>
    @endif
@endif
