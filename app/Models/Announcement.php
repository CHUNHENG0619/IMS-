<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table = "announcements";

    protected $fillable = ['announcement_id','admin_id','announcement_title','announcement_description'];

    public function admins(){
        return $this->belongsTo(Admin::class);
    }
}
