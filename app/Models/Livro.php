<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'autor',
        'edicao',
        'ano',
        'n_paginas',
        'idioma',
        'editora',
        'data_pblicacao',
        'descricao',
        'image',
        'link_compra'
    ];
}
