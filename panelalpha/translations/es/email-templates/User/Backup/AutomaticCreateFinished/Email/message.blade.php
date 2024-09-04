<p>Estimado <strong>{{ $client_first_name }}</strong>,</p>
<p>El <strong>{{ $backup_name }}</strong> la copia de seguridad automática se ha creado correctamente.</p> <p>
<p>Detalles de la copia de seguridad:</p>
<table>
    <cuerpo>
    <tr>
        <th>Nombre</th>
        <td>{{ $backup_name  }}</td>
    </tr>
    <tr>
        <th>Tipo</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Tamaño</th>
        <td>{{ $backup_size  }} MB</td>
    </tr>
    <tr>
        <th>Versión</th>
        <td>{{ $backup_version  }}</td>
    </tr>
    <tr>
        <th>Fecha</th>
        <td>{{ $backup_date  }}</td>
    </tr>
    </tbody>
</table>
<p>Detalles de la instancia:</p>
<table>
    <cuerpo>
    <tr>
        <th>Nombre del sitio</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Dominio</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
