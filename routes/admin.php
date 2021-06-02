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

Route::group(['prefix' => 'admin'], function(){

    Route::get('/attendees', 'App\Http\Controllers\Admin\AttendeesController@index')->name('attendees.index');
    Route::get('/create-attendees', 'App\Http\Controllers\Admin\AttendeesController@create')->name('attendees.create');
    Route::post('/attendees', 'App\Http\Controllers\Admin\AttendeesController@store')->name('attendees.store');
    Route::get('/delete-attendees/{id}', 'App\Http\Controllers\Admin\AttendeesController@delete')->name('attendees.delete');


    Route::get('/venues', 'App\Http\Controllers\Admin\VenuesController@index')->name('venues.index');
    Route::get('/create-venues', 'App\Http\Controllers\Admin\VenuesController@create')->name('venues.create');
    Route::post('/venues', 'App\Http\Controllers\Admin\VenuesController@store')->name('venues.store');


    Route::get('/conference', 'App\Http\Controllers\Admin\ConferencesController@index')->name('conferences.index');
    Route::get('/create-conference', 'App\Http\Controllers\Admin\ConferencesController@create')->name('conferences.create');
    Route::post('/conference', 'App\Http\Controllers\Admin\ConferencesController@store')->name('conferences.store');


});

