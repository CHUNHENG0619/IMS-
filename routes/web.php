<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CalendarToDoListController;
use App\Http\Controllers\CalendarEventController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ImprovementController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\InternDetailController;
use App\Http\Controllers\AssignTaskController;
use App\Http\Controllers\ApplyLeaveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/users',function(){
    $users = DB::table('users')->get();
    return view('users',['users' => $users]);
});

//
Route::get('view_task',[InternController::class,'ViewTask'])->name('ViewTask');
//select task
Route::get('select/{task_id}',[InternController::class,'ViewSelectTask'])->name('ViewSelectTask');

//submit
Route::post('select/submit/{task_id}',[InternController::class,'SubmitTask'])->name('SubmitTask');
//Delete submitted task
Route::get('select/unsubmit/{task_id}',[InternController::class,'DeleteSubmittedTask']);

Route::get('/add-user',[UserController::class,'addUser']);
Route::get('/add-department',[DepartmentController::class,'addDepartment']);
Route::get('/add-staff',[StaffController::class,'addStaff']);
Route::get('/add-calendartodolist',[CalendarToDoListController::class,'addCalendarToDoList']);
Route::get('/add-calendarevent',[CalendarEventController::class,'addCalendarEvent']);
Route::get('/add-education',[EducationController::class,'addEducation']);
Route::get('/add-admin',[AdminController::class,'addAdmin']);
Route::get('/add-payslip',[PayslipController::class,'addPayslip']);
Route::get('/add-faq',[FAQController::class,'addFAQ']);
Route::get('/add-contactus',[ContactUsController::class,'addContactUs']);
Route::get('/add-improvement',[ImprovementController::class,'addImprovement']);
Route::get('/add-applyleave',[ApplyLeaveController::class,'addApplyLeave']);
Route::get('/add-assigntask',[AssignTaskController::class,'addAssignTask']);
Route::get('/add-intern',[InternController::class,'addIntern']);
Route::get('/add-interndetail',[InternDetailController::class,'addInternDetail']);
Route::get('/add-job',[JobController::class,'addJob']);
Route::get('/add-jobapplication',[JobApplicationController::class,'addJobApplication']);
Route::get('/add-announcement',[AnnouncementController::class,'addAnnouncement']);

