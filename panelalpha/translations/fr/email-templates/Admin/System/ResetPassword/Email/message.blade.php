<p>Cher <strong>{{ $admin_name }}</strong>,</p>
<p>Nous avons reçu une demande de réinitialisation du mot de passe pour votre compte.</p>
<p>Pour réinitialiser votre mot de passe, cliquez sur le bouton ci-dessous :</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Réinitialiser le mot de passe </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
<p>Ou copiez et collez l'URL dans votre navigateur :</p>
<a href="{{ $reset_password_url }}">{{ $reset_password_url }}</a>
<p>Ce lien de réinitialisation du mot de passe expirera dans <strong>{{ $expire_time }}</strong> minutes.</p>
<p>Si vous n'avez pas demandé de réinitialisation de mot de passe, aucune autre action n'est requise.</p>
