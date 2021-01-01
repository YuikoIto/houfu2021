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
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('twitter', 'AuthController@login');
    Route::get('twitter/callback', 'AuthController@callback');
});

Route::resource('users', 'UserController')->only(['show']);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('questions', 'QuestionController')->only(['store']);
});

Route::get('questions/{id}/ogp.png', 'QuestionController@ogp');