<p>Estimado/a <strong>{{ $client_first_name }}</strong>,</p>
<p>El auto-deploy para <strong>{{ $instance_name }}</strong> se ha completado con éxito.</p>
<p>Rama: {{ $git_branch }}<br>Commit: {{ $git_commit_hash }} — {{ $git_commit_message }}</p>
<p>Detalles de la instancia:</p>
<table>
    <tbody>
    <tr>
        <th>Nombre del sitio</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Dominio</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>