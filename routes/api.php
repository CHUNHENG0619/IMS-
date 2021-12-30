<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\userProfileController;

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
 


Route::get('intern/{intern_id}',[userProfileController::class, 'ViewProfile']); 
Route::put('update-intern/{intern_id}', [userProfileController::class, 'updateProfile']);

Route::get('payslip/{payslip_id}',[userProfileController::class, 'viewPaySlip']);

Route::get('education/{edu_id}',[userProfileController::class, 'viewEducation']);
Route::put('update-education/{edu_id}', [userProfileController::class, 'educationUpdate']);

 