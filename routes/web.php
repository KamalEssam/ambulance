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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/services', 'HomeController@services');
Route::get('/reservation', 'HomeController@reservation');
Route::post('/reservation', 'ReservationController@store')->name('reservationSubmit');
Route::get('/blogs', 'HomeController@blogs');
Route::get('/blog-details/{id?}/{slug?}', 'HomeController@single_blog');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'InqueryController@InquerySubmit')->name('submitFrontInquiry');
Route::get('/about', 'HomeController@about');




Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {


    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::resource('blogs', 'BlogController');
    Route::resource('inquery', 'InqueryController');
    Route::resource('reservation', 'ReservationController');
    Route::get('setting', 'SettingController@setting');
    Route::post('setting', 'SettingController@SettingSubmit')->name('SettingSubmit');

});
