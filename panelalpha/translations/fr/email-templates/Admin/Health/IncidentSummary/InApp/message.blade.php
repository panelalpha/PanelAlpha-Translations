{{ $total_incidents }} incident{{ $total_incidents !== 1 ? 's' : '' }} syst&egrave;me d&eacute;tect&eacute;{{ $total_incidents !== 1 ? 's' : '' }}&nbsp;: @foreach($groups as $group)
    {{ count($group['entities']) }} {{ Str::lower($group['entity_type_label']) }}{{ !$loop->last ? ', ' : '' }}
@endforeach
