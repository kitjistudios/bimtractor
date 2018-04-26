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

Route::get('', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('home', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@index');
Route::get('media', 'MediaController@index');

//Route::get('login', 'LoginController@index');

Route::get('media/create', 'MediaController@create');
Route::get('media/show/{id}', 'MediaController@show');
Route::get('media/show', 'MediaController@index');

Route::post('/media/store', 'MediaController@store');
/*Route::get('media/create', function () {
    $test = DB::table('media')->get();

    return $test;
});
*/