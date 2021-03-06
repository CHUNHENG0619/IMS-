<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternDetail extends Model
{
    use HasFactory;

    protected $table = "intern_details";

    // resume is null currently for faker

    protected $fillable = ['intern_details_id','intern_id','time_to_start','time_to_end',
                           'text','states','status','time_to_update','time_to_start'];

    public function interns(){
        return $this->belongsTo(Intern::class);
    }

    public function educations()
    {
        return $this->hasOne(Education::class);
    }
}
