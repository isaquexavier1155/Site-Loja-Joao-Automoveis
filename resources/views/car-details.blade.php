@extends('layouts.main')

@section('title', 'Carros')

@section('content')

<!-- Sub banner start -->
<div class="sub-banner" style="background-image: url('/img/cars/{{ $carro->imagem_capa }}');">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Detalhes do Carro</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Início</a></li>
                <li class="active">Detalhes do Carro</li>
            </ul>
        </div>
    </div>
</div>

<!-- Sub Banner end -->

<!-- Car details page start -->
<div class="car-details-page content-area-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="car-details-section">
                    <!-- Heading start -->
                    <div class="heading-car clearfix">
                        <div class="pull-left">
                            <h3>{{ $carro->nome }}</h3>
                            <h6>
                                <i class="flaticon-pin"></i>Av. Taquara, 2691 - Palmeiras, Parobé - RS, 95630-000
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h3><span>{{ $carro->valor_promocional }}</span></h3>
                            <div class="ratings-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>( 4.5/5 )</span>
                            </div>
                        </div>
                    </div>

                    <div class="product-slider-box clearfix mb-30">
                        <div class="product-img-slide">
                            <div class="slider-for">
                                @foreach(json_decode($carro->imagem) as $imagem)
                                <img src="/img/cars/{{ $imagem }}" class="img-fluid w-100" alt="slider-car">
                                @endforeach
                            </div>
                            <div class="slider-nav">
                                @foreach(json_decode($carro->imagem) as $imagem)
                                <div class="thumb-slide"><img src="/img/cars/{{ $imagem }}" class="img-fluid"
                                        alt="small-car"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Tabbing box start -->
                    <div class="tabbing tabbing-box mb-40">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Descrição</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Especificações</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-5" data-bs-toggle="tab"
                                    data-bs-target="#contact-5" type="button" role="tab" aria-controls="contact-5"
                                    aria-selected="false">Localização</button>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab-6" data-bs-toggle="tab" data-bs-target="#contact-6" type="button" role="tab" aria-controls="contact-6" aria-selected="false">Vídeo</button>
                                </li> -->
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <div class="car-description mb-50">
                                            <h3 class="heading-2">
                                                Descrição
                                            </h3>
                                            <p>{{ $carro->descricao }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample3">
                                    <div class="accordion-item">
                                        <div class="car-amenities mb-30">
                                            <h3 class="heading-2">Especificações</h3>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check"></i>Velocidade máxima: {{
                                                            $carro->velocidade_maxima }}
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check"></i>Quilometragem: {{
                                                            $carro->quilometragem }}
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check"></i>Motor: {{ $carro->motor }}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check"></i>Estilo: {{ $carro->estilo }}
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check"></i>Ano: {{ $carro->ano }}
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check"></i>Tipo de combustível: {{
                                                            $carro->combustivel }}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check"></i>Portas: {{ $carro->portas }}
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check"></i>Potência: {{ $carro->potencia }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Localização da loja via API Google Maps -->
                            <div class="tab-pane fade" id="contact-5" role="tabpanel" aria-labelledby="contact-tab-5">
                                <div class="accordion accordion-flush" id="accordionFlushExample5">
                                    <div class="accordion-item">
                                        <div class="location mb-50">
                                            <div class="map">
                                                <h3 class="heading-2">Localização</h3>
                                                <div id="map" class="contact-map"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="tab-pane fade" id="contact-6" role="tabpanel" aria-labelledby="contact-tab-6">
                                    <div class="accordion accordion-flush" id="accordionFlushExample6">
                                        <div class="accordion-item">
                                            <div class="inside-car mb-50">
                                                <h3 class="heading-2">
                                                    Vídeo
                                                </h3>
                                                <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>

                    <!-- Contact 2 start -->
                    <div class="contact-2 ca mb-50">
                        <h3 class="heading-2">Formulário de Contato</h3>
                        <form action="{{ route('email.store') }}" method="post" class="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nome" class="form-control" id="floating-full-name"
                                            placeholder="Full Name">
                                        <label for="floating-full-name">Nome completo</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control"
                                            id="floating-email-address" placeholder="Email Address">
                                        <label for="floating-email-address">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="assunto" class="form-control" id="floating-subject"
                                            placeholder="Subject">
                                        <label for="floating-subject">Assunto</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="telefone" class="form-control"
                                            id="floating-phone-Number" placeholder="Phone Number">
                                        <label for="floating-phone-Number">Número de telefone</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <textarea name="mensagem" class="form-control"
                                            placeholder="Leave a comment here" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Digite sua mensagem aqui</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send-btn text-center">
                                        <button type="submit" class="btn btn-primary btn-4 btn-lg">Enviar
                                            Mensagem</button>
                                    </div>
                                </div>

                                <!-- Modal de sucesso -->
                                <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                                    aria-labelledby="successModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="successModalLabel">Sucesso!</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span id="spann" aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center text-success">
                                                <i class="fas fa-check-circle fa-4x mb-3"></i>
                                                <p>Sua mensagem foi enviada com sucesso. Entraremos em contato em breve.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal de erro -->
                                <div class="modal fade" id="errorModal" tabindex="-1" role="dialog"
                                    aria-labelledby="errorModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="errorModalLabel">Erro!</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center text-danger">
                                                <i class="fas fa-times-circle fa-4x mb-3"></i>
                                                <p>Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais
                                                    tarde.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    /* Estilo personalizado para o botão de fechar dos modais */
                                    .modal-header .close {
                                        font-size: 1rem;
                                        width: 50px;
                                        height: 30px;
                                        line-height: 1;
                                        background-color: #198754 !important;
                                        color: white;
                                    }

                                    /* Ajuste do espaçamento entre o ícone de fechar e o título do modal */
                                    .modal-title {
                                        margin-right: 40px;
                                    }

                                    #spann {
                                        color: white !important;
                                    }
                                </style>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget advanced-search d-none-992">
                        <h3 class="sidebar-title">Características</h3>
                        <ul>
                            <li>
                                <span>Estilo:</span>{{ $carro->estilo }}
                            </li>
                            <li>
                                <span>Ano:</span>{{ $carro->ano }}
                            </li>
                            <li>
                                <span>Quilometragem :</span>{{ $carro->quilometragem }}
                            </li>
                            <li>
                                <span>Motor:</span>{{ $carro->motor }}
                            </li>
                            <li>
                                <span>Transmissão:</span>{{ $carro->transmissao }}
                            </li>
                            <!-- <li>
                                    <span>Interior:</span>Preto
                                </li> -->
                            <li>
                                <span>Portas:</span>{{ $carro->portas }}
                            </li>
                            <li>
                                <span>Passageiros:</span>4
                            </li>

                            <li>
                                <span>Tipo de Combustível:</span>{{ $carro->combustivel }}
                            </li>
                            <li>
                                <span>Condição:</span>{{ $carro->condicao }}
                            </li>
                        </ul>
                    </div>

                    <!-- Question start -->
                    <div class="widget question">
                        <h5 class="sidebar-title">Tem Alguma Dúvida?</h5>
                        <ul class="contact-info">
                            <li>
                                <i class="flaticon-pin"></i>Av. Taquara, 2691 - Palmeiras, Parobé - RS, 95630-000
                            </li>
                            <li>
                                <i class="flaticon-mail"></i><a
                                    href="mailto:contato@joaoautomoveisparobe.com.br">contato@joaoautomoveisparobe.com.br</a>
                            </li>
                            <li>
                                <i class="flaticon-phone"></i><a href="tel:051999402842">051999402842</a>
                            </li>
                        </ul>
                        <div class="social-list clearfix">
                            <ul>
                                <!-- Link para o Instagram -->
                                <li><a href="https://www.instagram.com/joaoautomoveisparobe?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                        class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
                                <!-- <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                </ul> -->
                        </div>
                    </div>

                    <!-- Financing calculator start -->
                    <div class="contact-1 financing-calculator widget widget-3">
                        <h3 class="sidebar-title">Simulação de financiamento</h3>
                        <form id="financing-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputprice" class="form-label">Preço</label>
                                <input type="text" class="form-control" id="inputprice" placeholder="30000">
                            </div>
                            <div class="form-group">
                                <label for="inputinterest" class="form-label">Taxa de juros (%)</label>
                                <input type="text" class="form-control" id="inputinterest" placeholder="15">
                            </div>
                            <div class="form-group">
                                <label for="inputperiod" class="form-label">Período em meses</label>
                                <input type="text" class="form-control" id="inputperiod" placeholder="24">
                            </div>
                            <div class="form-group">
                                <label for="inputpayment" class="form-label">Entrada</label>
                                <input type="text" class="form-control" id="inputpayment" placeholder="3000">
                            </div>
                            <div class="form-group mb-0">
                                <button type="button" class="btn btn-primary btn-4 btn-lg"
                                    id="calculateBtn">Calcular</button>
                            </div>
                        </form>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog"
                        aria-labelledby="resultModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="resultModalLabel">Simulação de Financiamento</h5>
                                </div>
                                <div class="modal-body" id="resultModalBody" style="white-space: pre-line;"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        onclick="fecharModal()">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
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

                <!-- SCRIPT PARA FUNCIONAR SCRIPT DE MÁSCARA DE TELEFONE ABAIXO -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


                <!-- SCRIP PARA CALCULAR E EXIBIR MODAL DE SIMULAÇÃO DE FINANCIAMENTO -->
                <script>
                    $(document).ready(function () {
                        // Evento de clique no botão Calcular
                        $('#calculateBtn').on('click', function () {
                            // Obtendo os valores do formulário
                            var price = parseFloat($('#inputprice').val().replace('R$', '').replace('.', '').replace(',', '.'));
                            var interestRate = parseFloat($('#inputinterest').val().replace('%', ''));
                            var period = parseInt($('#inputperiod').val());
                            var downPayment = parseFloat($('#inputpayment').val().replace('R$', '').replace('.', '').replace(',', '.'));

                            // Validando os valores
                            if (isNaN(price) || isNaN(interestRate) || isNaN(period) || isNaN(downPayment)) {
                                alert('Por favor, preencha todos os campos corretamente.');
                                return;
                            }

                            // Convertendo a taxa de juros para decimal
                            var monthlyInterestRate = interestRate / 100 / 12;

                            // Calculando o montante do financiamento
                            var loanAmount = price - downPayment;

                            // Calculando a prestação mensal usando a fórmula de amortização constante
                            var monthlyPayment = (loanAmount * monthlyInterestRate) / (1 - Math.pow(1 + monthlyInterestRate, -period));

                            // Calculando o total de juros
                            var totalInterest = (monthlyPayment * period) - loanAmount;

                            // Formatando os resultados para exibição
                            var formattedResult =
                                'Preço do Carro: R$' + price.toFixed(2) + '\n' +
                                'Entrada: R$' + downPayment.toFixed(2) + '\n' +
                                'Montante Financiado: R$' + loanAmount.toFixed(2) + '\n' +
                                'Taxa de Juros: ' + interestRate.toFixed(2) + '%\n' +
                                'Período (Meses): ' + period + '\n' +
                                'Total de Juros: R$' + totalInterest.toFixed(2) + '\n\n' +
                                'Prestação Mensal: R$' + monthlyPayment.toFixed(2);

                            // Exibindo o resultado no modal
                            $('#resultModalBody').text(formattedResult);
                            $('#resultModal').modal('show');
                        });
                    });
                </script>

                <!-- SCRIPT PARA FECHAR MODAL DE SIMULAÇÃO DE FINANCIAMENTO -->
                <script>
                    function fecharModal() {
                        $('#resultModal').modal('hide');
                    }
                </script>

                <!-- Adicione este script para carregar o Google Maps API e exibir o mapa -->
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRX7MbidxCnNN4UL5bL4o_X2HlpM0qjI0&callback=initMap">
                    </script>

                <script>
                    // Função de inicialização do mapa Google Maps API
                    function initMap() {
                        // Coordenadas da localização desejada
                        var minhaLocalizacao = { lat: -29.638704335107594, lng: -50.81335630017703 };

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

                <!-- SCRIPT PARA EXIBIR MODAL DE SUCESSO OU ERRO NO ENVIO DE EMAIL -->
                <script>
                    $(document).ready(function () {
                        // Captura o envio do formulário
                        $('.contactForm').submit(function (e) {
                            e.preventDefault();
                            $.ajax({
                                type: $(this).attr('method'),
                                url: $(this).attr('action'),
                                data: $(this).serialize(),
                                success: function (response) {
                                    $('#successModal').modal('show');
                                },
                                error: function (xhr, status, error) {
                                    $('#errorModal').modal('show');
                                }
                            });
                        });


                        // Evento de clique para o botão "Fechar" do modal de sucesso
                        $('#successModal').on('click', '.close', function () {
                            $('#successModal').modal('hide');
                        });


                        // Evento de clique para o botão "Fechar" do modal de erro
                        $('#errorModal').on('click', '.close', function () {
                            $('#errorModal').modal('hide');
                        });
                    });
                </script>

                <!-- Script para Aplicar a máscara de telefone -->
                <script>
                    $(document).ready(function() {
                        $('#floating-phone-Number').mask('(00) 00000-0000');

                        // Remover a máscara de telefone antes de enviar o formulário
                        $('form').submit(function() {
                            $('#floating-phone-Number').unmask();
                        });
                    });
                </script>

@endsection