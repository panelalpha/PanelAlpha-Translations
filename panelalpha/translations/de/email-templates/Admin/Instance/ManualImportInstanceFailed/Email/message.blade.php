<p>Liebe <strong>{{ $admin_name }}</strong>,</p>
<p>Der manuelle Import der <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                      target="_blank">{{ $instance_name }}</a></strong> Instanz fehlgeschlagen.</p>
<p>Mitteilung:{{ $exception_message }}</p>
<p>Einzelheiten zum Import:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Import</th>
        <td>#{{ $import_id }} {{ $import_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Status</th>
        <td>{{ $import_status }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Mitteilung</th>
        <td>{{ $import_message }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Aktueller Schritt</th>
        <td>{{ $import_current_step  }}</td>
    </tr>
    </tbody>
</table>
<p>Instanzdetails:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Seitenname</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domain</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>

