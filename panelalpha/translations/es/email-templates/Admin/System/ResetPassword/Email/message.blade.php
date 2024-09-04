<p>Estimado <strong>{{ $admin_name }}</strong>,</p>
<p>Recibimos una solicitud para restablecer la contraseña de su cuenta.</p> <p>
<p>Para restablecer tu contraseña, haz clic en el siguiente botón:</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!--[if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="color de fondo:{{$branding_color}}border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Restablecer contraseña </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
<p>O copia y pega la URL en tu navegador:</p>
<a href="{{ $reset_password_url }}">{{ $reset_password_url }}</a>
<p>Este enlace de restablecimiento de contraseña caducará en <strong>.{{ $expire_time }}</strong> minutos.</p>
<p>Si no has solicitado un restablecimiento de contraseña, no es necesario que realices ninguna otra acción.</p> <p>Si no has solicitado un restablecimiento de contraseña, no es necesario que realices ninguna otra acción.
