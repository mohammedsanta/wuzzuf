<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEducationDegree extends Model
{
    use HasFactory;

    protected $fillable = [
        'DegreeLevel',
        'Country',
        'University',
        'FieldStudy',
        'StartYear',
        'EndYear',
        'Grade',
        'StudiedSubjects',
        'Additional',
    ];

    public function useredudeg()
    {
        return $this->morphTo();
    }

}
