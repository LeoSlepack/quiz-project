<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;


//Rota que retorna a página de login
Route::get('/', function () {
    return view('welcome');
});

//Rota criação de quiz (controller)
Route::get('/quiz/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/quiz',[QuizController::class, 'store'])->name('quizzes.store');

//Rota que retorna a main principal
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
