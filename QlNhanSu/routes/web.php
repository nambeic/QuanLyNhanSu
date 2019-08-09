<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('login','LoginController@getLogin')->name('login');
Route::post('login','LoginController@postLogin');

Route::get('getlogout','LogoutController@getLogout');
