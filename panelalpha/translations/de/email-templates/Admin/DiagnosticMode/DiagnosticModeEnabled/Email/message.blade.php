<p>Sehr geehrte/r <strong>{{ $admin_name }}</strong>,</p>
<p>Die {{ $entity_type }} <strong>#{ $entity_id }} {{ $entity_name }}</strong> ist in den Diagnosemodus übergegangen.</p>
<p>Dieser Modus wurde aktiviert, weil PanelAlpha die {{ $entity_type }} auf dem verbundenen Server nicht finden kann.
    <strong>{{ $server_hostname }}</strong>. In den meisten Fällen ist dies auf manuelle Aktionen auf dem Server zurückzuführen, wie z.B.
    Entfernen der Instanz oder des Kontos. Der {{ $entity_type }} bleibt in PanelAlpha, aber die Verwaltung über das System
    wird nicht möglich sein, bis dieses Problem behoben ist.</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://panelalpha.com/documentation/getting-started/diagnostic-mode/" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="https://panelalpha.com/documentation/getting-started/diagnostic-mode/">Lesen Sie mehr über den Diagnosemodus</a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://panelalpha.com/documentation/troubleshooting-center/other/diagnostic-mode/" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="https://panelalpha.com/documentation/troubleshooting-center/other/diagnostic-mode/">Tipps zur Lösung des Problems </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
