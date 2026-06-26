{{ $total_incidents }} incidente{{ $total_incidents !== 1 ? 's' : '' }} do sistema detectado{{ $total_incidents !== 1 ? 's' : '' }}: @foreach($groups as $group)
    {{ count($group['entities']) }} {{ Str::lower($group['entity_type_label']) }}{{ !$loop->last ? ', ' : '' }}
@endforeach