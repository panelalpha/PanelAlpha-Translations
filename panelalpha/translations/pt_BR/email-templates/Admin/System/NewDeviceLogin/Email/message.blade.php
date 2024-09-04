<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>Parece que em <strong>{{ $formatted_date }}</strong> at <strong>{{ $formatted_time }}</strong> você fez o login
    para{{$app_name }} usando um novo dispositivo. Os detalhes da tentativa de login são os seguintes:</p>
<table>
    <tbody>
    <tr>
        <th>Endereço IP</th>
        <td>{{ $ip_address }}</td>
    </tr>
    @if ($location !== '')
        <tr>
            <th>Localização</th>
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
<p>Este novo dispositivo foi adicionado à sua lista de dispositivos conhecidos no PanelAlpha: <a
        href="{{ $devices_list_url }}">{{ $devices_list_url }}</a></p>
<p>Se não o reconhecer, certifique-se de remover o registro e atualizar sua senha imediatamente. Uma senha não autorizada
    pessoa poderia ter obtido acesso ao seu{{ $app_name }} conta.</p>
<div style="width: 100%; text-align: center; margin-top: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color:{{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Alterar senha </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
