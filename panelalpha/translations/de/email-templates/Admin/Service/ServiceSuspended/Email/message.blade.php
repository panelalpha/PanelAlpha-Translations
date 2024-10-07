<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Der Dienst <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong>
    wurde erfolgreich suspendiert.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Suspendieren fehlgeschlagen<br>Fehlermeldung:{{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">Der Dienst wurde suspendiert.
        </div>
    @endif
@endif
