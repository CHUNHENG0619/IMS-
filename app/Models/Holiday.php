<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;

    protected $table = "Holidays";
    protected $primaryKey = "holiday_id";

    protected $casts = [
        'states'=>'array'
    ];

    protected $fillable = ['holiday_id','holiday_name','start_date','end_date','total_holiday_days','states'];
}