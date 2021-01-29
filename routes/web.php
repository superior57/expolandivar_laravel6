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

// Auth::routes();
Auth::routes();

Route::get('/', function () {
    return view('home1');
});
Route::get('/my-agenda', function () {
    return view('auth.my-agenda');
});
Route::get('/welcome', function () {
    return view('auth.welcome');
});
Route::get('/registcomp', function () {
    return view('auth.registcomp');
});
Route::get('/eventcomp', function () {
    return view('auth.eventcomp');
});

Route::get('/change-plan', function () {
    return view('change-plan');
});
Route::get('/next-steps', function () {
    return view('next-steps');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::resource('/todo', 'Admin\TodoController');
});
