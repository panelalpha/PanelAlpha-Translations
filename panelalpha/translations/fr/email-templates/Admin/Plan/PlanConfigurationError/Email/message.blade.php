</p> <p><strong>{{ $admin_name }}</strong>,</p> <p>Il semble y avoir un problème avec le plan.
<p>Il semble y avoir un problème avec le plan <strong><a href="{{ $admin_url }}/plans/{{ $plan_id }}"
                                                   target="_blank">{{ $plan_name }}</a></strong>. Le message d'erreur est
    comme suit:</p> <p>Message
<p>Message : {{ $exception_message }}</p> <p>Message : {{ $exception_message }}
</p> <p>Détails du plan:</p> <p>Tableau
<table>
    <tbody>
    <tr>
        <th>Plan</th>
        <td>#{{ $plan_id }} {{ $plan_name }}</td>
    </tr>

    <tr>
        <th>Serveur</th>
        @if($server_id)
            <td>#{{ $server_id }} {{ $server_name }}</td>
        @else
            <td>{{ $plan_server_type }}</td>
        @endif
    </tr>
    @isset($dns_server_id)
        <tr>
            <th>Serveur DNS</th>
            <td>#{{ $dns_server_id }} {{ $dns_server_name }} @if($dns_server_internal)
                    (Interne)
                @endif</td>
        </tr>
    @endisset
    @isset($email_server_id)
        <tr>
            <th>Serveur de messagerie</th>
            <td>#{{ $email_server_id }} {{ $email_server_name }} @if($email_server_internal)
                    (Interne)
                @endif</td>
        </tr>
    @endisset
    </tbody>
</table>
