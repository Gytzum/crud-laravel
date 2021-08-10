<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
    Route::middleware(['auth'])->group(function () {
    Route::post('employee/{id}/show', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.show');
    Route::post('project/{id}/show', [App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');
    Route::post('project/{id}/edit', [App\Http\Controllers\ProjectController::class, 'edit'])->name('project.edit');

    Route::resource('employee', App\Http\Controllers\EmployeeController::class);
    Route::resource('project', App\Http\Controllers\ProjectController::class);
});


Route::get('/home', [App\Http\Controllers\EmployeeController::class, 'index']);
