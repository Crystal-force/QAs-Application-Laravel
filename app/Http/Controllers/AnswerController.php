<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index() {
        return view('answers');
    }

    public function math_solution() {
        return view('math-solution');
    }
}
