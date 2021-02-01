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
    return redirect('home');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', function() {
        return view('home1');
    });
    Route::get('/my-agenda', 'MyagendaController@index');
    Route::get('/welcome', function () {
        return view('auth.welcome');
    });
    
    Route::get('/change-plan', function () {
        return view('change-plan');
    });
    Route::get('/next-steps', function () {
        return view('next-steps');
    });
    
    // settings
    Route::group(['prefix' => 'settings'], function() {
        Route::get('/', function() {
            return redirect('/settings/faculty1');
        });    
        // events special
        Route::group(['prefix' => 'events'], function() {
            Route::get('/', function(){
                return view('settings.events.1');
            });
        });
        // end events special
        // faculty        
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
        // end faculty
        // integral formation
        Route::group(['prefix' => 'integral-formation'], function() {
            Route::get('/', function(){
                return redirect('/settings/integral-formation/unite1');
            });
            Route::get('/unite1', function(){
                return view('settings.integral-formation.unite1');
            });
        });
        // end integral formation
        // faq
        Route::group(['prefix' => 'faq'], function() {
            Route::get('/', function(){
                return redirect('/settings/faq/question1');
            });
            Route::get('/question1', function(){
                return view('settings.faq.question1');
            });
        });
        // end faq
    });
    // end settings
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::resource('/todo', 'Admin\TodoController');
});

Route::get('create-user', function() {
    $user = new App\User();
    $user->password = Hash::make('123456789');
    $user->email = 'admin@admin.com';
    $user->name = 'Admin';
    $user->usertype = "admin";
    $user->save();
    return redirect("/");
});
