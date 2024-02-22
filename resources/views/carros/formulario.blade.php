@extends('layouts.main')

@section('title', 'Cadastrar Veículo')

@section('content')

<div class="container" style="margin-top: 10%;">
    <h1 class="text-center">Cadastrar Novo Carro</h1>

    <form id="editForm" action="{{ route('salvar_carro') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row justify-content-center">
            <!-- Coluna 1 -->
            <div class="col-md-4 mx-1 m-0">
                <!-- Conteúdo da coluna 1 -->
                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                
                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="marca" class="form-label">Marca:</label>
                    <select class="form-select" id="marca" name="marca" required>
                        <option value="">Selecione a Marca</option>
                        <option value="Audi">Audi</option>
                        <option value="BMW">BMW</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Citroën">Citroën</option>
                        <option value="Fiat">Fiat</option>
                        <option value="Ford">Ford</option>
                        <option value="Honda">Honda</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Jeep">Jeep</option>
                        <option value="Kia">Kia</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Peugeot">Peugeot</option>
                        <option value="Renault">Renault</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Volvo">Volvo</option>
                    </select>
                </div>


                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="quilometragem" class="form-label">Quilometragem:</label>
                    <input type="number" class="form-control" id="quilometragem" name="quilometragem">
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="imagem_capa" class="form-label">Foto de Capa:</label>
                    <input type="file" class="form-control" id="imagem_capa" name="imagem_capa" accept="image/*" required>
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="imagem" class="form-label">Mais Fotos:</label>
                    <input type="file" class="form-control" id="imagem" name="imagem[]" accept="image/*" multiple required>
                </div>

                <!-- Campos com máscara -->
                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="valor_normal" class="form-label">Valor Normal:</label>
                    <input type="text" class="form-control" id="valor_normal" name="valor_normal" required>
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="valor_promocional" class="form-label">Valor Promocional:</label>
                    <input type="text" class="form-control" id="valor_promocional" name="valor_promocional">
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="cambio" class="form-label">Câmbio:</label>
                    <select class="form-select" id="cambio" name="cambio" required>
                        <option value="Manual">Manual</option>
                        <option value="Automático">Automático</option>
                    </select>
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="direcao" class="form-label">Direção:</label>
                    <select class="form-select" id="direcao" name="direcao" required>
                        <option value="Hidráulica">Hidráulica</option>
                        <option value="Convencional">Convencional</option>
                    </select>
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="transmissao" class="form-label">Transmissão:</label>
                    <input type="text" class="form-control" id="transmissao" name="transmissao">
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="motor" class="form-label">Motor:</label>
                    <input type="text" class="form-control" id="motor" name="motor">
                </div>
                
            </div>

            <!-- Coluna 2 -->
            <div class="col-md-4 mx-1 m-0">
                <!-- Conteúdo da coluna 2 -->

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="condicao" class="form-label">Condição:</label>
                    <select class="form-select" id="condicao" name="condicao" required>
                        <option value="Usado">Usado</option>
                        <option value="Novo">Novo</option>
                    </select>
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="combustivel" class="form-label">Combustível:</label>
                    <select class="form-select" id="combustivel" name="combustivel">
                        <option value="Flex">Flex</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Etanol">Etanol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="GNV">Gás Natural Veicular (GNV)</option>
                    </select>
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="passageiros" class="form-label">Passageiros:</label>
                    <input type="number" class="form-control" id="passageiros" name="passageiros">
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="estilo" class="form-label">Estilo:</label>
                    <select class="form-select" id="estilo" name="estilo" required>
                        <option value="">Selecione o Estilo</option>
                        <option value="Sedã">Sedã</option>
                        <option value="Hatchback">Hat</option>
                        <option value="SUV">SUV</option>
                        <option value="Picape">Picape</option>
                        <option value="Cupê">Cupê</option>
                        <option value="Minivan">Minivan</option>
                        <option value="Crossover">Crossover</option>
                    </select>
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="cor" class="form-label">Cor:</label>
                    <input type="text" class="form-control" id="cor" name="cor">
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="ano" class="form-label">Ano:</label>
                    <input type="number" class="form-control" id="ano" name="ano">
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="portas" class="form-label">Portas:</label>
                    <input type="number" class="form-control" id="portas" name="portas">
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="potencia" class="form-label">Potência:</label>
                    <input type="number" class="form-control" id="potencia" name="potencia">
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="velocidade_maxima" class="form-label">Velocidade Máxima:</label>
                    <input type="number" class="form-control" id="velocidade_maxima" name="velocidade_maxima">
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="tag" class="form-label">Tag:</label>
                    <select class="form-select" id="tag" name="tag" required>
                        <option value="DESTAQUE">DESTAQUE</option>
                        <option value="UNICO DONO">UNICO DONO</option>
                        <option value="NOVO">NOVO</option>
                    </select>
                </div>

                <div class="mb-3 mb-0" style="width: 80%;">
                    <label for="destacar" class="form-label">Destacar (características):</label>
                    <select class="form-control" id="destacar" name="destacar[]" multiple required>
                        <!-- As opções serão adicionadas dinamicamente via JavaScript -->
                    </select>
                </div>

            </div>

            <!-- Campo de descrição -->
            <div class="col-md-8 mx-auto m-0">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea name="descricao" id="descricao" class="form-control" style="width: 100%;"></textarea>
            </div>

            <!-- Botão de Envio -->
            <div class="col-md-8 mx-auto text-center m-0"><br><br>
                <button type="submit" class="btn btn-primary">Cadastrar Carro</button>
            </div><br><br><br><br><br><br>
        </div>
    </form>
</div>

        <!-- Modal de sucesso -->
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Sucesso!</h5>
                    </div>
                    <div class="modal-body text-center text-success">
                        <i class="fas fa-check-circle fa-4x mb-3"></i>
                        <p>Veículo cadastrado com sucesso. Aguarde recarregar a página.</p>
                    </div>
                </div>
            </div>
        </div>

<style>
    .form-control { 
        width: 124%;
}

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

        <!-- Scripts responsaveis pelo campo destacar -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script  src="js/ie10-viewport-bug-workaround.js"></script>
        <!-- Custom javascript -->
        <script  src="js/ie10-viewport-bug-workaround.js"></script>

        <!-- Script para mascara de campos valor adicionar o prefixo "R$" após o campo perder o foco -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


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

        <!-- SCRIPT PARA EXIBIR MODAL DE SUCESSO EM CASO DE SUCESSO AO CADASTRAR VEÍCULO -->
        <script>
            $(document).ready(function () {
                // Armazenar os valores originais dos campos ao carregar a página
                var originalValues = {};
                $('#editForm :input').each(function() {
                    originalValues[this.name] = $(this).val();
                });

                // Evento de submissão do formulário
                $('#editForm').submit(function (e) {
                    // Verificar se algum campo foi modificado
                    var formModified = false;
                    $('#editForm :input').each(function() {
                        if ($(this).val() !== originalValues[this.name]) {
                            formModified = true;
                            return false; // Sair do loop se um campo for modificado
                        }
                    });

                    // Se nenhum campo foi modificado, cancelar o envio do formulário
                    if (!formModified) {
                        e.preventDefault();
                        return;
                    }

                    // Se algum campo foi modificado, exibir o modal de sucesso
                    $('#successModal').modal('show');
                });
            });
        </script>

        <!-- Script para aplicar a máscara de valor normal e promocionql -->
        <script>
            $(document).ready(function(){
                // Aplica a máscara de valor monetário ao campo valor_normal
                $('#valor_normal').mask('000.000.000', {reverse: true});
                
                // Aplica a máscara de valor monetário ao campo valor_promocional
                $('#valor_promocional').mask('000.000.000', {reverse: true});
            });
        </script>

        <!-- Script para adicionar o prefixo "R$" após o campo perder o foco -->
        <script>
            $(document).ready(function(){
                // Adiciona o prefixo "R$" ao valor do campo valor_normal ao perder o foco
                $('#valor_normal').blur(function() {
                    if ($(this).val() !== '') {
                        $(this).val('R$ ' + $(this).val());
                    }
                });

                // Adiciona o prefixo "R$" ao valor do campo valor_promocional ao perder o foco
                $('#valor_promocional').blur(function() {
                    if ($(this).val() !== '') {
                        $(this).val('R$ ' + $(this).val());
                    }
                });
            });
        </script>


@endsection
