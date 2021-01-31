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

Route::group(['prefix' => 'settings'], function() {
    Route::get('/', function() {
        return redirect('/settings/faculty1');
    });    
    Route::group(['prefix' => 'events'], function() {
        Route::get('/', function(){
            return view('settings.events.1');
        });
    });
    Route::group(['prefix' => 'faculty1'], function() {
        Route::get('/', function(){
            return view('settings.faculty1.index');
        });
        Route::get('/carrera1', function(){
            return view('settings.faculty1.carrera1');
        });
        Route::get('/carrera2', function(){
            return view('settings.faculty1.carrera2');
        });
    });
    Route::group(['prefix' => 'integral-formation'], function() {
        Route::get('/', function(){
            return redirect('/settings/integral-formation/unite1');
        });
        Route::get('/unite1', function(){
            return view('settings.integral-formation.unite1');
        });
    });
    Route::group(['prefix' => 'faq'], function() {
        Route::get('/', function(){
            return redirect('/settings/faq/question1');
        });
        Route::get('/question1', function(){
            return view('settings.faq.question1');
        });
    });
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::resource('/todo', 'Admin\TodoController');
});
