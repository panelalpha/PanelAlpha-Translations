<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>La instalación de <strong><a href="{{ $admin_url }}/plugins-and-themes">{{ $package_name }}</a></strong> paquete en
    <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
               target="_blank">{{ $instance_name }}</a></strong> instancia falló.</p>
<p>Mensaje:{{ $exception_message }}</p>
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
