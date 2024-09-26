<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>Voici une liste des instances qui peuvent nécessiter des mises à jour de WordPress:</p>
@foreach($users_with_instances_to_update as $user)
    <p><strong>#{{ $user['user_id'] }} {{ $user['user_name'] }}</strong></p>
    <table style="margin-top: 16px; padding: 10px 16px;">
        <tbody>
        @foreach($user['items'] as $item)
            <tr style="margin-top: 8px;">
                <td style="padding-left: 20px;"><strong>{{ $item["instance_name"] }}</strong><br><a
                        href="{{ $item['instance_url'] }}">{{ $item["instance_url"] }}</a></td>
                <td>{{ $item["instance_version"] }} 🠒 {{ $item["update_version"] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endforeach