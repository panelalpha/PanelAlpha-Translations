<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>El servicio <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> se ha desbloqueado con éxito.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="color de fondo: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Suspensión del servicio
            remotely failed.<br><strong>Mensaje de excepción: </strong>{{ $exception_message }}</div>
    @else
        <div style="color de fondo: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">El servicio ha sido
            sin suspender a distancia.
        </div>
    @endif
@endif
