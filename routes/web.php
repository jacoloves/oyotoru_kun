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

Route::get('study', 'StudyController@index');
Route::post('study', 'StudyController@post');
Route::get('study/add', 'StudyController@add');
Route::post('study/add', 'StudyController@create');
Route::get('study/update', 'StudyController@update');
Route::post('study/update', 'StudyController@edit');
Route::get('study/del', 'StudyController@delete');
Route::post('study/del', 'StudyController@remove');
Route::get('study/auth', 'StudyController@getAuth');

/*
Route::get('/', function () {
    return view('study.index');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
