<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\UserLink;
use App\Models\UserSkill;
use App\Models\UserExperience;
use App\Models\UserHighSchool;
use App\Models\UserAchievement;
use App\Models\UserCertificate;
use App\Models\UserNumLocation;
use App\Models\UserPersonalInfo;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserCareerInterest;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'FirstName',
        'LastName',
        'type',
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

    // public function profile() {
    //     return $this->belongsTo(UserProfile::class,'user_id');
    // }

    public function profile() {
        return $this->morphOne(UserProfile::class,'user_profileable');
    }

    public function skill()
    {
        return $this->belongsTo(UserSkill::class,'user_id');
    }

    public function skills()
    {
        return $this->belongsToMany(UserSkill::class,'user_skills');
    }

    public function language()
    {
        return $this->morphOne(UserLanguage::class,'userlang');
    }

    public function usercareer()
    {
        return $this->morphOne(UserCareerInterest::class,'usercareer');
    }

    public function cv()
    {
        return $this->morphOne(UserCv::class,'usercv');
    }

    public function userPersonalInfo()
    {
        return $this->morphOne(UserPersonalInfo::class,'userPersonal');
    }

    public function userNumLocation()
    {
        return $this->morphOne(UserNumLocation::class,'userNumLocation');
    }

    public function userExperience()
    {
        return $this->morphOne(UserExperience::class,'userexperience');
    }

    public function UserDegree()
    {
        return $this->morphOne(UserEducationDegree::class,'useredudeg');
    }

    public function userHighSchool()
    {
        return $this->morphOne(UserHighSchool::class,'uhighschool');
    }

    public function userCertificate()
    {
        return $this->morphOne(UserCertificate::class,'usercert');
    }

    public function userTraining()
    {
        return $this->morphOne(UserTraining::class,'usertrain');
    }

    public function userLink()
    {
        return $this->morphOne(UserLink::class,'userlink');
    }

    public function userAchievements()
    {
        return $this->morphOne(UserAchievement::class,'userachieve');
    }

}
