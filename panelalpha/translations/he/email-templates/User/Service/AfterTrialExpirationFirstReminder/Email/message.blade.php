<p>שלום {{ $client_first_name }},</p>
<p>אנחנו יודעים שהחיים עמוסים. תקופת הניסיון שלך הסתיימה עבור:</p>
<ul>
    @foreach($trial_instances as $instance)
    <li>{{ $instance['name'] }} (<a href="{{ $instance['url'] }}">{{ $instance['domain'] }}</a>)</li>
    @endforeach
</ul>
<p>אך כל מה שיצרת והגדרת עדיין שם, ממתין לך.</p>
<p>בכל עת שתהיה מוכן, תוכל להמשיך מאיפה שהפסקת. אין צורך להתחיל מההתחלה.</p>
<p><a href="{{ $trial_upgrade_url }}">שחזר את החשבון שלי</a></p>
<p>אנחנו כאן אם תזדקק לעזרה.</p>