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
Route::get('/calendar',[UserController::class,'viewAllCalendarEvent']);
Route::post('/calendar/addCalendarEvent',[UserController::class,'addCalendarEvent']);
Route::put('/calendar/modifyCalendarEvent/{id}',[UserController::class,'modifyCalendarEvent']);
Route::delete('/calendar/deleteCalendarEvent/{id}',[UserController::class,'deleteCalendarEvent']);

Route::get('/calendar/eventSort',[UserController::class,'filterEvent']);
Route::get('/calendar/address/{address}',[UserController::class,'viewCalendarEventPlace']);
Route::get('/calendar/due',[UserController::class,'viewNearCalendarEvent']);
Route::post('/calendar/viewCalendarInTimeRange',[UserController::class,'viewCalendarInTimeRange']);
Route::get('/calendar/attendance/{id}',[UserController::class,'attendance']);

// -------------------------- CALENDAR TO DO LIST CRUD --------------------------
Route::get('/calendarToDoLists',[UserController::class,'viewAllCalendarToDoLists']);
Route::post('/calendarToDoLists/addCalendarToDoLists',[UserController::class,'addCalendarToDoList']);
Route::put('/calendarToDoLists/modifyCalendarToDoLists/{id}',[UserController::class,'modifyCalendarToDoList']);
Route::delete('/calendarToDoLists/deleteCalendarToDoLists/{id}',[UserController::class,'deleteCalendarToDoList']);

// // -------------------------- APPLY LEAVE --------------------------
// Route::post('/calendar/applyLeave',[InternController::class,'applyLeave']);
// Route::delete('/calendar/deleteApplyLeave/{id}',[InternController::class,'deleteApplyLeave']);

// -------------------------- WEATHER --------------------------
Route::get('/weather',[UserController::class,'getWeatherData']);

// -------------------------- ZOOM --------------------------
Route::get('/viewZoomMeeting',[MeetingController::class,'list_meetings']);
Route::post('/createZoomMeeting',[MeetingController::class,'createZoomMeeting']);
Route::get('/deleteZoomMeeting',[MeetingController::class,'deleteZoomMeeting']);
Route::get('/updateZoomMeeting',[MeetingController::class,'updateZoomMeeting']);