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
Route::get('/', function () {
    return redirect('/etree');
});
Route::group(['prefix' => 'etree'], function () {
    Route::get('/', 'App\Http\Controllers\ApplicationController@index');
    Route::get('/about', 'App\Http\Controllers\ApplicationController@about');
    Route::get('/contact', 'App\Http\Controllers\ApplicationController@contact');
    Route::post('/contact/message', 'App\Http\Controllers\MessageController@index')->name('message');
    Route::get('events', 'App\Http\Controllers\ApplicationController@events');
    Route::get('/store', 'App\Http\Controllers\ApplicationController@store');
    Route::get('/store/{categoryId}', 'App\Http\Controllers\ApplicationController@categories');
    Route::get('/learning', 'App\Http\Controllers\ApplicationController@learning');
    Route::get('/ordered-history', 'App\Http\Controllers\ApplicationController@ordered_history');
    Route::get('/ordered-history/detail/{id}', 'App\Http\Controllers\ApplicationController@ordered_detail');
    Route::get('/detail/{id}', 'App\Http\Controllers\ApplicationController@detail');
    Route::get('/register', 'App\Http\Controllers\UsersController@index');
    Route::get('/login', 'App\Http\Controllers\UsersController@login');
    Route::get('/donate', 'App\Http\Controllers\DonationsController@index');
    Route::get('/list-donation', 'App\Http\Controllers\DonationsController@list');
    Route::get('/donated-history', 'App\Http\Controllers\DonationsController@history');
    Route::get('/account', 'App\Http\Controllers\ApplicationController@account');
    Route::get('/store/order/{id}', 'App\Http\Controllers\ApplicationController@order');
    Route::get('/account/change-name', 'App\Http\Controllers\AccountController@change_name');
    Route::get('/account/change-email', 'App\Http\Controllers\AccountController@change_email');
    Route::get('/account/change-birthday', 'App\Http\Controllers\AccountController@change_dob');
    Route::get('/account/change-gender', 'App\Http\Controllers\AccountController@change_gender');
    Route::get('/account/change-phone', 'App\Http\Controllers\AccountController@change_phone');
    Route::get('/account/change-address', 'App\Http\Controllers\AccountController@change_address');
    Route::get('/account/change-profile', 'App\Http\Controllers\AccountController@change_profile');
});
Route::post('/store-user', 'App\Http\Controllers\UsersController@store')->name('store');
Route::post('/store-order', 'App\Http\Controllers\ApplicationController@store_order')->name('store-order');
Route::post('/check-login', 'App\Http\Controllers\UsersController@checkLogin')->name('check');
Route::get('/logout', 'App\Http\Controllers\UsersController@logout');
Route::post('/donate', 'App\Http\Controllers\DonationsController@store')->name('donate');
Route::post('/comment', 'App\Http\Controllers\CommentsController@store')->name('comment');
Route::post('/update-name', 'App\Http\Controllers\AccountController@update_name')->name('update-name');
Route::post('/update-email', 'App\Http\Controllers\AccountController@update_email')->name('update-email');
Route::post('/update-birthday', 'App\Http\Controllers\AccountController@update_dob')->name('update-dob');
Route::post('/update-gender', 'App\Http\Controllers\AccountController@update_gender')->name('update-gender');
Route::post('/update-phone', 'App\Http\Controllers\AccountController@update_phone')->name('update-phone');
Route::post('/update-profile', 'App\Http\Controllers\AccountController@update_profile')->name('update-profile');
Route::post('/update-address', 'App\Http\Controllers\AccountController@update_address')->name('update-address');
Route::post('/search', 'App\Http\Controllers\ApplicationController@search')->name('search');
Route::get('/ordered-cancel/{id}', 'App\Http\Controllers\ApplicationController@ordered_cancel');
