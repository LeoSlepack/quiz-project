<?php

use Illuminate\Support\Facades\Route;


//Rota que retorna a página de login
Route::get('/', function () {
    return view('welcome');
});

//Rota que retorna a main principal
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rota que retorna a view de edição de usuário
Route::get('/edituser', function () {
    return view('edituser');
});

//Rota para criação de quiz
Route::get('/createquiz', function () {
    return view('createquiz');
});

//Rota para jogar quiz
Route::get('/playquiz', function () {
    return view('playquiz');
});

//Rota para jogar quiz
Route::get('/editquiz', function () {
    return view('editquiz');
});