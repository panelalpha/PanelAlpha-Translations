<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>Below is a list of instances that may require themes updates:</p>
@foreach ($users_with_themes_to_update as $user)
    <p><strong>#{{ $user['user_id'] }} {{ $user['user_name'] }}</strong></p>
    @foreach ($user['items'] as $item)
        <table style="margin-top: 16px; padding: 10px 16px;">
            <tbody>
            <tr style="margin-bottom: 10px;">
                <td><strong>{{ $item["instance_name"] }}</strong><br><a
                        href="{{ $item['instance_url'] }}">{{ $item["instance_url"] }}</a></td>
            </tr>
            <tr style="outline: 1px solid #f2f2f2;"></tr>
            <tr style="margin-top: 8px;">
                <td style="padding-left: 20px;">
                    <ul style="padding: 0; margin: 0;">@foreach ($item["themes"] as $theme)
                            <li>{{ $theme["title"] }} ({{ $theme["version"] }} 🠒 {{ $theme["update_version"] }})</li>
                        @endforeach</ul>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach
@endforeach
