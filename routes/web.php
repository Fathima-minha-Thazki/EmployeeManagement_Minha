<?php

use App\Http\Controllers\EmployeeController;

Route::resource('employees', EmployeeController::class);



Route::get('/', function () {
    return view('welcome');
})->name('home');