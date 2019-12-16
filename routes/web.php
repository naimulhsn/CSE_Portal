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

Route::get('/', 'PageController@index');
Route::get('/slides', 'PageController@slides');
Route::get('/notes', 'PageController@notes');
Route::get('/books', 'PageController@books');
Route::get('/course', 'PageController@course');
Route::get('/upload', 'PageController@upload');
Route::get('/login', 'PageController@login');
Route::get('/studentSignup', 'PageController@studentSignup');
Route::get('/teacherSignup', 'PageController@teacherSignup');
Route::post('/studentSignup', 'PageController@studentCreate')->name('registerStudent');
Route::post('/teacherSignup', 'PageController@teacherCreate')->name('registerTeacher');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
