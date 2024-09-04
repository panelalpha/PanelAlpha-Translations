<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>A continuación se muestra una lista de instancias que pueden requerir actualizaciones de temas:</p> <p>
@foreach ($users_with_themes_to_update as $user)
    <p><strong>#{{ $user['user_id'] }} {{ $user['user_name'] }}</strong></p>
    @foreach ($user['artículos'] as $item)
        <table style="margin-top: 16px; padding: 10px 16px;">
            <cuerpo>
            <tr style="margin-bottom: 10px;">
                <td><strong>{{ $item["instance_name"] }}</strong><br><a
                        href="{{ $item['instance_url'] }}">{{ $item["instance_url"] }}</a></td>
            </tr>
            <tr style="outline: 1px solid #f2f2f2;"></tr>
            <tr style="margin-top: 8px;">
                <td style="padding-left: 20px;">
                    <ul style="padding: 0; margin: 0;">@foreach ($item["temas"] as $theme)
                            <li>{{ $theme["title"] }} ({{ $theme["version"] }} 🠒 {{ $theme["update_version"] }})</li> <li>
                        @endforeach</ul>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach
@endforeach
