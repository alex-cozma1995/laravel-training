<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//osszes article
Route::get('/articles', 'App\Http\Controllers\ArticleController@index');
//1 article
Route::get('/article/{id}', 'App\Http\Controllers\ArticleController@show');
//create article
Route::post('/article', 'App\Http\Controllers\ArticleController@store');
//update
Route::put('/article/{id}', 'App\Http\Controllers\ArticleController@store');
//del
Route::delete('/article/{id}', 'App\Http\Controllers\ArticleController@destroy');
