<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'Birthday',
        'Gender',
        'Nationality',
        'MaritalStatus',
        'NumberDependents',
        'MilitaryStatus',
        'License',
    ];

    public function userPersonalAble() {
        return $this->morphTo();
    }

}
