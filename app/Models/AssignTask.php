<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignTask extends Model
{
    use HasFactory;

    protected $table = "assign_tasks";

    protected $fillable = [
        'task_id', 'staff_id', 'intern_id', 'task_title', 'task_description', 'task_status', 'attachment', 'intern_submitted_work', 'start_time', 'deadline'
    ];

    public function staffs()
    {
        return $this->belongsTo(Staff::class);
    }

    public function interns()
    {
        return $this->belongsToMany(Intern::class);
    }
}
