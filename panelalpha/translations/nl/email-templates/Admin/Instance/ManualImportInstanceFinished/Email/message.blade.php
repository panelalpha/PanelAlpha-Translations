<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De handmatige import van de <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                       target="_blank">{{ $instance_name }}</a></strong> instance is voltooid.
</p>
<p>Importdetails:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Import</th>
        <td>#{{ $import_id }} {{ $import_domain }}</td>
    </tr>
    </tbody>
</table>
<p>Instancegegevens:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Site Naam</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domein</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>