<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'company',
        'picture',
        'FirstName',
        'LastName',
        'number',
        'field',
        'email',
        'password',
    ];

    protected $casts = [
        'password' => 'hashed'
    ];

    public function job()
    {
        return $this->morphOne(Job::class,'companyAble');
    }

}
