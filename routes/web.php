<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-employee',[EmployeeController::class,'create'])->name('employee.create');

Route::post('/add-employee',[EmployeeController::class,'store'])->name('employee.store');

Route::get('/all-employees',[EmployeeController::class,'index'])->name('employee.index');

Route::get('/edit-employee/{employee_id}',[EmployeeController::class,'edit'])->name('employee.edit');

Route::post('/update-employee/{employee_id}',[EmployeeController::class,'update'])->name('employee.update');

Route::get('/delete-employee/{employee_id}',[EmployeeController::class,'destroy'])->name('employee.delete');