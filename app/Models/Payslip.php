<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;

    protected $table = "payslips";
    protected $primaryKey = "payslip_id";
    protected $fillable = ['payslip_id','admin_id','intern_id','amount','payslip_title','payslip_date'];

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function interns(){
        return $this->belongsTo(Intern::class);
    }
}
