<p>Estimado <strong>{{ $client_first_name }}</strong>,</p>
<p>El <strong>{{ $plugin_title }}</strong> plugin se ha instalado correctamente.</p> <p>
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
