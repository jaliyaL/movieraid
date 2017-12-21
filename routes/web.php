<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function() {
    return view('pages.home');
});

Route::group(['middleware' => ['web']], function() {
   Auth::routes();
});

Route::group(['middleware' => ['auth']], function() {

    //front site routes
	Route::get('/images','ImageController@getUploadForm');
	Route::post('/upload','ImageController@uploadImages');

	Route::get('/game','GameController@getGameImages');
	Route::post('/game/update','GameController@updateGameStats');

	Route::get('/my-stats','MyStatsController@getMyStats');

	Route::post('/make-read','NotificationController@makeNotificationRead');

	//admin routes
	Route::get('/dashboard','Admin\HomeController@getDashboard');
	
	Route::get('/users','Admin\UsersController@userList');
	
	Route::get('/game-history','Admin\GameController@gameHistory');

	Route::get('/movies','Admin\MovieController@movieList');
	Route::get('/movies-ajax','Admin\MovieController@movieListAjax');
	Route::get('/add-movie','Admin\MovieController@getAddForm');
	Route::post('/submit-movie','Admin\MovieController@addMovie');
	Route::post('/update-movie-name','Admin\MovieController@updateMovieName');
	
});

Route::get('/push','Admin\HomeController@push');

/*Route::get('/push', function() {
    return view('admin.pages.base');
});*/

Route::get('/stats','GameController@getImageStats');

Route::get('/home', 'HomeController@index')->name('home');
