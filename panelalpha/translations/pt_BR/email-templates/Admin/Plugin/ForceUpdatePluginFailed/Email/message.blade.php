<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>A atualização forçada do <strong>{{ $plugin_title }}</strong> plug-in em <strong><a
            href="{{ $admin_url }}/instances/{{ $instance_id }}"
            target="_blank">{{ $instance_name }}</a></strong> instância
    falhou.</p>
<p>Mensagem:{{ $exception_message }}</p>
<p>Detalhes da instância:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Nome do site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domínio</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>