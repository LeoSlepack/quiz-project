<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;


//Rota que retorna a página de login
Route::get('/', function () {
    return view('welcome');
});

//Rota criação de quiz (controller)
Route::get('/quiz/create', [QuizController::class, 'create']);

//Rota que retorna a main principal
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rota que retorna a view de edição de usuário
Route::get('/users', [UserController::class, 'index']);

//Rota para jogar quiz
Route::get('/playquiz', function () {
    return view('playquiz');
});

//Rota para jogar quiz
Route::get('/editquiz', function () {
    return view('editquiz');
});