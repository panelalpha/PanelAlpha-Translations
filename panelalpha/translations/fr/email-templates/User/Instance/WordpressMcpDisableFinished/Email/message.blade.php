<p>Cher <strong>{{ $client_first_name }}</strong>,</p>
<p>Le WordPress MCP a &eacute;t&eacute; d&eacute;sactiv&eacute; sur <strong>{{ $instance_name }}</strong>.</p>
<p>D&eacute;tails de l'instance&nbsp;:</p>
<table>
    <tbody>
    <tr>
        <th>Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domaine</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th>URL</th>
        <td><a href="{{ $instance_url }}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
