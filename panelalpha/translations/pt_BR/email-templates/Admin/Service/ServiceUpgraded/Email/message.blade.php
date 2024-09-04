<p>Caro <strong>{{ $admin_name }}</strong>,</p>
@if ($exception_message)
    <p>A atualização do serviço <strong><a
                href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> falhou.</p>
    <p>Mensagem:{{ $exception_message }}</p>
@else
    <p>O serviço <strong>a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> foi atualizado com sucesso.</p>
@endif
