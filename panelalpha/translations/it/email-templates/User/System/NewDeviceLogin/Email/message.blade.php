<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>Sembra che su <strong>{{ $formatted_date }}</strong> at <strong>{{ $formatted_time }}</strong> hai effettuato l'accesso
    a{{$app_name }} utilizzando un nuovo dispositivo. I dettagli del tentativo di accesso sono i seguenti: </p>
<tabella>
    <tbody>
    <tr>
        <th>Indirizzo IP</th>
        <td>{{ $ip_address }}</td>.
    </tr>.
    @if ($location !== '')
        <tr>
            <th>Location</th>
            <td>{{ $location }}</td>.
        </tr>.
    @endif
    <tr>
        <th>Dispositivo</th>
        <td>{{ $device }}</td>.
    </tr>.
    <tr>
        <th>Browser</th>
        <td>{{ $browser }}</td>.
    </tr>.
    </tbody>
</tab>.
<p>Questo nuovo dispositivo è stato aggiunto all'elenco dei dispositivi noti di PanelAlpha: <a
        href="{{ $devices_list_url }}">{{ $devices_list_url }}</a></p>
<p>Se non lo riconoscete, assicuratevi di rimuovere il record e di aggiornare immediatamente la password. Una password non autorizzata
    persona potrebbe aver avuto accesso al vostro{{ $app_name }} conto.</p>
<div style="width: 100%; text-align: center; margin-top: 32px;">.
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>.
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color:{{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Cambia la password </a> <!-- [if mso]>
        </v:roundrect>
        </center>.
        <![endif]--></p>
</div>
