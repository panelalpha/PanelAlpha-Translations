<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>Il vostro sito <strong>è un sito di riferimento{{ $import_from_domain }}</strong> has been successfully imported to {{ $app_name }}! You can now proceed to manage it in our system at{{ $app_url }}</p>

@if ($import_from_domain !=$instance_domain)
    <p>La vostra istanza è stata impostata su un dominio temporaneo:{{ $instance_domain }}</p>
    <p>Una volta che si è pronti ad andare in onda, è possibile modificarlo in seguito nel nostro pannello di controllo.</p>
@else
    <p>Il passo successivo consiste nel puntare il dominio ai nostri server di nomi. Ci sono due metodi per farlo: </p>
    <p>OPZIONE 1: Impostare i record DNS</p>
    <p>Impostare i record DNS per il sito <strong>{{ $instance_domain }}</Dominio:</p>
    <ul>
        <li>{{ $instance_domain }} (or @) A {{ $ip_address }}</li>.
        <li>www.{{ $instance_domain }} CNAME {{ $instance_domain }}</li>.
    </ul>
    <p>OPZIONE 2: Cambiare i server dei nomi</p>
    <p>Cambiate i nameserver del vostro dominio in:</p>
    <ul>
        @foreach ($dns_nameservers as $ns)
        <li>{{ $ns }}</li>.
        @endforeach
    </ul>
    <p><strong>Nota bene:</strong> L'utilizzo di questo metodo non consente di migrare i record DNS dal provider attuale. Dovrete impostare nuovamente i record nel nostro sistema.</p>
@endif
