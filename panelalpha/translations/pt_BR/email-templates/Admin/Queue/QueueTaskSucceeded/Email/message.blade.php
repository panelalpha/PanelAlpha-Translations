<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>O <strong>{{ $task_name }}</strong> a tarefa foi concluída com êxito.</p>
<p>Detalhes da tarefa:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Nome</th>
        <td>{{ $task_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Queueue</th>
        <td>{{ $task_queue }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Dispatchable</th>
        <td>{{ $task_dispatchable }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Data de início</th>
        <td>{{ $task_started_at }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Data de conclusão</th>
        <td>{{ $task_completed_at }}</td>
    </tr>
    </tbody>
</table>
<p>Detalhes de instância relacionados:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Nome do site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domínio</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
