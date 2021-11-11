<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;

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

Route::get('profile',[DashBoardController::class,'showProfile'])->name('student#profile');

Route::get('subjects',[DashBoardController::class,'showSubjects'])->name('student#subjects');

Route::get('classes',[DashBoardController::class,'showClasses'])->name('student#classes');

Route::get('teachers',[DashBoardController::class,'showTeachers'])->name('student#teachers');

Route::get('students',[DashBoardController::class,'showStudents'])->name('student#students');

Route::get('schedule',[DashBoardController::class,'showSchedule'])->name('student#schedule');






