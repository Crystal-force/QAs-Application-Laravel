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

    public function math_question() {
        return view('math-question');
    }

    public function phy_question() {
        return view('phy-question');
    }

    public function che_question() {
        return view('che-question');
    }

    public function bio_question() {
        return view('bio-question');
    }

    public function his_question() {
        return view('his-question');
    }

    public function geo_question() {
        return view('geo-question');
    }

    public function eng_question() {
        return view('eng-question');
    }
}
