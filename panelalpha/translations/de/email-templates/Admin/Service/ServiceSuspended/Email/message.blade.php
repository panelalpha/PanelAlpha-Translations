<p>Liebe <strong>{{ $admin_name }}</strong>,</p>
<p>Der Dienst <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong>
    wurde erfolgreich ausgesetzt.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Entfernt aussetzen
            fehlgeschlagen<br>Ausnahmemeldung:{{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">Der Dienst wurde
            aus der Ferne ausgesetzt.
        </div>
    @endif
@endif
