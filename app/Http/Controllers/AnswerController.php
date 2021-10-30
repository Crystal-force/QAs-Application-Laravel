<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Questions;
use App\Models\UploadFiles;

class AnswerController extends Controller
{
    public function index(Request $request) {
        $q_id = $request->id;
        $question_data = Questions::where('id', $q_id)->first();
        $question_file =DB::table('upload_files')->where('q_id', $q_id)->get();
        dd($q_id);
        if(!isset($question_file)) {
            $question_file = "";
        }
     
        return view('answers')->with([
            'q_data' => $question_data,
            'q_file' => $question_file,
            
        ]);
    }

    public function math_solution() {
        return view('math-solution');
    }
}
