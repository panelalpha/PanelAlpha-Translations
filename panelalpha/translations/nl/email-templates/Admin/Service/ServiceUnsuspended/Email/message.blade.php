<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De service <strong><a href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> is succesvol hersteld.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Het ongedaan maken van de service
            op afstand is mislukt.<br><strong>Uitzonderingsbericht: </strong>{{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">De service is
            op afstand hersteld.
        </div>
    @endif
@endif