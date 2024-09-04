<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>O serviço <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> foi suspensa com sucesso.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Unsuspender o serviço
            falhou remotamente.<br><strong>Mensagem de exceção: </strong>{{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">O serviço foi
            não suspenso remotamente.
        </div>
    @endif
@endif
