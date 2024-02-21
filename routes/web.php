<?php

use App\Http\Controllers\SendmailController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarroController;
use App\Http\Controllers\ContatoWhatsappController;


// //ROTAS DE EXEMPLO DO PROJETO RIFAS
// Route::get('/home', [RifaController::class, 'home']);
// Route::get('/rifas/create_rifa', [RifaController::class, 'create'])->middleware('auth');
// Route::get('/', [RifaController::class, 'index']);

// 2 ROTAS PARA PÁGINA INICIAL DO SITE
// Route::get('/index-2', function () {
//     return view('index-2');
// })->name('index-2');

Route::get('/', [CarroController::class, 'index']);

Route::get('/index-2', [CarroController::class, 'index'])->name('index-2');


//  Route::get('/index-2', function () {
//      return view('index-2');
//  })->name('index-2')->middleware('auth');


//ROTAS MENU CABEÇALHO DA PÁGINA INICIAL

//Carros
Route::get('/car-grid-fullWidth', function () {
    return view('car-grid-fullWidth');
})->name('car-grid-fullWidth');

// Adicione a rota no arquivo de rotas web.php ou api.php
Route::get('/car-grid-fullWidth', [CarroController::class, 'carGridFullWidth'])->name('car-grid-fullWidth');


//Páginas, coluna 1(item menu cabeçalho)
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/team-detail', function () {
    return view('team-detail');
})->name('team-detail');

Route::get('/car-comparison', function () {
    return view('car-comparison');
})->name('car-comparison');

Route::get('/search-brand', function () {
    return view('search-brand');
})->name('search-brand');

//Páginas, coluna 2(item menu cabeçalho)
Route::get('/pricing-tables', function () {
    return view('pricing-tables');
})->name('pricing-tables');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/typography', function () {
    return view('typography');
})->name('typography');

Route::get('/elements', function () {
    return view('elements');
})->name('elements');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

//Páginas, coluna 3 (item menu cabeçalho)
Route::get('/icon', function () {
    return view('icon');
})->name('icon');

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

//Loja (item menu cabeçalho)
Route::get('/shop-list', function () {
    return view('shop-list');
})->name('shop-list');

Route::get('/shop-cart', function () {
    return view('shop-cart');
})->name('shop-cart');

Route::get('/shop-checkout', function () {
    return view('shop-checkout');
})->name('shop-checkout');

Route::get('/shop-details', function () {
    return view('shop-details');
})->name('shop-details');

//Serviços(item menu cabeçalho)
Route::get('/services', function () {
    return view('services');
})->name('services');

//Blog(item menu cabeçalho)
Route::get('/blog-post', function () {
    return view('blog-post');
})->name('blog-post');

//Contato(item menu cabeçalho)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Esqueceu sua senha
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

//Car Details
  Route::get('/car-details', function () {
      return view('car-details');
  })->name('car-details');

Route::get('/car-details/{id}', [CarroController::class, 'showCarDetails']);


//Services Details
Route::get('/services-details', function () {
    return view('services-details');
})->name('services-details');

//Blog details
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

//Duas opções de listagem na página de Carros
Route::get('/car-list-fullWidth', function () {
    return view('car-list-fullWidth');
})->name('car-list-fullWidth');

//Duas opções de listagem na página de Carros
Route::get('/privacy', function () {
    return view('policy.privacy');
})->name('privacy');

//Duas opções de listagem na página de Carros
Route::get('/terms', function () {
    return view('policy.terms');
})->name('terms');

//Rota para a página de Localização da Loja
Route::get('/localizacao', function () {
    return view('localizacao');
})->name('localizacao');

//ROTAS GERADAS AO CRIAR PROJETO VITE MAIS REACT.JS Vite + React
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ROTAS PARA CADASTRAR CARROS NO BANCO DE DADOS
Route::get('/cadastrar-carro', [CarroController::class, 'mostrarFormulario'])->name('cadastrar_carro');
Route::post('/salvar-carro', [CarroController::class, 'salvarCarro'])->name('salvar_carro');

//ROTA PARA EDITAR CARROS CADASTRADOS NO BANCO DE DADOS
Route::get('/cars/{id}/edit', [CarroController::class,'edit'])->name('cars.edit');

//ROTA PARA ATUALIZAR CARROS CADASTRADOS NO BANCO DE DADOS
Route::put('cars/update/{id}', [CarroController::class, 'update']);

//ROTA PARA REMOVER IMAGENS NA TELA DE EDIÇÃO DE VEÍCULOS
Route::post('/cars/remove-image', [CarroController::class, 'removeImage']);


//ROTA PARA VISUALIZAR TODOS OS VEÍCULOS CADASTRADOS NO SIETEMA
Route::get('/gerenciar-veiculos', [CarroController::class, 'gerenciar_veiculos'])->name('carros.gerenciar-veiculos');

//ROTA PARA DELETAR VEÍCULOS CADASTRADOS NO SIETEMA
Route::delete('/cars/{id}', [CarroController::class, 'destroy'])->name('car-delete');

//ROTA PARA BUSCAR VEÍCULOS NO BANCO DE DADOS PELO NOME PESQUISADO
Route::get('/buscar-carros', [CarroController::class, 'buscar'])->name('buscar-carros');

//ROTA PARA BUSCAR VEÍCULOS NO BANCO DE DADOS PELO NOME PESQUISADO PARA EDITAR 
Route::get('/buscar-carros-para-editar', [CarroController::class, 'buscarCarrosParaEditar'])->name('buscar-carros-para-editar');

//ROTA PARA BUSCAR VEÍCULOS NO BANCO DE DADOS PELO NOME PESQUISADO PARA A PÁGINA INÍCIAL
Route::get('/pesquisar', [CarroController::class, 'pesquisar'])->name('pesquisar');

//ROTA PARA SALVAR DADOS DE USUÁRIO QUE ENTRAR EM CONTATO VIA API WHATSAPP
Route::post('/contato-whatsapp', [ContatoWhatsappController::class, 'store']);

//Rota para envio de email na página de contato
Route::resources([
    'email'=> SendmailController::class
]);

