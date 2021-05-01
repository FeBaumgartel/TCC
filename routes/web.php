<?php

use App\Http\Controllers\EventosController;
use App\Http\Controllers\HinosController;
use App\Http\Controllers\IgrejasController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::prefix('/eventos')->name('eventos.')->group(function () {
    Route::get('/listar', [EventosController::class, 'listarEventos'])->name('listar');
    Route::post('/cadastrar', [EventosController::class, 'cadastrarEvento'])->name('cadastrar');
});

Route::prefix('/igrejas')->name('igrejas.')->group(function () {
    Route::get('/listar', [IgrejasController::class, 'listarIgrejas'])->name('listar');
    Route::post('/cadastrar', [IgrejasController::class, 'cadastrarIgreja'])->name('cadastrar');
    Route::post('/editar', [IgrejasController::class, 'editarIgreja'])->name('editar');
    Route::post('/excluir', [IgrejasController::class, 'excluirIgreja'])->name('excluir');
});

Route::prefix('/hinos')->name('hinos.')->group(function () {
    Route::get('/listar', [HinosController::class, 'listarHinos'])->name('listar');
    Route::post('/cadastrar', [HinosController::class, 'cadastrarHino'])->name('cadastrar');
    Route::post('/editar', [HinosController::class, 'editarHino'])->name('editar');
    Route::post('/excluir', [HinosController::class, 'excluirHino'])->name('excluir');
});
