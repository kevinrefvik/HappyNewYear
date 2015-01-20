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

Route::get('/', function()
{
	$date_start		= '0101000000';
	$date_end			= '0115000000';
	$date_cur			= date('mdHis');
	
	$answer = (($date_cur >= $date_start) && ($date_cur <= $date_end)) ? true : false;

	return View::make('newyear')->with(['answer' => $answer]);
});
