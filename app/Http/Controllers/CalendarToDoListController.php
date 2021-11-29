<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CalendarToDoList;

class CalendarToDoListController extends Controller
{
    public function addCalendarToDoList()
    {
    
        $calendartodolist = new CalendarToDoList();
        $calendartodolist->calendar_to_do_id = "2";
        $calendartodolist->user_id = "2";
        $calendartodolist->description = "Testing 1";
        $calendartodolist->title = "Test 1";
        $calendartodolist->task_color = "B";
        $calendartodolist->task_status = "Completed";
        $calendartodolist->start_time = "1000-01-01 00:00:00";
        $calendartodolist->deadline = "2021-11-29 19:20:45";
        $calendartodolist->save();
        return "Record has been add successfully!";
    }
}
