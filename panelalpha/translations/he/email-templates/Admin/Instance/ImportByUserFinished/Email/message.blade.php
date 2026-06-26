<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>ה <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}" target="_blank">{{ $instance_name }}</a></strong>מופע על ידי    <strong><a href="{{ $admin_url }}/users/{{ $client_id }}">{{ $client_name }}</a></strong> has been imported
    successfully.</p>
<p>פרטי המופע:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">שם האתר</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">דומיין</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">כתובת URL</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
<p>פרטי המשתמש:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">שם</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">חברה</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">אימייל</th>
        <td>
            <a href="mailto:{{$client_email_address}}">{{$client_email_address}}</a>
        </td>
    </tr>
    </tbody>
</table>

@if (!empty($skipped_files))
    @php
        $skippedCount = count($skipped_files);
        $skippedPreview = array_slice($skipped_files, 0, 10);
    @endphp

    <p><strong>אזהרה:</strong> {{ $skippedCount }} {{ $skippedCount === 1 ? 'file was' : 'files were' }} במהלך ההעברה.</p>

    @if ($skippedCount > 0)
        <ul>
            @foreach ($skippedPreview as $file)
                <li>{{ $file }}</li>
            @endforeach
        </ul>

        @if ($skippedCount > 10)
            <p>מציג את 10 הקבצים הראשונים.</p>
        @endif
    @endif
@endif
