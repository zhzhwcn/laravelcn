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

//home route
Route::get('/', 'HomeController@showHome');

//user routes
Route::get('/login', 'UserController@getLogin');
Route::post('/login', 'UserController@postLogin');
Route::get('/reg', 'UserController@getReg');
Route::post('/reg', 'UserController@postReg');

//forum routes
Route::group(array('before' => 'auth'), function()
{
	Route::get('/new/{node}','ForumController@getNew');
	Route::post('/new/{node}','ForumController@postNew');
	Route::post('/reply/{thread_id}','ForumController@postReply');
});