<p>שלום <strong>{{ $admin_name }}</strong>,</p>
@if ($exception_message)
    <p>שדרוג השירות <strong><a
                href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> נכשל.</p>
    <p>הודעה: {{ $exception_message }}</p>
@else
    <p>השירות <strong>a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> שודרג בהצלחה.</p>
@endif
