</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
</p> <p>La <strong>Structure de l'entreprise</strong>.{{ $task_name }}</strong> l'exécution de la tâche a échoué.</p>
<p>Message :{{ $exception_message }}</p>
</p> <p>Détails de la tâche:</p> <p>Les détails de la tâche
<b>Tableau>
    <tbody>
    <tr>
        <th style="width : 33% ;">Nom</th>
        <td>{{ $task_name }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Queueue</th>
        <td>{{ $task_queue }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Dispatchable</th>
        <td>{{ $task_dispatchable }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Date de début</th>
        <td>{{ $task_started_at }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Date d'achèvement</th>
        <td>{{ $task_completed_at }}</td>
    </tr>
    </tbody>
</tableau>
</p> <p>Détails de l'instance concernée:</p> <p>Les détails de l'instance concernée
<b>Tableau>
    <tbody>
    <tr>
        <th style="width : 33% ;">Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Domaine</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</tableau>
