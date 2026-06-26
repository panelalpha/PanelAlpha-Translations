{{ $total_incidents }} אירוע מערכתי{{ $total_incidents !== 1 ? 's' : '' }} זוהו: @foreach($groups as $group)
    {{ count($group['entities']) }} {{ Str::lower($group['entity_type_label']) }}{{ !$loop->last ? ', ' : '' }}
@endforeach
