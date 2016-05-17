<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('about', 'WelcomeController@about');
Route::auth();
Route::get('/home', 'HomeController@index');
Route::resource('activo', 'ActivoController');
Route::resource('categoria', 'CategoriaController');
Route::resource('centrocosto', 'CentroCostoController');
Route::resource('sede', 'SedeController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

