<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>La importación manual del <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                       target="_blank">{{ $instance_name }}</a></strong> instancia se ha completado.
</p>
<p>Detalles de importación:</p>
<table>
    <cuerpo>
    <tr>
        <th style="width: 33%;">Importar</th>
        <td>#{{ $import_id }} {{ $import_domain }}</td>
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

