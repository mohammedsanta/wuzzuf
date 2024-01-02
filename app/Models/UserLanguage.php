<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
        'Language',
        'Reading',
        'Writing',
        'Listening',
        'Speaking',
        'Justification',
    ];

    public function userlang()
    {
        return $this->morphsTo();
    }

}
