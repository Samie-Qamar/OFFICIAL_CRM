<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaveController;


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



Route::get('/ManageLeave',[LeaveController::class,'index'])->name('Manage.Leave');

Route::view('/allAnnoucemnet','Pages.ManageAnoucement.index');
Route::post('Create_leave',[LeaveController::class,'create'])->name('create.leave');