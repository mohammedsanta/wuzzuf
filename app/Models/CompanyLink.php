<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyLink extends Model
{
    use HasFactory;

    public $fillable = [
        'LinkedIn',
        'Facebook',
        'Twitter',
        'Behance',
        'Instagram',
        'GitHub',
        'StackOverflow',
        'YouTube',
        'Blog',
        'Website',
        'Other',
    ];

    public function comlinks()
    {
        return $this->morphTo();
    }

}
