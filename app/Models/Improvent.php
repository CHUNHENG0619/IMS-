<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Improvent extends Model
{
    use HasFactory;

    protected $table = "improvements";

    public function FAQs(){
        return $this->belongsTo(FAQ::class);
    }
}
