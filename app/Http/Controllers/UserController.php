<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use DatePeriod;
use DateInterval;
use Illuminate\Support\Facades\Http;

use App\Models\User;
use App\Models\CalendarToDoList;
use App\Models\CalendarEvent;
use App\Models\Staff;
use App\Models\Admin;
use App\Models\Intern;
use App\Models\Holiday;
use App\Models\InternDetail;


class UserController extends Controller
{
    // ----------------------- Calendar Event -----------------------------

    // DISPLAY ALL CALENDAR EVENT
    public function viewAllCalendarEvent()
    {
        // retrive all the calendar events of the user using cookies
        $calendarEvents = CalendarEvent::all(); //-where('user_id',?); (use cookies to retrive user id)
        if ($calendarEvents) {
            // retreive total calendar event
            $countEvents = $calendarEvents->count();

            return response()->json([
                'calendarEvents' => $calendarEvents,
                'countEvents' => $countEvents,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Calendar Event for the user not found!"
            ]);
        }
    }

    // DISPLAY CALENDAR IN TIME RANGE EG: 2021-01-01 - 2021-03-01
    public function viewCalendarInTimeRange(Request $request)
    {
        // MAKING TIME RANGE CONDITION
        $calendarEventsInTimeRange = CalendarEvent::where('event_start_time', '>=', $request->event_start_time)
            ->where('event_end_time', '<=', $request->event_end_time)
            ->get();
        // where user id=?

        if ($calendarEventsInTimeRange) {
            // COUNT TOTAL EVENTS IN THIS TIME INTERVAL
            $countMatchedEvents = count($calendarEventsInTimeRange);

            return response()->json([
                "calendar_events_in_time_range" => $calendarEventsInTimeRange,
                "messages" => $countMatchedEvents . " have been found",
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Calendar Event for the user not found!"
            ]);
        }
    }

    // VIEW EVENTS WHICH IS NEARLY TO HAPPEN
    public function viewUpcomingEvents(Request $request)
    {
        // check all the calendar event of the user using cookie
        $calendarEvents = CalendarEvent::all(); //where user id=?

        if ($calendarEvents) {
            // initialize arrau, matched event will store into array
            $calendarEventNearDue = array(
                'event_details' => [],
                'event_due_time' => []
            );

            foreach ($calendarEvents as $calendarEvent) {
                $now = Carbon::parse(Carbon::now());
                $event_end_time = Carbon::parse($calendarEvent->event_end_time);
                $due = $now->diffInDays($event_end_time, false);

                // Calculate the day left for the event
                if ($due < $request->due) {
                    array_push($calendarEventNearDue['event_details'], $calendarEvent);
                    array_push($calendarEventNearDue['event_due_time'], "The event ID " . $calendarEvent->calendar_event_id . " will be on due " . $due . " days");
                }
            }

            return response()->json([
                'calendarEvent' => $calendarEventNearDue,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Calendar Event for the user not found!"
            ]);
        }
    }

    // FILTER EVENT FROM TWO CATEGORY (type_of_event , location)
    public function filterEvent(Request $request)
    {
        // retreive every column name
        $columnTitle = Schema::getColumnListing('calendar_events');

        // To explode parameter name & parameter value
        $filterCategory = explode("=", $_SERVER["QUERY_STRING"]);

        // parameter name validation
        foreach ($columnTitle as $columnName) {
            if ($filterCategory[0] == $columnName) {
                break;
            }

            if (end($columnTitle) == $columnName) {
                return response()->json([
                    'status' => 400,
                    'message' => "Failed to sort!"
                ]);
            }
        }
        // Check all the values which are matched
        $filterEvent = CalendarEvent::where($filterCategory[0], $filterCategory[1])->get(); // where user id =?
        // Eg: '/eventSort?category=Interview
        
        return response()->json([
            'filterEvent' => $filterEvent,
            'status' => 200,
            'message' => "Sort Successfully!"
        ]);
    }

    // RETURN GOOGLE MAP LOCATION FROM CLICKING EVENT LOCATION
    public function viewCalendarEventPlace($id)
    {
        $location = CalendarEvent::find($id);

        return redirect()->away('https://www.google.com/maps/place/' . $location->location);
    }

    // ADD CALENDAR EVENT
    public function addCalendarEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_title' => ['required|max:255'],
            'type_of_event' => ['required|char|size:1'],
            'event_start_time' => ['required|date_format:Y-m-d H:i:s'],
            'event_end_time' => ['required|date_format:Y-m-d H:i:s'],
            'event_description' => ['required|text'],
            'location' => ['required|max:255'],
        ]);

        if (($request->event_end_time < $request->event_start_time) || !($validator)) {
            if (!($validator)) {
                return response()->json([
                    'status' => 400,
                    'errors' => $validator->errors(),
                ]);
            } else {
                return response()->json([
                    'status' => 400,
                    'message' => "Make sure end time is not later than start time!",
                ]);
            }
        } else {
            $calendarEvent = new CalendarEvent;
            $calendarEvent->user_id = $request->user_id;
            $calendarEvent->event_title = $request->event_title;
            $calendarEvent->type_of_event = $request->type_of_event;
            $calendarEvent->event_start_time = $request->event_start_time;
            $calendarEvent->event_end_time = $request->event_end_time;
            $calendarEvent->event_description = $request->event_description;
            $calendarEvent->location = $request->location;
            $calendarEvent->save();

            return response()->json([
                'status' => 200,
                'message' => 'Added Successfully!'
            ]);
        }
    }

    // MODIFY CALENDAR EVENT
    public function modifyCalendarEvent(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'event_title' => ['required|max:255'],
            'type_of_event' => ['required|char|size:1'],
            'event_start_time' => ['required|date_format:Y-m-d H:i:s'],
            'event_end_time' => ['required|date_format:Y-m-d H:i:s|after:event_start_time'],
            'event_description' => ['required|text'],
            'event_location' => ['required|max:255'],
        ]);

        if ($validator) {
            $calendarEvent = CalendarEvent::find($id);

            if ($calendarEvent) {
                $calendarEvent->event_title = $request->event_title;
                $calendarEvent->type_of_event = $request->input('type_of_event');
                $calendarEvent->event_start_time = $request->input('event_start_time');
                $calendarEvent->event_end_time = $request->input('event_end_time');
                $calendarEvent->event_description = $request->input('event_description');
                $calendarEvent->location = $request->input('location');
                $calendarEvent->meet_link = $request->input('meet_link');
                $calendarEvent->update();

                return response()->json([
                    'status' => 200,
                    'message' => 'Update Successfully!'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'To Do List Not Found!'
                ]);
            }
        } else {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),
            ]);
        }
    }

    // DELETE CALENDAR EVENT
    public function deleteCalendarEvent($id)
    {
        $deleteCalendarEvent = CalendarEvent::find($id);

        if ($deleteCalendarEvent) {
            $deleteCalendarEvent->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Removed Calendar Event!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Calenadar Event Is Not Removed Successfully!'
            ]);
        }
    }

    // CALCULATE ATTENDANCE
    public function attendance($id)
    {
        // TO GET INTERN START DATE & END DATE
        $totalWorkDays = InternDetail::where('intern_id', $id)->get()->first();

        if ($totalWorkDays) {
            // TO RETREIEVE HOLIDAYS DATE
            $holidays = Holiday::all()->pluck('start_date')->toArray();

            // TO RETRIEVE INTERN START DATE
            $start = Carbon::parse($totalWorkDays->time_to_start);

            // TO RETRIEVE INTERN END DATE
            $end = Carbon::parse($totalWorkDays->time_to_end);

            // TO CALCULATE DATE DIFFERENCE
            $totalDayOfWork = $start->diffInDays($end);

            // MAKE A TIME INTERVAL START FROM ITNERN START DATE UNTIL END DATE
            $period = new DatePeriod($start, new DateInterval('P1D'), $end);

            foreach ($period as $day) {
                // TURN DATE TO INTO DAYS OF WEEK
                $current = $day->format('D');

                // MINUS DATE SATURDAY & SUNDAY
                if ($current == 'Sat' || $current == 'Sun') {
                    $totalDayOfWork--;
                }
                // MINUS HOLIDAY
                else if (in_array($day->toDateString(), $holidays)) {
                    $totalDayOfWork--;
                }
            }
            return response()->json([
                'attendance' => $totalDayOfWork,
                'message' => "Successfully to fetch interns' attendance",
            ]);
        } else {
            return response()->json([
                'message' => "Unsuccessfully to fetch interns' attendance",
            ]);
        }
    }

    // -------------------------- Calendar To Do List ------------------------------------

    // VIEW CALENDAR TO DO LIST
    public function viewAllCalendarToDoLists()
    {
        $calendarToDoList = CalendarToDoList::all(); //where user_id=?

        if ($calendarToDoList){
            return response()->json(['calendarToDoList' => $calendarToDoList]);
        }
        else{
            return response()->json([
                'status'=>400,
                'message'=>"Cannot find calendar to do list!"
            ]);
        }
      
    }

    // ADD CALENDAR TO DO LIST
    public function addCalendarToDoList(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required'],
            'title' => ['required|max:255'],
            'description' => ['required|char|size:1'],
            'task_status' => ['required|max:20'],
            'task_color' => ['required|char|size:1'],
            'start_time' => ['required|date_format:Y-m-d H:i:s'],
            'deadline' => ['required|date_format:Y-m-d H:i:s|after:start_time']
        ]);

        if ($validator) {
            $calendarToDoList = new CalendarToDoList();
            $calendarToDoList->user_id = $request->user_id; // use cookie
            $calendarToDoList->title = $request->title;
            $calendarToDoList->description = $request->description;
            $calendarToDoList->task_status = $request->task_status;
            $calendarToDoList->task_color = $request->task_color;
            $calendarToDoList->start_time = $request->start_time;
            $calendarToDoList->deadline = $request->deadline;
            $calendarToDoList->save();

            return response()->json([
                'status' => 200,
                'message' => 'Added Successfully!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),
            ]);
        }
    }

    // MODIFY CALENDAR TO DO LIST
    public function modifyCalendarToDoList(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required'],
            'title' => ['required|max:255'],
            'description' => ['required|char|size:1'],
            'task_status' => ['required|max:20'],
            'task_color' => ['required|char|size:1'],
            'start_time' => ['required|date_format:Y-m-d H:i:s'],
            'deadline' => ['required|date_format:Y-m-d H:i:s']
        ]);

        if ($validator) {
            $calendarToDoList = CalendarToDoList::find($id);

            if ($calendarToDoList) {
                $calendarToDoList->title = $request->input('title');
                $calendarToDoList->description = $request->input('description');
                $calendarToDoList->task_status = $request->input('task_status');
                $calendarToDoList->task_color = $request->input('task_color');
                $calendarToDoList->start_time = $request->input('start_time');
                $calendarToDoList->deadline = $request->input('deadline');
                $calendarToDoList->update();

                return response()->json([
                    'status' => 200,
                    'message' => 'Update Successfully!'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'To Do List Not Found!'
                ]);
            }
        } else {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),
            ]);
        }
    }

    // DELETE CALENDAR TO DO LIST
    public function deleteCalendarToDoList($id)
    {
        $deleteToDoList = CalendarToDoList::find($id);

        $deleteToDoList->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Removed Calendar To Do List!'
        ]);
    }

    public function sortCalendarToDoListByColor(Request $request, $id)
    {
        $list = CalendarToDoList::where('user_id', $id)->get();

        if ($list) {
            $sort = $list->where('task_color', $request->task_color);

            return response()->json([
                'status' => 200,
                'sort' => $sort
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => "To Do List not found!"
            ]);
        }
    }

    public function sortCalendarToDoListByStatus(Request $request, $id)
    {
        $list = CalendarToDoList::where('user_id', $id)->get();

        if ($list) {
            $sort = $list->where('status', $request->task_status)->get();

            return response()->json([
                'status' => 200,
                'sort' => $sort
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => "To Do List not found!"
            ]);
        }
    }

    // VIEW CALENDAR TO DO LIST NEAR DUE
    public function viewCalendarToDoListNearDue(Request $request)
    {
        // check all the calendar to do list of the user using cookie
        $calendarToDoLists = CalendarToDoList::all(); // where user id =?

        // initialize arrau
        $calendarToDoListNearDue = array(
            'to_do_list_details' => [],
            'to_do_list_due_time' => []
        );

        foreach ($calendarToDoLists as $calendarToDoList) {
            $now = Carbon::parse(Carbon::now());
            $event_end_time = Carbon::parse($calendarToDoList->deadline);
            $due = $now->diffInDays($event_end_time, false);

            // Check the due day search by user
            if ($due < $request->due) {
                array_push($calendarToDoListNearDue['to_do_list_details'], $calendarToDoList);
                array_push($calendarToDoListNearDue['to_do_list_due_time'], "The event ID " . $calendarToDoList->calendar_event_id . " will be on due " . $due . " days");
            }
        }

        return response()->json([
            'calendarToDoList' => $calendarToDoListNearDue,
        ]);
    }

    // GET WEATHER DATA FROM API
    public function getWeatherData(Request $request)
    {
        $city_name = $request->city_name; // FROM USER LOCATION COOKIES
        $api_key = config('services.openweather.key');
        $currentWeather = Http::get('http://api.openweathermap.org/data/2.5/weather?q=' . $city_name . '&appid=' . $api_key . '&units=metric');

        return response()->json([
            "weather" => $currentWeather->json(),
        ]);
    }
}
