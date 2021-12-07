<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = "departments";
    protected $primaryKey = "department_id";
    protected $fillable = ['department_id','address','office_phone','department_name'];

    public function staffs(){
        return $this->hasMany(Staff::class);
    }
}
