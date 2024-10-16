<p><strong>{{ $admin_name }}</strong>,</p>
<p>Le service <strong><a href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> a été rétabli.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Le rétablissement a échoué.<br>Exception message : {{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">La rétablissement a réussi.</div>
    @endif
@endif
