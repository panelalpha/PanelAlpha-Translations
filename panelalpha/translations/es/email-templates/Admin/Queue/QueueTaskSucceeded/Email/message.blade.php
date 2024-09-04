<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>El <strong>{{ $task_name }}</strong> tarea se ha completado con éxito.</p> <p>
<p>Detalles de la tarea:</p>
<table>
    <cuerpo>
    <tr>
        <th style="width: 33%;">Nombre</th>
        <td>{{ $task_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Cola</th>
        <td>{{ $task_queue }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Despachable</th>
        <td>{{ $task_dispatchable }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Fecha de inicio</th>
        <td>{{ $task_started_at }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Fecha de finalización</th>
        <td>{{ $task_completed_at }}</td>
    </tr>
    </tbody>
</table>
<p>Detalles de instancias relacionadas:</p>
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
