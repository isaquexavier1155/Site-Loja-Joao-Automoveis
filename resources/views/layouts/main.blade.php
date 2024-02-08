<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Carros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

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
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700') }}">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>
</head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX5VQP"
                        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
                            <li>
                                <a href="{{ route('login') }}" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                            </li>
                            <li>
                                <a href="{{ route('signup') }}" class="sign-in"><i class="fa fa-user"></i> Registro</a>
                            </li>
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
                                <a class="nav-link dropdown-toggle @if(request()->is('/')) ativo @endif" href="/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Início
                                </a>
                            </li>
                            <li class="nav-item dropdown @if(request()->is('car-grid-fullWidth')) ativo @endif">
                                <a class="nav-link dropdown-toggle" href="{{ route('car-grid-fullWidth') }}" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Carros
                                </a>
                            </li> 
                            <!-- <li class="nav-item dropdown megamenu-li">
                                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Páginas</a>
                                <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                    <div class="megamenu-area">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="megamenu-section">
                                                    <h6 class="megamenu-title">Páginas</h6>
                                                    <a class="dropdown-item" href="{{ route('about') }}">Sobre nós</a>
                                                    <a class="dropdown-item" href="{{ route('team') }}">Equipe</a>
                                                    <a class="dropdown-item" href="{{ route('team-detail') }}">Detalhes da equipe</a>
                                                    <a class="dropdown-item" href="{{ route('car-comparison') }}">Comparação entre carros</a>
                                                    <a class="dropdown-item" href="{{ route('search-brand') }}">Marcas de carros</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="megamenu-section">
                                                    <h6 class="megamenu-title">Páginas</h6>
                                                    <a class="dropdown-item" href="{{ route('pricing-tables') }}">Tabelas de preços</a>
                                                    <a class="dropdown-item" href="{{ route('gallery') }}">Galeria</a>
                                                    <a class="dropdown-item" href="{{ route('typography') }}">Tipografia</a>
                                                    <a class="dropdown-item" href="{{ route('elements') }}">Elementos</a>
                                                    <a class="dropdown-item" href="{{ route('faq') }}">Perguntas frequentes</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="megamenu-section">
                                                    <h6 class="megamenu-title">Páginas</h6>
                                                    <a class="dropdown-item" href="{{ route('icon') }}">Ícones</a>
                                                    <a class="dropdown-item" href="{{ route('coming-soon') }}">Em breve</a>
                                                    <a class="dropdown-item" href="{{ route('faq') }}">Página de erro</a>
                                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                                    <a class="dropdown-item" href="{{ route('signup') }}">Registro</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item dropdown @if(request()->is('shop-list')) ativo @endif">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Loja
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('shop-list') }}">Produtos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('shop-cart') }}">Carrinho de compras</a></li>
                                    <li><a class="dropdown-item" href="{{ route('shop-checkout') }}">Finalizar pedidos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('shop-details') }}">Detalhes do produto</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item dropdown @if(request()->is('localizacao')) ativo @endif">
                                <a class="nav-link dropdown-toggle" href="{{ route('localizacao') }}" id="navbarDropdownMenuLink11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Localização
                                </a>
                            </li>
                            <li class="nav-item dropdown @if(request()->is('about')) ativo @endif">
                                <a class="nav-link dropdown-toggle" href="{{ route('about') }}" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sobre Nós
                                </a>
                            </li>
                            <li class="nav-item dropdown @if(request()->is('contact')) ativo @endif">
                                <a class="nav-link" href="{{ route('contact') }}">Contato</a>
                            </li>
                            <li class="nav-item dropdown m-hide">
                                <a href="#full-page-search" class="nav-link h-icon">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
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
                        <!-- <li>
                            <a href="#full-page-search">
                                <i class="fa fa-search"></i>
                            </a>
                        </li> -->
                    </ul>
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

        <!-- Full Page Search -->
        <div id="full-page-search">
            <button type="button" class="close">×</button>
            <form action="#" class="search-header">
                <input type="search" value="" placeholder="Digite palavras-chave aqui"/>
                <button type="submit" class="btn btn-sm button-theme">Procurar</button>
            </form>
        </div>

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
                                <!-- <li>
                                    <i class="flaticon-fax"></i>+0024 85X6 987
                                </li> -->
                                <!-- <li>
                                    <i class="flaticon-earth"></i><a href="mailto:contato@joaoautomoveisparobe.com.br">carhouse@themevessel.com</a>
                                </li> -->
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
                                <!-- <li>
                                    <a class="link-inner"><span> Elements</span></a>
                                </li> -->
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
                                            R$ {{ $carro->valor_promocional }} | <a href="#"><i class="fa fa-calendar"></i> {{ $carro->created_at->format('d M, Y') }} </a>
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
                                <form class="newsletter-form d-flex" action="#">
                                    <input class="form-control me-2" type="email" id="email" placeholder="Ajustar para envio de Endereço de Email...">
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
                position: relative;
                left: -85px;
                top: 1px !important;
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

            // Inicializa a função para exibir a data e hora imediatamente
            updateDateTime();
        </script>

        <!-- SCRIPT ADICIONADO PARA FUNCIONAR VIEW DE CADASTRO DE CARROS -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->

    </body>
</html>