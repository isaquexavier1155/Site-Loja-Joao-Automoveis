<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- <title>João Automóveis</title> -->
    <title>@yield('title', 'João Automóveis')</title>

    <!-- Adicione o link para o ícone da página -->
    <link rel="icon" href="{{ asset('img/logos/logoa.png') }}" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- metatag 001 tag utilizada para corrigir erro ao clicar no contato via whtas -->
    <!-- Se não inserir essa metatag ocorre erro especifico ao clicar no contato via whatsapp -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-submenu.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/jnoty.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('css/skins/red.css') }}">

    <!-- Favicon icon -->
    <!-- <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" > -->

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700') }}">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}">

    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>
</head>
    <body>
        <!-- INÍCIO FUNCIONAMENTO DO BOTÃO FLUTUANTE DO WHATSAPP -->
            <!-- Para funcionar deve-se adicionar metatag 001 abaixo no header da página -->
            <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

        <!-- Capturar o endereço IP do usuário -->
        <?php $user_ip = $_SERVER['REMOTE_ADDR']; ?>
        <?php $whatsapp_url = "https://api.whatsapp.com/send"; ?>
        <!-- Parâmetros adicionais para personalizar a mensagem -->
        <?php
            $params = [
                'phone' => '5551999402842',
                'text' => 'Olá, gostaria de mais informações sobre um veículo disponível em João Automóveis. Por favor, podem me ajudar?',
                'nome' => 'Nome do Cliente',
                'email' => 'email@example.com',
                'telefone' => '(00) 12345-6789',
                'ip' => $user_ip
            ];
        ?>

        <!-- Construir a URL final com os parâmetros -->
        <?php $final_url = $whatsapp_url . '?' . http_build_query($params); ?>

        <!-- Ao clicar no ícone do whatsapp executa a função openForm -->
        <div id="whatsapp-button" class="whatsapp-button">
            <a href="#" onclick="openForm()">
                <img src="{{ asset('img/whats.png') }}" alt="WhatsApp" width="50" height="50">
            </a>
        </div>

        <!-- Modal Whats-->
        <div id="myModal" class="modal-01">
            <div class="modal-content-01">
                <span class="custom-close" onclick="closeForm()">&times;</span>
                <h2>Entre em contato</h2>
                <p>Por favor, preencha os campos abaixo para continuar para o WhatsApp:</p>
                <form id="contactForm">
                    <div class="input-group" onsubmit="return validateForm()">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" required>
                    </div>
                    <button id="submitButton" type="submit" onclick="submitForm()" disabled>Continuar</button>
                </form>
            </div>
        </div>

        <!--  Função para verificar se todos os campos estão preenchidos -->
        <script>
            function checkForm() {
                var name = document.getElementById("name").value;
                var email = document.getElementById("email").value;
                var telefone = document.getElementById("telefone").value;

                // Habilitar o botão Continuar se todos os campos estiverem preenchidos
                if (name.trim() !== '' && email.trim() !== '' && telefone.trim() !== '') {
                    document.getElementById("submitButton").removeAttribute("disabled");
                } else {
                    document.getElementById("submitButton").setAttribute("disabled", "disabled");
                }
            }

            // Adicionar evento de input para verificar sempre que um campo for preenchido
            document.getElementById("name").addEventListener("input", checkForm);
            document.getElementById("email").addEventListener("input", checkForm);
            document.getElementById("telefone").addEventListener("input", checkForm);
        </script>


        <!-- // Script para adicionar efeito de balanço à imagem do WhatsApp -->
        <script>
            function shakeWhatsAppImage() {
                const whatsappImage = document.querySelector('.whatsapp-button img');
                whatsappImage.style.transition = 'transform 0.5s ease'; // Definir transição suave
                whatsappImage.style.transform = 'rotate(10deg)'; // Rotacionar mais para a direita

                // Após 0.5 segundos, restaurar a posição original
                setTimeout(() => {
                    whatsappImage.style.transform = 'rotate(0deg)';
                }, 500);
            }

            // Chamar a função shakeWhatsAppImage a cada 5 segundos
            setInterval(shakeWhatsAppImage, 5000);
        </script>

        <!-- Função para enviar dados e redirecionar para o WhatsApp -->
        <script>
            var finalUrl = '<?php echo $final_url; ?>';
            function enviarDadosESeguirLink() {
                // Enviar os dados para a rota de contato-whatsapp via AJAX
                fetch('/contato-whatsapp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        nome: document.getElementById("name").value,
                        email: document.getElementById("email").value,
                        telefone: document.getElementById("telefone").value,
                        ip: '<?php echo $user_ip; ?>'
                    })
                })
                .then(response => {
                    console.log('Resposta do backend:', response);
                    return response.text(); // Convertendo a resposta para texto
                })
                .then(data => {
                    console.log('Dados recebidos do backend:', data);
                    // Após receber a resposta do backend, redirecionar para o WhatsApp
                    window.location.href = finalUrl;
                })
                .catch(error => {
                    console.error('Erro ao salvar os dados:', error);
                });
            }

            // Abrir o modal do formulário
            function openForm() {
                document.getElementById("myModal").style.display = "block";
            }

            // Fechar o modal do formulário
            function closeForm() {
                document.getElementById("myModal").style.display = "none";
            }

            // Enviar dados do formulário
            function submitForm() {
                enviarDadosESeguirLink();
            }

        </script>
        <!-- FIM FUNCIONAMENTO DO BOTÃO FLUTUANTE DO WHATSAPP -->


        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX5VQP"
                height="0" width="0" style="display:none;visibility:hidden">
            </iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <div class="page_loader"></div>

        <!-- Top header start -->
        <header class="top-header bg-active" id="top-header-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-7">
                        <div class="list-inline">
                            <a href="tel:55051999402842"><i class="fa fa-phone"></i>(51)99940-2842</a>
                            <a href="mailto:contato@joaoautomoveisparobe.com.br"><i class="fa fa-envelope"></i>contato@joaoautomoveisparobe.com.br</a>
                            <a href="tel:contato@joaoautomoveisparobe.com.br" id="current-time"><i class="fa fa-clock-o"></i><span class="white-text"></span></a>                
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-5">
                        <ul class="top-social-media pull-right">
                            @auth
                            <li>
                                <span class="btn btn-link btn-perfil"><i class="fa fa-user"></i> {{ Auth::user()->name }}</span>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link btn-saire"><i class="fa fa-sign-out"></i>Sair</button>
                                </form>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('login') }}" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                            </li>
                            <li>
                                <a href="{{ route('signup') }}" class="sign-in"><i class="fa fa-user"></i> Registro</a>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Top header end -->

        <!-- Main header start -->
        <header class="main-header sticky-header sh-2">
            <div class="container">
                <div id="div-preenchimento" class="main-header-four"></div>
                <nav class="navbar navbar-expand-lg navbar-light main-header-four">
                    <a class="navbar-brand company-logo-2" href="{{ route('index-2') }}">
                        <img src="{{ asset('img/logos/logo.png') }}" alt="logo">                   
                    </a>
                    <button class="navbar-toggler" type="button" id="drawer">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100 justify-content-end" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle {{ request()->is('/') ? 'ativo' : '' }}" href="/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Início
                                </a>
                            </li>
                            <li class="nav-item dropdown {{ request()->routeIs('car-grid-fullWidth') ? 'ativo' : '' }}">
                                <a class="nav-link dropdown-toggle" href="{{ route('car-grid-fullWidth') }}" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Carros
                                </a>
                            </li> 
                            
                            <li class="nav-item dropdown {{ request()->is('localizacao') ? 'ativo' : '' }}">
                                <a class="nav-link dropdown-toggle" href="{{ route('localizacao') }}" id="navbarDropdownMenuLink11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Localização
                                </a>
                            </li>
                            <li class="nav-item dropdown {{ request()->is('about') ? 'ativo' : '' }}">
                                <a class="nav-link dropdown-toggle" href="{{ route('about') }}" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sobre Nós
                                </a>
                            </li>
                            <li class="nav-item dropdown {{ request()->is('contact') ? 'ativo' : '' }}">
                                <a class="nav-link" href="{{ route('contact') }}">Contato</a>
                            </li>

                            <!-- MOSTRA PAINEL ADMINISTRATIVO EM TODAS AS PÁGINAS EXTENDIDAS PELO LAYOUT PRICIPAL -->
                            @can('admin')                   
                                <li class="nav-item dropdown {{ request()->is('gerenciar-veiculos') ? 'ativo' : '' }}">
                                    <a class="nav-link" href="{{ route('carros.gerenciar-veiculos') }}">Painel Administrativo</a>
                                </li>
                            @endcan

                            <!-- MOSTRA SISTEMA DE BUSCA QUANDO ROTA FOR GERENCIAR-VEICULOS -->
                            @if (!request()->is('gerenciar-veiculos'))
                                <li class="nav-item dropdown m-hide">
                                    <a href="#full-page-search" class="nav-link h-icon">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Main header end -->

        <!-- INÍCIO do Sidenav -->
        <nav id="sidebar" class="nav-sidebar">
            <!-- Close btn-->
            <div id="dismiss">
                <i class="fa fa-close"></i>
            </div>
            <div class="sidebar-inner">
                <div class="sidebar-logo">
                    <img src="{{ asset('img/logos/logo.png') }}" alt="logo">
                </div>
                <div class="sidebar-navigation">
                    <h3 class="heading">Páginas</h3>
                    <ul class="menu-list">
                        <li>
                            <a href="/">Início</a>
                        </li>
                        <li>
                            <a href="{{ route('car-grid-fullWidth') }}">Carros</a>
                        </li>
                        <li>
                            <a href="{{ route('localizacao') }}">Localização</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">Sobre nós</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contato</a>
                        </li>
                        @can('admin')
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('carros.gerenciar-veiculos') }}">Painel
                                    Administrativo</a>
                            </li>
                        @endcan
                        <li>
                            <a href="#full-page-search">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                    <ul id="ul-bots">
                    @auth
                        <li>
                            <span class="btn btn-link btn-perfil"><i class="fa fa-user"></i> {{ Auth::user()->name }}</span>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-link btn-custom"><i class="fa fa-sign-out"></i>Sair</button>
                            </form>
                        </li>
                        @else
                        <li>
                        <a href="{{ route('login') }}" class="btn btn-link btn-custom"><i class="fa fa-sign-in"></i> Login</a>
                        </li>
                        <li>
                        <a href="{{ route('signup') }}" class="btn btn-link btn-custom"><i class="fa fa-user"></i> Registro</a>
                        </li>
                    @endauth
                </ul>
                <style>
                    .btn-perfil {
                        color: black;
                        font-size: 12px;
                        background-color: white;
                        border-radius: 8px;
                        text-decoration: none;
                    }
                    .btn-perfil:hover {
                        color: black;
                        font-size: 12px;
                        background-color: white;
                        border-radius: 8px;
                        text-decoration: none;
                    }

                    .btn-saire{
                        color:white;
                        text-decoration: none;
                        font-size: 13px;
                    }
                    .btn-saire:hover{
                        color:white;
                        text-decoration: none;
                        background: red;
                    }
                    .btn-custom {
                        background-color: #cc121a;
                        color: #fff;
                        border: 1px solid #fff;
                        padding: 0px 12px;
                        border-radius: 3px;
                        text-transform: uppercase;
                        text-decoration: none;
                        font-size: 13px;
                        -webkit-box-shadow: 0px 0px 0px 2px rgba(255,255,255,0.2);
                        box-shadow: 0px 0px 0px 1px rgba(255,255,255,0.2);
                        margin-top: 10%;
                    }

                    .btn-custom:hover {
                        background-color: #fff;
                        color: #cc121a;
                        text-decoration: none;
                    }

                    #ul-bots {
                        margin-left: 120px;
                        margin-right: -40px;
                    }

                </style>
                </div>
                <div class="get-in-touch">
                    <h3 class="heading">Entrar em contato</h3>
                    <div class="get-in-touch-box d-flex mb-2">
                        <i class="flaticon-phone"></i>
                        <a href="tel:051999402842">051999402842</a>
                    </div>
                </div>
                <div class="get-social">
                    <h3 class="heading">Redes Sociais</h3>
                    <a href="https://www.instagram.com/joaoautomoveisparobe?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="instagram-bg">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <!-- <a href="#" class="facebook-bg">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="twitter-bg">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="google-bg">
                        <i class="fa fa-google"></i>
                    </a>
                    <a href="#" class="linkedin-bg">
                        <i class="fa fa-linkedin"></i>
                    </a> -->
                </div>
            </div>
        </nav>
        <!-- Sidenav end -->

        <!-- mudar conteudo dinamicamente -->
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content') 
                </div> 
            </div>
        </main>

        <!-- Modal de Pesquisa de veículos no banco. Full Page Search -->
        <div id="full-page-search">
            <button type="button" class="close">×</button>
            <!-- Use o método GET para enviar o formulário para a rota 'buscar-carros' -->
            <form id="search-form" action="{{ route('buscar-carros') }}" method="GET" class="search-header">
                <input type="search" name="buscar" id="search-input" value="" placeholder="Digite palavras-chave aqui"/>
                <button type="submit" class="btn btn-sm button-theme">Procurar</button>
            </form>
        </div>

        <script>
            // Captura o formulário de pesquisa
            var searchForm = document.getElementById('search-form');
            searchForm.addEventListener('submit', function(event) {
                var currentUrl = window.location.href;
                document.getElementById('url-atual').value = currentUrl;
            });
        </script>


        <!-- Início Rodapé -->
        <footer class="footer">
            <div class="container footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-item clearfix">
                            <h4>
                                Informações de contato
                            </h4>
                            <ul class="contact-info">
                                <li>
                                    <i class="flaticon-pin"></i>Av. Taquara, 2691 - Palmeiras, Parobé - RS, 95630-000
                                </li>
                                <li>
                                    <i class="flaticon-mail"></i><a href="mailto:contato@joaoautomoveisparobe.com.br">contato@joaoautomoveisparobe.com.br</a>
                                </li>
                                <li>
                                    <i class="flaticon-phone"></i><a href="tel: 051999402842">051999402842</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-item">
                            <h4>Links Úteis</h4>
                            <ul class="links">
                                <li>
                                    <a href="/" class="link-inner"><span> Início</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="link-inner"><span> Sobre nós</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}" class="link-inner"><span> Serviços</span></a>
                                </li>
                                <li >
                                    <a href="{{ route('car-grid-fullWidth') }}"class="link-inner"><span> Carros</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-post') }}" class="link-inner"><span> Blog</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('gallery') }}" class="link-inner"><span> Galeria</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="link-inner"><span> Contate-nos</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Inicio Carros Recentes exibidos no rodapé das páginas -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-item clearfix">
                            <div class="recent-posts">
                                <h4>Carros Recentes</h4>
                                @foreach($ultimosCarros as $carro)
                                <div class="d-flex mb-4 recent-posts-box">
                                    <a href="/car-details/{{ $carro->id }}">               
                                        <img src="/img/cars/{{ $carro->imagem_capa }}" class="flex-shrink-0 me-3" alt="...">
                                    </a>
                                    <div class="align-self-center">
                                        <h5>
                                            <a href="/car-details/{{ $carro->id }}">{{ $carro->nome }}</a>
                                        </h5>
                                        <div class="listing-post-meta">
                                            {{ $carro->valor_promocional }} | <a href="#"><i class="fa fa-calendar"></i> {{ $carro->created_at->format('d M, Y') }} </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Fim Carros Recentes exibidos no rodapé das páginas -->

                    <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-item clearfix">
                            <h4>Inscreva-se</h4>
                            <p class="mb-4">Inscreva-se e fique por dentro das melhores ofertas da loja.</p>
                            <div class="newsletter-content-wrap">
                                <form class="newsletter-form d-flex" id="newsletterForm" action="/signup" method="GET">
                                    <input class="form-control me-2" type="email" id="email-newsletter" name="email" placeholder="Endereço de Email...">
                                    <button class="btn btn-theme" type="submit"><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <p class="copy">© <span id="current-year"></span> <a href="https://www.sitesdriversoft.com.br/porque-ainda-vale-pena-ter-um-site" target="_blank">- Sites Driver Soft.</a> Todos os direitos reservados.</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="social-list-2">
                                <ul>
                                    <li><a href="https://www.instagram.com/joaoautomoveisparobe?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
                                    <!-- <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Fim Rodapé -->

        <style>
            #div-preenchimento {
                background-color: black;
                position: relative;
                left: -132px;
                top: 1px !important;
            }
            .whatsapp-button {
                position: fixed;
                bottom: 72px;
                right: 20px;
                z-index: 1000;
            }
    
            /* ESTILO PARA MODAL ABERTO AO CLICAR NA IMAGEM DO WHATSAPP */
            .modal-01 {
                display: none;
                position: fixed;
                z-index: 9999;
                left: 50%;
                top: 64%; /* Ajuste a margem superior conforme necessário */
                transform: translate(-50%, -50%) scale(0.1);
                width: 30%;
                max-width: 400px;
                overflow: hidden;
                background-color: rgba(255, 255, 255, 0.9);
                border-radius: 10px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                animation: modal-open 1.2s ease forwards;
            }

            /* Estilo para o conteúdo do modal */
            .modal-content-01 {
                padding: 20px;
                font-family: Arial, sans-serif;
                background-color: white;
            }

            .input-group {
                margin-bottom: 20px;
            }

            .input-group label {
                display: block;
                margin-bottom: 5px;
            }

            .input-group input {
                width: calc(100% - 10px);
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            /* Estilo para o botão "Continuar" */
            #submitButton {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                float: right;
            }

            button:hover {
                background-color: #45a049;
            }

            /* Estilo para o botão de fechar */
            .custom-close {
                color: #aaa;
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 28px;
                font-weight: bold;
                border-radius: 50%;
                padding: 5px;
            }

            .custom-close:hover,
            .custom-close:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
            }

            /* Estilo para o botão de abertura do modal */
            .whatsapp-button {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 9999;
            }

            .whatsapp-button img {
                width: 50px;
                height: 50px;
                cursor: pointer;
                position: relative;
                bottom: 50px;
            }

            /* Animação de abertura do modal */
            @keyframes modal-open {
                0% { transform: translate(-50%, -50%) scale(0.1); opacity: 0; }
                100% { transform: translate(-50%, -50%) scale(1); opacity: 1; }
            }

            /* Estilo para tornar o formulário responsivo */
            @media screen and (max-width: 600px) {
                .modal-01 {
                    width: 90%;
                    max-width: 90%; 
                    height: 100%;
                    background: white;
                }
                .input-group input {
                    width: 100%; 
                    margin-bottom: 10px; 
                }
                #submitButton {
                    width: 100%;
                }
            }
            
        </style>

        <!-- ESCRIPT RESPONSÁVEL PELO CONTROLE DE ANO DO RODAPÉ -->
        <script>
            document.getElementById("current-year").innerText = new Date().getFullYear();
        </script>

        <!-- Script responsável por exibir dados de horário e dia no cabeçalho da página -->
        <script>
        function updateDateTime() {
            const daysOfWeek = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
            const now = new Date();

            const dayOfWeek = daysOfWeek[now.getDay()];
            const formattedDate = `${now.getDate()}/${(now.getMonth() + 1).toString().padStart(2, '0')}/${now.getFullYear()}`;
            const formattedTime = now.toLocaleTimeString("pt-BR", { hour: '2-digit', minute: '2-digit' });

            const dateTimeString = `${dayOfWeek}, ${formattedDate} - ${formattedTime}`;

            document.getElementById("current-time").getElementsByClassName("white-text")[0].textContent = dateTimeString;
        }

            // Atualiza a data e hora a cada segundo
            setInterval(updateDateTime, 1000);
            updateDateTime();
        </script>

    </body>
</html>