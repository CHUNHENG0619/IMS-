<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;

    protected $table = "payslips";

    protected $fillable = ['payslip_id','admin_id','intern_id','amount'];

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function interns(){
        return $this->belongsTo(Intern::class);
    }
}
