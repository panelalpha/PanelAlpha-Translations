<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>Recebemos uma solicitação para redefinir a senha de sua conta.</p>
<p>Para redefinir sua senha, clique no botão abaixo:</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color:{{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Redefinir senha </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
<p>Ou copie e cole o URL em seu navegador:</p>
<a href="{{ $reset_password_url }}">{{ $reset_password_url }}</a>
<p>Este link de redefinição de senha expirará em <strong>{{ $expire_time }}</strong> minutos.</p>
<p>Se você não solicitou uma redefinição de senha, nenhuma ação adicional é necessária.</p>
