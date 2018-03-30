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
Route::get('/delete_course/{id}','CourseController@delete');

Route::get('/add_batch', 'BatchController@create')->name('add_batch');
Route::get('/batch_list', 'BatchController@index')->name('batch_list');
Route::post('/batch_list', 'BatchController@store')->name('store_batch');
Route::get('/delete_batch/{id}','BatchController@delete');

Route::get('/admit_student', 'StudentController@create')->name('admit_student');
Route::get('/student_list', 'StudentController@index')->name('student_list');
Route::post('/student_list', 'StudentController@store')->name('store_student');
Route::get('/delete_student/{id}','StudentController@delete');

Route::get('/send_message', 'MessageController@create')->name('send_message');
Route::get('/message_list', 'MessageController@index')->name('message_list');
Route::post('/message_list', 'MessageController@store')->name('store_message');


Route::get('/payment', 'AccountController@create_payment')->name('payment');
Route::get('/expense', 'AccountController@create_expense')->name('expense');
Route::get('/details', 'AccountController@index')->name('details');
Route::post('/payment', 'AccountController@store_payment')->name('store_payment');
Route::post('/expense', 'AccountController@store_expense')->name('store_expense');
Route::get('/delete_acc/{id}','AccountController@delete');


Route::get('/add_lecture', 'TaskController@create')->name('add_lecture');
Route::get('/task_list/{id}', 'TaskController@index')->name('task_list');
Route::get('/task_list_all', 'TaskController@index_all')->name('task_list_all');
Route::post('/add_lecture', 'TaskController@store')->name('store_lecture');
Route::get('/delete_lecture/{id}','TaskController@delete');
Route::get('/update_lecture/{id}','TaskController@done');



Route::get('/add_exam', 'ExamController@create')->name('add_exam');
Route::get('/exam_list', 'ExamController@index')->name('exam_list');
Route::post('/exam_list', 'ExamController@store')->name('store_exam');
Route::get('/delete_exam/{id}','ExamController@delete');


Route::get('/downloadPDF/{id}','StudentController@downloadPDF');
Route::get('/downloadAttendance/{id}','BatchController@downloadAttendance');
Route::get('/downloadBatchInfo/{id}','BatchController@downloadBatchInfo');
Route::get('/downloadExamSheet/{id}','BatchController@downloadExamSheet');


