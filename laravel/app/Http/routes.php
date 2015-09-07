<?php

/* The Home Page */
Route::get('/','PagesController@index');
Route::get('notices/create/confirm','NoticesController@confirm');
Route::resource('notices', 'NoticesController');
Route::get('dashboard', 'PagesController@dashboard');



Route::controllers([
    'auth'   => 'Auth\AuthController',
    'password'   => 'Auth\PasswordController',
]);






