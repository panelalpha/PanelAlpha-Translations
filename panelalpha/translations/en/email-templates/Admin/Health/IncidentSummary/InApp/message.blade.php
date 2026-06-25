{{ $total_incidents }} system incident{{ $total_incidents !== 1 ? 's' : '' }} detected: @foreach($groups as $group)
    {{ count($group['entities']) }} {{ Str::lower($group['entity_type_label']) }}{{ !$loop->last ? ', ' : '' }}
@endforeach
