<p>Querido <strong>{ $nombre_del_cliente }}</strong>,</p> <p>
<p>El push a staging desde <strong>{ $nombre_de_instancia }}</strong> se ha completado con éxito.</p>
<p>Detalles de la instancia:</p>
<table>
    <tbody>
    <tr>
        <th>Nombre del sitio</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Dominio</th>
        <td>{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
