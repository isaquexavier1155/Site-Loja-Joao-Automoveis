@extends('layouts.main')

@section('title', 'Gerenciar Veículos')

@section('content')

<div class="container">
    <div class="row justify-content-center my-10-percent-margin">
        <div class="col-md-4">
            <div class="card ">
                <div class="card-body">
                    <h5 class="card-title">Editar Veículos</h5>
                    <p class="card-text">Opção para editar os veículos existentes.</p>
                    <a href="{{ route('carros.gerenciar-veiculos') }}" class="btn btn-primary">Editar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar Veículos</h5>
                    <p class="card-text">Opção para cadastrar novos veículos.</p>
                    <a href="{{ route('cadastrar_carro') }}" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
   
    .my-10-percent-margin {
    margin-top: 22vw;
    margin-bottom: 13%;
}
 


</style>



<!-- Scripts para carregar a página corretamente -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap-submenu.js"></script>
<script src="js/rangeslider.js"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.scrollUp.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.filterizr.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/lightgallery-all.js"></script>
<script src="js/jnoty.js"></script>
<script src="js/sidebar.js"></script>
<script src="js/app.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="js/ie10-viewport-bug-workaround.js"></script>


@endsection
