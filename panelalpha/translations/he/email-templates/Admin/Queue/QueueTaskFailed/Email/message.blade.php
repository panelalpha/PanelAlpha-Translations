<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>ה <strong>{{ $task_name }}</strong> ביצוע המשימה נכשל.</p>
<p>הודעה: {{ $exception_message }}</p>
<p>פרטי המשימה:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">שם</th>
        <td>{{ $task_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">תור</th>
        <td>{{ $task_queue }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">ניתן להפעלה</th>
        <td>{{ $task_dispatchable }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">תאריך התחלה</th>
        <td>{{ $task_started_at }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">תאריך השלמה</th>
        <td>{{ $task_completed_at }}</td>
    </tr>
    </tbody>
</table>
<p>פרטי המופע הקשור:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">שם האתר</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">דומיין</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">כתובת URL</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
