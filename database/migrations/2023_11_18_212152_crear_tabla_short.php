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
        Schema::create('short', function (Blueprint $table) {
            $table->id('id_short');
            $table->foreignId('id_categoria')->constrained('categoria', 'id_categoria');
            $table->foreignId('id_usuario')->constrained('usuario', 'id_usuario');
            $table->string('titulo', 120);
            $table->string('descripcion', 250);
            $table->string('archivo', 120);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('short');
    }
};
