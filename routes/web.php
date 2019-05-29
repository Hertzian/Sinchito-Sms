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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nuevavista', 'SmsController@vista');

// Accounts
Route::get('/getaccounts', 'AccountsController@getAccounts');
Route::get('/getaccount/{id}', 'AccountsController@getAccount');
Route::get('/newaccount', 'AccountsController@newAccountView');
Route::post('/newaccount', 'AccountsController@newAccount');

// Batches
Route::get('/getlist/{id}', 'ItemsListController@getBatches');
Route::get('/newlist', 'ItemsListController@newBatchView');
Route::post('/newlist', 'ItemsListController@newBatch');
