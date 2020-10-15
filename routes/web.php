<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes(['verify' => true]);

Route::get('/','PagesController@index');
Route::resource('posts', 'PostsController');
Route::resource('profiles', 'ProfilesController')->middleware('verified');
Route::get('/dashboard', 'DashboardController@index');
Route::resource('roadtax', 'RoadtaxController')->middleware('verified');
Route::resource('bluecards', 'BluecardsController')->middleware('verified');
Route::resource('insurances', 'InsurancesController')->middleware('verified');
Route::resource('admins', 'AdminsController')->middleware('verified');
Route::resource('payment', 'PaymentController')->middleware('verified');

// admin protected routes
// Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admins'], function () {
//     Route::resource('index', 'AdminsController')->middleware('verified');
// });

// user protected routes
// Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
//     Route::get('dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');
// });

Route::get('payment', 'PaymentController@index');
Route::post('charge', 'PaymentController@charge');
Route::get('paymentsuccess', 'PaymentController@payment_success');
Route::get('paymenterror', 'PaymentController@payment_error');

Route::get('messenger', 'MessagesController@index');
// Route::get('delivery', 'Controller@index');

Route::get('/delivery', function(){
    return view('delivery.index');
});

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');