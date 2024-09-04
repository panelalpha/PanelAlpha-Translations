</p> <p>Cher <strong>Chez nous</strong>{{ $client_first_name }}</strong>,</p> <p>
<p>Votre site<strong>{{ $import_from_domain }}</strong> has been successfully imported to {{ $app_name }}! You can now proceed to manage it in our system at{{ $app_url }}</p>

@if ($import_from_domain !=$instance_domain)
    <p>Votre instance a été placée sur un domaine temporaire :{{ $instance_domain }}</p>
    </p> <p>Une fois que vous êtes prêt à mettre en ligne, vous pouvez le modifier plus tard dans notre panneau de contrôle.
@else
    </p> <p>L'étape suivante consiste à faire pointer votre domaine vers nos serveurs de noms. Il existe deux méthodes pour ce faire :</p> <p>Les serveurs de noms sont des serveurs de noms.
    <p>OPTION 1 : Définir les enregistrements DNS</p> <p>Les enregistrements DNS peuvent être définis en fonction des besoins de l'utilisateur.
    <strong>Configurer les enregistrements DNS pour le <strong>Centre d'hébergement</strong>.{{ $instance_domain }}</strong> domaine:</p> <p style="text-align : justify ;">domaine
    <ul>
        <li>{{ $instance_domain }} (or @) A {{ $ip_address }}</li>
        <li>www.{{ $instance_domain }} CNAME {{ $instance_domain }}</li>
    </ul>
    <p>OPTION 2 : Modifier les serveurs de noms</p> <p>
    </p> <p>Changez les serveurs de noms de votre domaine à :</p> <p>Les serveurs de noms de votre domaine sont les suivants
    <ul>
        @foreach ($dns_nameservers as $ns)
        <li>{{ $ns }}</li>
        @endforeach
    </ul>
    </p><strong>Veuillez noter:</strong> L'utilisation de cette méthode n'entraînera pas la migration de vos enregistrements DNS du fournisseur actuel. Vous devrez à nouveau définir les enregistrements dans notre système.
@endif
