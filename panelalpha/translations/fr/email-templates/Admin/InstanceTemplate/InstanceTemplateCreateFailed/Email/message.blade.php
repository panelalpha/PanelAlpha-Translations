<p><strong>{{ $admin_name }}</strong>,</p>
<p>La création du modèle d’instance <strong>{{ $template_name }}</strong> a échoué.</p>
<p>Message : {{ $exception_message }}</p>
<table>
    <tbody>
    <tr>
        <th>ID</th>
        <td>#{{ $template_id }}</td>
    </tr>
    <tr>
        <th>Nom</th>
        <td>{{ $template_name }}</td>
    </tr>
    <tr>
        <th>Version de WordPress</th>
        <td>{{ $wordpress_version }}</td>
    </tr>
    </tbody>
</table>
