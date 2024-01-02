<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHighSchool extends Model
{
    use HasFactory;

    protected $fillable = [
        'School',
        'Country',
        'Certificate',
        'LanguageStudy',
        'GraduationYear',
        'Grade',
        'Additional',
    ];

    public function uhighschool()
    {
        return $this->morphTo();
    }

}
