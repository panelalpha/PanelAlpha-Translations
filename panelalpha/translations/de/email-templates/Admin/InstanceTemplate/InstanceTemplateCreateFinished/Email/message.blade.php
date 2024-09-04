<p>Liebe <strong>{{ $admin_name }}</strong>,</p>
<p>Die <strong>{{ $template_name }}</strong> Die Instanzvorlage wurde erfolgreich erstellt.</p>
<p>Details der Instanzvorlage:</p>
<table>
    <tbody>
    <tr>
        <th>ID</th>
        <td>#{{ $template_id }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ $template_name }}</td>
    </tr>
    <tr>
        <th>WordPress-Version</th>
        <td>{{ $wordpress_version }}</td>
    </tr>
    </tbody>
</table>
