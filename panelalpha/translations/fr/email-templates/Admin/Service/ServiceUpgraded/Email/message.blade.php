</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
@if ($exception_message)
    <p>La mise à niveau du service <strong><a
                href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> a échoué.</p>
    <p>Message :{{ $exception_message }}</p>
@else
    <p>Le service <strong>a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> a été mis à jour avec succès.</p>
@endif
