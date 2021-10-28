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

    public function Question_user() {
        return $this->belongTo('App\Http\User', 'u_id');
    }
}
