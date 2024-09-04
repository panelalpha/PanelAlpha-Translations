<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>La <strong>società di consulenza{{ $task_name }}</strong> l'esecuzione del compito non è riuscita.</p>
<p>Messaggio:{{ $exception_message }}</p>
<p>Dettagli del compito:</p>
<tabella>
    <tbody>
    <tr>
        <th style="width: 33%;">Nome</th>
        <td>{{ $task_name }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Queue</th>
        <td>{{ $task_queue }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Disponibile</th>
        <td>{{ $task_dispatchable }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Data di inizio</th>
        <td>{{ $task_started_at }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Data di completamento</th>
        <td>{{ $task_completed_at }}</td>.
    </tr>.
    </tbody>
</tab>.
<p>Dettagli dell'istanza correlati:</p>
<tabella>
    <tbody>
    <tr>
        <th style="width: 33%;">Nome del sito</th>
        <td>{{ $instance_name }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Dominio</th>
        <td>{{ $instance_domain }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>.
    </tbody>
</tab>.
