<p>Sehr geehrte/r <strong>{{ $client_first_name }}</strong>,</p>
<p>Es scheint, dass Sie sich am <strong>{{ $formatted_date }}</strong> um <strong>{{ $formatted_time }}</strong> über das
    <strong>{{ $app_name }}</strong> System angemeldet haben, unter Verwendung eines neuen Geräts. Die Details des
    Anmeldeversuchs sind wie folgt:</p>
<table>
    <tbody>
    <tr>
        <th>Ip-Adresse</th>
        <td>{{ $ip_address }}</td>
    </tr>
    @if ($location !== '')
        <tr>
            <th>Standort</th>
            <td>{{ $location }}</td>
        </tr>
    @endif
    <tr>
        <th>Gerät</th>
        <td>{{ $device }}</td>
    </tr>
    <tr>
        <th>Browser</th>
        <td>{{ $browser }}</td>
    </tr>
    </tbody>
</table>
<p>Dieses neue Gerät wurde zu Ihrer Liste der bekannten Geräte bei <strong>{{ $app_name }}</strong> hinzugefügt: <a
        href="{{ $devices_list_url }}">{{ $devices_list_url }}</a></p>
<p>Wenn das nicht Ihr Gerät ist, entfernen Sie den Eintrag und aktualisieren Sie Ihr Passwort sofort. Ein Unbefugter
    Person Zugang zu Ihren Daten erhalten haben könnte <strong>{{ $app_name }}</strong> Konto.</p>
<div style="width: 100%; text-align: center; margin-top: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color:{{$branding_color}}border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Passwort ändern </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
