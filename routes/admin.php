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
    Route::get('/edit-attendees/{id?}', 'App\Http\Controllers\Admin\AttendeesController@edit')->name('attendees.edit');
    Route::post('/edit-attendees/{id}', 'App\Http\Controllers\Admin\AttendeesController@update')->name('attendees.update');


    Route::get('/venues', 'App\Http\Controllers\Admin\VenuesController@index')->name('venues.index');
    Route::get('/create-venues', 'App\Http\Controllers\Admin\VenuesController@create')->name('venues.create');
    Route::post('/venues', 'App\Http\Controllers\Admin\VenuesController@store')->name('venues.store');
    Route::get('/delete-venues/{id}', 'App\Http\Controllers\Admin\VenuesController@delete')->name('venues.delete');
    Route::get('/edit-venues/{id?}', 'App\Http\Controllers\Admin\VenuesController@edit')->name('venues.edit');
    Route::post('/update-venues/{id}', 'App\Http\Controllers\Admin\VenuesController@update')->name('venues.update');



    Route::get('/conference', 'App\Http\Controllers\Admin\ConferencesController@index')->name('conferences.index');
    Route::get('/create-conference', 'App\Http\Controllers\Admin\ConferencesController@create')->name('conferences.create');
    Route::post('/conference', 'App\Http\Controllers\Admin\ConferencesController@store')->name('conferences.store');
    Route::get('/delete-conference/{id}', 'App\Http\Controllers\Admin\ConferencesController@delete')->name('conferences.delete');
    Route::get('/edit-conference/{id?}', 'App\Http\Controllers\Admin\ConferencesController@edit')->name('conferences.edit');
    Route::post('/update-conference/{id}', 'App\Http\Controllers\Admin\ConferencesController@update')->name('conferences.update');


});

