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
    return view('home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'rooms'], function() {
    Route::get('/', function() {
        return view('rooms.index');
    });
    Route::get('/detail', function() {
        return view('rooms.detail');
    });
});

Route::group(['prefix' => 'gallery'], function() {
    Route::get('/', function() {
        return view('gallery.index');
    });
});

Route::group(['prefix' => 'blog'], function() {
    Route::get('/', function() {
        return view('blog.index');
    });
    Route::get('/detail', function() {
        return view('blog.detail');
    });
});

Route::group(['prefix' => 'contact-us'], function() {
    Route::get('/', function() {
        return view('contact.index');
    });
});


Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'rooms'], function() {
        Route::get('/', function() {
            return view('admin.rooms.index');
        });
    });
});

