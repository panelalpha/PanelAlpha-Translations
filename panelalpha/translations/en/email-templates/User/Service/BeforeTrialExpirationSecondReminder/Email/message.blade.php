<p>Hi {{ $client_first_name}},</p>
<p>Your trial ends in just {{ $before_expiration_days }} days for:</p>
<ul>
    @foreach($trial_instances as $instance)
    <li>{{ $instance['name'] }} (<a href="{{ $instance['url'] }}">{{ $instance['domain'] }}</a>)</li>
    @endforeach
</ul>
<p>If you've started working with your WordPress, now's the time to upgrade so you don't lose access.</p>
<p>You've put in effort — don't let it go to waste. Pick a plan that fits your needs and keep building and maintaining.</p>
<p><a href="{{ $trial_upgrade_url }}">Upgrade Now</a></p>