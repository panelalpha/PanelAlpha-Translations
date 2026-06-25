<p>Dear <strong>{{ $client_first_name }}</strong>,</p>
<p>Your site <strong>{{ $import_from_domain }}</strong> has been successfully imported to {{ $app_name }}! You can now proceed to manage it in our system at {{ $app_url }}.</p>

@if ($import_from_domain != $instance_domain)
    <p>Your instance has been set on a temporary domain: {{ $instance_domain }}</p>
    <p>Once you are ready to go live, you can change it later in our control panel.</p>
@else
    <p>The next step is to point your domain to our name servers. There are two methods to do that:</p>
    <p>OPTION 1: Set DNS Records</p>
    <p>Set the DNS records for the <strong>{{ $instance_domain }}</strong> domain:</p>
    <ul>
        <li>{{ $instance_domain }} (or @) A {{ $ip_address }}</li>
        <li>www.{{ $instance_domain }} CNAME {{ $instance_domain }}</li>
    </ul>
    <p>OPTION 2: Change Name Servers</p>
    <p>Change your domain's nameservers to:</p>
    <ul>
        @foreach ($dns_nameservers as $ns)
        <li>{{ $ns }}</li>
        @endforeach
    </ul>
    <p><strong>Please note:</strong> Using this method will not migrate your DNS records from the current provider. You will have to set the records again in our system.</p>
@endif

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
