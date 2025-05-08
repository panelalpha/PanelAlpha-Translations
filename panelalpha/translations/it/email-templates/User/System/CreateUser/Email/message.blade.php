<p>Grazie <strong>{{$client_first_name }}</strong>,</p>
<p>Il tuo account è stato creato con successo e hai accesso al nostro pannello di controllo.</p>
<p>Per favore, esegua il login utilizzando il seguente pulsante:</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>.
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $app_url }}/login" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">.
        <w:anchorlock/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $app_url }}/login">Accedere al nostro pannello di controllo </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
<p>Utilizza le credenziali di seguito per l'accesso:</p>
<p>Email: {{ $email }}</p>
<p>Password: {{ $plain_password }}</p>
<p>Per motivi di sicurezza, si consiglia vivamente di cambiare la password al primo accesso.</p>
<p>Se avete bisogno di ulteriore assistenza, contattate il nostro team di supporto.</p>
