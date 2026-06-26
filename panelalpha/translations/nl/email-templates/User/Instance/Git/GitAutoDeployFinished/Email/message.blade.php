<p>Beste <strong>{{ $client_first_name }}</strong>,</p>
<p>Auto-deploy voor <strong>{{ $instance_name }}</strong> is succesvol voltooid.</p>
<p>Branch: {{ $git_branch }}<br>Commit: {{ $git_commit_hash }} — {{ $git_commit_message }}</p>
<p>Instantiegegevens:</p>
<table>
    <tbody>
    <tr>
        <th>Site naam</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domein</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>