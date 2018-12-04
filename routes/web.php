<?php
use App\Game;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware('auth')->group(function() {
    //Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('posts', 'PostsController');

    Route::resource('users', 'UsersController');

    Route::get('/home', 'GamesController@index')->name('home');
    
    Route::resource('games', 'GamesController')->except(['index']);
});