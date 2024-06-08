<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('logout', [CustomAuthController::class, 'logout']);

Route::middleware(['alreadyLoggedIn'])->group(function () {
    Route::post('register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
    Route::post('login-manager', [CustomAuthController::class, 'PostManagerLogin'])->name('login-manager');
    Route::post('login-employee', [CustomAuthController::class, 'PostEmployeeLogin'])->name('login-employee');
    Route::post('login-doctor', [CustomAuthController::class, 'PostDoctorLogin'])->name('login-doctor');
    Route::get('manager/login', [CustomAuthController::class, 'managerLogin']);
    Route::get('employee/login', [CustomAuthController::class, 'employeeLogin']);
    Route::get('doctor/login', [CustomAuthController::class, 'doctorLogin']);
    Route::get('registration', [CustomAuthController::class, 'registration']);
});

Route::middleware(['authManager'])->group(function () {
    Route::get('managers', [\App\Http\Controllers\UserController::class, 'manager']);
    Route::get('managers/create-employee', [\App\Http\Controllers\UserController::class, 'createEmployee']);
    Route::post('managers/create-employee', [\App\Http\Controllers\UserController::class, 'PostCreateEmployee'])->name('create-employee');
});
Route::middleware(['authEmployee'])->group(function () {
    Route::get('employees', [\App\Http\Controllers\UserController::class, 'employee']);
});
Route::middleware(['authDoctor'])->group(function () {
    Route::get('doctors', [\App\Http\Controllers\UserController::class, 'doctor']);
});
