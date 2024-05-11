<?php

namespace App\Models;

use App\Models\JobQuestionAnswer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobquestion_type',
        'jobquestion_id',
        'Question',
        'Type',
    ];

    public function jobquestion()
    {
        return $this->morphTo();
    }

    public function answer()
    {
        return $this->morphOne(JobQuestionAnswer::class,'jobqanswer');
    }

}
