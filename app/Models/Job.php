<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = "jobs";

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function jobapplications()
    {
        return $this->hasMany(JobApplication::class);
    }
}
