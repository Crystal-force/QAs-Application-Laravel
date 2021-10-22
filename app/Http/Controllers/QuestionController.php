<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index() {
        return view('question');
    }

    public function allquestions() {
        return view('allquestions');
    }
}
