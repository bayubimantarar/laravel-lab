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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'learning-redis'], function(){
    Route::get('/with-redis', [
        'uses' => 'Redis\ExampleController@withRedis',
    ]);
    Route::get('/without-redis', [
        'uses' => 'Redis\ExampleController@withoutRedis',
    ]);
});
