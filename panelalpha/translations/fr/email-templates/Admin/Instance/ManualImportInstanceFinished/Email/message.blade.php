<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>L'importation manuelle de l'instance <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}" target="_blank">{{ $instance_name }}</a></strong> a été complétée.</p>
<p>Détails de l'importation:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Importation</th>
        <td>#{{ $import_id }} {{ $import_domain }}</td>
    </tr>
    </tbody>
</table>
<p>Détails de l'instance:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domaine</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>