{{ $total_incidents }} incident{{ $total_incidents !== 1 ? 'i' : 'e' }} di sistema rilevati: @foreach($groups as $group)
    {{ count($group['entities']) }} {{ Str::lower($group['entity_type_label']) }}{{ !$loop->last ? ', ' : '' }}
@endforeach