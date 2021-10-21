<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index() {
        return view('answers');
    }

    public function detail() {
        return view('detail');
    }
}
