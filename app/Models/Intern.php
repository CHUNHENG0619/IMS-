<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;

    protected $table = "interns";

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payslips()
    {
        return $this->hasOne(Payslip::class);
    }

    public function applyleaves()
    {
        return $this->hasMany(ApplyLeave::class);
    }

    public function jobapplications()
    {
        return $this->hasOne(JobApplication::class);
    }

    public function interndetails()
    {
        return $this->hasOne(InternDetail::class);
    }

    public function assigntasks()
    {
        return $this->hasMany(AssignTask::class);
    }
}
