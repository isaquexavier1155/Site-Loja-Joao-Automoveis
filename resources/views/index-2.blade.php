<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Carros novos - Carros Usados - Revenda de carros - Revenda de veículos</title>

    <!-- Adicione o link para o ícone da página -->
    <link rel="icon" href="{{ asset('img/logos/logoa.png') }}" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- metatag 001 tag utilizada para corrigir erro ao clicar no contato via whtas -->
    <!-- Se não inserir essa metatag ocorre erro especifico ao clicar no contato via whatsapp -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="/css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jnoty.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="/css/skins/red.css">

    <!-- Favicon icon -->
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->

    <!-- Google Fontes -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Meta Description - Descrição que aparece abaixo do link nas pesquisas do Google-->
    <meta name="description" content="Descubra na João Automóveis de Parobé as melhores opções de carros novos e usados. Encontre qualidade, variedade e excelentes condições de financiamento. Visite-nos agora e escolha o seu próximo carro.">
    
    <!-- Meta keywords - Palavras Chave -->
    <meta name="keywords" content="João Automóveis de Parobé, João Automóveis, revenda João Automóveis, carros novos, carros usados, revenda de veículos, financiamento de carros, Parobé, loja João Automoveis, loja João automóveis Parobé">

        <!-- IE10 Viewport Hack para Surface/Desktop Windows 8 Bug -->
    <link rel="stylesheet" type="text/css" href="/css/ie10-viewport-bug-workaround.css">

    <!-- Apenas para fins de depuração. Na verdade, não copie estas 2 linhas! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 Shim e Responst.js para IE8 Suporte a elementos HTML5 e consultas de mídia -->
    <!--[Se LT IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- INÍCIO FUNCIONAMENTO DO BOTÃO FLUTUANTE DO WHATSAPP -->
    <!-- Para funcionar deve-se adicionar metatag 001 abaixo no header da página -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <!-- Capturar o endereço IP do usuário -->
    <?php $user_ip = $_SERVER['REMOTE_ADDR']; ?>
    <?php $whatsapp_url = "https://api.whatsapp.com/send"; ?>
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
    <div id="myModal" class="modal">
        <div class="modal-content">
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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX5VQP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="page_loader"></div>

    <!-- Main header start -->
    <header class="main-header sticky-header main-header-four">
    <div class="container">
        <div id="div-preenchimento" class="main-header-four"></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand company-logo-2" href="#">
                <img src="img/logos/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" id="drawer">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100 justify-content-end" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle ativo" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Início
                        </a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="{{ route('car-grid-fullWidth') }}"
                            id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Carros
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('localizacao') }}"
                            id="navbarDropdownMenuLink11" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Localização
                        </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('about') }}" 
                                id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" 
                                aria-expanded="false">
                                    Sobre Nós
                                </a>
                            </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('contact') }}">Contato</a>
                    </li>

                    @can('admin')
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('painel-administrativo') }}">Painel</a>
                    </li>
                    @endcan

                    <li class="nav-item dropdown m-hide">
                        <a href="#full-page-search" class="nav-link h-icon">
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
                                <button type="submit" class="btn btn-link btn-sair"><i class="fa fa-sign-out"></i> Sair</button>
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
                        font-size: 13px;
                        background-color: white;
                        border-radius: 8px;
                        text-decoration: none;
                    }
                    .btn-perfil:hover {
                        color: black;
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

                    .btn-sair {
                        color: red;
                        padding: 0px 12px;
                        border-radius: 3px;
                        text-transform: uppercase;
                        text-decoration: none;
                        font-size: 9px;
                        float: right;
                        -webkit-box-shadow: 0px 0px 0px 2px rgba(255,255,255,0.2);
                        box-shadow: 0px 0px 0px 1px rgba(255,255,255,0.2);
                        margin-top: 10%;
                    }

                    .btn-sair:hover {
                         background-color: #cc121a; 
                        color: white;
                    }

                    #ul-bots {
                        margin-left: 120px;
                        margin-right: -40px;
                    }

                </style>
            </div>
        </nav>
    </div>
</header>

    <!-- FIM CABEÇALHO PRINCIPAL -->

    <!-- INÍCIO do Sidenav -->
    <nav id="sidebar" class="nav-sidebar">
        <!-- Close btn-->
        <div id="dismiss">
            <i class="fa fa-close"></i>
        </div>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <img src="img/logos/logo.png" alt="logo">
            </div>
            <div class="sidebar-navigation">
                <h3 class="heading">Páginas</h3>
                <ul class="menu-list">
                    <li>
                        <a href="#" class="active pt0">Início</a>
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
                        <!-- ITEM DO MENU EM DISPOSITIVOS MÓVEIS -->
                        <a href="{{ route('contact') }}">Contato</a>
                    </li>
                    @can('admin')
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('painel-administrativo') }}">Painel</a>
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
                                <button type="submit" class="btn btn-link btn-custom"><i class="fa fa-sign-out"></i> Sair</button>
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
                <a href="https://www.instagram.com/joaoautomoveisparobe?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                    class="instagram-bg">
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

    <!-- Banner start -->
    <!-- INÍCIO BLOCO PESQUISA AVANÇADA -->
    <div class="banner bnr-2" id="banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="5000">
            <div class="carousel-inner">
                @foreach($blocos_pesquisa as $index => $bloco_pesquisa)
                <div class="carousel-item item-bg banner-max-height <?php if($index === 0) echo 'active'; ?>">
                    <img class="d-block w-100 h-100" src="{{ $bloco_pesquisa['imagem'] }}" alt="banner">
                    <div class="carousel-caption d-flex h-100">
                        <div class="carousel-content container banner-info-2 bi-2 align-self-center">
                            <div class="row bi5">
                                <div class="col-lg-7">
                                    <div class="b-content text-start">
                                        <h1>Bem-vindo à João Automóveis</h1>
                                        <h2>Carros novos e usados com o melhor custo-benefício do mercado</h2>
                                        <a href="#carosemdest" class="btn btn-primary btn-lg">Saiba mais</a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="search-box-4 sb-8">
                                        <form method="GET" action="{{ route('pesquisar') }}">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="select-brand">
                                                    <option>Selecione a marca</option>
                                                    <option>Audi</option>
                                                    <option>BMW</option>
                                                    <option>Chevrolet</option>
                                                    <option>Citroën</option>
                                                    <option>Fiat</option>
                                                    <option>Ford</option>
                                                    <option>Honda</option>
                                                    <option>Hyundai</option>
                                                    <option>Jeep</option>
                                                    <option>Kia</option>
                                                    <option>Mitsubishi</option>
                                                    <option>Nissan</option>
                                                    <option>Peugeot</option>
                                                    <option>Renault</option>
                                                    <option>Toyota</option>
                                                    <option>Volkswagen</option>
                                                    <option>Volvo</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <select class="selectpicker search-fields" name="select-year" id="select-year">
                                                <option>Selecione o ano</option>
                                                @php
                                                    $anoAtual = date('Y');
                                                    $anoInicial = 1990;
                                                @endphp
                                                @for ($ano = $anoAtual; $ano >= $anoInicial; $ano--)
                                                    <option>{{ $ano }}</option>
                                                @endfor
                                            </select>

                                            </div>
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="estilo">
                                                    <option>Selecione o Estilo</option>
                                                    <option>Sedã</option>
                                                    <option>Hat</option>
                                                    <option>SUV</option>
                                                    <option>Picape</option>
                                                    <option>Cupê</option>
                                                    <option>Minivan</option>
                                                    <option>Crossover</option>
                                                </select>

                                            </div>
                                            <!-- Tela grande -->
                                            <div class="form-group">
                                                <button type="submit"
                                                    class="btn btn-primary btn-4 btn-md btn-w-100">Procurar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <!-- Botões de controle -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Banner end -->
    <!-- FIM BLOCO DE PESQUISA Avançada -->

    <!-- Search box 3 start -->
    <!-- FINAL da Caixa de pesquisa em dispositivos móveis -->
    <div class="search-box-3 sb-7 sb-2 bg-active">
        <div class="container">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET" action="{{ route('pesquisar') }}">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="select-brand">
                                        <option value="">Selecione a Marca</option>
                                        <option>Chevrolet</option>
                                        <option>Audi</option>
                                        <option>BMW</option>
                                        <option>Citroën</option>
                                        <option>Fiat</option>
                                        <option>Ford</option>
                                        <option>Honda</option>
                                        <option>Hyundai</option>
                                        <option>Jeep</option>
                                        <option>Kia</option>
                                        <option>Mitsubishi</option>
                                        <option>Nissan</option>
                                        <option>Peugeot</option>
                                        <option>Renault</option>
                                        <option>Toyota</option>
                                        <option>Volkswagen</option>
                                        <option>Volvo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <!-- Versão mobile -->
                                    <select class="selectpicker search-fields" name="select-year" id="select-year">
                                        <option>Selecione o ano</option>
                                        @php
                                            $anoAtual = date('Y');
                                            $anoInicial = 1990;
                                        @endphp
                                        @for ($ano = $anoAtual; $ano >= $anoInicial; $ano--)
                                            <option>{{ $ano }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="estilo">
                                        <option value="">Selecione o Estilo</option>
                                        <option>Sedã</option>
                                        <option>Hat</option>
                                        <option>SUV</option>
                                        <option>Picape</option>
                                        <option>Cupê</option>
                                        <option>Minivan</option>
                                        <option>Crossover</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="range-slider">
                                        <div data-min="0" data-max="200000" data-unit="R$" data-min-name="min_price"
                                            data-max-name="max_price" class="range-slider-ui ui-slider"
                                            aria-disabled="false"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Botão de pesquisa no menu mobile -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block button-theme btn-md">Procurar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FINAL da Caixa de pesquisa em dispositivos móveis -->

    <!-- Início do carros em destaque -->
    <div class="featured-car content-area" id="carosemdest">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Carros <span>em destaque</span></h1>
                <p>Veja os modelos que estão em destaque em nossa loja.</p>
            </div>
            <div class="row">
                @foreach($carros as $carro)
                <div class="col-lg-4 col-md-6">
                    <div class="car-box-3">
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img class="d-block w-100 car-image" src="/img/cars/{{ $carro->imagem_capa }}"
                                    alt="car">
                                <a href="/car-details/{{ $carro->id }}">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="tag">{{ $carro->tag }}</div>
                            <div class="price-box">
                                <span class="del"><del>{{ $carro->valor_normal }}</del></span>
                                <br>
                                <span>{{ $carro->valor_promocional }}</span>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="/car-details/{{ $carro->id }}">{{ $carro->nome }}</a>
                            </h1>

                            <ul class="facilities-list clearfix">
                                @php
                                $destaques = json_decode($carro->destacar, true);
                                $destaques = is_array($destaques) ? $destaques : [];
                                @endphp

                                @foreach($destaques as $destaque)
                                <li>{{ $destaque }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Fim dos carro em destaque -->

    <!-- Início da Seção de serviço  -->
    <!-- <div class="service-section content-area bg-grea-4">
    <div class="container">
        <div class="main-title text-center">
            <h1>O que você <span>está procurando?</span></h1>
            <p>Explore nossos diversos serviços para atender às suas necessidades específicas com excelência.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-shield"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="{{ route('services-details') }}">Altamente seguro</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt.</p>
                        <a href="{{ route('services') }}" class="read-more">Leia Mais...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-deal"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="{{ route('services-details') }}">Vendedores confiáveis</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt.</p>
                        <a href="{{ route('services') }}" class="read-more">Leia Mais...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-money"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="{{ route('services-details') }}">Obtenha uma oferta</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt.</p>
                        <a href="{{ route('services') }}" class="read-more">Leia Mais...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-support-2"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="{{ route('services-details') }}">Suporte gratuito</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt.</p>
                        <a href="{{ route('services') }}" class="read-more">Leia Mais...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <!-- Final Seção de serviços -->

    <!-- Início da Seção Últimas Ofertas -->
    <div class="latest-offers content-area-13">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center">
                <h1>Últimas <span>Ofertas</span></h1>
                <p>Explore as ofertas mais recentes que certamente atenderão às suas expectativas.</p>
            </div>
            <div class="row">
                @foreach($ultimasOfertas as $carro)
                <div class="col-md-6 col-lg-6 col-pad">
                    <div class="latest-offers-box">
                        <div class="latest-offers-box-inner">
                            <div class="latest-offers-box-overflow">
                                <div class="latest-offers-box-photo">
                                    <div class="latest-offers-box-photodd">
                                        <a href="/car-details/{{ $carro->id }}">
                                            <img class="img-fluid" src="/img/cars/{{ $carro->imagem_capa }}"
                                                alt="latest-offers" style="width: 400px; height: 400px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h5 class="price">{{ $carro->valor_promocional }}</h5>
                                    <h3 class="title">
                                        <a href="/car-details/{{ $carro->id }}">{{ $carro->nome }}</a>
                                    </h3>
                                </div>
                                <div class="new">Novo</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Fim Seção Últimas Ofertas -->

    <!-- Contadores extratégicos -->
    <!-- <div class="counters-3 bg-grea-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 border-l border-r">
                <div class="counter-box-3">
                    <div class="icon">
                        <i class="flaticon-car"></i>
                    </div>
                    <h1 class="counter">967</h1>
                    <p>Total de Carros</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 border-r">
                <div class="counter-box-3">
                    <div class="icon">
                        <i class="flaticon-blog"></i>
                    </div>
                    <h1 class="counter">1276</h1>
                    <p>Revisões do Revendedor</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 border-r">
                <div class="counter-box-3">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <h1 class="counter">396</h1>
                    <p>Clientes Felizes</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 border-r">
                <div class="counter-box-3">
                    <div class="icon">
                        <i class="flaticon-medal"></i>
                    </div>
                    <h1 class="counter">177</h1>
                    <p>Prêmios</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <!-- Counters end -->


    <!-- Início do blog-->
    <!-- <div class="blog-section content-area-5">
    <div class="container">
        <div class="main-title">
            <h1>Últimas <span>Postagens do Blog</span></h1>
            <p>Fique por dentro das novidades e insights do mundo automotivo. Leia nossas postagens mais recentes e mantenha-se informado.</p>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-5 row g-0">
                    <div class="col-lg-5 col-md-5">
                        <div class="blog-photo">
                            <img src="img/blog/blog-4.png" alt="blog" class="img-fluid w-100">
                            <div class="overlay-icon">
                                <a href="blog-details"><span><i class="fa fa-plus-square-o span"></i></span></a>
                            </div>
                            <div class="date-box">
                                07 Feb
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 align-self-center">
                        <div class="detail">
                            <h3>
                                <a href="{{ route('blog-details') }}">Você está pronto para a concessionária on-line?</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="fa fa-user"></i>Somraz Ali</a></span>
                                <span><a href="#"><i class="fa fa-commenting-o"></i></a> 2 Comentários</span>
                                <span class="mr-0"><a href="#"><i class="fa fa-eye"></i> 742 Views</a></span>
                            </div>
                            <p>Descubra as vantagens e a conveniência de explorar o mundo automotivo através da nossa concessionária online. Saiba por que agora é o momento ideal para começar essa jornada emocionante.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="blog-6 d-flex mb-3">
                    <div class="date flex-shrink-0 me-3">
                        <h1>08</h1>
                        <h5>Janeiro</h5>
                    </div>
                    <div class="detail align-self-center">
                        <h3>
                            <a href="{{ route('blog-details') }}">Você está pronto para a concessionária on-line?</a>
                        </h3>
                        <div class="post-meta">
                            <span><a href="#"><i class="fa fa-user"></i> Sobuz Ali</a></span>
                            <span><a href="#"><i class="fa fa-eye"></i> 274k</a></span>
                        </div>
                    </div>
                </div>
                <div class="blog-6 d-flex mb-3">
                    <div class="date me-3">
                        <h1>14</h1>
                        <h5>Janeiro</h5>
                    </div>
                    <div class="detail align-self-center">
                        <h3>
                            <a href="{{ route('blog-details') }}">Quais são as novidades na João Automóveis?</a>
                        </h3>
                        <div class="post-meta">
                            <span><a href="#"><i class="fa fa-user"></i> Sobuz Ali</a></span>
                            <span><a href="#"><i class="fa fa-eye"></i> 274k</a></span>
                        </div>
                    </div>
                </div>
                <div class="blog-6 d-flex mb-3">
                    <div class="date flex-shrink-0 me-3">
                        <h1>19</h1>
                        <h5>Janeiro</h5>
                    </div>
                    <div class="detail align-self-center">
                        <h3>
                            <a href="{{ route('blog-details') }}">Para vender carros precisamos de Qualidade ou Quantidade?</a>
                        </h3>
                        <div class="post-meta">
                            <span><a href="#"><i class="fa fa-user"></i> Roy Shah</a></span>
                            <span><a href="#"><i class="fa fa-eye"></i> 274k</a></span>
                        </div>
                    </div>
                </div>
                <div class="blog-6 d-flex me-0">
                    <div class="date flex-shrink-0 me-3">
                        <h1>21</h1>
                        <h5>Janeiro</h5>
                    </div>
                    <div class="detail align-self-center">
                        <h3>
                            <a href="{{ route('blog-details') }}">Pronto para a concessionária online?</a>
                        </h3>
                        <div class="post-meta">
                            <span><a href="#"><i class="fa fa-user"></i> Tanzim</a></span>
                            <span><a href="#"><i class="fa fa-eye"></i> 274k</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <!-- Fim do Blog  -->

    <!--  Início Seção Introdução -->
    <!-- <div class="intro-section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="info">
                    <h3>Precisa de Consultoria para Compra de Carro?</h3>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <a class="btn btn-6 btn-lg" href="{{ route('contact') }}">
                    Entrar em contato
                </a>
            </div>
        </div>
    </div>
</div> -->
    <!-- Fim Seção Introdução -->

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
                                <i class="flaticon-mail"></i><a
                                    href="mailto:contato@joaoautomoveisparobe.com.br">contato@joaoautomoveisparobe.com.br</a>
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
                                <a href="#" class="link-inner"><span> Início</span></a>
                            </li>
                            <li>
                                <a href="{{ route('car-grid-fullWidth') }}" class="link-inner"><span> Carros</span></a>
                            </li>
                            <li>
                                <a href="{{ route('localizacao') }}" class="link-inner"><span> Localização</span></a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" class="link-inner"><span> Sobre Nós</span></a>
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
                                        {{ $carro->valor_promocional }} | <a href="#"><i class="fa fa-calendar"></i> {{
                                            $carro->created_at->format('d M, Y') }} </a>
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
                        <p class="copy">© <span id="current-year"></span> <a
                            href="#"
                            target="_blank">- João Automóveis.</a> Todos os direitos reservados.
                            Desenvolvido por <a href="https://www.sitesdriversoft.com.br/porque-ainda-vale-pena-ter-um-site">Sites Driver Soft.</a>
                            <img src="img/logo-sitesdriversoft.jpg" alt="Ícone da Empresa" width="20" height="20">
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="social-list-2">
                            <ul>
                                <li><a href="https://www.instagram.com/joaoautomoveisparobe?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                        class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
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
            left: -213px;
            top: 0px !important;
        }

        .whatsapp-button {
            position: fixed;
            bottom: 72px;
            right: 20px;
            z-index: 1000;
        }


        /* ESTILO PARA MODAL ABERTO AO CLICAR NA IMAGEM DO WHATSAPP */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 50%;
            top: 64%;
            /* Ajuste a margem superior conforme necessário */
            transform: translate(-50%, -50%) scale(0.1);
            width: 30%;
            max-width: 400px;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            animation: modal-open 1.2s ease forwards;
        }

        /* Estilo para o conteúdo do modal */
        .modal-content {
            padding: 20px;
            font-family: Arial, sans-serif;
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
            0% {
                transform: translate(-50%, -50%) scale(0.1);
                opacity: 0;
            }

            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 1;
            }
        }

        /* Estilo para tornar o formulário responsivo */
        @media screen and (max-width: 600px) {
            .modal {
                width: 90%;
                /* Reduzir a largura do modal */
                max-width: 90%;
                /* Reduzir a largura máxima do modal */
            }

            .input-group input {
                width: 100%;
                /* Definir a largura dos campos de entrada como 100% */
                margin-bottom: 10px;
                /* Adicionar espaço entre os campos */
            }

            #submitButton {
                width: 100%;
            }
        }
    </style>

    <!-- Full Page Search -->
    <!-- Modal de Pesquisa de veículos noo banco Full Page Search -->
    <div id="full-page-search">
        <button type="button" class="close">×</button>
        <!-- Usar o método GET para enviar o formulário para a rota 'buscar-carros' -->
        <form id="search-form" action="{{ route('buscar-carros') }}" method="GET" class="search-header">
            <input type="search" name="buscar" id="search-input" value="" placeholder="Digite palavras-chave aqui" />
            <button type="submit" class="btn btn-sm button-theme">Procurar</button>
        </form>
    </div>

    <script src="/js/jquery-2.2.0.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap-submenu.js"></script>
    <script src="/js/rangeslider.js"></script>
    <script src="/js/jquery.mb.YTPlayer.js"></script>
    <script src="/js/bootstrap-select.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.scrollUp.js"></script>
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery.filterizr.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.countdown.js"></script>
    <script src="/js/jquery.mousewheel.min.js"></script>
    <script src="/js/lightgallery-all.js"></script>
    <script src="/js/jnoty.js"></script>
    <script src="/js/sidebar.js"></script>
    <script src="/js/app.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom javascript -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>

    <!-- SCRIPT RESPONSÁVEL PELO CONTROLE DE ANO DO RODAPÉ -->
    <script>
        document.getElementById("current-year").innerText = new Date().getFullYear();
    </script>

    <!-- SCRIPT RESPONSÁVEL para ajustar tamnho anuncios carros dinâmicamente-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Encontrar a maior altura dos detalhes do carro
            var maxDetailHeight = 0;
            var detailElements = document.querySelectorAll('.car-box-3 .detail');

            detailElements.forEach(function (detailElement) {
                maxDetailHeight = Math.max(maxDetailHeight, detailElement.offsetHeight);
            });

            // Aplicar a maior altura a todas as divs de detalhes do carro
            detailElements.forEach(function (detailElement) {
                detailElement.style.height = maxDetailHeight + 'px';
            });
        });
    </script>

    <!-- Botão do WhatsApp gerado no site: https://www.rdstation.com/ferramentas/botao-de-whatsapp-gratuito/ -->
    <!-- <script>window.rwbp={email:'isaque.ixs@gmail.com',phone:'5551999006797',message:'Olá, seja bem vindo ao atendimento João Automóveis. Como podemos ajudar?',lang:'pt-BR'}</script><script defer async src='https://duz4dqsaqembt.cloudfront.net/client/whats.js'></script> -->

</body>

</html>