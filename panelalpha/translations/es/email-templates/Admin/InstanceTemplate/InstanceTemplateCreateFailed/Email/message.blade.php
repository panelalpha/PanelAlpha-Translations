<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>La creación <strong>{{ $template_name }}</strong> falló la plantilla de instancia.</p>
<p>Mensaje:{{ $exception_message }}</p>
<table>
    <cuerpo>
    <tr>
        <th>ID</th>
        <td>#{{ $template_id }}</td>
    </tr>
    <tr>
        <th>Nombre</th>
        <td>{{ $template_name }}</td>
    </tr>
    <tr>
        <th>Versión WordPress</th>
        <td>{{ $wordpress_version }}</td>
    </tr>
    </tbody>
</table>
