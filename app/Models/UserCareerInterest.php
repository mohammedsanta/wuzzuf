<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCareerInterest extends Model
{
    use HasFactory;

    protected $fillable = [
        'CareerLevel',
        'TypesJobsYouOpen',
        'JobTitle',
        'CategoriesInterested',
        'MinimumSalary',
        'HideMinimum',
        'Country',
        'CurrentJobSearchStatus',
        'CompaniesFindMe',
        'ProfilePublic',
    ];

    public function usercareer()
    {
        return $this->morphsTo();
    }

}
