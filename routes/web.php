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

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard', 'namespace' => 'Admin'], function(){
    Route::get('/info', 'InfoController@showInfo')->name('dashboard.info');
    Route::get('/info/edit', 'InfoController@editInfo')->name('dashboard.info.edit');
    Route::post('/info', 'InfoController@updateInfo')->name('dashboard.info.update');

    Route::get('/gallery','GalleryController@showGallery')->name('dashboard.gallery');
    Route::get('/gallery/create','GalleryController@createGallery')->name('dashboard.gallery.create');
    Route::post('/gallery/create','GalleryController@saveGallery')->name('dashboard.gallery.save');

    Route::get('/gallery/{id}/edit','GalleryController@editGallery')->name('dashboard.gallery.edit');
    Route::post('/gallery/{id}/update','GalleryController@updateGallery')->name('dashboard.gallery.update');

    Route::get('gallery/{id}/details','GalleryController@galleryDetails')->name('dashboard.gallery.details');
    Route::post('gallery/{id}/upload','GalleryController@uploadImages')->name('dashboard.gallery.uploads');
    Route::get('gallery/{id}/status','GalleryController@setGalleryStatus')->name('dashboard.gallery.status');

    Route::get('image/delete/{id}', 'GalleryController@deleteImage')->name('dashboard.image.delete');
    Route::get('image/cover/{id}','GalleryController@makeProfilePicture')->name('dashboard.image.cover');

    Route::get('/review', 'ReviewController@showReview')->name('dashboard.review');
});

// get image file
Route::get('images/{title}/{image}','BaseController@getImage')->name('accessImage');

