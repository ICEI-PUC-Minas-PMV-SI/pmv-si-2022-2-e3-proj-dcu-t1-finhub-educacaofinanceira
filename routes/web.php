<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\InfluencersController;
use App\Http\Controllers\PodcastsController;

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

Route::get('/cursos/01', function () {
    return view('events.show');
});

Route::get('/influencers/01', function () {
    return view('events.show');
});

Route::get('/podcasts/01', function () {
    return view('events.show');
});
// Rotas de livros
Route::get('/livros', [LivrosController::class, 'index']);
Route::get('/livros/cadastrar', [LivrosController::class, 'create']);
Route::post('/livros/cadastrar', [LivrosController::class, 'store']);
Route::get('/livros/{id}', [LivrosController::class, 'show']);
Route::get('/livros/editar/{id}', [LivrosController::class, 'edit']);
Route::put('/livros/editar/{id}', [LivrosController::class, 'update']);
// Route::get('/livros/{id}', [LivrosController::class, 'delete']);
Route::delete('/livros/{id}', [LivrosController::class, 'destroy']);

// Rotas de cursos
Route::get('/cursos', [CursosController::class, 'index']);
Route::get('/cursos/cadastrar', [CursosController::class, 'create']);
Route::post('/cursos/cadastrar', [CursosController::class, 'store']);
Route::get('/cursos/{id}', [CursosController::class, 'show']);
Route::get('/cursos/editar/{id}', [CursosController::class, 'edit']);
Route::put('/cursos/editar/{id}', [CursosController::class, 'update']);
Route::delete('/cursos/{id}', [CursosController::class, 'destroy']);

// Rotas de influencers
Route::get('/influencers', [InfluencersController::class, 'index']);
Route::get('/influencers/cadastrar', [InfluencersController::class, 'create']);
Route::post('/influencers/cadastrar', [InfluencersController::class, 'store']);
Route::get('/influencers/{id}', [InfluencersController::class, 'show']);
Route::get('/influencers/editar/{id}', [InfluencersController::class, 'edit']);
Route::put('/influencers/editar/{id}', [InfluencersController::class, 'update']);
Route::delete('/influencers/{id}', [InfluencersController::class, 'destroy']);

// Rotas de podcasts
Route::get('/podcasts', [PodcastsController::class, 'index']);
Route::get('/podcasts/cadastrar', [PodcastsController::class, 'create']);
Route::post('/podcasts/cadastrar', [PodcastsController::class, 'store']);
Route::get('/podcasts/{id}', [PodcastsController::class, 'show']);
Route::get('/podcasts/editar/{id}', [PodcastsController::class, 'edit']);
Route::put('/podcasts/editar/{id}', [PodcastsController::class, 'update']);
Route::delete('/podcasts/{id}', [PodcastsController::class, 'destroy']);