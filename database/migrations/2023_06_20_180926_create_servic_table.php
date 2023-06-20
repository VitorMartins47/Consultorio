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
        Schema::create('servic', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->float('preco');
            $table->float('duracao');
            $table->text('descricao');
            $table->date('data'); 
            $table->foreign('id_consulta')->references('id')->on('consulta'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servic');
    }
};
