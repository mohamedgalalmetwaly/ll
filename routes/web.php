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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('add','Manage@AddArticle');
Route::post('add','Manage@AddArticle');
Route::get('view','Manage@viewarticle');
Route::get('read/{id}','Manage@read');
Route::post('read/{id}','Manage@read');
