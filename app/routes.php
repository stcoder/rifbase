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

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@home'));

/*
|--------------------------------------------------------------------------
| Авторизация
|--------------------------------------------------------------------------
*/

// авторизация
Route::get('/signin', array('as' => 'signin', 'uses' => 'AuthController@signIn'));
Route::post('/signin', array('uses' => 'AuthController@signInStore'));

// выход
Route::get('/signout', array('as' => 'signout', 'uses' => 'AuthController@signOut'));

// регистрация
Route::get('/signup', array('as' => 'signup', 'uses' => 'AuthController@signUp'));
Route::post('/signup', array('uses' => 'AuthController@signUpStore'));

/*
|--------------------------------------------------------------------------
| Панель администратора
|--------------------------------------------------------------------------
*/
Route::group(array('before' => array('auth', 'admin'), 'prefix' => 'admin'), function() 
{
	Route::get('/', function() {return 'asd';});
});