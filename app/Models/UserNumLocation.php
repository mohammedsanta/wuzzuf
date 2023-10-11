<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNumLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'Country',
        'City',
        'Area',
        'PostalCode',
        'MobileNumber',
        'AlternativeNumber',
    ];

    public function userNumLocationAble()
    {
        return $this->morhpTo();
    }

}
