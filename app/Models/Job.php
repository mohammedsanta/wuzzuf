<?php

namespace App\Models;

use App\Models\Skill;
use App\Models\Company;
use App\Models\JobQuestion;
use App\Models\DescriptionJob;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'job',
        'JobType',
        'descriptions',
        'requirements',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }

    public function jobDetails()
    {
        return $this->morphOne(JobDetails::class,'jobDetailsAble');
    }

    public function companyAble()
    {
        $this->morphTo();
    }

    public function skills() {
        return $this->morphToMany(Skill::class,'skillsable');
    }

    public function question()
    {
        return $this->morphOne(JobQuestion::class,'jobquestion');
    }

}
