<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'Certificate',
        'AwardedMonth',
        'Organization',
        'Result',
        'Out',
        'ScoreLink',
        'CertificateID',
        'Additional',
    ];

    public function usercert()
    {
        return $this->morphTo();
    }

}
