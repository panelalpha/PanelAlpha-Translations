<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>Il servizio <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong>
    è stato sospeso con successo.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Sospendi a distanza
            fallito<br>Messaggio di eccezione:{{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">Il servizio è stato
            sospesa a distanza.
        </div>
    @endif
@endif
