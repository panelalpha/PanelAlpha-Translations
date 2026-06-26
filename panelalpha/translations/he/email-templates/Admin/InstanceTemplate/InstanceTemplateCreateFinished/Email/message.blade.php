<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>ה <strong>{{ $template_name }}</strong> תבנית המופע נוצרה בהצלחה.</p>
<p>פרטי תבנית המופע:</p>
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
