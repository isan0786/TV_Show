<?php

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/','CreateTVShowsController@getShowsList');

Route::get('/create', function(){
	return view('createShow');
});

Route::post('/insertShow','CreateTVShowsController@addShow');
Route::get('/deleteShow/{id}','CreateTVShowsController@deleteShow');
Route::get('/updateShow/{id}','CreateTVShowsController@modifyShow');
Route::get('/editShow/{id}','CreateTVShowsController@editAndSaveShow');
Route::get('/readParticularShow/{id}','CreateTVShowsController@getParticularShow');