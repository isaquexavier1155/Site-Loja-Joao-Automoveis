@extends('layouts.main')

@section('title', 'Carros')

@section('content')

 <!-- Car details page start -->
 <div class="car-details-page content-area-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Localização da loja via API Google Maps -->
                <div class="location mb-50">
                    <div class="map">
                        <!-- <h3 class="heading-2">Localização da Loja</h3> -->
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        //Everton me mandou a seguinte localização -29.638512598665486, -50.81339350388513
        //escolhida no mapa: -29.63878725658625, -50.81336923383515
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
