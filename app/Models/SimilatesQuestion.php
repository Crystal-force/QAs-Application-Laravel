<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimilatesQuestion extends Model
{
    public $fillable = [
        'id',
        'simulation_id',
        'questions',
        'score'
    ];
}
