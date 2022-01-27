<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimilatesAnswer extends Model
{
    public $fillable = [
        'id',
        'answers',
        'statu'
    ];
}
