<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture',
        'CompanyName',
        'Field',
        'Industry',
        'CompanySize',
        'CompanyAbout',
        'MobileNumber',
        'profile_created',
    ];

    public function companyable() {
        return $this->morphTo();
    }
}
