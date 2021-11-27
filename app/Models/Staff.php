<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staffs";

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function departments()
    {
        return $this->hasOne(Department::class);
    }

    public function assigntasks()
    {
        return $this->hasMany(AssignTask::class);
    }
}
