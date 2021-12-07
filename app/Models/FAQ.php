<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    protected $table = "FAQs";
    protected $primaryKey = "faq_id";
    // pic is currently null for faker

    protected $fillable = ['faq_id','title','content','category','helpful'];

    public function improvements()
    {
        return $this->hasMany(Improvement::class);
    }
}
