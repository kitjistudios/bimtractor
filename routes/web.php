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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@welcome')->name('home');

Route::get('media', 'MediaController@index');

Route::get('media/create', 'MediaController@create');

Route::post('/media/store', 'MediaController@store');
/*Route::get('media/create', function () {
    $test = DB::table('media')->get();

    return $test;
});
*/