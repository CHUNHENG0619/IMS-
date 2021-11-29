<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyLeave extends Model
{
    use HasFactory;

    protected $table = "apply_leaves";

    protected $fillable = ['leave_id','intern_id','admin_id','start_date','end_date','remark',
                          'status'];

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function interns(){
        return $this->belongsTo(Intern::class);
    }
}
