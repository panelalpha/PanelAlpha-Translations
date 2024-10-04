<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
@if ($exception_message)
    <p>Das Upgrade der Dienstleistung <strong><a
                href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> ist fehlgeschlagen.</p>
    <p>Mitteilung:{{ $exception_message }}</p>
@else
    <p>Die Dienstleistung <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> wurde erfolgreich aktualisiert.</p> 
@endif
