<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>הייבוא הידני של המופע <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                      target="_blank">{{ $instance_name }}</a></strong> נכשל.</p>
<p>הודעה: {{ $exception_message }}</p>
<p>פרטי הייבוא:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">ייבוא</th>
        <td>#{{ $import_id }} {{ $import_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">סטטוס</th>
        <td>{{ $import_status }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">הודעה</th>
        <td>{{ $import_message }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">שלב נוכחי</th>
        <td>{{ $import_current_step  }}</td>
    </tr>
    </tbody>
</table>
<p>פרטי המופע:</p>
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

