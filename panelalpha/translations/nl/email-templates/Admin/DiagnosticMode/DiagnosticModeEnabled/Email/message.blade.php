<p>Beste <strong>{{ $admin_name }}</strong>,</p>
<p>De {{ $entity_type }} <strong>#{ $entity_id }} {{ $entity_name }}</strong> is in de Diagnosemodus gekomen.</p>
<p>Deze modus is ingeschakeld omdat PanelAlpha de {{ $entity_type }} niet kan vinden op de verbonden server
    <strong>{{ $server_hostname }}</strong>. In de meeste gevallen gebeurt dit door handmatige acties op de server, zoals
    het verwijderen van de instantie of account. Het {{ $entity_type }} blijft in PanelAlpha, maar het beheren via het systeem
    zal niet mogelijk zijn totdat dit probleem is opgelost.</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://panelalpha.com/documentation/getting-started/diagnostic-mode/" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:ankerslot/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="https://panelalpha.com/documentation/getting-started/diagnostic-mode/"> Meer lezen over diagnosemodus </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://panelalpha.com/documentation/troubleshooting-center/other/diagnostic-mode/" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:ankerslot/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="https://panelalpha.com/documentation/troubleshooting-center/other/diagnostic-mode/"> Tips hoe het op te lossen </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
