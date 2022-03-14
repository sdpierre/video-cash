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

Route::get('/', function () { return view('welcome');});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/videos', 'VideosController@videos')->name('videos');
Route::get('/videos/post', 'VideosController@postvideos')->name('postvideos');
Route::post('/videos/post', 'VideosController@postvideos')->name('postvideos');
Route::get('/campaigns', 'CampaignsController@index')->name('campaigns');
Route::get('/prizes', 'PrizeController@index')->name('prize');
Route::get('/advertisers', 'AdvertisersController@index')->name('prize');
Route::get('/users', 'UsersController@index')->name('users');
