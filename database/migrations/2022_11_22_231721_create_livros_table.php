<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            
            // VERIFICAR OS CAMPOS

            // $table->id();
            // $table->string('titulo');
            // $table->string('autor');
            // $table->string('edicao');
            // $table->string('ano');
            // $table->string('n_paginas');
            // $table->string('idioma');
            // $table->string('editora');
            // $table->string('data_pblicacao');
            // $table->text('descricao');
            // $table->string('image');
            // $table->string('link_compra');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
};
