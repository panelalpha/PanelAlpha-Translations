<p>Dear <strong>{{ $client_first_name }}</strong>,</p>
<p>Auto-deploy for <strong>{{ $instance_name }}</strong> has been completed successfully.</p>
<p>Branch: {{ $git_branch }}<br>Commit: {{ $git_commit_hash }} — {{ $git_commit_message }}</p>
<p>Instance details:</p>
<table>
    <tbody>
    <tr>
        <th>Site Name</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domain</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
