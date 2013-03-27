<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
 |--------------------------------------------------------------------------
| Authentication and Authorization Routes
|--------------------------------------------------------------------------
|
|
|
*/
Route::get('/', 'Monujo\Controller\HomeController@getHome');

# Login
Route::get('login', 'Monujo\Controller\AuthController@getLogin');
Route::post('login', 'Monujo\Controller\AuthController@postLogin');

Route::get('logout', 'Monujo\Controller\AuthController@getLogout');

