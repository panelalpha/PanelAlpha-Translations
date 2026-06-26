<p>שלום <strong>{{ $client_first_name }}</strong>,</p>
<p>התקנת <strong>{{ $instance_name }}</strong> נכשל.</p>
<p>הודעה: {{ $exception_message }}</p>
<p>פרטי המופע:</p>
<table>
    <tbody>
    <tr>
        <th>שם האתר</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>דומיין</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>כתובת URL</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
