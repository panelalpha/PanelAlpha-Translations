<p>Sehr geehrte/r <strong>{{ $client_first_name }}</strong>,</p>
<p><strong>{{ $inviting_name }}</strong> hat Sie zur Verwaltung der WordPress-Instanz <strong>{{ $instance_name }}</strong> eingeladen.</p>
<p>Instanzdetails:</p>
<table>
    <tbody>
    <tr>
        <th>Standortname</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domäne</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    <tr>
        <th>Berechtigungen</th>
        <td>
            @foreach($privileges as $privilege)
                <p style="margin: 0;">{{ str_replace('_', ' ', $privilege) }}</p>
            @endforeach
        </td>
    </tr>
    </tbody>
</table>
<p>Bitte klicken Sie auf die Schaltfläche unten, um auf die WordPress-Instanz zuzugreifen.</p>
<div style="width: 100%; text-align: center; margin-top: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $access_url }} " style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color:{{$branding_color}}border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $access_url }} "> Jetzt einloggen</a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
