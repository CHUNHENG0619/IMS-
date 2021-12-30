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

Route::resource('task', StaffController::class);


