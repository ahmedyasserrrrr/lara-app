<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/customers', [App\Http\Controllers\CustomersController::class, 'index'])->name('customers');


Route::resources([
    'forms'=>\App\Http\Controllers\FormsController::class,
    'edits'=>\App\Http\Controllers\EditsController::class,
    'customers'=>\App\Http\Controllers\CustomersController::class,
    'clocks'=>\App\Http\Controllers\ClocksController::class,
    'employs'=>\App\Http\Controllers\EmploysController::class,
]);
