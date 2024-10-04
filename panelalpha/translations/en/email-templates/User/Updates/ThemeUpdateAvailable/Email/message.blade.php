<p>Dear <strong>{{ $client_first_name }}</strong>,</p>
<p>New updates for WordPress themes are now available for your instances:</p>
@foreach ($themes as $themesAssingedToInstance)
    <table style="margin-top: 16px; padding: 10px 16px;">
        <tbody>
        <tr class="table-row" style="margin-bottom: 10px;">
            <td style="width: 50%;"><strong>{{ $themesAssingedToInstance["instance_name"] }}</strong><br><a
                    href="{{ $themesAssingedToInstance['instance_url'] }}">{{ $themesAssingedToInstance["instance_url"] }}</a>
            </td>
            <td style="width: 50%; margin-left: auto;">@foreach ($themesAssingedToInstance["themes"] as $theme)
                    <p style="text-align: right; margin-bottom: 0px; margin-top: 0px;">{{ $theme["title"] }}
                        ({{ $theme["version"] }} 🠒 {{ $theme["update_version"] }})</p>
                @endforeach</td>
        </tr>
        </tbody>
    </table>
@endforeach
<p style="text-align: left;">Please log in to your account to update themes.</p>
<div style="width: 100%; text-align: center; margin-top: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $app_url }}/instances" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $app_url }}/instances"> Log in </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
