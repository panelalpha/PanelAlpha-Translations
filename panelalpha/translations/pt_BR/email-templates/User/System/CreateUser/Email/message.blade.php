<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>Sua conta foi criada com sucesso e você tem acesso ao nosso painel de controle.</p>
<p>Por favor, faça o login usando o seguinte botão:</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $app_url }}/login" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $app_url }}/login"> Acesse nosso painel de controle </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
<p>Use as credenciais abaixo para acesso:</p>
<p>Email: {{ $email }}</p>
<p>Senha: {{ $plain_password }}</p>
<p>Por motivos de segurança, recomendamos enfaticamente que você altere sua senha no primeiro login.</p>
<p>Se precisar de mais assistência, entre em contato com nossa equipe de suporte.</p>
