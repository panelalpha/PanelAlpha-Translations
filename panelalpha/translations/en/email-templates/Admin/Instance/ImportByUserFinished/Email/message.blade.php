<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}" target="_blank">{{ $instance_name }}</a></strong>
    instance by
    <strong><a href="{{ $admin_url }}/users/{{ $client_id }}">{{ $client_name }}</a></strong> has been imported
    successfully.</p>
<p>Instance Details:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Site Name</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Domain</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
<p>User Details:</p>
<table>
    <tbody>
    <tr>
        <th style="width: 33%;">Name</th>
        <td>{{ $client_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">Company</th>
        <td>{{ $client_company_name }}</td>
    </tr>
    <tr>
        <th style="width: 33%;">E-mail</th>
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

    <p><strong>Warning:</strong> {{ $skippedCount }} {{ $skippedCount === 1 ? 'file was' : 'files were' }} skipped during the migration.</p>

    @if ($skippedCount > 0)
        <ul>
            @foreach ($skippedPreview as $file)
                <li>{{ $file }}</li>
            @endforeach
        </ul>

        @if ($skippedCount > 10)
            <p>Showing the first 10 files.</p>
        @endif
    @endif
@endif
