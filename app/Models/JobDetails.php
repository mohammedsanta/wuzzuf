<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobDetailsAble_type',
        'jobDetailsAble_id',
        'ExperienceNeeded',
        'CareerLevel',
        'EducationLevel',
        'Salary',
        'JobCategories',
    ];

    public function jobDetailsAble()
    {
        return $this->morphTo();
    }

}
