{{ $total_incidents }} systeemincident{{ $total_incidents !== 1 ? 'en' : '' }} gedetecteerd: @foreach($groups as $group)
    {{ count($group['entities']) }} {{ Str::lower($group['entity_type_label']) }}{{ !$loop->last ? ', ' : '' }}
@endforeach