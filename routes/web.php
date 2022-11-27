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

Route::get('/', function () {
    return view('events.home');
});

Route::get('/livros/01', function () {
    return view('events.show');
});


Route::get('/livros', [LivrosController::class, 'index']);
Route::get('/livros/cadastrar', [LivrosController::class, 'create']);
Route::post('/livros/cadastrar', [LivrosController::class, 'store']);
Route::get('/livros/{id}', [LivrosController::class, 'show']);
Route::get('/livros/editar/{id}', [LivrosController::class, 'edit']);
Route::put('/livros/editar/{id}', [LivrosController::class, 'update']);
// Route::get('/livros/{id}', [LivrosController::class, 'delete']);
Route::delete('/livros/{id}', [LivrosController::class, 'destroy']);