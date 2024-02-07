<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('marca');
            $table->enum('condicao', ['Novo', 'Usado']);
            $table->string('transmissao');
            $table->string('motor');
            $table->integer('portas');
            $table->integer('passageiros');
            $table->decimal('valor_normal', 10, 2);
            $table->integer('velocidade_maxima');
            $table->integer('potencia');
            $table->decimal('valor_promocional', 10, 2);
            $table->string('endereco');
            $table->string('combustivel');
            $table->integer('quilometragem');
            $table->string('estilo');
            $table->string('cor');
            $table->integer('ano');
            $table->enum('tag', ['À VENDA', 'DESTAQUE']);
            $table->string('imagem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
