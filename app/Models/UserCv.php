<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCv extends Model
{
    use HasFactory;

    protected $fillable = [
        'cv'
    ];

    public function usercv()
    {
        return $this->morphTo();
    }

}
