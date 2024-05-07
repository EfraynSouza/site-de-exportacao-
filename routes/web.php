<?php

use App\Http\Controllers\ContatoController;
use App\Models\Contato;
use Illuminate\Support\Facades\Route;

Route::get('/contato', function () {
    return view('app.contato');
})->name('contato');

Route::post('/contato', [ContatoController::class,'EnviarFormulario'])->name('contato.submit');


Route::get('/sobre-nos', function () {
    return view('app.sobre-nos');
})->name('sobre-nos');

Route::get('/', function () {
    return view('app.home');
})->name('home');

