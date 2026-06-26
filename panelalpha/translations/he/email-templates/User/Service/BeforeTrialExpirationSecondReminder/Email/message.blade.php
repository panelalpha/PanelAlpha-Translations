<p>שלום {{ $client_first_name}},</p>
<p>תקופת הניסיון שלך מסתיימת בעוד {{ $before_expiration_days }} ימים עבור:</p>
<ul>
    @foreach($trial_instances as $instance)
    <li>{{ $instance['name'] }} (<a href="{{ $instance['url'] }}">{{ $instance['domain'] }}</a>)</li>
    @endforeach
</ul>
<p>אם התחלת לעבוד עם ה-WordPress שלך, עכשיו הזמן לשדרג כדי לא לאבד גישה.</p>
<p>You've put in effort — don't let it go to waste. Pick a plan that fits your needs and keep building and maintaining.</p>
<p><a href="{{ $trial_upgrade_url }}">שדרג עכשיו</a></p>