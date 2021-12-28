<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\MeetingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// -------------------------- CALENDAR EVENT CRUD --------------------------
Route::get('/calendar', [UserController::class, 'viewAllCalendarEvent']);
Route::post('/calendar/addCalendarEvent', [UserController::class, 'addCalendarEvent']);
Route::put('/calendar/modifyCalendarEvent/{id}', [UserController::class, 'modifyCalendarEvent']);
Route::delete('/calendar/deleteCalendarEvent/{id}', [UserController::class, 'deleteCalendarEvent']);
// -------------------------- CALENDAR EVENT CRUD --------------------------


// -------------------------- CALENDAR FEATURE --------------------------
Route::get('/calendar/eventSort', [UserController::class, 'filterEvent']);
Route::get('/calendar/eventLocation/{id}', [UserController::class, 'viewCalendarEventPlace']);
Route::post('/calendar/viewUpcomingEvents', [UserController::class, 'viewUpcomingEvents']);
Route::post('/calendar/viewCalendarInTimeRange', [UserController::class, 'viewCalendarInTimeRange']);
Route::get('/calendar/attendance/{id}', [UserController::class, 'attendance']);
// -------------------------- CALENDAR FEATURE --------------------------


// -------------------------- CALENDAR TO DO LIST CRUD --------------------------
Route::get('/calendarToDoLists', [UserController::class, 'viewAllCalendarToDoLists']);
Route::post('/calendarToDoLists/addCalendarToDoLists', [UserController::class, 'addCalendarToDoList']);
Route::put('/calendarToDoLists/modifyCalendarToDoLists/{id}', [UserController::class, 'modifyCalendarToDoList']);
Route::delete('/calendarToDoLists/deleteCalendarToDoLists/{id}', [UserController::class, 'deleteCalendarToDoList']);
// -------------------------- CALENDAR TO DO LIST CRUD --------------------------


// -------------------------- CALENDAR TO DO LIST FEATURE --------------------------
Route::post('/calendarToDoLists/sortColor/{id}', [UserController::class, 'sortCalendarToDoListByColor']);
Route::post('/calendarToDoLists/sortStatus/{id}', [UserController::class, 'sortCalendarToDoListByStatus']);
Route::post('/calendarToDoLists/nearDue', [UserController::class, 'viewCalendarToDoListNearDue']);
// -------------------------- CALENDAR TO DO LIST FEATURE --------------------------


// -------------------------- WEATHER API --------------------------
Route::get('/weather', [UserController::class, 'getWeatherData']);
// -------------------------- WEATHER API --------------------------

// -------------------------- ZOOM MEETING API--------------------------
Route::get('/viewZoomMeeting', [MeetingController::class, 'list_meetings']);
Route::post('/createZoomMeeting', [MeetingController::class, 'createZoomMeeting']);
Route::put('/updateZoomMeeting/{meeting_id}', [MeetingController::class, 'updateZoomMeeting']);
Route::delete('/deleteZoomMeeting/{meeting_id}', [MeetingController::class, 'deleteZoomMeeting']);
// -------------------------- ZOOM MEETING API--------------------------