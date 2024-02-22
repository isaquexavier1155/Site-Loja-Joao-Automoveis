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

<a href="https://wa.me/55{{ $data['telefone'] }}?text=Olá, bem vindo a João Automóveis!+Como+podemos+te+ajudar?"
            class="btn btn-success" target="_blank">
            <i class="fab fa-whatsapp"></i> Responder pelo WhatsApp
        </a>

<!-- <x-mail::button :url="'https://www.joaoautomoveisparobe.com.br'">
Responder Pelo WhatsApp</x-mail::button>  -->

<!-- Thanks,<br>
{{ config('app.name') }}
</x-mail::message> -->
