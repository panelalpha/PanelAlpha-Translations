<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De creatie van het <strong>{{ $template_name }}</strong> instantie-sjabloon is mislukt.</p>
<p>Bericht: {{ $exception_message }}</p>
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
