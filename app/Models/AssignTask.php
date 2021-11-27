<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignTask extends Model
{
    use HasFactory;

    protected $table = "assign_tasks";

    public function staffs(){
        return $this->belongsTo(Staff::class);
    }

    public function interns(){
        return $this->belongsToMany(Intern::class);
    }
}
