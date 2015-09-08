<?php

/* The Home Page */
Route::get('/','PagesController@index');
Route::get('contact','PagesController@contact');
Route::get('notices/create/confirm','NoticesController@confirm');
Route::resource('notices', 'NoticesController');

Route::get('addbill','NoticesController@addbill');

Route::any('dashboard', [
    'middleware' => 'auth',
    'uses' => 'PagesController@dashboard'
]);

Route::controllers([
    'auth'   => 'Auth\AuthController',
    'password'   => 'Auth\PasswordController',
]);