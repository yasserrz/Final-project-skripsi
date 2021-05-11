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
/*
Admin Routes
*/
Route::get('/admin','AdminController@dashboard');


Route::get('/admin/detail','AdminController@detail');


/*
Basis_pengetahuan
*/
Route::get('/basis','BasisController@index');
;


/*
Gejala
*/
Route::get('/gejala','GejalaController@index');
Route::get('/gejala/create','GejalaController@create');
Route::get('/gejala/{gejala}','GejalaController@show');
Route::post('/gejala','GejalaController@store');
Route::delete('/gejala/{gejala}','GejalaController@destroy');
Route::get('/gejala/{gejala}/edit','GejalaController@edit');
Route::patch('/gejala/{gejala}','GejalaController@update');



/*
Kerusakanq
*/
Route::get('/kerusakan','KerusakanController@index');
Route::get('/kerusakan/create','KerusakanController@create');
Route::get('/kerusakan/{kerusakan}','KerusakanController@show');
Route::post('/kerusakan','KerusakanController@store');
Route::delete('/kerusakan/{kerusakan}','KerusakanController@destroy');
Route::get('/kerusakan/{kerusakan}/edit','KerusakanController@edit');
Route::patch('/kerusakan/{kerusakan}','KerusakanController@update');


