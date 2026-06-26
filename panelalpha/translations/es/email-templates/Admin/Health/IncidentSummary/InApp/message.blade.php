{{ $total_incidents }} incidente{{ $total_incidents !== 1 ? 's' : '' }} del sistema detectado{{ $total_incidents !== 1 ? 's' : '' }}: @foreach($groups as $group)
    {{ count($group['entities']) }} {{ Str::lower($group['entity_type_label']) }}{{ !$loop->last ? ', ' : '' }}
@endforeach