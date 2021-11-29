<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarToDoList extends Model
{
    use HasFactory;

    protected $table = "calendar_to_do_lists";

    protected $fillable = ['calendar_to_do_lists_id','user_id','description','title','task_color','task_status',
                           'start_time','deadline'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
