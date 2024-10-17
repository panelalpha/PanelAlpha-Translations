<p><strong>{{ $client_first_name }}</strong>,</p>
<p>Il semble que le <strong>{{ $formatted_date }}</strong> à <strong>{{ $formatted_time }}</strong>, vous vous êtes connecté(e) à <strong>{{ $app_name }}</strong> en utilisant un nouvel appareil. Les détails de la tentative de connexion sont les suivants :</p
<table>
    <tbody>
    <tr>
        <th>Addresse IP</th>
        <td>{{ $ip_address }}</td>
    </tr>
    @if ($location !== '')
        <tr>
            <th>Emplacement</th>
            <td>{{ $location }}</td>
        </tr>
    @endif
    <tr>
        <th>Appareil</th>
        <td>{{ $device }}</td>
    </tr>
    <tr>
        <th>Navigateur</th>
        <td>{{ $browser }}</td>
    </tr>
    </tbody>
</table>
<p>Ce nouvel appareil a été ajouté à votre liste d’appareils connus : <a href="{{ $devices_list_url }}">{{ $devices_list_url }}</a></p>
<p>Si vous ne le reconnaissez pas, assurez-vous de supprimer l’enregistrement et de mettre à jour votre mot de passe immédiatement. Une personne non autorisée pourrait avoir accédé à votre compte {{ $app_name }}.</p>

<div style="width: 100%; text-align: center; margin-top: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Modifier le mot de passe </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
