<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;

    protected $table = "payslips";

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function interns(){
        return $this->belongsTo(Intern::class);
    }
}
