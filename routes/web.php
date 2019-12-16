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
    return view('pages.index');
});
Route::get('/slides', function () {
    return view('pages.slides');
});
Route::get('/notes', function () {
    return view('pages.notes');
});
Route::get('/books', function () {
    return view('pages.books');
});
Route::get('/course', function () {
    return view('pages.courses');
});
Route::get('/upload', function () {
    return view('pages.upload');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/studentSignup', function () {
    return view('auth.student');
});
Route::get('/teacherSignUp', function () {
    return view('auth.teacher');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
