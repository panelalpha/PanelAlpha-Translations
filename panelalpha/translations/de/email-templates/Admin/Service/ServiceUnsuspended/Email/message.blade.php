<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Der Dienst <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> wurde erfolgreich wiederhergestellt.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Wiederherstellung des Dienstes fehlgeschlagen.<br><strong>Ausnahmemeldung: </strong>{{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">Der Dienst wurde wiederhergestellt.
        </div>
    @endif
@endif
