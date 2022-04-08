<?php

use App\Http\Controllers\AppreciationController;
use App\Http\Controllers\DecreeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\JobAssessmentController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalaryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::middleware(['auth'])->group(function () {

    Route::resource('positions', PositionController::class);
    Route::resource('institutions', InstitutionController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('appreciations', AppreciationController::class);
    Route::resource('decrees', DecreeController::class);
    Route::resource('leaves', LeaveController::class);
    Route::resource('job-assessments', JobAssessmentController::class);
    Route::resource('salaries', SalaryController::class);
});

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
