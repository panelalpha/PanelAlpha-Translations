<p><strong>{{ $admin_name }}</strong>,</p>
@if ($exception_message)
    <p>La mise à niveau du service <strong><a href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> a échoué.</p>
    <p>Message : {{ $exception_message }}</p>
@else
    <p>>La mise à niveau du service <strong><a href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> a réussi.</p>
@endif
