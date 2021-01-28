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

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::resource('/todo', 'Admin\TodoController');
});
