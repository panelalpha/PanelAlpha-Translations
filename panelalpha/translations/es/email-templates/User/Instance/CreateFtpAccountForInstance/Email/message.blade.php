<p>Estimado <strong>{{ $nombre_del_cliente }}</strong>,</p> <p>Su cuenta FTP/SFTP ha sido creada para la instancia <strong>{{ $instance_name }}.
<p>Su cuenta FTP/SFTP ha sido creada para la instancia <strong>{{ $instance_name }}</strong>.</p>
<p>Aquí tienes tus datos de acceso:</p>
<table>
    <tbody>
    <tr>
        <th>Nombre de usuario</th>
        <td>{{ $username }}</td>
    </tr>
    <tr>
        <th>Contraseña</th>
        <td>{{ $contraseña }}</td>
    </tr>
    <tr>
        <th>Host</th>
        <td>{{ $host }}</td>
    </tr>
    <tr>
        <th>Puerto</th>
        <td>{{ $port }}</td>
    </tr>
    </tbody>
</table>
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
