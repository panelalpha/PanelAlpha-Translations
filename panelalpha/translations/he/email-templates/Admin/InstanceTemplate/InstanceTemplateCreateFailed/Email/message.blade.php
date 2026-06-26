<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>יצירת <strong>{{ $template_name }}</strong> תבנית המופע נכשלה.</p>
<p>הודעה: {{ $exception_message }}</p>
<table>
    <tbody>
    <tr>
        <th>מזהה</th>
        <td>#{{ $template_id }}</td>
    </tr>
    <tr>
        <th>שם</th>
        <td>{{ $template_name }}</td>
    </tr>
    <tr>
        <th>גרסת WordPress</th>
        <td>{{ $wordpress_version }}</td>
    </tr>
    </tbody>
</table>
