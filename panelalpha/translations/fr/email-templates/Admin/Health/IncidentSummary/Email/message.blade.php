<p>Bonjour <strong>{{ $admin_name }}</strong>,</p>

<p>Les incidents syst&egrave;me suivants ont &eacute;t&eacute; d&eacute;tect&eacute;s&nbsp;:</p>

<p><strong>Donn&eacute;es de la derni&egrave;re heure ({{ $time_from }} - {{ $time_to }})</strong></p>

@foreach($groups as $group)
    <p><strong>{{ $group['entity_type_label'] }}</strong></p>
    @foreach($group['entities'] as $entity)
        <p><strong>#{{ $entity['entity_id'] }} {{ $entity['entity_title'] }}</strong>@if($entity['entity_subtitle'])
                ({{ $entity['entity_subtitle'] }})
            @endif</p>
        <ul>
            @foreach($entity['incidents'] as $incident)
                <li style="margin-bottom: 6px;">
                    <span>{{ $incident['incident_label'] }}&nbsp;: {{ $incident['incident_occurrences'] }} occurrence(s)</span><br>
                    @if($incident['incident_suggestion'])<span style="font-style: italic;">{{ $incident['incident_suggestion'] }}</span>@endif
                </li>
            @endforeach
        </ul>
    @endforeach
@endforeach
