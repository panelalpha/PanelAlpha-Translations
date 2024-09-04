<p>Liebe <strong>{{ $client_first_name }}</strong>,</p>
<p>Wir haben eine Anfrage zum Zurücksetzen des Passworts für Ihr Konto erhalten.</p>
<p>Um Ihr Passwort zurückzusetzen, klicken Sie auf die Schaltfläche unten:</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color:{{$branding_color}}border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Passwort zurücksetzen </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
<p>Oder kopieren Sie die URL und fügen Sie sie in Ihren Browser ein:</p>
<a href="{{ $reset_password_url }}">{{ $reset_password_url }}</a>
<p>Dieser Link zum Zurücksetzen des Passworts läuft in <strong>{{ $expire_time }}</strong> Minuten.</p>
<p>Wenn Sie keine Rücksetzung des Passworts beantragt haben, sind keine weiteren Maßnahmen erforderlich.</p>
