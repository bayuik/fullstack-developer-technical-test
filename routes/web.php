<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
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
    return view('dashboard');
});
Route::resource('position',PositionController::class);
Route::resource('employee',EmployeeController::class);
Route::get('/employee/{id}', 'EmployeeController@show');
Route::delete('employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::put('/employee/{id}', 'EmployeeController@update')->name('employee.update');



