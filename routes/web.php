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
    return view('welcome');
});

Route::resource('/students', 'CrudController');
Route::get('findcities','CrudController@cities')->name('students.cities');
Route::get('export','CrudController@csv_export')->name('students.export');
Route::get('pdf','CrudController@pdf')->name('students.pdf');     