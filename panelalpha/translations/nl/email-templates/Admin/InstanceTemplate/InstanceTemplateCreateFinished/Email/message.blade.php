<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De <strong>{{ $template_name }}</strong> instantie-sjabloon is succesvol aangemaakt.</p>
<p>Details van het instantie-sjabloon:</p>
<table>
    <tbody>
    <tr>
        <th>ID</th>
        <td>#{{ $template_id }}</td>
    </tr>
    <tr>
        <th>Naam</th>
        <td>{{ $template_name }}</td>
    </tr>
    <tr>
        <th>WordPress Versie</th>
        <td>{{ $wordpress_version }}</td>
    </tr>
    </tbody>
</table>