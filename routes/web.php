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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create_course', 'CourseController@create')->name('create_course');
Route::get('/view_courses', 'CourseController@index')->name('view_courses');
Route::post('/view_courses', 'CourseController@store')->name('store_course');

Route::get('/add_batch', 'BatchController@create')->name('add_batch');
Route::get('/batch_list', 'BatchController@index')->name('batch_list');
Route::post('/batch_list', 'BatchController@store')->name('store_batch');


