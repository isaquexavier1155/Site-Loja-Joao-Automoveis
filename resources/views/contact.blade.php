
@extends('layouts.main')

@section('title', 'Sobre nós')

@section('content')

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Contate-nos</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Início</a></li>
                    <li class="active">Contate-nos</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Contact 2 start -->
    <div class="contact-2 content-area-5">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center">
                <h1>Entre em <span>Contato</span> Conosco</h1>
                <p>Estamos aqui para atendê-lo da melhor maneira possível. Entre em contato conosco para esclarecer dúvidas, fazer sugestões ou agendar uma visita. Sua opinião é importante para nós.</p>
            </div>
            <form action="{{ route('email.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="nome" value="Carol" class="form-control" id="floating-full-name" placeholder="Full Name">
                                    <label for="floating-full-name">Nome completo</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" value="carol.rs97@gmail.com" class="form-control" id="floating-email-address" placeholder="Email Address">
                                    <label for="floating-email-address">E-mail</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="assunto" value="Assunto"  class="form-control" id="floating-subject" placeholder="Subject">
                                    <label for="floating-subject">Assunto</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="telefone" value="51980388229" class="form-control" id="floating-phone-Number" placeholder="Phone Number">
                                    <label for="floating-phone-Number">Número de telefone</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea name="mensagem"class="form-control" value="Gostaria de informações sobre um veículo" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Ajustar envio de Comentário ou Mensagem</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send-btn text-center">
                                    <button type="submit" class="btn btn-primary btn-4 btn-lg">Enviar Mensagem</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-info-2">
                            <div class="ci-box d-flex mb-3">
                                <div class="icon">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="detail">
                                    <h5>Telefone:</h5>
                                    <p><a href="#">(51)99940-2842</a></p>
                                </div>
                            </div>
                            <div class="ci-box d-flex  mb-3">
                                <div class="icon">
                                    <i class="flaticon-mail"></i>
                                </div>
                                <div class="detail">
                                    <h5>Email:</h5>
                                    <p><a href="mailto:contato@joaoautomoveisparobe.com.br">contato@joaoautomoveisparobe.com.br</a></p>
                                </div>
                            </div>
                             <!--<div class="ci-box d-flex  mb-3">
                                <div class="icon">
                                    <i class="flaticon-earth"></i>
                                </div>
                                <div class="detail">
                                    <h5>Web:</h5>
                                    <p><a href="#">info@themevessel.com</a></p>
                                </div> 
                            </div>-->
                            <!-- <div class="ci-box d-flex">
                                <div class="icon">
                                    <i class="flaticon-fax"></i>
                                </div>
                                <div class="detail">
                                    <h5>Fax:</h5>
                                    <p><a href="#">+0477 85X6 552</a></p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact 2 end -->

    <!-- Google map start -->
    <div class="section">
        <div class="map">
            <div id="map" class="contact-map"></div>
        </div>
    </div>
    <!-- Google map end -->

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

    <script>
    // Chama a função initMap ao carregar a página
    document.addEventListener("DOMContentLoaded", function() {
        initMap();
    });
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRX7MbidxCnNN4UL5bL4o_X2HlpM0qjI0&callback=initMap" async defer></script>

<script>
    // Função de inicialização do mapa Google Maps API
    function initMap() {
        // Coordenadas da localização desejada
        var minhaLocalizacao = { lat: -29.63878725658625, lng: -50.81336923383515 };

        // Opções de configuração do mapa
        var mapOptions = {
            zoom: 15,
            center: minhaLocalizacao
        };

        // Criar o mapa
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        // Adicionar marcador
        var marker = new google.maps.Marker({
            position: minhaLocalizacao,
            map: map,
            title: 'Minha Localização'
        });
    }
</script>

@endsection
