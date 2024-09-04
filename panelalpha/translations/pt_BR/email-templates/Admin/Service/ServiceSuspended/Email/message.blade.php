<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>O serviço <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong>
    foi suspenso com sucesso.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Suspender remotamente
            failed<br>Mensagem de exceção:{{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">O serviço foi
            suspenso remotamente.
        </div>
    @endif
@endif
