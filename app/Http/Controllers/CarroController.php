<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\User;

class CarroController extends Controller
{
    public function index()
    {
        // Recuperar os carros com a tag igual a "DESTAQUE"
        $carros = Carro::where('tag', 'DESTAQUE')->get();
        
        // Recuperar os últimos três carros registrados no banco de dados
        $ultimosCarros = Carro::orderBy('created_at', 'desc')->take(3)->get();
    
        $ultimasOfertas = Carro::latest()->take(4)->get();
    
        $blocos_pesquisa = [
            [
                'imagem' => 'img/car-4.jpg',
            ],
            [
                'imagem' => 'img/car-3.jpg',
            ],
            [
                'imagem' => 'img/car-2.jpg',
            ]
        ];
        
        // Passar os carros e os últimos carros para a visão
        return view('index-2', compact('carros', 'ultimosCarros', 'ultimasOfertas', 'blocos_pesquisa'));
    }
    
    public function carGridFullWidth()
    {
        // Recuperar todos os carros sem paginar
        $carros = Carro::paginate(10); // Define o número de carros por página como 2
    
        // Retorne a view 'car-grid-fullWidth' e passe os carros paginados para ela
        return view('car-grid-fullWidth', ['carros' => $carros]);
                
    }
    
    public function mostrarFormulario()
    {
        return view('carros.formulario');
    }

    public function salvarCarro(Request $request)
    {
        // Criar uma instância do modelo Carro e preencher os campos
        $carro = new Carro();
        $carro->nome = $request->input('nome');
        $carro->marca = $request->input('marca');
        $carro->condicao = $request->input('condicao');
        $carro->transmissao = $request->input('transmissao');
        $carro->motor = $request->input('motor');
        $carro->portas = $request->input('portas');
        $carro->passageiros = $request->input('passageiros');
        $carro->valor_normal = $request->input('valor_normal');
        $carro->velocidade_maxima = $request->input('velocidade_maxima');
        $carro->potencia = $request->input('potencia');
        // $carro->imagem = $imagemPath;
        $carro->valor_promocional = $request->input('valor_promocional');
        $carro->endereco = "Av. Taquara, 2691 - Palmeiras, Parobé - RS, 95630-000";
        $carro->combustivel = $request->input('combustivel');
        $carro->quilometragem = $request->input('quilometragem');
        $carro->estilo = $request->input('estilo');
        $carro->cor = $request->input('cor');
        $carro->ano = $request->input('ano');
        $carro->tag = "DESTAQUE";
        // Obtenha as opções selecionadas como um array
        $destacarArray = $request->input('destacar');
        // Atribua o array ao campo destacar após convertê-lo para JSON
        $carro->destacar = json_encode($destacarArray);

        $carro->cambio = $request->input('cambio');
        $carro->direcao = $request->input('direcao');
        $carro->descricao = $request->input('descricao');

        //Image Upload
        if($request->hasFile('imagem_capa') && $request->file('imagem_capa')->isValid()) {
             $requestImage = $request->imagem_capa;
             $extension = $requestImage->extension();
             $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
             $requestImage->move(public_path('img/cars'), $imageName);
             $carro->imagem_capa = $imageName;
         }

        //Image Upload Multiplas Imagens
        if($request->hasFile('imagem')) {
            $imagens = [];
            foreach ($request->file('imagem') as $imagem) {
                if ($imagem->isValid()) {
                    $extension = $imagem->getClientOriginalExtension();
                    $imageName = md5($imagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
                    $imagem->move(public_path('img/cars'), $imageName);
                    $imagens[] = $imageName;
                }
            }
            // Salvar o array de nomes de imagem no banco de dados
            $carro->imagem = json_encode($imagens);
        }
    
        // Salvar o carro no banco de dados
        $carro->save();
    
        return back()->with('success', 'Carro cadastrado com sucesso!');
    }

        public function showCarDetails($id)
        {
            $carro = Carro::find($id);
            return view('car-details', ['carro' => $carro]);
        }

        public function edit($id)
        {
            $carro = Carro::findOrFail($id);
            return view('carros.edit', compact('carro'));
        }
        public function update(Request $request)
        {
            $carro = Carro::findOrFail($request->id);
            $data = $request->all();
        
            // Image Upload
            if ($request->hasFile('imagem_capa') && $request->file('imagem_capa')->isValid()) {
                $requestImage = $request->imagem_capa;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $requestImage->move(public_path('img/cars'), $imageName);
                $data['imagem_capa'] = $imageName;
            }
        
            if ($request->hasFile('imagem')) {
                $images = $carro->imagem ? json_decode($carro->imagem) : [];
                foreach ($request->file('imagem') as $image) {
                    if ($image->isValid()) {
                        $extension = $image->extension();
                        $imageName = md5($image->getClientOriginalName() . strtotime("now")) . "." . $extension;
                        $image->move(public_path('img/cars'), $imageName);
                        $images[] = $imageName;
                    }
                }
                $data['imagem'] = json_encode($images);
            }

            // Obtenha as opções selecionadas como um array
            $destacarArray = $request->input('destacar');
            // Atribua o array ao campo destacar após convertê-lo para JSON
            $carro->destacar = json_encode($destacarArray);
        
            $carro->update($data);

            return redirect()->route('carros.gerenciar-veiculos');
        }

        public function removeImage(Request $request)
        {
            $carro = Carro::findOrFail($request->carro_id);
            $images = json_decode($carro->imagem);
            $index = $request->index;

            if (isset($images[$index])) {
                $imagePath = public_path('img/cars/' . $images[$index]);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Remove o arquivo de imagem do diretório
                }
                unset($images[$index]); // Remove a imagem do array
                $carro->imagem = json_encode(array_values($images)); // Reindexa o array após a remoção
                $carro->save();

                return response()->json(['success' => true]);
            }

            return response()->json(['success' => false, 'message' => 'Índice de imagem inválido']);
        }  

        public function gerenciar_veiculos(){
            // Recuperar todos os carros paginados
            $carros = Carro::paginate(10); // Define o número de carros por página como 2
        
            // Retorne a view 'gerenciar-veiculos' e passe os carros paginados para ela
            return view('gerenciar-veiculos', ['carros' => $carros]);
        }
            
        public function destroy($id)
        {
            $carro = Carro::findOrFail($id);
            $carro->delete();
            
            return redirect()->route('carros.gerenciar-veiculos')->with('success', 'Veículo excluído com sucesso!');
        }


        public function buscar(Request $request)
        {
            $search = $request->input('buscar');
        
            // Verificar se foi feita uma pesquisa
            if ($search) {
                // Realizar a busca de carros com base no termo
                $carros = Carro::where('nome', 'like', "%$search%")->paginate(15);
            } else {
                // Se não houver pesquisa, retornar todos os carros
                $carros = Carro::paginate(15);
            }

                // Verificar se a busca não retornou nenhum resultado
            if ($carros->isEmpty()) {
                $mensagem = "Nenhum carro encontrado para o termo '$search'";
                return view('car-grid-fullWidth', compact('mensagem'));
            }
                
            // Passar os resultados da busca para a view
            return view('car-grid-fullWidth', compact('carros'));
        }

        public function buscarCarrosParaEditar(Request $request)
        {
            $search = $request->input('buscar');
        
            // Verificar se foi feita uma pesquisa
            if ($search) {
                // Realizar a busca de carros com base no termo
                $carros = Carro::where('nome', 'like', "%$search%")->paginate(15);
            } else {
                // Se não houver pesquisa, retornar todos os carros
                $carros = Carro::paginate(15);
            }

                // Verificar se a busca não retornou nenhum resultado
            if ($carros->isEmpty()) {
                $mensagem = "Nenhum carro encontrado para o termo '$search'";
                return view('gerenciar-veiculos', compact('mensagem'));
            }
                
            // Passar os resultados da busca para a view
            return view('gerenciar-veiculos', compact('carros'));
        }


        public function pesquisar(Request $request)
        {
            // Iniciar a consulta
            $query = Carro::query();
        
            // Verificar e adicionar condição para a marca se estiver preenchida
            if ($request->filled('select-brand') && $request->input('select-year') != 'Selecione a marca') {
                $marca = $request->input('select-brand');
                $query->where('marca', $marca); // Utilizar a comparação exata
            }
        
            // Verificar e adicionar condição para o ano se estiver preenchido
            if ($request->filled('select-year') && $request->input('select-year') != 'Selecione o ano') {
                $ano = $request->input('select-year');
                $query->where('ano', $ano);
            }

            // Verificar e adicionar condição para o estilo se estiver preenchido
            if ($request->filled('estilo') && $request->input('estilo') != 'Selecione o Estilo') {
                $estilo = $request->input('estilo');
                $query->where('estilo', $estilo);
                // dd('Estilo:', $estilo, $query->toSql(), $query->getBindings());
            }
        
            // Verificar e adicionar condição para a faixa de preço se estiver preenchida
            if ($request->filled('min_price') && $request->filled('max_price')) {
                $minPrice = preg_replace('/[^0-9]/', '', $request->input('min_price'));
                $maxPrice = preg_replace('/[^0-9]/', '', $request->input('max_price'));
                $query->where(function ($q) use ($minPrice, $maxPrice) {
                    $q->whereRaw('CAST(REPLACE(REPLACE(valor_promocional, "R$", ""), ".", "") AS UNSIGNED) >= ?', [$minPrice])
                        ->whereRaw('CAST(REPLACE(REPLACE(valor_promocional, "R$", ""), ".", "") AS UNSIGNED) <= ?', [$maxPrice]);
                });
            }
        
            // Executar a consulta
            $carros = $query->get();
        
            $blocos_pesquisa = [
                [
                    'imagem' => 'img/car-4.jpg',
                ],
                [
                    'imagem' => 'img/car-3.jpg',
                ],
                [
                    'imagem' => 'img/car-2.jpg',
                ]
            ];
        
            // Recuperar os últimos três carros registrados no banco de dados
            $ultimosCarros = Carro::orderBy('created_at', 'desc')->take(3)->get();
            
            $ultimasOfertas = Carro::latest()->take(4)->get();
        
            // Passa os resultados da busca para a visão
            return view('index-2', compact('carros', 'blocos_pesquisa', 'ultimasOfertas', 'ultimosCarros'));
        }
        
        

        public function checkUser(Request $request)
        {
            dd('chegou na controller');
            $name = $request->input('name');
            $email = $request->input('email');

            // Verifique no banco de dados se o usuário já existe
            $userExists = User::where('name', $name)->orWhere('email', $email)->exists();

            return response()->json(['exists' => $userExists]);
        }

    
}
