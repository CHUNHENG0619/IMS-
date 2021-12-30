<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitTask extends Model
{
    use HasFactory;

    protected $table = "submit_tasks";

    protected $fillable = [
        'submit_task_id', 'staff_id', 'intern_id',
        'intern_submitted_task', 'submitted_task_description'
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
