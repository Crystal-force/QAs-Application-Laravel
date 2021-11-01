<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Questions;
use App\Models\UploadFiles;
use App\Models\Answers;
use App\Models\Subjects;

class AnswerController extends Controller
{
    public function Index(Request $request) {
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

    public function ShowAnswer(Request $request) {
        $id = $request->id;
        $answer_data = Answers::where('q_id', $id)->get();
        $question_data = Questions::where('id', $id)->first();
        
        if(isset($answer_data)) {
            $result = 'null';
            $data = [$result, $question_data];
            return response()->json($data);
        }
        else {
            return response()->json(['data' => $answer_data]);
        }
        
    }

    public function ReplyAnswers(Request $request) {
        $s_id = $request->id;
        $subject = Subjects::where('id', $s_id)->first();
        $questions = Questions::where('s_id', $s_id)->get();
        
        return view('solution-post')->with([
            'subject' => $subject,
            'questions' => $questions
        ]);
    }

    public function ReplyAnswer(Request $request) {
        $q_id = $request->id;
        $question =Questions::where('id', $q_id)->get();
        $attampt = UploadFiles::where('q_id', $q_id)->get();
        
        return response()->json(['data' => $question, 'attampt' => $attampt]);
    }
}
