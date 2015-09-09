<?php

/* The Home Page */
Route::get('/','PagesController@index');
Route::get('contact','PagesController@contact');
Route::get('billing/create/confirm','BillingController@confirm');
Route::resource('billing', 'BillingController');
//Route::get('notices', 'NoticesController@juggle');







Route::any('dashboard', [
    'middleware' => 'auth',
    'uses' => 'PagesController@dashboard'
]);

Route::controllers([
    'auth'   => 'Auth\AuthController',
    'password'   => 'Auth\PasswordController',
]);






