<x-mail::message>
<!-- Corpo da mensagem -->
# Mensagem de {{ $data['nome'] }}
<p>Email: {{ $data['email'] }}</p>
<p>Assunto: {{ $data['assunto'] }}</p>
<p>Telefone: <strong>{{ $data['telefone'] }}</strong></p>
<p>
    Mensagem:<br>
    {{ $data['mensagem'] }}

</p>

<!-- <x-mail::button :url="'https://www.joaoautomoveisparobe.com.br'">
Página Inicial</x-mail::button> -->

<!-- Thanks,<br>
{{ config('app.name') }}
</x-mail::message> -->
