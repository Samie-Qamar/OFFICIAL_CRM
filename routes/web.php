<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\HolidayController;

eee
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[DashboardController::class ,'home']);



/**Manage Leave Module */



Route::get('Manage_leave',[LeaveController::class,'index'])->name('manage.all.leave');
Route::get('/createleave',[LeaveController::class,'CreateLeavePage'])->name('create.Leave');
Route::post('Create_leave',[LeaveController::class,'create'])->name('create.leave');

/** Manage Annoucement Module */
Route::get('/Manage_holiday',[HolidayController::class,'index'])->name('manage.all.holiday');
Route::get('createholiday',[HolidayController::class,'CreateHolidayPage'])->name('create.holiday.page');
Route::post('create_holiday',[HolidayController::class,'store'])->name('create.holiday');


