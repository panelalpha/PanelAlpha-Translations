<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>Abbiamo ricevuto una richiesta di reimpostare la password del suo account.</p>
<p>Per reimpostare la password, fare clic sul pulsante qui sotto:</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">.
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>.
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $reset_password_url }}" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color:{{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $reset_password_url }}"> Reimpostare la password </a> <!-- [se mso]>.
        </v:roundrect>
        </center>.
        <![endif]--></p>
</div>
<p>Oppure copiate e incollate l'URL nel vostro browser:</p>
<a href="{{ $reset_password_url }}">{{ $reset_password_url }}</a>
<p>Questo link per la reimpostazione della password scadrà nel <strong>periodo>.{{ $expire_time }}</strong> minuti.</p>
<p>Se non è stata richiesta la reimpostazione della password, non è necessario intraprendere ulteriori azioni.</p>
