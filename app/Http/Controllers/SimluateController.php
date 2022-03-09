<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use File;
use app\User;

use App\Models\SimilatesQuestion;
use App\Models\SimilatesAnswer;


class SimluateController extends Controller
{
    public function Institution(Request $request) {
        $simulation_ID = $request->id;
        
        $all_questions = SimilatesQuestion::where('simulation_id', $simulation_ID)->orderBy('id', 'DESC')->get();
        
        return view('institution')->with([
            'allQuestions' => $all_questions
        ]);
    }

    public function QuestionReply(Request $request) {
        $institutionID = $request->id;
        
        $question = SimilatesQuestion::find($institutionID);
      
        return view('institution-reply')->with([
            'question' => $question,
            'ReplyId' => $institutionID
        ]);
    }
}
