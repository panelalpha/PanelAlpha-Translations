<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>It appears that on <strong>{{ $formatted_date }}</strong> at <strong>{{ $formatted_time }}</strong> you logged in
    to {{$app_name }} using a new device. The details of the login attempt are as follows:</p>
<table>
    <tbody>
    <tr>
        <th>Ip Address</th>
        <td>{{ $ip_address }}</td>
    </tr>
    @if ($location !== '')
        <tr>
            <th>Location</th>
            <td>{{ $location }}</td>
        </tr>
    @endif
    <tr>
        <th>Device</th>
        <td>{{ $device }}</td>
    </tr>
    <tr>
        <th>Browser</th>
        <td>{{ $browser }}</td>
    </tr>
    </tbody>
</table>
<p>This new device has been added to your list of known devices at PanelAlpha: <a
        href="{{ $devices_list_url }}">{{ $devices_list_url }}</a></p>
<p>If you do not recognize it, be sure to remove the record, and update your password immediately. An unauthorized
    person could have gained access to your {{ $app_name }} account.</p>
<div style="width: 100%; text-align: center; margin-top: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Change Password </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
