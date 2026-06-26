<p>שלום {{ $client_first_name }},</p>
<p>תקופת הניסיון החינמית שלך הסתיימה רשמית, והחשבון שלך אינו נגיש עוד לניהול:</p>
<ul>
    @foreach($trial_instances as $instance)
    <li>{{ $instance['name'] }} (<a href="{{ $instance['url'] }}">{{ $instance['domain'] }}</a>)</li>
    @endforeach
</ul>
<p>אך אל דאג, עדיין יש לך זמן להחזיר אותו.</p>
<p><a href="{{ $trial_upgrade_url }}">בחר תוכנית</a> כדי לשחזר את החשבון שלך בדיוק כפי שהשארת אותו ולשמור על התוכן וההגדרות שלך.</p>