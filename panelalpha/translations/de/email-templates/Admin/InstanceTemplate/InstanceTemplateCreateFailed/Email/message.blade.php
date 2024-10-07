<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Die Erstellung der <strong>{{ $template_name }}</strong> Instanzvorlage ist fehlgeschlagen.</p>
<p>Fehlernachricht:{{ $exception_message }}</p>
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
