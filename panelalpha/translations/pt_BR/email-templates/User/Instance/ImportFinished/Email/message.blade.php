<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>Seu site <strong>{{ $import_from_domain }}</strong> has been successfully imported to {{ $app_name }}! You can now proceed to manage it in our system at{{ $app_url }}</p>

@if ($import_from_domain !=$instance_domain)
    <p>Sua instância foi configurada em um domínio temporário:{{ $instance_domain }}</p>
    <p>Quando estiver pronto para entrar em operação, você poderá alterá-lo posteriormente em nosso painel de controle.</p>
@else
    <p>A próxima etapa é apontar seu domínio para nossos servidores de nomes. Há dois métodos para fazer isso:</p>
    <p>OPÇÃO 1: Definir registros DNS</p>
    <p>Definir os registros DNS para o <strong>{{ $instance_domain }}</strong> domínio:</p>
    <ul>
        <li>{{ $instance_domain }} (or @) A {{ $ip_address }}</li>
        <li>www.{{ $instance_domain }} CNAME {{ $instance_domain }}</li>
    </ul>
    <p>OPÇÃO 2: Alterar os servidores de nomes</p>
    <p>Altere os servidores de nomes de seu domínio para:</p>
    <ul>
        @foreach ($dns_nameservers as $ns)
        <li>{{ $ns }}</li>
        @endforeach
    </ul>
    <p><strong>Observação: </strong>O uso desse método não migrará seus registros de DNS do provedor atual. Você terá que definir os registros novamente em nosso sistema.</p>
@endif
