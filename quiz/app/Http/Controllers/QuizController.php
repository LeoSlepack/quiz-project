<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function index() {

    }

    public function create() {
        return view('quizadd.create');
    }

    public function store(Request $request) {
        
        dd($request->only([
            'title-quiz', 'question'
        ]));

    }

}