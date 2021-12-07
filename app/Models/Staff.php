<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staffs";
    protected $primaryKey = "staff_id";
    protected $fillable = ['staff_id','user_id','department_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function departments()
    {
        return $this->belongsTo(Department::class);
    }

    public function assignTasks()
    {
        return $this->hasMany(AssignTask::class);
    }

    public function submitTasks()
    {
        return $this->hasMany(SubmitTask::class);
    }
}
