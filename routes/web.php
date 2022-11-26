<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('events.home');
});

Route::get('/livros/novo', [LivrosController::class, 'create']);
Route::post('/livros/novo', [LivrosController::class, 'store'])->name('criar_livro');
Route::get('/livros/{id}', [LivrosController::class, 'show']);
Route::get('/livros/editar/{id}', [LivrosController::class, 'edit']);
Route::post('/livros/editar/{id}', [LivrosController::class, 'update'])->name('editar_livro');
Route::get('/livros/excluir/{id}', [LivrosController::class, 'delete']);
Route::post('/livros/excluir/{id}', [LivrosController::class, 'destroy'])->name('excluir_livro');