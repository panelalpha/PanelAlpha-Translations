<p>Dear <strong>{{ $admin_name }}</strong>,</p>
@if ($exception_message)
    <p>The upgrade of service <strong><a
                href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> failed.</p>
    <p>Message: {{ $exception_message }}</p>
@else
    <p>The service <strong>a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> has been upgraded successfully.</p>
@endif
