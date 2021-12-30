<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'user_id','email','password','name','IP_address','address',
        'phone','role','user_type','recovery_email','registration_time'
    ];

    protected $primaryKey = 'user_id';

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function calendarToDolLists()
    {
        return $this->hasMany(CalendarToDoList::class);
    }

    public function calendarEvents()
    {
        return $this->hasMany(CalendarEvent::class,'user_id');
    }

    public function staffs()
    {
        return $this->hasOne(Staff::class);
    }

    public function admins()
    {
        return $this->hasOne(Admin::class);
    }

    public function interns()
    {
        return $this->hasOne(Intern::class);
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }


    // ----------------------------- FOR JWT -----------------------------
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
