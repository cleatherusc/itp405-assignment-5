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
Route::get('/', 'index_controller');

Route::post('/tweets/new/', 'tweet_controller@add_tweet');
Route::get('/tweets/{id}/', 'tweet_controller@view');
Route::post('/tweets/{id}/delete/', 'tweet_controller@delete');
