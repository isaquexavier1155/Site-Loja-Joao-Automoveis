<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;


class CarroController extends Controller
{
    public function index()
    {
        // Recuperar os carros com a tag igual a "DESTAQUE"
        $carros = Carro::where('tag', 'DESTAQUE')->get();
        
        // Recuperar os últimos três carros registrados no banco de dados
        $ultimosCarros = Carro::orderBy('created_at', 'desc')->take(3)->get();
        
        // Passar os carros e os últimos carros para a visão
        return view('index-2', ['carros' => $carros, 'ultimosCarros' => $ultimosCarros]);
    }

    public function carGridFullWidth()
    {
        // Recuperar todos os carros
        $carros = Carro::all();

        // Retorne a view 'car-grid-fullWidth' e passe os carros para ela
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
        $carro->tag = $request->input('tag');
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

    
}
