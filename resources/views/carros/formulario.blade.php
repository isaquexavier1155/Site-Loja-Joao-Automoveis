@extends('layouts.main')

@section('title', 'Carros')

@section('content')

    <div class="container" style="margin-top: 10%;">

        <h1 class="text-center">Cadastrar Novo Carro</h1>

        <form action="{{ route('salvar_carro') }}" method="post" enctype="multipart/form-data" class="row g-3 justify-content-center ms-auto me-auto" style="width: 60%;">
            @csrf

            <div class="col-md-6">
                <!-- Coluna 1 -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" value="CRUZE LT 2012" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="mb-3">
                    <label for="imagem" class="form-label">Outras Fotos:</label>
                    <input type="file" class="form-control" id="imagem" name="imagem[]" accept="image/*" multiple>
                </div>

                <div class="mb-3">
                    <label for="valor_normal" class="form-label">Valor Normal:</label>
                    <input type="number" value="60900" class="form-control" id="valor_normal" name="valor_normal" required>
                </div>

                <div class="mb-3">
                    <label for="cambio" class="form-label">Câmbio:</label>
                    <select class="form-select" id="cambio" name="cambio" required>
                        <!-- <option value="">Selecione uma opção</option> -->
                        <option value="Manual">Manual</option>
                        <option value="Automático">Automático</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="transmissao" class="form-label">Transmissão:</label>
                    <input type="text" value="5 marchas" class="form-control" id="transmissao" name="transmissao">
                </div>

                <div class="mb-3">
                    <label for="motor" class="form-label">Motor:</label>
                    <input type="text" value="1.8 FLEX" class="form-control" id="motor" name="motor">
                </div>

                <div class="mb-3">
                    <label for="portas" class="form-label">Portas:</label>
                    <input type="number" value="4" class="form-control" id="portas" name="portas">
                </div>

                <div class="mb-3">
                    <label for="marca" class="form-label">Marca:</label>
                    <input type="text" value="Chevrolet" class="form-control" id="marca" name="marca">
                </div>

                <div class="mb-3">
                    <label for="velocidade_maxima" class="form-label">Velocidade Máxima:</label>
                    <input type="number" value="204" class="form-control" id="velocidade_maxima" name="velocidade_maxima">
                </div>

                <div class="mb-3">
                    <label for="potencia" class="form-label">Potência:</label>
                    <input type="number" value="140" class="form-control" id="potencia" name="potencia">
                </div>

                <div class="mb-3">
                    <label for="destacar" class="form-label">Destacar (características):</label>
                    <select class="form-control" id="destacar" name="destacar[]" multiple>
                    <!-- As opções serão adicionadas dinamicamente via JavaScript -->
                    </select>
                </div>
            </div>


            <!-- /////////////////////////////////////////////////COLUNA 2 -->
            <div class="col-md-6">
                <!-- Coluna 2 -->
                <div class="mb-3">
                    <label for="imagem_capa" class="form-label">Foto de Capa:</label>
                    <input type="file" class="form-control" id="imagem_capa" name="imagem_capa" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="quilometragem" class="form-label">Quilometragem:</label>
                    <input type="number" value="98000" class="form-control" id="quilometragem" name="quilometragem">
                </div>

                <div class="mb-3">
                    <label for="valor_promocional" class="form-label">Valor Promocional:</label>
                    <input type="number" value="59900" class="form-control" id="valor_promocional" name="valor_promocional">
                </div>

                <div class="mb-3">
                    <label for="condicao" class="form-label">Condição:</label>
                    <select class="form-select" id="condicao" name="condicao" required>
                        <!-- <option value="">Selecione uma opção</option> -->
                        <option value="Usado">Usado</option>
                        <option value="Novo">Novo</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="direcao" class="form-label">Direção:</label>
                    <select class="form-select" id="direcao" name="direcao" required>
                        <!-- <option value="">Selecione uma opção</option> -->
                        <option value="Hidráulica">Hidráulica</option>
                        <option value="Convencional">Convencional</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="combustivel" class="form-label">Combustível:</label>
                    <input type="text" value="Flex" class="form-control" id="combustivel" name="combustivel">
                </div>
                
                <div class="mb-3">
                    <label for="passageiros" class="form-label">Passageiros:</label>
                    <input type="number" value="5" class="form-control" id="passageiros" name="passageiros">
                </div>

                <div class="mb-3">
                    <label for="estilo" class="form-label">Estilo:</label>
                    <input type="text" value="Sedã" class="form-control" id="estilo" name="estilo">
                </div>

                <div class="mb-3">
                    <label for="cor" class="form-label">Cor:</label>
                    <input type="text" value="Prata" class="form-control" id="cor" name="cor">
                </div>

                <div class="mb-3">
                    <label for="ano" class="form-label">Ano:</label>
                    <input type="number" value="2012" class="form-control" id="ano" name="ano">
                </div>

                <div class="mb-3">
                    <label for="tag" class="form-label">Tag:</label>
                    <select class="form-select" id="tag" name="tag" required>
                        <!-- <option value="">Selecione uma opção</option> -->
                        <option value="DESTAQUE">DESTAQUE</option>
                        <option value="UNICO DONO">UNICO DONO</option>
                        <option value="NOVO">NOVO</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea name="descricao" id="descricao" class="form-control" style="width: calc(100% - 15px);"></textarea>
            </div>
            <div class="col-md-12 text-center">
                <!-- Botão de Envio -->
                <button type="submit" class="btn btn-primary">Cadastrar Carro</button><br><br>
            </div>
        </form>
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

        <!-- Scripts responsaveis pelo campo destacar -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script  src="js/ie10-viewport-bug-workaround.js"></script>
        <!-- Custom javascript -->
        <script  src="js/ie10-viewport-bug-workaround.js"></script>

        <!--Script responsaveis pelo campo destacar -->
        <script>
            $(document).ready(function () {
                $('#destacar').select2({
                    tags: true,
                    tokenSeparators: [','],
                    placeholder: 'Digite uma característica e pressione Enter',
                });
            });
        </script>

@endsection
