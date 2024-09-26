<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>Le service <strong><a href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> a été réactivé avec succès.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">La réactivation du service à distance a échoué.<br><strong>Message d'exception: </strong>{{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">Le service a été réactivé à distance.</div>
    @endif
@endif