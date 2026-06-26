<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>השירות <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> בוטלה השעייתו בהצלחה.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Unsuspend of service
            remotely failed.<br><strong>הודעת חריגה: </strong>{{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">Service has been
            unsuspended remotely.
        </div>
    @endif
@endif
