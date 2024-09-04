</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
<p>Le service <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> a été suspendu avec succès.
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color : #fbdddd ; padding : 8px ; border-radius : 4px ; color : #e71d1d ;">Suspension de service
            a échoué à distance.<br><strong>Message d'exception : </strong>{{ $exception_message }}</div>
    @else
        <div style="background-color : #e5edfb ; padding : 8px ; border-radius : 4px ; color : #005eea ;">Le service a été
            non suspendu à distance.
        </div>
    @endif
@endif
