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

Route::get('/', function()
{
	$users = USERS::find(1);
	return $users->UName;
});

/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('about', function() //This creates an about section off the end of the base page
{
	return 'About content goes here.';
});

Route::get('about/directions', function() //this appeneds to the end of the above created page
{
	return 'directions go here.';
});
Route::get('about/{theSubject}', function($theSubject) //this makes it so that "the subject" is shown as the topic of the page and the rest is concatenated to the end.
{
	return $theSubject. ' content goes here';
});

Route::get('about/classes/{theSubject}', function($theSubject) //Have to use double quotes here when putting the class in the middle of a string or this will not work
{
	return  "Content about {$theSubject} classes goes here.";
}); */