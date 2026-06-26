<p>שלום {{ $client_first_name }},</p>
<p>תזכורת: תקופת הניסיון החינמית שלך מסתיימת בעוד {{ $before_expiration_days }} ימים עבור:</p>
<ul>
    @foreach($trial_instances as $instance)
    <li>{{ $instance['name'] }} (<a href="{{ $instance['url'] }}">{{ $instance['domain'] }}</a>)</li>
    @endforeach
</ul>
<p>אנו מקווים שנהנית לחקור את הכלים ולבנות את האתרים שלך! כדי לשמור על החשבון פעיל ועל העבודה שלך שמורה, הקפד לשדרג לתוכנית מלאה לפני שתקופת הניסיון תפוג.</p>
<p><a href="{{ $trial_upgrade_url }}">שדרג את התוכנית שלך היום</a>.</p>