<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Improvement extends Model
{
    use HasFactory;

    protected $table = "improvements";
    protected $primaryKey = "improvement_id";
    protected $fillable = ['improvement_id','faq_id','description'];

    public function FAQs(){
        return $this->belongsTo(FAQ::class);
    }
}
