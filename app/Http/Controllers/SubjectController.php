<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function index() {
        $subject = DB::table('subjects')->get();
        if(isset($subject)) {
            return view('question-subject')->with([
                'subject' => $subject
            ]);
        }
    }

    public function solutionsubject() {
        $subject = DB::table('subjects')->get();
        if(isset($subject)) {
            return view('solution-subject')->with([
                'subject' => $subject
            ]);
        }
    }
}
