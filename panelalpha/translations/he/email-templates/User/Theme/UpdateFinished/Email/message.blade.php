<p>שלום <strong>{{ $client_first_name }}</strong>,</p>
<p>ה <strong>{{ $theme_title }}</strong> ערכת העיצוב עודכנה לגרסה <strong>{{ $theme_version }}</strong>.</p>
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
