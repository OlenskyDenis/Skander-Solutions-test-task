<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\EmployeeController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth'])->name('admin');
Route::resource('/company', CompanyController::class);
Route::resource('/employee', EmployeeController::class);
