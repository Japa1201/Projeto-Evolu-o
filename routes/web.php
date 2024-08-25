<?php

use App\Models\Anotacoes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnotacoesController;

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

Route::get('/', [AnotacoesController::class, 'index'])->name('home');

Route::get('/index', function () {
    return view('index')->name('index');
});

Route::get('/show', [AnotacoesController::class, 'show'])->name('anotacoes.show');

Route::get('/anotacoes/listar', [AnotacoesController::class, 'listAnotacoes'])->name('anotacoes.listar');


Route::resource('anotacoes', AnotacoesController::class);

