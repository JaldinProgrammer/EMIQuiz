<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function __construct()
    {
        $carbon = new Carbon('America/La_Paz');
        $carbon::setLocale('es');
    }

    public function show($id){ //show realized quizzes
        $used = Answer::select('quiz_id')->whereIn('quiz_id',Quiz::select('id')->where('user_id',$id)->get());
       // dd(Quiz::where('user_id',$id)->get());
        $quizzes = Quiz::whereIn('id',$used)->paginate(5);
        return view('quizz.show',compact('quizzes'));
    }

    public function create($id){ //create new instance of quiz
        $quiz = Quiz::create([
            'user_id' => $id,
        ]);
        return redirect()->route('quiz.questions',$quiz);
    }

    public function questions($id){ // deploy all questions
        $quiz = Quiz::findOrFail($id);
        $questions = Question::all();
        return view('quizz.questions', compact('quiz'), compact('questions'));
    }

}
