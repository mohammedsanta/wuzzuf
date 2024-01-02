<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyLocation extends Model
{
    use HasFactory;

    public $fillable = [
        'Country',
        'City',
        'Area',
        'PostalCode',
    ];

    public function complocation()
    {
        return $this->morphTo();
    }

}
