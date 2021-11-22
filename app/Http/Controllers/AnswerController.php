<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
   public function create(Request $request){
    //dd($request);
    for ($i = 1; $i <= 27; $i++) {
        if($request[$i] != null){
            Answer::create([
                'question_id' => $i,
                'value' => $request[$i],
                'quiz_id' => $request['quiz_id']
            ]);
        }
    }
    return redirect()->route('answer.show', $request['quiz_id']);
   }

   public function show($id){
       $answers = Answer::where('quiz_id', $id)->paginate(5);
       $answers->load('question');
       $pregun = Answer::select('id')->where('quiz_id', $id)->paginate(5);

       $p1 = DB::table('answers')
       ->where('quiz_id', $id)
       ->whereIn('question_id', Question::select('id')->where('career_id',1))
       ->sum('value');
       $p2 = DB::table('answers')
       ->where('quiz_id', $id)
       ->whereIn('question_id', Question::select('id')->where('career_id',2))
       ->sum('value');
       $p3 = DB::table('answers')
       ->where('quiz_id', $id)
       ->whereIn('question_id', Question::select('id')->where('career_id',3))
       ->sum('value');
       $p4 = DB::table('answers')
       ->where('quiz_id', $id)
       ->whereIn('question_id', Question::select('id')->where('career_id',4))
       ->sum('value');

       $max = max($p1,$p2,$p3,$p4);
       
       $career = 0;
       if($max == $p1){
        $career = 1;
       }
       if($max == $p2){
        $career = 2;
       }
       if($max == $p3){
        $career = 3;
       }
       if($max == $p4){
        $career = 4;
       }
       //dd($max);
       return view('answers.show', compact('answers'), compact('career'));
   }
}
