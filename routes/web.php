<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

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

Route::get('/', [ScheduleController::class,'index']);
Route::get('/schedules/create',[ScheduleController::class,'create']);
Route::get('/schedules/{schedule}',[ScheduleController::class,'show']);
Route::post('/schedules',[ScheduleController::class,'store']);

