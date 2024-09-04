</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
<p>L'importation de la <strong><a href=""{{ $admin_url }}/instances/{{ $instance_id }}"
                                      target="_blank">{{ $instance_name }}</a></strong> instance par <strong><a
            href="{{ $admin_url }}/users/{{ $client_id }}">{{ $client_name }}</a></strong> a échoué.
</p>
<p>Message :{{ $exception_message }}</p>
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
</p> <p>Détails de l'utilisateur:</p> <p>Les détails de l'utilisateur sont les suivants
<b>Tableau>
    <tbody>
    <tr>
        <th style="width : 33% ;">Nom</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">Entreprise</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width : 33% ;">E-mail</th>
        <td>
            <a href="mailto :{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</tableau>
