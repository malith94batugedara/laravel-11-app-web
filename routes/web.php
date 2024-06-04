<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-employee',[EmployeeController::class,'create'])->name('employee.create');

Route::post('/add-employee',[EmployeeController::class,'store'])->name('employee.store');

Route::get('/all-employees',[EmployeeController::class,'index'])->name('employee.index');