<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',

        'question1',
        'question2',
        'question3',
        'question3_other',
        'question4',
        'question4_other',

        'question5',
        'question6',
        'question7',
        'question8',
    ];

}
