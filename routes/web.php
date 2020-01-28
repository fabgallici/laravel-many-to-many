<?php

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
    return view('employee.index');
});

Route::get('/employee', 'EmployeeController@index') ->name('employee.index');
Route::get('/employee.create', 'EmployeeController@create') ->name('employee.create');
Route::post('/employee.store', 'EmployeeController@store') ->name('employee.store');

Route::get('/employee/{ide}/remove/task/{idt}', 'ExtraController@removeTagFromPost') ->name('employee.task.remove');

Route::get('/employee/{id}/edit', 'EmployeeController@edit') ->name('employee.edit');
