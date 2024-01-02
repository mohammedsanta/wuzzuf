<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'LinkedIn',
        'Facebook',
        'Twitter',
        'Behance',
        'Instagram',
        'GitHub',
        'Overflow',
        'YouTube',
        'Blog',
        'Website',
        'Other',
    ];

    public function userlink()
    {
        return $this->morphTo();
    }

}
