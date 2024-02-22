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
            // Alterar o tipo da coluna valor_normal para VARCHAR
            $table->string('valor_normal')->change();
            
            // Alterar o tipo da coluna valor_promocional para VARCHAR
            $table->string('valor_promocional')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carros', function (Blueprint $table) {
            // Reverter para o tipo original (INTEGER) caso seja necessário reverter a migração
            $table->integer('valor_normal')->change();
            $table->integer('valor_promocional')->change();
        });
    }
};
