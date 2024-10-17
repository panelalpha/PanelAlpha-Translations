<p>Beste <strong>{{ $admin_name }}</strong>,</p>
@if ($exception_message)
    <p>De upgrade van de service <strong><a
                href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> is mislukt.</p>
    <p>Boodschap: {{ $exception_message }}</p>
@else
    <p>De service <strong><a
                href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> is succesvol geüpgraded.</p>
@endif