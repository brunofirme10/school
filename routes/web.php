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
//rotas de autenticação de usuário
Auth::routes(["register" => false]);

//rota para a home
Route::get('', function () { return view('home'); });
Route::get('home', function () { return view('home'); });

//rota para a classe Student com autenticação
Route::group(['middleware' => 'auth', 'prefix' => 'students'], function (){
    Route::get('', "StudentController@index");
    Route::get('add', 'StudentController@create');
    Route::post('', 'StudentController@store');
    Route::get('{id}', 'StudentController@show');
    Route::get('edit/{id}', 'StudentController@edit');
    Route::put('{id}', 'StudentController@update');
    Route::delete('{id}', 'StudentController@destroy');
});

//rota para a classe Teacher com autenticação
Route::group(['middleware' => 'auth', 'prefix' => 'teachers'], function (){
    Route::get('', "TeacherController@index");
    Route::get('add', 'TeacherController@create');
    Route::post('', 'TeacherController@store');
    Route::get('{id}', 'TeacherController@show');
    Route::get('edit/{id}', 'TeacherController@edit');
    Route::put('{id}', 'TeacherController@update');
    Route::delete('{id}', 'TeacherController@destroy');
});

//rota para a classe Team com autenticação
Route::group(['middleware' => 'auth', 'prefix' => 'teams'], function (){
    Route::get('', "TeamController@index");
    Route::get('add', 'TeamController@create');
    Route::post('', 'TeamController@store');
    Route::get('{id}', 'TeamController@show');
    Route::get('edit/{id}', 'TeamController@edit');
    Route::put('{id}', 'TeamController@update');
    Route::delete('{id}', 'TeamController@destroy');
});
