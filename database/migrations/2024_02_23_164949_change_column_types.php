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
            $table->string('velocidade_maxima')->change();
            $table->string('quilometragem')->change();
            $table->string('potencia')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carros', function (Blueprint $table) {
            $table->integer('velocidade_maxima')->change();
            $table->integer('quilometragem')->change();
            $table->integer('potencia')->change();
        });
    }
};
