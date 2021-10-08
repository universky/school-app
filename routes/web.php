<?php

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
Route::get('/','MainController@index')->name('main');

Route::get('/student','StudentController@index')->name('student');
Route::get('/student/new_std','StudentController@new_std')->name('student.new_std');

Route::post('/student','StudentController@store')->name('student.store');

Route::patch('/student/{id}','StudentController@update')->name('student.update');
Route::delete('/student/{id}','StudentController@destroy')->name('student.destroy');

Route::get('/school','SchoolController@index')->name('school');
Route::get('/school/new_sch','SchoolController@new_sch')->name('school.new_sch');

Route::post('/school','SchoolController@store')->name('school.store');

Route::patch('/school/{id}','SchoolController@update')->name('school.update');
Route::delete('/school/{id}','SchoolController@destroy')->name('school.destroy');

