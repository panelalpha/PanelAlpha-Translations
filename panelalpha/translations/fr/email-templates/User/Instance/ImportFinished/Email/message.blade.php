<p>Cher <strong>{{ $client_first_name }}</strong>,</p>
<p>Votre site <strong>{{ $import_from_domain }}</strong> a été importé avec succès vers {{ $app_name }} ! Vous pouvez maintenant procéder à sa gestion dans notre système à {{ $app_url }}</p>

@if ($import_from_domain != $instance_domain)
    <p>Votre instance a été configurée sur un domaine temporaire : {{ $instance_domain }}</p>
    <p>Une fois que vous êtes prêt à passer en ligne, vous pouvez le changer plus tard dans notre panneau de contrôle.</p>
@else
    <p>La prochaine étape consiste à pointer votre domaine vers nos serveurs de noms. Il existe deux méthodes pour le faire :</p>
    <p>OPTION 1 : Configurer les enregistrements DNS</p>
    <p>Configurer les enregistrements DNS pour le domaine <strong>{{ $instance_domain }}</strong> :</p>
    <ul>
        <li>{{ $instance_domain }} (ou @) A {{ $ip_address }}</li>
        <li>www.{{ $instance_domain }} CNAME {{ $instance_domain }}</li>
    </ul>
    <p>OPTION 2 : Changer les serveurs de noms</p>
    <p>Changez les serveurs de noms de votre domaine en :</p>
    <ul>
        @foreach ($dns_nameservers as $ns)
        <li>{{ $ns }}</li>
        @endforeach
    </ul>
    <p><strong>Veuillez noter :</strong> L'utilisation de cette méthode ne migrera pas vos enregistrements DNS de l'actuel fournisseur. Vous devrez configurer à nouveau les enregistrements dans notre système.</p>
@endif
