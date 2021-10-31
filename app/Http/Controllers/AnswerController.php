<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Questions;
use App\Models\UploadFiles;
use App\Models\Answers;

class AnswerController extends Controller
{
    public function index(Request $request) {
        $q_id = $request->id;
        $question_data = Questions::where('id', $q_id)->first();
        $question_file =DB::table('upload_files')->where('q_id', $q_id)->get();
        if(!isset($question_file)) {
            $question_file = "";
        }
     
        return view('answers')->with([
            'q_data' => $question_data,
            'q_file' => $question_file,
            
        ]);
    }

    public function show_answers(Request $request) {
        $id = $request->id;
        $answer_data = Answers::where('q_id', $id)->get();
        $question_data = Questions::where('id', $id)->first();
        
        if(isset($answer_data)) {
            $result = 'null';
            $data = [$result, $question_data];
            return response()->json($data);
        }
        else {
            return response()->json(['data', $answer_data]);
        }
        
    }

    public function math_solution() {
        return view('math-solution');
    }
}
