<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>L'auto-deploy per <strong>{{ $instance_name }}</strong> non è riuscito.</p>
<p>Messaggio: {{ $exception_message }}</p>
<p>Dettagli dell'istanza:</p>
<table>
    <tbody>
    <tr>
        <th>Nome del sito</th>
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
<p>Aprire le impostazioni Git in PanelAlpha per risolvere il problema.</p>