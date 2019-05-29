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
        return view('home');
    });

    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/dashboard', 'SmsController@dashboard')->name('dashboard');
    Route::get('/single', 'SmsController@singleSms')->name('single');
    Route::get('/sms', 'SmsController@sms')->name('sms');
    Route::get('/balance', 'SmsController@balance')->name('balance');
    Route::get('/myprofile', 'SmsController@profile')->name('profile');
    Route::get('/mycontacts', 'SmsController@contacts')->name('contacts');
    Route::get('/template', 'SmsController@template')->name('tempate');
    Route::get('/settings', 'SmsController@settings')->name('settings');
    Route::get('/nuevavista', 'SmsController@vista');
