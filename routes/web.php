<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternController;
use App\Http\Controllers\JointableController;

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
    return view('welcome');
});



// Route::post('intern',[InternController::class, 'store']);

// Route::get('intern/{intern_id}',[InternController::class, 'ViewProfile']);
// Route::get('edit-intern/{intern_id}', [InternController::class, 'edit']);
// Route::put('update-intern/{intern_id}', [InternController::class, 'update']);
// Route::delete('delete-intern/{intern_id}', [InternController::class, 'destroy']);

// Route::get('join_table', [JointableController::class, 'index']);