<p>Hi {{ $client_first_name }},</p>
<p>Your free trial has officially ended, and your account is no longer accessible for managing:</p>
<ul>
    @foreach($trial_instances as $instance)
    <li>{{ $instance['name'] }} (<a href="{{ $instance['url'] }}">{{ $instance['domain'] }}</a>)</li>
    @endforeach
</ul>
<p>But don't worry, you still have time to bring it back.</p>
<p><a href="{{ $trial_upgrade_url }}">Pick a plan</a> to restore your account exactly as you left it and keep your content and settings.</p>