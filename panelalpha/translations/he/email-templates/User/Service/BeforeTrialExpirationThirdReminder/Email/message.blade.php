<p>שלום {{ $client_first_name }},</p>
<p>זוהי תזכורת אחרונה - תקופת הניסיון החינמית שלך מסתיימת מחר עבור:</p>
<ul>
    @foreach($trial_instances as $instance)
    <li>{{ $instance['name'] }} (<a href="{{ $instance['url'] }}">{{ $instance['domain'] }}</a>)</li>
    @endforeach
</ul>
<p>לאחר מכן, תאבד את הגישה ללוח הבקרה לניהול ותחזוקת ה-WordPress שלך. לא תהיה גישה אלא אם תשדרג לתוכנית בתשלום.</p>
<p>אל תאבד את ההתקדמות שלך. שדרג עכשיו והישאר במשחק!</p>
<p><a href="{{ $trial_upgrade_url }}">שדרג עכשיו</a></p>