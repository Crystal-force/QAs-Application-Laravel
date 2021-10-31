<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    public $fillable = [
        'id',
        'u_id',
        's_id',
        'q_title',
        'question'
    ];

    public function Answers_List() {
        return $this->hasMany('App\Http\Models\Answers');
    }
    public function Question_user() {
        return $this->belongTo('App\Http\User', 'u_id');
    }
    public function Subjects_List() {
        return $this->belongTo('App\Http\Subjects', 's_id');
    }
}
