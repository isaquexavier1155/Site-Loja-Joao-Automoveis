@extends('layouts.main')

@section('title', 'Gerenciar Veículos')

@section('content')

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Carros</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Início</a></li>
                    <li class="active">Carros</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <style>
        #sadm {
            text-align: center;
            color: white;
            background-color: red;
            padding: 10px; /* Adicione espaço ao redor do texto */
        }

        #sadm i {
            margin-right: 5px; /* Adicione espaço entre o ícone e o texto */
        }
    </style>

    @can('user')
        <h4 id="sadm"><i class="fas fa-exclamation-triangle"></i>SOMENTE ADMINISTRADORES PODEM VER ESSA PÁGINA</h4>
    @elsecan('admin') 

        <!-- Conteudo da página para pesquisa -->
        <!-- Featured car start -->
        <div class="featured-car content-area" id="page-content">
            <div class="container">
                <!-- Option bar start -->
                <div class="option-bar clearfix">
                    <div class="row">
                        <!-- Componente 1 -->
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <div class="sorting-options2">
                                @if(isset($carros))
                                    @if(!$carros->isEmpty())
                                        <h5>Mostrando {{ $carros->firstItem() }} - {{ $carros->lastItem() }} de {{ $carros->total() }} carros</h5>
                                    @else
                                        <h5>Nenhum carro encontrado</h5>
                                    @endif
                                @else
                                    <h5>Nenhum carro encontrado</h5>
                                @endif
                            </div>
                        </div>

                        <!-- Componente 2 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <form id="search-form" action="{{ route('buscar-carros-para-editar') }}" method="GET" class="search-header">
                                <div class="input-group">
                                    <input type="search" name="buscar" id="search" class="form-control form-control-sm" value="" placeholder="Digite palavras-chave aqui"/>
                                    <button type="submit" class="btn btn-sm button-theme">Procurar</button>
                                </div>
                            </form>
                        </div>

                        <!-- Componente 3 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="sorting-options">
                                <!-- <a href="{{ route('car-list-fullWidth') }}" class="change-view-btn float-right"><i class="fa fa-th-list"></i></a> -->
                                <a href="{{ route('carros.gerenciar-veiculos') }}" class="change-view-btn float-right active-view-btn" title="Todos"><i class="fa fa-th-large"></i></a>
                            </div>
                            <!-- <div class="sorting-options-3">
                                <select class="selectpicker search-fields" name="default-order">
                                    <option>Ordenar por</option>
                                    <option>Preço: Alto para Baixo</option>
                                    <option>Preço: Baixo para Alto</option>
                                    <option>Carros mais Recentes</option>
                                    <option>Carros mais Antigos</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    @if(isset($mensagem))
                        <div class="container">
                            <div class="alert alert-danger" role="alert">
                                <i class="fa fa-times-circle"></i> {{ $mensagem }}
                            </div>
                        </div>
                    @else
                        <!-- Conteúdo atual dos carros -->
                        <!-- Início primeiro carro -->
                        @foreach($carros as $carro)
                            <div class="col-lg-4 col-md-6">
                                <div class="car-box-modificado"><!-- qunado mudo o nome dessa classe modal funciona corretamente -->
                                    <!-- Início da Tela exibida ao clicar em expandir -->
                                    <div class="car-thumbnail">
                                        <a href="/car-details/{{ $carro->id }}" class="car-img">
                                            <div class="tag">{{ $carro->tag }}</div>
                                            <img style="height: 500px;" class="d-block w-100" src="img/cars/{{ $carro->imagem_capa }}" alt="{{ $carro->nome }}">
                                            <div class="facilities-list clearfix">
                                                <ul>
                                                    <li>
                                                        <span><i class="flaticon-way"></i></span>{{ $carro->quilometragem }}
                                                    </li>
                                                    <li>
                                                        <span><i class="flaticon-calendar-1"></i></span>{{ $carro->ano }}
                                                    </li>
                                                    <li>
                                                        <span><i class="flaticon-manual-transmission"></i></span>{{ $carro->motor }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="carbox-overlap-wrapper">
                                            <div class="overlap-box">
                                                <div class="overlap-btns-area">
                                                    <a href="#" class="overlap-btn" data-bs-toggle="modal" data-bs-target="#carOverviewModal" data-carro="{{ json_encode($carro) }}">
                                                        <i class="fa fa-eye-slash"></i>
                                                    </a>

                                                    <!-- <a class="overlap-btn wishlist-btn">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a class="overlap-btn compare-btn">
                                                        <i class="fa fa-balance-scale"></i>
                                                    </a> -->
                                                    <!-- Botão expandir para exibir mais fotos do veículo -->
                                                    <div class="car-magnify-gallery">
                                                        @php
                                                            $imagens = json_decode($carro->imagem);
                                                        @endphp
                                                        <a href="img/cars/{{ $imagens[0] }}" class="overlap-btn" data-sub-html="<h4>{{ $carro->nome }}</h4>">
                                                            <i class="fa fa-expand"></i>
                                                            <img class="hidden" src="img/cars/{{ $imagens[0] }}" alt="{{ $carro->nome }}">
                                                        </a>
                                                        @foreach(array_slice($imagens, 1) as $imagem)
                                                            <a href="img/cars/{{ $imagem }}" class="hidden" data-sub-html="<h4>{{ $carro->nome }}</h4>">
                                                                <img class="hidden" src="img/cars/{{ $imagem }}" alt="{{ $carro->nome }}">
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                      
                                    <!-- Fim da Tela exibida ao clicar em expandir -->

                                    <!-- Botões de edição e exclusão -->
                                    <div class="detail">
                                        <h1 class="title">
                                            <a href="/car-details/{{ $carro->id }}">{{ $carro->nome }}</a>
                                        </h1>
                                        <div class="button-group">
                                            <!-- Botão de edição -->
                                            <a href="/cars/{{ $carro->id }}/edit" class="btn btn-warning">Editar</a>                                            
                                            <!-- Botão de exclusão com mensagem de confirmação -->
                                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $carro->id }}">Excluir</a>
                                        </div>
                                    </div>
                                
                                    <!-- Modal de Confirmação para Exclusão -->
                                    <div class="modal custom-modal" id="confirmDeleteModal{{ $carro->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $carro->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                            
                                            <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmDeleteModalLabel{{ $carro->id }}">Confirmar Exclusão</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Tem certeza de que deseja excluir o veículo {{ $carro->nome }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <form id="delete-form-{{ $carro->id }}" action="{{ route('car-delete', ['id' => $carro->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            
                                    <div class="footer clearfix">
                                        <!--<div class="pull-left ratings days">
                                            <span class="ratings-box">4.5/5</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            ( 7 Avaliações )                               
                                        </div>  -->
                                        <div class="pull-right">
                                            <p class="price">{{ $carro->valor_promocional }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!-- Fim primeiro carro -->

                    <!-- Page navigation start -->
                    <div class="pagination-box text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                @if(isset($carros))
                                    @if ($carros->isEmpty())
                                        <li class="page-item disabled">
                                            <span class="page-link"><i class="fa fa-angle-left"></i></span>
                                        </li>
                                    @else
                                        @if ($carros->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link"><i class="fa fa-angle-left"></i></span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $carros->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
                                            </li>
                                        @endif
                                    @endif
                                
                                    <!-- Adicionando links de página para cada página disponível -->
                                    @for ($i = 1; $i <= $carros->lastPage(); $i++)
                                        <li class="page-item {{ $carros->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $carros->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    
                                    @if ($carros->isEmpty())
                                        <li class="page-item disabled">
                                            <span class="page-link"><i class="fa fa-angle-right"></i></span>
                                        </li>
                                    @else
                                        @if ($carros->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $carros->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <span class="page-link"><i class="fa fa-angle-right"></i></span>
                                            </li>
                                        @endif
                                    @endif
                                @endif  
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured car end -->
    @endcan 

    <!-- Car Overview Modal - Botão de olho que está nos carros da listagem acima -->
    <div class="car-model-2">
        <div class="modal fade" id="carOverviewModal" tabindex="-1" role="dialog" aria-labelledby="carOverviewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title" id="carOverviewModalLabel">
                            <h4>Explore o carro dos seus sonhos</h4>
                            <h5><i class="flaticon-pin"></i> Av. Taquara, 2691 - Palmeiras, Parobé - RS, 95630-000</h5>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row modal-raw">
                            <div class="col-lg-6 modal-left">
                                <div class="item active">
                                    <img id="fotoCapa" class="img-fluid" alt="Foto do Carro">
                                    <div class="sobuz">
                                        <div class="price-box">
                                            <span class="del-2" id="preco-1"></span>
                                        </div>
                                        <!--<div class="ratings-2">
                                             <span class="ratings-box">4.5/5</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            ( 7 Avaliações ) 
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 modal-right">
                                <div class="modal-right-content">
                                    <!-- <section>
                                        <h3>Características</h3>
                                        <div class="features">
                                            <ul class="bullets">
                                            </ul>
                                        </div>
                                    </section> -->
                                    <section>
                                        <h3>Visão geral</h3>
                                        <ul class="bullets">
                                            <li><span id="modelo"></span></li>
                                            <li><span id="quilometragem"></span></li>
                                            <li><span id="motor"></span></li>
                                            <li><span id="preco-2"></span></li>
                                            <li><span id="estilo"></span></li>
                                            <li><span id="ano"></span></li>
                                        </ul>
                                    </section>
                                    <div class="description">
                                        <h3>Descrição</h3>
                                        <p id="descricao"></p>
                                        <a href="/car-details/" id="id_carro_link" class="btn btn-md btn-round btn-theme">Mais Detalhes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* .car-model-2 .price-box .del-2 {
            position: relative;
            top: 49px;
        }

        .car-model-2 .modal-content {
            position: relative;
            top: 39px;
        }

        .button-group {
            display: flex;
        }

        .button-group form,
        .button-group a {
            margin-right: 10px;
        } */

        /* Campo de pesquisa de veículo */
        #search-container {
            /* background-image: url("../img/banner.jpg"); */
            background-size: cover;
            background-position: center;
            height: 140px;
            padding: 50px;
            text-align: center;
            margin-bottom: 14%;

        }

        #search-container h1 {
            color: red;
            margin-bottom: 30px;
            font-weight: 900;
        }

        #search-container form {
            width: 50%;
            margin: 0 auto;
        }

        .content-area {
            margin-top: 4%;
        }

        /* Adicionei o seguinte trecho de CSS para ajustar modal de confirmação de exclusão de veículos que não estava funcionando */
        /** Car box start **/
        .car-box-modificado {
            /* position: relative; */
            margin-bottom: 30px;
            background: #fff;
            z-index: 9999;
            -webkit-transition: .5s;
            transition: .5s;
            margin-bottom: 30px!important;
        }

        .car-box-modificado .detail .title {
            font-size: 21px;
            margin-bottom: 10px;
            font-weight: 500;
        }
        .car-box-modificado .detail .title a:hover {
            color: #343a40;
        }
        .car-box-modificado .detail .location {
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: 400;
        }
        .car-box-modificado .detail .location a{
            color: #5f5e5e;
        }
        .car-box-modificado .detail{
            padding: 25px 20px 10px;
        }
        .car-box-modificado .facilities-list {
            position: absolute;
            bottom: 0;
            font-size: 15px;
            width: 100%;
            padding: 10px 0;
            text-align: center;
            z-index: 999;
            background: rgba(0, 0, 0, 0.36);
        }

        .car-box-modificado .footer {
            border-top: 1px solid #e5e5e5;
            background: #fff;
            font-size: 14px;
        }

        .car-box-modificado .footer .ratings {
            font-size: 15px;
            color: orange;
        }
        .car-box-modificado .footer {
            font-size: 15px;
            border-top: solid 1px #efefef;
        }

        .car-box-modificado .footer .price{
            font-weight: 600;
            font-size: 18px;
            padding-right: 20px;
            margin-bottom: 0;
            line-height: 49px;
        }

        .car-box-modificado .days{
            line-height: 49px;
            padding-left: 20px;
        }

        .car-box-modificado .facilities-list li {
            list-style: none;
            float: left;
            width: 33.33%;
            font-weight: 400;
            font-size: 15px;
            color: #fff;
            text-align: center;
        }

        .car-box-modificado .facilities-list li span i{
            margin-right: 5px;
        }
        /** End Car box **/

    </style>

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

    <!-- Script para exibir dados ao clicar no ícone de olho em cada carro -->
    <!-- Para relacionar aos componentes do Modal deve-se mudar o id do componente no html para funcionar -->
    <script>
        $(document).ready(function() {
            $('.overlap-btn').click(function() {
                var carro = $(this).data('carro');
                console.log(carro.id);
                $('#id_carro').text(carro.id);
                $('#id_carro_link').attr('href', '/car-details/' + carro.id);
                $('#modelo').text(carro.nome);
                $('#quilometragem').text(carro.quilometragem);
                $('#motor').text(carro.motor);
                $('#preco-1').text(carro.valor_promocional);
                $('#preco-2').text(carro.valor_promocional);
                $('#estilo').text(carro.estilo);
                $('#ano').text(carro.ano);
                $('#descricao').text(carro.descricao);
                $('#fotoCapa').attr('src', 'img/cars/' + carro.imagem_capa);
            });
        });
    </script>

        <!-- CODIGO ORIGINAL -->



@endsection