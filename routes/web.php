<?php

use App\Http\Controllers\AppreciationController;
use App\Http\Controllers\DecreeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
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

Auth::routes(
    [
        'register' => false,
        'reset' => false,
        'verify' => false,
    ]
);
//Language Translation
Route::get('index/{locale}', [HomeController::class, 'lang']);

Route::get('/', [HomeController::class, 'root'])->name('root');

//Update User Details
Route::get('/edit-profile', [HomeController::class, 'editProfile'])->name('edit_profile');
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('update_profile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('update_password');

Route::middleware([])->group(function () {
    Route::resource('positions', PositionController::class);
    Route::resource('institutions', InstitutionController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('appreciations', AppreciationController::class);
    Route::resource('decrees', DecreeController::class);
    Route::resource('leaves', LeaveController::class);
    Route::resource('job-assessments', JobAssessmentController::class);
    Route::resource('salaries', SalaryController::class);

    Route::post('leaves/approve/{id}', [LeaveController::class, 'approve'])->name('leaves.approve');
});

Route::middleware(['jwt.verify'])->prefix('employee')->name('employee.')->group(function () {
    Route::get('/', [HomeController::class, 'root'])->name('home');

    Route::get('employees/export/{type}', [EmployeeController::class, 'export'])->name('employees.export');
    Route::resource('employees', EmployeeController::class)->except([
        'destroy'
    ]);

    Route::get('salaries/download-pdf/{salary}', [SalaryController::class, 'downloadPdf'])->name('salaries.download_pdf');
    Route::get('salaries/preview-pdf/{salary}', [SalaryController::class, 'previewPdf'])->name('salaries.preview_pdf');
    Route::resource('salaries', SalaryController::class)->except([
        'create', 'store', 'edit', 'update', 'destroy'
    ]);

    Route::resource('leaves', LeaveController::class)->except([
        'edit', 'update', 'destroy'
    ]);

    Route::resource('job-assessments', JobAssessmentController::class)->except([
        'destroy'
    ]);

    Route::resource('decrees', DecreeController::class)->except([
        'create', 'store', 'edit', 'update', 'destroy'
    ]);

    Route::resource('appreciations', AppreciationController::class)->except([
        'create', 'store', 'edit', 'update', 'destroy'
    ]);
});

// Route::get('{any}', [HomeController::class, 'index'])->name('index');
