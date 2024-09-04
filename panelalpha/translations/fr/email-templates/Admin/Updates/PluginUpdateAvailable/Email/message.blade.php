</p> <p>Cher <strong>Chez nous</strong>{{ $admin_name }}</strong>,</p> <p>
</p> <p>Voici une liste d'instances qui peuvent nécessiter des mises à jour de plugins:</p> <p>La liste des instances qui peuvent nécessiter des mises à jour de plugins est la suivante
@foreach ($users_with_plugins_to_update as $user)
    <p><strong>#{{ $user['user_id'] }} {{ $user['user_name'] }}
    @foreach ($user['items'] as $item)
        <table style="margin-top : 16px ; padding : 10px 16px ;">
            <tbody>
            <tr class="table-row" style="margin-bottom : 10px ;">
                <td><strong>Les{{ $item["instance_name"] }}</strong><br><a
                        href="{{ $item['instance_url'] }}">{{ $item["instance_url"] }}</a></td>
            </tr>
            <tr style="outline : 1px solid #f2f2f2 ;"></tr>
            <tr style="margin-top : 8px ;">
                <td style="padding-left : 20px ;">
                    <ul style="padding : 0 ; margin : 0 ;">@foreach ($item["plugins"] as $plugin)
                            <li>{{ $plugin["title"] }} ({{ $plugin["version"] }} 🠒 {{ $plugin["update_version"] }})</li>
                        @endforeach</ul>
                </td>
            </tr>
            </tbody>
        </tableau>
    @endforeach
@endforeach
