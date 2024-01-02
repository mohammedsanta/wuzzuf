<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExperience extends Model
{
    use HasFactory;

    protected $fillable = [
         'currentlyWork',
         'EGPChange',
         'ExperienceType',
         'JobTitle',
         'JobCategory',
         'CompanyName',
         'StartingSinceMonth',
         'StartingSinceYear',
         'EndMonth',
         'EndYear',
         'CurrentlyWork',
         'Description',
         'Careerlevel',
         'Country',
         'CompanySize',
         'CompanyIndustry',
         'CompanyWebsite',
         'Achievements',
         'StartingSalary',
         'EndingSalary',
         'Currency',
         'Period',
         'SalaryInfo',
         'HideSalary',
        ];

        public function userExperience()
    {
        return $this->morphTo();
    }

}
