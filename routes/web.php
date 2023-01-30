<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('dashboard.master');
    });

    Route::resource('companies', CompanyController::class)->except('show' , 'destroy');
    Route::get('companies/delete/{id}', [CompanyController::class , 'destroy'])->name('companies.delete');
    Route::resource('employees', EmployeeController::class)->except('show' , 'destroy');
    Route::get('employees/delete/{id}', [EmployeeController::class , 'destroy'])->name('employees.delete');
});

require __DIR__ . '/auth.php';
