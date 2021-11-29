<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CalendarEvent;

class CalendarEventController extends Controller
{
    public function addCalendarEvent()
    {
    
        $calendarevent = new CalendarEvent();
        $calendarevent->calendar_event_id = "2";
        $calendarevent->user_id = "2";
        $calendarevent->event_title = "Event 1";
        $calendarevent->type_of_event = "S";
        $calendarevent->event_date = "1000-01-01 00:00:00";
        $calendarevent->event_description = "Completed";
        $calendarevent->attachment = "Attachment";
        $calendarevent->location = "Selangor";
        $calendarevent->involved_member = "Ali Baba";
        $calendarevent->meet_link = "https://app.diagrams.net/";
        $calendarevent->save();
        return "Record has been add successfully!";
    }
}
