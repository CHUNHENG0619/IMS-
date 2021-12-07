<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table = "announcements";
    protected $primaryKey = "announcement_id";

    protected $fillable = ['announcement_id','admin_id','announcement_title','announcement_description','announcement_date','star','department','job_type','attachment'];

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
