<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>L'importazione manuale del <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                       target="_blank">{{ $instance_name }}</a></strong> è stata completata.
</p>
<p>Dettagli dell'importazione:</p>
<tabella>
    <tbody>
    <tr>
        <th style="width: 33%;">Importa</th>
        <td>#{{ $import_id }} {{ $import_domain }}</td>.
    </tr>.
    </tbody>
</tab>.
<p>Dettagli dell'istanza:</p>
<tabella>
    <tbody>
    <tr>
        <th style="width: 33%;">Nome del sito</th>
        <td>{{ $instance_name }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Dominio</th>
        <td>{{ $instance_domain }}</td>.
    </tr>.
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>.
    </tbody>
</tab>.

