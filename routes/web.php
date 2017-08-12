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

Route::get('/','PortfolioController@getMainPage');

Route::get('/home', 'HomeController@index')->name('home');

// Admins route

Route::group(['namespace' => 'Auth'], function(){

    Route::get('/admin/login','LoginController@showLoginForm')->name('login');
    Route::post('/admin/login','LoginController@login')->name('login');

    Route::get('/admin/register','RegisterController@showRegistrationForm')->name('register');
    Route::post('/admin/register','RegisterController@register')->name('register');

    Route::get('/admin/password_reset','ResetPasswordController@showResetForm')->name('password.request');
    Route::post('/admin/password_reset','ResetPasswordController@reset')->name('password.request');

    Route::get('admin/logout','LoginController@logout')->name('logout');

});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard','DashboardController@showDashboard')->name('login');
});

