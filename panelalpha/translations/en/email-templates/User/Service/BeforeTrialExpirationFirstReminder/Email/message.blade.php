<p>Hi {{ $client_first_name }},</p>
<p>Just a reminder that your free trial ends in {{ $before_expiration_days }} days for:</p>
<ul>
    @foreach($trial_instances as $instance)
    <li>{{ $instance['name'] }} (<a href="{{ $instance['url'] }}">{{ $instance['domain'] }}</a>)</li>
    @endforeach
</ul>
<p>We hope you've enjoyed exploring the tools and building your websites! To keep your account live and your work saved, be sure to upgrade to a full plan before your trial expires.</p>
<p><a href="{{ $trial_upgrade_url }}">Upgrade your plan today</a>.</p>