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
    Route::get('/lista-eventos', [EventosController::class, 'listaEventos'])->name('lista_eventos');
});

Route::prefix('/igrejas')->name('igrejas.')->group(function () {
    Route::get('/lista-igrejas', 'IgrejasController@listaIgrejas')->name('lista_igrejas');
});

Route::prefix('/hinos')->name('hinos.')->group(function () {
    Route::get('/lista-hinos', 'HinosController@listaHinos')->name('lista_hinos');
});
