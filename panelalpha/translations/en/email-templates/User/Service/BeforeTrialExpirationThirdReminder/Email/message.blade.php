<p>Hi {{ $client_first_name }},</p>
<p>This is a final reminder - your free trial ends tomorrow for:</p>
<ul>
    @foreach($trial_instances as $instance)
    <li>{{ $instance['name'] }} (<a href="{{ $instance['url'] }}">{{ $instance['domain'] }}</a>)</li>
    @endforeach
</ul>
<p>After that, you will lose access to the control panel to manage and maintain your WordPress. It will not be accessible unless you upgrade to a paid plan.</p>
<p>Don't lose your progress. Upgrade now and stay in the game!</p>
<p><a href="{{ $trial_upgrade_url }}">Upgrade Now</a></p>