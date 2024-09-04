<p>Caro <strong>{{ $admin_name }}</strong>,</p>
@if ($exception_message)
    <p>L'aggiornamento del servizio <strong><a
                href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> fallito.</p>
    <p>Messaggio:{{ $exception_message }}</p>
@else
    <p>Il servizio <strong>a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> è stato aggiornato con successo.</p>
@endif
