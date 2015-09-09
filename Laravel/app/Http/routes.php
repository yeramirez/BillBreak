<?php

/* The Home Page */
Route::get('/','PagesController@index');


/* The Primary Account Resources */
Route::resource('billing', 'BillingController');
Route::resource('roommate', 'RoommateController');








Route::any('dashboard', [
    'middleware' => 'auth',
    'uses' => 'PagesController@dashboard'
]);

Route::controllers([
    'auth'   => 'Auth\AuthController',
    'password'   => 'Auth\PasswordController',
]);

