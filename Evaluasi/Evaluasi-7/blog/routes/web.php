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

//Route
//Controller
//views

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function(){

    Route::get('/article', 'ArticleController@index');
    Route::get('/article/create', 'ArticleController@create');
    Route::get('/article/detail/{id}/{slug}', 'ArticleController@show');
    Route::get('/article/edit/{id}', 'ArticleController@edit');
    Route::post('/article', 'ArticleController@store');
    Route::put('/article/{id}', 'ArticleController@update');
    Route::delete('/article/delete/{id}', 'ArticleController@destroy');
});

// Route::resource('article', 'ArticleController');
Route::get('/artikel', 'ArticleController@pembaca');
Route::get('/artikel/page/{id}/{slug}', 'ArticleController@page');
Route::get('/artikel/search','ArticleController@search');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
