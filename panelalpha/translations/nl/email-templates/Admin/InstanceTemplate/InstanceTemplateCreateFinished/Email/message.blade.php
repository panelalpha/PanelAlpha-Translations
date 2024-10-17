<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The <strong>{{ $template_name }}</strong> instance template has been created successfully.</p>
<p>Instance Template details:</p>
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
        <th>WordPress Version</th>
        <td>{{ $wordpress_version }}</td>
    </tr>
    </tbody>
</table>
