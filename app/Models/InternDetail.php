<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternDetail extends Model
{
    use HasFactory;

    protected $table = "intern_details";

    public function interns(){
        return $this->belongsTo(Intern::class);
    }

    public function educations()
    {
        return $this->hasOne(Education::class);
    }
}
