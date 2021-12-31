<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\StaffController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\InternController;

use App\Http\Controllers\HomeController;

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

Route::get('header', function () {
    return view('includes.header');
});

Route::get('footer', function () {
    return view('includes.footer');
});

Route::get('applyjob', function () {
    return view('guest.applyjob');
});

Route::get('joblist', function () {
    return view('guest.joblist');
});

Route::get('jobdetails', function () {
    return view('guest.jobdetails');
});



Route::get('faq', function () {
    return view('guest.faq');
});

Route::get('aboutus', function () {
    return view('guest.aboutus');
});

Route::get('contactus', function () {
    return view('guest.contactus');
});

Route::get('homepage', function () {
    return view('guest.homepage');
});

Route::get('login', function () {
    return view('guest.login');
});

Route::get('register', function () {
    return view('guest.register');
});

Route::get('viewtask', function () {
    return view('intern.viewtask');
});

Route::get('submittask', function () {
    return view('intern.submittask');
});

Route::get('sidebar', function () {
    return view('intern.sidebar');
});

Route::get('leaveform', function () {
    return view('intern.leaveform');
});


Route::get('leavelist', function () {
    return view('intern.leavelist');
});

Route::get('viewProfile', function () {
    return view('intern.viewProfile');
});

Route::get('editProfile', function () {
    return view('intern.editProfile');
});



Route::get('/users',function(){
    $users = DB::table('users')->get();
    return view('users',['users' => $users]);
});

Auth::routes();


// Route::resource('/admin{id}',AdminController::class)->middleware('role:admin');
// Route::resource('/intern{id}',InternController::class)->middleware('role:intern');
// Route::resource('/staff{id}',StaffController::class)->middleware('role:staff');
// Route::resource('/user{id}',UserController::class)->middleware('role:user');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');
Route::get('staff/home', [HomeController::class, 'staffHome'])->name('staff.home')->middleware('role');
Route::get('intern/home', [HomeController::class, 'internHome'])->name('intern.home')->middleware('role');


