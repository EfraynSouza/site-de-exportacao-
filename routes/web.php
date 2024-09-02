<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Models\Contato;
use Illuminate\Support\Facades\Route;

Route::get('/contato', function () {
    return view('app.contato');
})->name('contato');
Route::post('/contato', [ContatoController::class,'EnviarFormulario'])->name('contato.submit');



Route::get('/login', function () {return view('app.login');})->name('login');

Route::post('/login', [LoginController::class,'EnviarFormulario'])->name('login.submit');

Route::get('/register', function () {return view('app.register');})->name('register');

Route::post('/register', [RegisterController::class,'EnviarFormulario'])->name('register.submit');

Route::get('/sobre-nos', function () {return view('app.sobre-nos');})->name('sobre-nos');

Route::get('/pratos', function () {return view('app.pratos');})->name('pratos');

Route::get('/canecas', function () {return view('app.canecas');})->name('canecas');

Route::get('/vasos', function () {return view('app.vasos');})->name('vasos');

Route::get('/esculturas', function () {return view('app.esculturas');})->name('esculturas');

Route::get('/', function () {return view('app.home');})->name('home');

Route:: resource('categorias', CategoriaController::class);

Auth::routes();
