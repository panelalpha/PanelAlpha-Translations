<p>Estimado <strong>{{ $client_first_name }}</strong>,</p>
<p>Parece que en <strong>{{ $formatted_date }}</strong> at <strong>{{ $formatted_time }}</strong> has iniciado sesión
    a{{$app_name }} utilizando un nuevo dispositivo. Los detalles del intento de inicio de sesión son los siguientes:</p> <p>.
<table>
    <cuerpo>
    <tr>
        <th>Dirección IP</th>
        <td>{{ $ip_address }}</td>
    </tr>
    @if ($location !== '')
        <tr>
            <th>Localización</th>
            <td>{{ $location }}</td>
        </tr>
    @endif
    <tr>
        <th>Dispositivo</th>
        <td>{{ $device }}</td>
    </tr>
    <tr>
        <th>Navegador</th>
        <td>{{ $browser }}</td>
    </tr>
    </tbody>
</table>
<p>Este nuevo dispositivo ha sido añadido a tu lista de dispositivos conocidos en PanelAlpha: <a
        href="{{ $devices_list_url }}">{{ $devices_list_url }}</a></p>
<p>Si no lo reconoce, asegúrese de eliminar el registro y actualice su contraseña inmediatamente. Un usuario no autorizado
    persona podría haber accedido a su{{ $app_name }} cuenta.</p>
<div style="width: 100%; text-align: center; margin-top: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!--[if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="color de fondo:{{$branding_color}}border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Cambiar contraseña </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
