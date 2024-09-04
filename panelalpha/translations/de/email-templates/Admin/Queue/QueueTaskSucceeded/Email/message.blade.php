<p>Liebe <strong>{{ $admin_name }}</strong>,</p>
<p>Die <strong>{{ $task_name }}</strong> Die Aufgabe wurde erfolgreich abgeschlossen.</p>
<p>Details zur Aufgabe:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Name</th>
        <td>{{ $task_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Warteschlange</th>
        <td>{{ $task_queue }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Versendbar</th>
        <td>{{ $task_dispatchable }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Startdatum</th>
        <td>{{ $task_started_at }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Datum der Fertigstellung</th>
        <td>{{ $task_completed_at }}</td>
    </tr>
    </tbody>
</table>
<p>Zugehörige Details zur Instanz:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Seitenname</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domain</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
