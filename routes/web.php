<?php

use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Assinatura base de uma route
// Route::verb('url', callback); O call back é a ação que vai ser executada quando a rota for acionada

// Rotas
Route::get('/welcome', function () {
    return view('welcome');
});

// Rota com função anônima
Route::get('/rota', function() {
    return '<h1>Olá Laravel</h1>';
});

Route::get('/user', function() {
    return '<h1>O user está aqui</h1>';
});

Route::get('/injection', function(Request $request) {
    var_dump($request);
});

// O match aceita get e post simultaneamente
Route::match(['get', 'post'], '/match', function() {
    return '<h1>Aceita GET e POST</h1>';
});

Route::any('/any', function() {
    return '<h1>Aceita qualquer http verb</h1>';
});

// Routes com Controller
Route::get('/index', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

Route::redirect('/saltar', 'index');
Route::permanentRedirect('/saltar2', 'index');

Route::view('/view', 'welcome');
Route::view('/view2', 'welcome', ['myName' => "Gustavo Barbosa"]);

// --------------------------------------
// ROUTE PARAMETERS
// --------------------------------------

Route::get('/valor/{value}', [MainController::class, 'mostrarValor']);
Route::get('/valores/{value1}/{value2}', [MainController::class, 'mostrarValores']);
Route::get('/valores2/{value1}/{value2}', [MainController::class, 'mostrarValores2']);

Route::get('/opcional/{value?}', [MainController::class, 'mostrarValorOpcional']);
Route::get('/opcional2/{value1}/{value2?}', [MainController::class, 'mostrarValorOpcional2']);
Route::get('/user/{user_id}/post/{post_id}', [MainController::class, 'mostrarPosts']);