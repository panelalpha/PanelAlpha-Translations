<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>O {{ $entity_type }} <strong>#{{ $entity_id }} {{ $entity_name }}</strong> entrou no modo de diagnóstico.</p>
<p>Este modo foi ativado porque o PanelAlpha não pode localizar o {{ $entity_type }} no servidor conectado.
    <strong>{{ $server_hostname }}</strong>. Na maioria dos casos, isso ocorre devido a ações manuais no servidor, como
    remover a instância ou a conta. O {{ $entity_type }} permanece no PanelAlpha, mas gerenciá-lo por meio do sistema
    não será possível até que esse problema seja resolvido.</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://panelalpha.com/documentation/getting-started/diagnostic-mode/" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="https://panelalpha.com/documentation/getting-started/diagnostic-mode/"> Leia mais sobre o modo de diagnóstico </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://panelalpha.com/documentation/troubleshooting-center/other/diagnostic-mode/" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="https://panelalpha.com/documentation/troubleshooting-center/other/diagnostic-mode/"> Dicas de como resolver o problema </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
