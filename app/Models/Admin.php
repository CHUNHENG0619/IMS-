<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = "admins";
    public $primaryKey = "admin_id";
    protected $fillable = ['admin_id','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function payslips()
    {
        return $this->hasMany(Payslip::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function applyLeaves()
    {
        return $this->hasMany(ApplyLeave::class);
    }
}
