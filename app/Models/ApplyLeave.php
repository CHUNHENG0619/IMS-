<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyLeave extends Model
{
    use HasFactory;

    protected $table = "apply_leaves";

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function interns(){
        return $this->belongsTo(Intern::class);
    }
}
