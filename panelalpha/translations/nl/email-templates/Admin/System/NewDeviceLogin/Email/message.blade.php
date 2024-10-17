<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>Het lijkt erop dat je op <strong>{{ $formatted_date }}</strong> om <strong>{{ $formatted_time }}</strong> hebt ingelogd
    op {{$app_name }} met een nieuw apparaat. De details van de inlogpoging zijn als volgt:</p>
<table>
    <tbody>
    <tr>
        <th>IP-adres</th>
        <td>{{ $ip_address }}</td>
    </tr>
    @if ($location !== '')
        <tr>
            <th>Locatie</th>
            <td>{{ $location }}</td>
        </tr>
    @endif
    <tr>
        <th>Apparaat</th>
        <td>{{ $device }}</td>
    </tr>
    <tr>
        <th>Browser</th>
        <td>{{ $browser }}</td>
    </tr>
    </tbody>
</table>
<p>Dit nieuwe apparaat is toegevoegd aan je lijst met bekende apparaten bij PanelAlpha: <a
        href="{{ $devices_list_url }}">{{ $devices_list_url }}</a></p>
<p>Als je dit niet herkent, zorg ervoor dat je het record verwijdert en je wachtwoord onmiddellijk bijwerkt. Een
    onbevoegd persoon zou mogelijk toegang hebben gekregen tot je {{ $app_name }} account.</p>
<div style="width: 100%; text-align: center; margin-top: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Wachtwoord wijzigen </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
