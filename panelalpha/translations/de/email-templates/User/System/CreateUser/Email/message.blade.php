<p>Sehr geehrte/r <strong>{{ $Kunden_Vorname }}</strong>,</p>
<p>Ihr Konto wurde erfolgreich erstellt und Sie haben Zugang zu unserem Control Panel.</p>
<p>Bitte loggen Sie sich über die folgende Schaltfläche ein:</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $app_url }}/login" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $app_url }}/login">Zugang zu unserem Kontrollzentrum </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
<p>Verwenden Sie die folgenden Anmeldedaten für den Zugang:</p>
<p>Email: {{ $email }}</p>
<p>Passwort: {{ $plain_password }}</p>
<p>Aus Sicherheitsgründen empfehlen wir Ihnen dringend, Ihr Passwort bei Ihrer ersten Anmeldung zu ändern.</p>
<p>Wenn Sie weitere Hilfe benötigen, wenden Sie sich bitte an unser Support-Team.</p>
