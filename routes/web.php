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

Route::get('/', function () {
    return view('users');
});

Route::get('/users',function(){
    $users = DB::table('users')->get();
    return view('users',['users' => $users]);
});

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


//Xirouh and seaiyou part

/*

kernel.php 要加

protected $routeMiddleware = [
    ...
    'role' => \App\Http\Middleware\Role::class,
];

然后要create middleware的 role.php

public function handle($request, Closure $next, ... $roles)
{
    if (!Auth::check())
        return redirect('login');

    $user = Auth::user();

    if($user->isAdmin())
    {
         return $next($request);
    }
       
    else if($user->isIntern)
    {
         return $next($request);
    }

    else if($user->isStaff)
    {
         return $next($request);
    }

    else if($user->isUser)
    {
         return $next($request);
    }
       

    return redirect('login');
}


*/


// Auth::routes();


// Route::resource('/admin{id}',AdminController::class)->middleware('role:admin');
// Route::resource('/intern{id}',InternController::class)->middleware('role:intern');
// Route::resource('/staff{id}',StaffController::class)->middleware('role:staff');
// Route::resource('/user{id}',UserController::class)->middleware('role:user');


