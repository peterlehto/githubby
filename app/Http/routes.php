<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('dashboard', 'DashboardController@index');
Route::get('logout', 'DashboardController@logout');