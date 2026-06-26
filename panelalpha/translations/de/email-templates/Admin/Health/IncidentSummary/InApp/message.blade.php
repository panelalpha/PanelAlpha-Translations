{{ $total_incidents }} Systemvorfall{{ $total_incidents !== 1 ? 'e' : '' }} erkannt: @foreach($groups as $group)
    {{ count($group['entities']) }} {{ Str::lower($group['entity_type_label']) }}{{ !$loop->last ? ', ' : '' }}
@endforeach