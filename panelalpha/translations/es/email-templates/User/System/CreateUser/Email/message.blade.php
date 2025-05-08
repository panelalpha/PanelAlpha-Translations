<p>Disculpe <strong>{{ $client_first_name }}</strong>,</p> <p>.
<p>Su cuenta ha sido creada con éxito, y tiene acceso a nuestro panel de control.</p>
<p>Por favor, inicie sesión utilizando el siguiente botón:</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $app_url }}/login" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">>
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $app_url }}/login"> Accede a nuestro panel de control </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
<p>Utiliza las siguientes credenciales para acceder:</p>
<p>Correo electrónico: {{ $email }}</p>
<p>Contraseña: {{ $plain_password }}</p>
<p>Por motivos de seguridad, te recomendamos encarecidamente que cambies tu contraseña en tu primer acceso.</p>
<p>Si necesitas más ayuda, ponte en contacto con nuestro equipo de soporte.</p> <p>
