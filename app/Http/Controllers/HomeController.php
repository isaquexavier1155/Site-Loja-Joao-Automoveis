<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
}
