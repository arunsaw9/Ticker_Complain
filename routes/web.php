<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'ComplainController@index')->name('front');

Route::post('/index', 'ComplainController@store')->name('complain.store');
Route::get('/status', 'ComplainController@status')->name('complain.status');

Route::post('/statusajax/{id1}{id2}', 'ComplainController@statusajax');

Route::post('/search/{id1}{id2}', 'ComplainController@search');

Route::post('/getlocation/{id1}{id2}', 'ComplainController@ajax');


Route::group(['middleware' => 'auth'], function(){
	
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/single/{id}', 'HomeController@single')->name('complain.single');
	Route::post('/resolution/', 'HomeController@resolution')->name('complain.resolution');

	Route::resource('/registration', 'UserregisterController');

});

Auth::routes([
  'register' => false, 
  'reset' => false,
  'verify' => false,
]);