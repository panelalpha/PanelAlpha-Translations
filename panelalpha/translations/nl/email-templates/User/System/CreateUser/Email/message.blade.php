<p>Beste <strong>{{ $client_first_name }}</strong>,</p>
<p>Uw account is succesvol aangemaakt en u heeft toegang tot ons controlepaneel.</p>
<p>Log in met de volgende knop:</p>
<div style="width: 100%; text-align: center; margin-top: 32px; margin-bottom: 32px;">
    <p class="button" style="display: inline; text-align: center; margin-right: auto;"><!-- [if mso]>
    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $app_url }}/login" style="height:48px;v-text-anchor:middle;width:160px;" arcsize="10%" stroke="f" fillcolor="{{$branding_color}}">
        <w:ankerslot/>
        <center>
    <![endif]--> <a
            style="background-color: {{$branding_color}}; border-radius: 5px; color: #fff; display: inline-block; font-family: 'Montserrat', Arial, sans-seriff; font-weight: 600; font-size: 15px; line-height: 54px; text-decoration: none; text-align: center; -webkit-text-size-adjust: none; padding-left: 20px; padding-right: 20px;"
            href="{{ $app_url }}/login"> Toegang tot ons controlepaneel </a> <!-- [if mso]>
        </v:roundrect>
        </center>
        <![endif]--></p>
</div>
<p>Gebruik onderstaande gegevens voor toegang:</p>
<p>Email: {{ $email }}</p>
<p>Wachtwoord: {{ $plain_password }}</p>
<p>Voor de veiligheid raden we u aan uw wachtwoord te wijzigen bij uw eerste login.</p>
<p>Als u verdere hulp nodig heeft, neem dan contact op met ons ondersteuningsteam.</p>
