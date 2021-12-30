<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\MeetingController;

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

Route::view('/calendarEvent','calendarEvent');

// // --------------------------- APPLY LEAVE ------------------------------------
// Route::post('/calendar/applyLeave',[InternController::class,'applyLeave']);
// Route::delete('/calendar/deleteApplyLeave/{id}',[InternController::class,'deleteApplyLeave']);