<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;


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


Auth::routes();


Route::resource('/admin{id}',AdminController::class)->middleware('role:admin');
Route::resource('/intern{id}',InternController::class)->middleware('role:intern');
Route::resource('/staff{id}',StaffController::class)->middleware('role:staff');
Route::resource('/user{id}',UserController::class)->middleware('role:user');

