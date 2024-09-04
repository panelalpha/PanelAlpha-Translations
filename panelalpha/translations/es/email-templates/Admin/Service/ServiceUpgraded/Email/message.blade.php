<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
@if ($exception_message)
    <p>La mejora del servicio <strong><a
                href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> fallido.</p>
    <p>Mensaje:{{ $exception_message }}</p>
@else
    <p>El servicio <strong>a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> se ha actualizado correctamente.</p>
@endif
