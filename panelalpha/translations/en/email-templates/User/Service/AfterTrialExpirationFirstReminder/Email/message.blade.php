<p>Hi {{ $client_first_name }},</p>
<p>We know life gets busy. Your trial has ended for:</p>
<ul>
    @foreach($trial_instances as $instance)
    <li>{{ $instance['name'] }} (<a href="{{ $instance['url'] }}">{{ $instance['domain'] }}</a>)</li>
    @endforeach
</ul>
<p>But everything you created and configured is still there, waiting for you.</p>
<p>Whenever you're ready, you can pick up where you left off. There's no need to start from scratch.</p>
<p><a href="{{ $trial_upgrade_url }}">Restore My Account</a></p>
<p>We're here if you need anything.</p>