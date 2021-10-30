<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    public $fillable = [
        'id',
        'u_id',
        'q_id',
        's_id',
        'answers'
    ];

    public function Answers_user() {
        return $this->belongTo('App\Http\User', 'u_id');
    }

    public function Question_List() {
        return $this->belongTo('App\Http\Models\Questions', 'q_id');
    }

}
