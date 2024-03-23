<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobAdditionalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'CompanyConfidential',
        'SendEmail',
        'Duration',
        'Email',
        'gender',
        'EducationLevel',
        'AcademicExcellence',
    ];

    public function jobAddtional()
    {
        $this->morphTo();
    }

}
