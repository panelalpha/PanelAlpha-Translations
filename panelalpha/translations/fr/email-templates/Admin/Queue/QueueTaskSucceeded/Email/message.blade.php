<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>La tâche <strong>{{ $task_name }}</strong> a été complétée avec succès.</p>
<p>Détails de la tâche:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Nom</th>
        <td>{{ $task_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">File d'attente</th>
        <td>{{ $task_queue }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Exécutable</th>
        <td>{{ $task_dispatchable }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Date de début</th>
        <td>{{ $task_started_at }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Date d'achèvement</th>
        <td>{{ $task_completed_at }}</td>
    </tr>
    </tbody>
</table>
<p>Détails de l'instance associée:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domaine</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">URL</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>