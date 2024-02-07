@extends('layouts.main')

@section('title', 'Sobre nós')

@section('content')

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Sobre nós</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Início</a></li>
                    <li class="active">Sobre nós</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Service center strat -->
    <div class="about-car content-area-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-car-photo">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/car/car-1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/car/car-2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/car/car-3.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 align-self-center">
                    <div class="best-used-car">
                        <h3>Bem-vindo à <span>João Automóveis</span></h3>
                        <p>Seja você um entusiasta de carros ou alguém em busca do veículo dos seus sonhos, a João Automóveis é o seu destino definitivo. Fundada com paixão e dedicação, nossa empresa tem como missão proporcionar uma experiência única e excepcional no universo automotivo.</p>
                        <p>Na João Automóveis, não vendemos apenas carros; entregamos sonhos sobre quatro rodas. Acreditamos que cada cliente é único, e nossa equipe comprometida está aqui para entender suas necessidades e superar suas expectativas.</p>
                        <p>Com uma tradição que remonta às raízes da indústria automobilística, permanecemos na vanguarda da inovação e excelência. Nosso compromisso com a qualidade, transparência e atendimento ao cliente é o que nos diferencia.</p>
                        <p>Explore nossa vasta gama de veículos de alta qualidade, desde os modelos clássicos até as últimas novidades em tecnologia automotiva. Na João Automóveis, a jornada de cada cliente é única, e estamos aqui para torná-la inesquecível.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service center end -->

    <!-- Service section start -->
    <div class="service-section content-area bg-grea-4">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center">
                <h1>Encontre o <span>Que Você Procura</span></h1>
                <p>Seja bem-vindo à nossa plataforma, onde seus desejos automotivos se tornam realidade. Na João Automóveis, estamos aqui para ajudá-lo a encontrar o veículo perfeito que atenda às suas expectativas.</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-info-2">
                        <div class="icon">
                            <i class="flaticon-shield"></i>
                        </div>
                        <div class="detail">
                            <h5>
                                <a href="services-details.html">Segurança em Primeiro Lugar</a>
                            </h5>
                            <p>Na João Automóveis, a sua tranquilidade é a nossa prioridade. Investimos em medidas altamente seguras...</p>
                            <a href="services.html" class="read-more">Saiba mais...</a>
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
                                <a href="services-details.html">Vendedores Confiáveis</a>
                            </h5>
                            <p>Na João Automóveis, contamos com uma equipe de vendedores dedicados e confiáveis, prontos para guiá-lo em cada etapa da sua jornada automotiva. Nossa prioridade é oferecer um serviço transparente e confiável, proporcionando a você a tranquilidade que merece. Conheça mais sobre a nossa equipe e como estamos comprometidos em superar suas expectativas.</p>
                            <a href="services.html" class="read-more">Saiba mais...</a>
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
                                <a href="services-details.html">Receba uma Oferta</a>
                            </h5>
                            <p>Na João Automóveis, facilitamos o processo de obtenção de ofertas personalizadas para atender às suas necessidades. Nossa equipe está pronta para oferecer soluções sob medida, garantindo que você encontre o melhor negócio. Descubra como podemos tornar a sua experiência de compra mais conveniente e vantajosa.</p>
                            <a href="services.html" class="read-more">Saiba mais...</a>
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
                                <a href="services-details.html">Suporte Gratuito</a>
                            </h5>
                            <p>Na João Automóveis, oferecemos suporte gratuito para garantir que sua experiência seja suave e sem complicações. Estamos aqui para responder às suas perguntas, fornecer assistência e orientá-lo em cada passo do caminho. Descubra como nosso suporte dedicado faz toda a diferença, proporcionando a você a confiança e tranquilidade que merece.</p>
                            <a href="services.html" class="read-more">Saiba mais...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service section end -->

    <!-- Counters strat -->
    <div class="counters-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box-2">
                        <div class="icon">
                            <i class="flaticon-car"></i>
                        </div>
                        <div class="detail align-self-center">
                            <h2 class="counter">475</h2>
                            <h5>Total de Carros</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box-2">
                        <div class="icon">
                            <i class="flaticon-blog"></i>
                        </div>
                        <div class="detail">
                            <h2 class="counter">1402</h2>
                            <h5>Avaliações dos Revendedores</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box-2">
                        <div class="icon">
                            <i class="flaticon-user"></i>
                        </div>
                        <div class="detail">
                            <h2 class="counter">252</h2>
                            <h5>Clientes Felizes</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box-2">
                        <div class="icon">
                            <i class="flaticon-medal"></i>
                        </div>
                        <div class="detail">
                            <h2 class="counter">555</h2>
                            <h5>Prêmios</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counters end -->

    <!-- Parceiros Strat -->
    <!-- <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-slider slide-box-btn">
                        <div class="custom-box"><img src="img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                        <div class="custom-box"><img src="img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                        <div class="custom-box"><img src="img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                        <div class="custom-box"><img src="img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
                        <div class="custom-box"><img src="img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                        <div class="custom-box"><img src="img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                        <div class="custom-box"><img src="img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                        <div class="custom-box"><img src="img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
                        <div class="custom-box"><img src="img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Partners end -->

        <script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script  src="js/bootstrap-submenu.js"></script>
        <script  src="js/rangeslider.js"></script>
        <script  src="js/jquery.mb.YTPlayer.js"></script>
        <script  src="js/bootstrap-select.min.js"></script>
        <script  src="js/jquery.easing.1.3.js"></script>
        <script  src="js/jquery.scrollUp.js"></script>
        <script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script  src="js/dropzone.js"></script>
        <script  src="js/slick.min.js"></script>
        <script  src="js/jquery.filterizr.js"></script>
        <script  src="js/jquery.magnific-popup.min.js"></script>
        <script  src="js/jquery.countdown.js"></script>
        <script  src="js/jquery.mousewheel.min.js"></script>
        <script  src="js/lightgallery-all.js"></script>
        <script  src="js/jnoty.js"></script>
        <script  src="js/sidebar.js"></script>
        <script  src="js/app.js"></script>

         <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script  src="js/ie10-viewport-bug-workaround.js"></script>
        <!-- Custom javascript -->
        <script  src="js/ie10-viewport-bug-workaround.js"></script>
@endsection