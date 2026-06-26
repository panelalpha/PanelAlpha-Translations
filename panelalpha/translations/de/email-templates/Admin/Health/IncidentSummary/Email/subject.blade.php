@if($total_incidents === 1)
    1 Systemvorfall erkannt
@else
    {{ $total_incidents }} Systemvorfälle erkannt
@endif