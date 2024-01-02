<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\CompanyLink;
use App\Models\CompanyProfile;
use App\Models\CompanyLocation;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company',
        'location',
        'FirstName',
        'LastName',
        'number',
        'field',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile() {
        return $this->morphOne(CompanyProfile::class,'companyable');
    }

    public function location() {
        return $this->morphOne(CompanyLocation::class,'complocation');
    }

    public function links() {
        return $this->morphOne(CompanyLink::class,'complinks');
    }
    
    public function job()
    {
        return $this->morphOne(Job::class,'companyAble');
    }

    public function jobs()
    {
        return $this->morphMany(Job::class,'companyAble');
    }

}
