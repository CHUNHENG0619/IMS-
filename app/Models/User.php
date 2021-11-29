<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
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

    public function calendartodolists()
    {
        return $this->hasMany(CalendarToDoList::class);
    }

    public function calendarevents()
    {
        return $this->hasMany(CalendarEvent::class);
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
}
