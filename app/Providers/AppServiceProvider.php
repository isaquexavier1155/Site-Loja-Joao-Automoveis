<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Carro; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Compartilhar a variável $ultimosCarros com todas as views que utilizam o layout main.blade.php
        //Para exibir tres ultimos carros no rodapé das páginas
        View::composer('layouts.main', function ($view) {
            $ultimosCarros = Carro::orderBy('created_at', 'desc')->take(3)->get();
            $view->with('ultimosCarros', $ultimosCarros);
        });
    }
}
