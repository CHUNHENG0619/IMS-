<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = "jobs";

    protected $fillable = ['job_id','admin_id','job_title','job_department','job_desc','job_requirement','job_type'
                          ,'job_location','salary','start_date','end_date'];

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function internDetails()(){
        return $this->belongsTo(InternDetail::class,'intern_details_id','job_id');
    }

}
