<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>A criação <strong>{{ $template_name }}</strong> falha no modelo de instância.</p>
<p>Mensagem:{{ $exception_message }}</p>
<table>
    <tbody>
    <tr>
        <th>ID</th>
        <td>#{{ $template_id }}</td>
    </tr>
    <tr>
        <th>Nome</th>
        <td>{{ $template_name }}</td>
    </tr>
    <tr>
        <th>Versão do WordPress</th>
        <td>{{ $wordpress_version }}</td>
    </tr>
    </tbody>
</table>
