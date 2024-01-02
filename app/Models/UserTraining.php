<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'Training',
        'Organization',
        'Month',
        'Year',
        'Additional',
    ];

    public function usertrain()
    {
        return $this->morphTo();
    }

}
