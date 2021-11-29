<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staffs";

    protected $fillable = ['staff_id','user_id','department_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function departments()
    {
        return $this->belongsTo(Department::class);
    }

    public function assigntasks()
    {
        return $this->hasMany(AssignTask::class);
    }
}
