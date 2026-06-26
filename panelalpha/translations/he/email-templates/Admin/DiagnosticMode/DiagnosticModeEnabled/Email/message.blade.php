<p>שלום <strong>{{ $admin_name }}</strong>,</p>
<p>ה {{ $entity_type }} <strong>#{{ $entity_id }} {{ $entity_name }}</strong> נכנס למצב אבחון.</p>
<p>מצב זה הופעל מכיוון ש-PanelAlpha אינו מוצא את {{ $entity_type }} בשרת המחובר    <strong>{{ $server_hostname }}</strong>. ברוב המקרים, דבר זה מתרחש כתוצאה מפעולות ידניות בשרת, כגון
    הסרת המופע או החשבון. ה-{{ $entity_type }} נשאר ב-PanelAlpha, אך ניהולו דרך המערכת
    לא יהיה אפשרי עד לפתרון הבעיה.</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.panelalpha.com/documentation/multi-server/system-configuration/diagnostic-mode-and-health-check/" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="https://www.panelalpha.com/documentation/multi-server/system-configuration/diagnostic-mode-and-health-check/"> קרא עוד על מצב אבחון </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://panelalpha.com/documentation/troubleshooting-center/diagnostics/diagnostic-mode/" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="https://panelalpha.com/documentation/troubleshooting-center/diagnostics/diagnostic-mode/"> טיפים לפתרון </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
