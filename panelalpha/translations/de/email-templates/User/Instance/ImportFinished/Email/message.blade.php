<p>Sehr geehrte/r <strong>{{ $client_first_name }}</strong>,</p>
<p>Ihre Website <strong>{{ $import_from_domain }}</strong> wurde erfolgreich importiert zu {{ $app_name }}! Sie können jetzt mit der Verwaltung in unserem System fortfahren bei {{ $app_url }}</p>

@if ($import_from_domain !=$instance_domain)
    <p>Ihre Instanz wurde auf eine temporäre Domain gesetzt:{{ $instance_domain }}</p>
    <p>Wenn Sie bereit sind, live zu gehen, können Sie es später in unserem Kontrollpanel ändern.</p>
@else
    <p>Der nächste Schritt besteht darin, Ihre Domäne auf unsere Nameserver zu verweisen. Hierfür gibt es zwei Methoden:</p>
    <p>OPTION 1: DNS-Einträge einstellen</p>
    <p>Setzen Sie die DNS-Einträge für die <strong>{{ $instance_domain }}</strong> Bereich:</p>
    <ul>
        <li>{{ $instance_domain }} (or @) A {{ $ip_address }}</li>
        <li>www.{{ $instance_domain }} CNAME {{ $instance_domain }}</li>
    </ul>
    <p>OPTION 2: Namensserver ändern</p>
    <p>Ändern Sie die Nameserver Ihrer Domäne auf:</p>
    <ul>
        @foreach ($dns_nameservers as $ns)
        <li>{{ $ns }}</li>
        @endforeach
    </ul>
    <p><strong>Bitte beachten Sie:</strong> Mit dieser Methode werden Ihre DNS-Einträge vom aktuellen Anbieter nicht migriert. Sie müssen die Einträge erneut in unserem System einstellen.</p>
@endif
