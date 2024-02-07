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
        Schema::table('carros', function (Blueprint $table) {
            // $table->string('nome');
            $table->string('marca')->nullable()->change();
            // $table->enum('condicao', ['Novo', 'Usado']);
            $table->string('transmissao')->nullable()->change();
            $table->string('motor')->nullable()->change();
            $table->integer('portas')->nullable()->change();
            $table->integer('passageiros')->nullable()->change();
            // $table->decimal('valor_normal', 10, 2);
            $table->integer('velocidade_maxima')->nullable()->change();
            $table->integer('potencia')->nullable()->change();
            $table->decimal('valor_promocional', 10, 2)->nullable()->change();
            $table->string('endereco')->nullable()->change();
            $table->string('combustivel')->nullable()->change();
            $table->integer('quilometragem')->nullable()->change();
            $table->string('estilo')->nullable()->change();
            $table->string('cor')->nullable()->change();
            $table->integer('ano')->nullable()->change();
            // $table->enum('tag', ['À VENDA', 'DESTAQUE']);
            $table->string('imagem')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
