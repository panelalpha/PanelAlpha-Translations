<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>La importación manual del <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                      target="_blank">{{ $instance_name }}</a></strong> instancia falló.</p>
<p>Mensaje:{{ $exception_message }}</p>
<p>Detalles de importación:</p>
<table>
    <cuerpo>
    <tr>
        <th style="width: 33%;">Importar</th>
        <td>#{{ $import_id }} {{ $import_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Estado</th>
        <td>{{ $import_status }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Mensaje</th>
        <td>{{ $import_message }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Paso actual</th>
        <td>{{ $import_current_step  }}</td>
    </tr>
    </tbody>
</table>
<p>Detalles de la instancia:</p>
<table>
    <cuerpo>
    <tr>
        <th style="width: 33%;">Nombre del sitio</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Dominio</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>

