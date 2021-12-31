<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\AuthController;

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

// ----------------------- JWT Token -----------------------
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('user-profile', [AuthController::class, 'userProfile']);

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


    // -------------------------- Intern Profile API--------------------------
    Route::get('intern/{intern_id}',[userProfileController::class, 'ViewProfile']);
    Route::put('update-intern/{intern_id}', [userProfileController::class, 'updateProfile']);
    // -------------------------- Payslip  API--------------------------
    Route::get('payslip/{payslip_id}',[userProfileController::class, 'viewPaySlip']);
    // -------------------------- Education  API--------------------------
    Route::get('education/{edu_id}',[userProfileController::class, 'viewEducation']);
    Route::put('update-education/{edu_id}', [userProfileController::class, 'educationUpdate']);
});
