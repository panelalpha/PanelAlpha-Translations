<p>Estimado <strong>{{ $client_first_name }}</strong>,</p>
<p>Su sitio <strong>{{ $import_from_domain }}</strong> has been successfully imported to {{ $app_name }}! You can now proceed to manage it in our system at{{ $app_url }}</p>

@if ($import_from_domain !=$instance_domain)
    <p>Su instancia se ha establecido en un dominio temporal:{{ $instance_domain }}</p>
    <p>Una vez que esté listo para ir en vivo, se puede cambiar más tarde en nuestro panel de control.</p> <p>
@else
    <p>El siguiente paso es apuntar su dominio a nuestros servidores de nombres. Hay dos métodos para hacerlo:</p> <p>
    <p>OPCIÓN 1: Establecer registros DNS</p>
    <p>Establezca los registros DNS para la <strong>página de inicio</strong>.{{ $instance_domain }}</strong> dominio:</p>
    <ul>
        <li>{{ $instance_domain }} (or @) A {{ $ip_address }}</li> <li>
        <li>www.{{ $instance_domain }} CNAME {{ $instance_domain }}</li> <li>
    </ul>
    <p>OPCIÓN 2: Cambiar los servidores de nombres</p>
    <p>Cambia los servidores de nombres de tu dominio a:</p>
    <ul>
        @foreach ($dns_nameservers as $ns)
        <li>{{ $ns }}</li> <li>
        @endforeach
    </ul>
    <p><strong>Tenga en cuenta:</strong> El uso de este método no migrará sus registros DNS del proveedor actual. Tendrás que configurar los registros de nuevo en nuestro sistema.</p> <p
@endif
