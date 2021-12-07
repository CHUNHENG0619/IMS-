<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;

    protected $table = "calendar_events";
    public $primaryKey = "calendar_event_id";

    // involved member (JSON) & attachment (string path) will ne currently nullable now for faker

    protected $fillable = ['calendar_event_id','user_id','event_title','type_of_event','event_start_time','event_end_time','event_description',
                           'location','meet_link'];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
