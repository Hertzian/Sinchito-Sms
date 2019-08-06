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

// Landing
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/', 'HomeController@index');

Route::prefix('admin')->group(function () {
  Route::get('/profile', 'admin\AdminController@profileView');
  // **********************************
  Route::get('/', 'admin\AdminController@index')->name('admin.dashboard');
  Route::get('/register', 'admin\AdminController@create')->name('admin.register');
  Route::post('/register', 'admin\AdminController@store')->name('admin.register.store');
  Route::get('/login', 'Auth\AdminLoginController@login')->name('admin.auth.login');
  Route::post('/login', 'Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
  Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.auth.logout');
  // Users
  Route::get('/getusers', 'admin\UsersController@getUsersView');
  Route::get('/userdetail/{id}', 'admin\UsersController@userDetailView');
  Route::post('/userdetail/{id}', 'admin\UsersController@userDetail');
  Route::post('/newuser', 'admin\UsersController@newUser');
  Route::post('/deleteuser/{id}', 'admin\UsersController@deleteUser');
  // Accounts
  Route::post('/addcredit/{id}', 'admin\AccountsController@addCredit');
  Route::post('/statusaccount/{id}', 'admin\AccountsController@statusAccount');
});

Route::prefix('user')->middleware('auth')->group(function(){
  // Home
  Route::get('/', 'user\UsersController@dashboard')->name('dashboard');
  // Profile
  Route::get('/profile', 'user\UsersController@getProfileView');
  // Single SMS
  Route::get('/single','user\ItemsController@sendSingleSMSView');
  Route::post('/single', 'user\ItemsController@sendSingleSMS');
  // Item
  Route::get('/newitem/{id}', 'user\ItemsController@newItemView');
  Route::post('/newitem/{id}', 'user\ItemsController@newItem');
  Route::get('/getitems/{id}', 'user\ItemsController@getBatch');
  Route::get('/contactlist/{id}', 'user\ItemsController@getContact');
  Route::post('/deleteitem/{id}', 'user\ItemsController@deleteItem');
  // Batches
  Route::get('/getlist', 'user\ItemsListController@getBatches');
  Route::get('/newlist/{id}', 'user\ItemsListController@newBatchView');
  Route::get('/contactlist/{id}', 'user\ItemsListController@getContacts');
  Route::post('/newlist/{id}', 'user\ItemsListController@newBatch');
  Route::post('/send/{id}', 'user\ItemsListController@sendBatchSMS');
  Route::post('/deletebatch/{id}', 'user\ItemsListController@deleteBatch');
  Route::post('/newcsv/{id}', 'user\ItemsListController@newCSVBatch');
  Route::post('/sendtemplate/{id}', 'user\ItemsListController@sendTemplate');
  // Message 
  Route::get('/message','user\MessageListController@MessageListView');
  Route::get('/messageItem','user\MessageListController@MessageItemView');
  // Message list
  Route::get('/sendmessagelist','user\MessageListController@SendListView');
  Route::get('/getsenditems/{id}','user\MessageListController@SendItemsView');

  // Templates
  Route::get('/gettemplates', 'user\TemplatesController@getTemplatesView');
  Route::post('/newtemplate', 'user\TemplatesController@newTemplate');
  Route::post('/edittemplate/{id}', 'user\TemplatesController@editTemplate');
  Route::post('/deletetemplate/{id}', 'user\TemplatesController@deleteTemplate');
});

// Route::get('/nuevavista', 'SmsController@vista');

// Accounts
// Route::get('/getaccounts', 'AccountsController@getAccounts');
// Route::get('/getaccount/{id}', 'AccountsController@getAccount');
// Route::get('/newaccount', 'AccountsController@newAccountView');
// Route::post('/newaccount', 'AccountsController@newAccount');
// Route::get('/getbalance', 'AccountsController@getBalanceView');

// Admin Route
// Route::post('/addcredit', 'AccountsController@addCredit');

// check views routes
// Route::get('/profile', function () {return view('vistas.profile');})->name('profile');
// Route::get('/template', function () {return view('vistas.template');})->name('template');
Route::get('/dasch', function () {return view('vistas.dasch');})->name('dasch');
Route::get('/sms', function () {return view('vistas.sms');})->name('sms');
Route::get('/settings', function () {return view('vistas.settings');})->name('settings');
Route::get('/contacts', function () {return view('vistas.contacts');})->name('contacts');
Route::get('/sin', function () {return view('vistas.singleSms');})->name('sin');
// Route::get('/balance', function () {return view('vistas.balance');})->name('balance');