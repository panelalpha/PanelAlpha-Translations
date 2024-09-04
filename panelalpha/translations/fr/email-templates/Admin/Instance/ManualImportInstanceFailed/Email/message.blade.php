</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
<p>L'importation manuelle de la <strong><a href=""){{ $admin_url }}/instances/{{ $instance_id }}"
                                      target="_blank">{{ $instance_name }}</a></strong> instance failed.</p>
<p>Message :{{ $exception_message }}</p>
</p> <p>Détails de l'importation:</p> <p>Les détails de l'importation
<b>Tableau>
    <tbody>
    <tr>
        <th style="width : 33% ;">Import</th>
        <td>#{{ $import_id }} {{ $import_domain }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Statut</th>
        <td>{{ $import_status }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Message</th>
        <td>{{ $import_message }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Echelon actuel</th>
        <td>{{ $import_current_step  }}</td>
    </tr>
    </tbody>
</tableau>
</p> <p>Détails de l'instance:</p> <p>Les détails de l'instance
<b>Tableau>
    <tbody>
    <tr>
        <th style="width : 33% ;">Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Domaine</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</tableau>

