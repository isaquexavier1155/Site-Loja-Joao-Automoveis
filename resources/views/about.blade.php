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
                                    <img src="{{ asset('img/car-2.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/car-3.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/car-4.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                                </div>
                            </div>

                            <style>
                                .carousel-img {
                                height: 500px; /* Defina a altura desejada para as imagens */
                                object-fit: cover; /* Garante que a imagem mantenha sua proporção */
                            }
                            </style>

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