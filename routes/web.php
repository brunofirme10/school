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

Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get("students", "StudentController@index")->name('home');

//rota para a classe Students com autenticação
Route::group(['middleware' => 'auth', 'prefix' => 'students'], function (){
    Route::get('/', "StudentController@index");
    Route::get('/add', 'StudentController@create');
    Route::post('/', 'StudentController@store');
    Route::get('{id}', 'StudentController@show');
    Route::get('/edit/{id}', 'StudentController@edit');
    Route::put('{id}', 'StudentController@update');
    Route::delete('{id}', 'StudentController@destroy');
});