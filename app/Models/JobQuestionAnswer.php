<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobQuestionAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'Answer'
    ];

    public function jobqanswer()
    {
        return $this->morphTo();
    }

}
