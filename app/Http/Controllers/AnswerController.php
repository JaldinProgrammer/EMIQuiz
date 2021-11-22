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
       $v1 = 0;
       $v2 = 0;
       $v3 = 0;
       $v4 = 0;
       $p1 = DB::table('answers')
       ->whereIn('id', $pregun)
       ->whereIn('question_id', Question::select('id')->where('career_id',1))
       ->sum('value');
       $p2 = DB::table('answers')
       ->whereIn('id', $pregun)
       ->whereIn('question_id', Question::select('id')->where('career_id',2))
       ->sum('value');
       $p3 = DB::table('answers')
       ->whereIn('id', $pregun)
       ->whereIn('question_id', Question::select('id')->where('career_id',3))
       ->sum('value');
       $p4 = DB::table('answers')
       ->whereIn('id', $pregun)
       ->whereIn('question_id', Question::select('id')->where('career_id',4))
       ->sum('value');
       
       foreach ($answers as $answer){
        
            if($answer->question->career_id == 1){
                //$v1 = ($v1 == -1000)? 0: $v1;
                $v1+= $answer->value;
            }
            if($answer->question->career_id == 2){
                //$v2 = ($v2 == -1000)? 0: $v2;
                $v2+= $answer->value;
            }
            if($answer->question->career_id == 3){
                //$v3 = ($v3 == -1000)? 0: $v3;
                $v3+= $answer->value;
            }
            if($answer->question->career_id == 4){
                //$v4 = ($v4 == -1000)? 0: $v4;
                $v4+= $answer->value;
            }
            
       }
       //dd($v2);
       $max = max($p1,$p2,$p3,$p4);
       
       $career = 0;
       if($max == $v1){
        $career = 1;
       }
       if($max == $v2){
        $career = 2;
       }
       if($max == $v3){
        $career = 3;
       }
       if($max == $v4){
        $career = 4;
       }
      // dd($career);
       return view('answers.show', compact('answers'), compact('career'));
   }
}
