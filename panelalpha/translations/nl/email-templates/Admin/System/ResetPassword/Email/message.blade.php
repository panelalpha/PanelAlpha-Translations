<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>We hebben een verzoek ontvangen om het wachtwoord voor je account opnieuw in te stellen.</p>
<p>Om je wachtwoord te resetten, klik op de knop hieronder:</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Wachtwoord resetten </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
<p>Of kopieer en plak de URL in je browser:</p>
<a href="{{ $reset_password_url }}">{{ $reset_password_url }}</a>
<p>Deze link voor het resetten van het wachtwoord verloopt over <strong>{{ $expire_time }}</strong> minuten.</p>
<p>Als je geen wachtwoordreset hebt aangevraagd, is er geen verdere actie nodig.</p>
