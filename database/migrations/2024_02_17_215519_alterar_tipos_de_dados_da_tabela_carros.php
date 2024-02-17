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
        // Modificar valor_promocional para integer
        Schema::table('carros', function (Blueprint $table) {
            $table->integer('valor_promocional')->nullable()->change();
        });

        // Modificar valor_normal para integer
        Schema::table('carros', function (Blueprint $table) {
            $table->integer('valor_normal')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverter as alterações se necessário
        Schema::table('carros', function (Blueprint $table) {
            $table->decimal('valor_promocional', 10, 2)->nullable()->change();
            $table->decimal('valor_normal', 10, 2)->change();
        });
    }
};
