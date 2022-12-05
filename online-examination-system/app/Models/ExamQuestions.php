<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ExamQuestions extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'examId',
        'question'
    ];

    /*public function exam()
    {
        return $this->belongsTo(\App\Models\Exam::class, 'examId');
    }*/

    public function allAnswers()
    {
        return $this->hasMany(\App\Models\ExamAnswers::class, 'examQuestionId');
    }
}
