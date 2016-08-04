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

//Route::get('home', 'HomeController@index');



Route::controller('destination', 'DestinationController');

Route::group(['namespace'=> 'Admin' , 'middleware' => 'auth'] , function(){	
	Route::controller('admin/dashboard'	, 'DashboardController' 	); 	
});

Route::controllers([
	'admin' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);