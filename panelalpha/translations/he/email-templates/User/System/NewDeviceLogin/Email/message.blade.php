<p>שלום <strong>{{ $client_first_name }}</strong>,</p>
<p>נראה שבתאריך <strong>{{ $formatted_date }}</strong> בשעה <strong>{{ $formatted_time }}</strong> you logged in
    to {{$app_name }} באמצעות מכשיר חדש. פרטי ניסיון ההתחברות הם כדלקמן:</p>
<table>
    <tbody>
    <tr>
        <th>כתובת IP</th>
        <td>{{ $ip_address }}</td>
    </tr>
    @if ($location !== '')
        <tr>
            <th>מיקום</th>
            <td>{{ $location }}</td>
        </tr>
    @endif
    <tr>
        <th>מכשיר</th>
        <td>{{ $device }}</td>
    </tr>
    <tr>
        <th>דפדפן</th>
        <td>{{ $browser }}</td>
    </tr>
    </tbody>
</table>
<p>מכשיר חדש זה נוסף לרשימת המכשירים המוכרים שלך ב-PanelAlpha: <a
        href="{{ $devices_list_url }}">{{ $devices_list_url }}</a></p>
<p>If you do not recognize it, be sure to remove the record, and update your password immediately. An unauthorized
    person could have gained access to your {{ $app_name }} שלך.</p>
<div style="width: 100%; text-align: center; margin-top: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> שינוי סיסמה </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
