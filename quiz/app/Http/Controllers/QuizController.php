<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{

    public function index() {

    }

    public function create() {

        return view('quizadd.create');

    }

    public function store(Request $request) {
     
        $quiz = new Quiz;

        $quiz->title = $request->title;
        $quiz->category = $request->category;
        $quiz->mult = $request->mult;
        $quiz->question = $request->question;

        $quiz->save();

        return redirect('/home');

    }

}
