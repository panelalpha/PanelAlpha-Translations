<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De service <strong><a href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> is succesvol opgeschort.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Het op afstand opschorten
            is mislukt<br>Uitzonderingsbericht: {{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">De service is op afstand
            opgeschort.
        </div>
    @endif
@endif